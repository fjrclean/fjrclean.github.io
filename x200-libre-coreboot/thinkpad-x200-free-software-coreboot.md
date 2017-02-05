# Flashing x200 with libre Coreboot

---

# Read First

## serial debugging

## common issues why it's not working

If you can't think of any obvious reasons as to why nothing is showing up, it's very possible the ram is at 
fault. Having two different brands of ram dimm? is an obvious sign this is the issue (this caused it for me), 
but even if not, try booting with only one stick, or try any other available sticks you have. If that works, 
try two sticks again, changing the order.

## booting usb flash drive for live installation

Booting live GNU/Linux distros from grub2 seems to be tricky, I will show how to create a grub.cfg to with 
menu entries for some live distros, but it's handy to have SeaBIOS has a GRUB2 payload, which can easily boot 
USB flash drives like your typical non-free BIOS.

```
LABEL=
sds
```

--

# Setting up Flasher/Programmer.

## using a Beagle Bone Black

## using an Arduino Uno

## using a raspberry pi

## using flashrom as coreboot payload (must have already flashed successfully with coreboot)
This allows experimental write-only support, so you can flash system rom while it's running. This is useful 
when you're experimenting or problem solving and are needing to reflash many times, as it reduces the wear of 
clip on flash chip and potential breaking of it, and might be faster too.

--

# Compiling coreboot

## Coreboot settings

### Update

# gbe and descriptor

ifdtool 

## Payloads

# GRUB2 cfg

## GRUB2 modules

Practically all Grub2 functionality, from booting a linux kernel to using a particular filesystem, is provided through modules, which are files ending in .mod. 

### filesystems & basics

### background image

### encryption & lvm 

Decrypting my luks partition on coreboot with the command 'cryptomount -a' output nothing, where on libreboot it successfully asked for my password. To fix this I needed to make sure to have the following grub2 modules built in 
rom:

* crypto
* cryptodisk
* luks - if you are used luks encryption.
* procfs - 
* archelp
* lvm - if you are using lvm.
* pbkdf2 - The Password-Based Key Derivation Function 2 module. Used for key stretching
* gcry_rijndael - or...
* gcry_sha512 - or whatever hash you used during cryptsetup

You have to manually load the luks and lvm modules 'insmod luks'. It appears to load all it's requirements.

### Booting live usb distributions using iso/syslinux:

* nativedisk
* squash4 
* syslinuxcfg 
* loopback

## security

external flash only vs grub password

I decided against using a password for grub2, because having to remember a third password was too much for me. Another might be putting the grub2 
password as a keyfile on a usb stick. Instead (you could do both) I disabled writing to the flash chip internally, which means even if someone did 
boot a live distro on a usb drive through grub, they could neither modify the flash chip nor read my encrypted drive. \

## x200 optimisations

Using tlp's default config gave me a small but noticeable boost to battery life.

---

## Appendix of Random Issues
 * I left my keyboard off in the process of flashing / testing, which was good decision as at various points 
 I realised I needed to reflash with a new grub2 module compiled into rom. The x200 would automatically boot 
 when I plugged in the power cable, and I used a USB keyboard. At one point, this autoboot behaviour stopped 
 happening and I thought I'd broken my x200...

---

https://notabug.org/vimuser/libreboot/src/master/resources/utilities/grub-assemble/modules.conf - grub2 modules included in libreboot.

http://www.linux.org/threads/understanding-the-various-grub-modules.7535/ - explanation of many grub2 modules. I'm not sure if there is a more authoritative source.

https://notabug.org/vimuser/libreboot/src/master/resources/libreboot/config/grub/x200_8mb/config - coreboot config file for x200 used by libreboot

https://notabug.org/vimuser/libreboot/src/master/resources/layouts/generic/ - flashrom layout files
