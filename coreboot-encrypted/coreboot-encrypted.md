# Encrypted GNU+Linux with Coreboot, Grub and LUKS.

---

*TAKE NOTE: I am by no means a security or cryptographic expert. I try to explain everything here in a way that I think would help me as a beginner, and I can not guarantee the security of the described setup, as it is a complex 
topic.*

*I will be using Parabola GNU+Linux, a fork of Arch, for this example. Most of it will apply to other distros.*

*This guide is intended to be read from start to finish, with repetiton with learning. It was not intended to be reference*

## an overview of coreboot

Coreboot is free software to replace the bios on your computer, specifically the hardware initialisation to get everything setup. The aspects of a proprietary bios that a normal user might see, such as a graphical boot menu, are 
not actually handled by coreboot. Instead, coreboot has the ability to run and pass control to other distinct programs, known as payloads. Grub is a payload.

## an overview of LUKS

LUKS encryption uses creates an on-storage master key to decrypt the contents, which is itself encrypted with they key you set. 
One advantage of this is you can have multiple keys to access the device, as having multiple copies of master key encrypted by each user key?? is better than multiple encryptions of all your data. Your key is put through a key 
derivation function, which will always have the same output based on input. The point? It adds arbitrary time to each decrypt attempt which hugely reduces the effectiveness of brute force attacks, especially for weaker 
passphrases. A header is placed on the storage that identifies it as a LUKS device, and contains details about how to decrypt the device. These include a salt value, which is randomly generated on the creation of the LUKS key and 
goes with the key into the key derivation function. This counters precomputed attacks, as someone needs to get this salt value off your device before they can run their password tables through the function. Iteration time is 
another...

## compiling coreboot

### grub options

Grub has a modular design, which allows lots of functionality and the choice to pick and choose what which of it you need. These are the grub modules needed for encryption:

* crypto
* cryptodisk
* luks - if you are used luks encryption.
* procfs - 
* archelp
* lvm - if you are using lvm.
* pbkdf2 - The Password-Based Key Derivation Function 2 module. Used for key stretching
* gcry_rijndael - or...
* gcry_sha512 - or whatever hash you used during cryptsetup

Booting live usb distributions using iso/syslinux:

* nativedisk
* squash4 
* syslinuxcfg 
* loopback


## flashing coreboot

Some computers will allow you to flash the rom internally first time, others will be write protected so the first time will have to be external. 
Either way, it is recommended to get an external flasher incase you make a mistake.

## launching distro live usb from grub

should be cmdline method on libreboot site -- for debian only, see if you can work out simple method from libreboot's grub.cfg.
have separate page for each distro?

## cryptsetup

*cryptsetup* is the commandline tool used to access the cryptographic features of the linux kernel. 

To create a luks device, you would run crypsetup luksFormat

If you are placing the LUKS key inside initramfs, you should set the /boot directory where it resides to allow root access only. *chmod 700 /boot*

After this you would install your system onto that partiton.

## grub configuration

Before flashing a rom with this configuration, you can test these commands in the grub minimal commandline first.

You have to manually load the luks and lvm modules 'insmod luks'. It appears to load all it's requirements.

if grub.cfg is 'bad' will grub just drop to minimal cmdline? If so, much point for grubtest.cfg?

---

https://wiki.openwrt.org/doc/networking/network.interfaces

https://wiki.openwrt.org/doc/uci/network/switch

ip-link man page.
