# (c) 2014 Sam Nazarko
# email@samnazarko.co.uk

#!/bin/bash

. ../../scripts/common.sh

echo -e "Building target side installer"
BUILDROOT_VERSION="2014.05"

echo -e "Installing dependencies"
update_sources
verify_action
packages="build-essential
rsync
texinfo
libncurses5-dev
whois
bc
kpartx
dosfstools
parted
cpio
python"
for package in $packages
do
	install_package $package
	verify_action
done

pull_source "http://buildroot.uclibc.org/downloads/buildroot-${BUILDROOT_VERSION}.tar.gz" "."
verify_action
pushd buildroot-${BUILDROOT_VERSION}
install_patch "../patches" "all"
test "$1" == rbp && install_patch "../patches" "rbp"
test "$1" == rbp && make osmc_rbp_defconfig
make
if [ $? != 0 ]; then echo "Build failed" && exit 1; fi
popd
pushd buildroot-${BUILDROOT_VERSION}/output/images
echo -e "Downloading latest filesystem"
date=$(date +%Y%m%d)
count=150
while [ $count -gt 0 ]; do wget --spider -q ${DOWNLOAD_URL}/filesystems/osmc-${1}-filesystem-${date}.tar.xz
       if [ "$?" -eq 0 ]; then
			wget ${DOWNLOAD_URL}/filesystems/osmc-${1}-filesystem-${date}.tar.xz -O filesystem.tar.xz
            break
       fi
       date=$(date +%Y%m%d --date "yesterday $date")
       let count=count-1
done
if [ ! -f filesystem.tar.xz ]; then echo -e "No filesystem available for target" && exit 1; fi
echo -e "Building disk image"
if [ "$1" == "rbp" ]; then size=256; fi
date=$(date +%Y%m%d)
dd if=/dev/zero of=OSMC_TGT_${1}_${date}.img bs=1M count=${size}
parted -s OSMC_TGT_${1}_${date}.img mklabel msdos
parted -s OSMC_TGT_${1}_${date}.img mkpart primary fat32 1M 256M
kpartx -a OSMC_TGT_${1}_${date}.img
mkfs.vfat -F32 /dev/mapper/loop0p1
mount /dev/mapper/loop0p1 /mnt
if [ "$1" == "rbp" ]
then
	echo -e "Installing Pi files"
	mv zImage /mnt
	mv INSTALLER/* /mnt
fi
echo -e "Installing filesystem"
mv filesystem.tar.xz /mnt/
umount /mnt
sync
kpartx -d OSMC_TGT_${1}_${date}.img
echo -e "Compressing image"
gzip OSMC_TGT_${1}_${date}.img
popd
echo -e "Build completed"
