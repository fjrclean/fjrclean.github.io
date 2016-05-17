<!-- 
	"about" page.
-->
<!DOCTYPE html>
<html lang = "en" xmlns = "http://www.w3.org/1999/xhtml" >

<head>
	<title> wii softmodding & debian GNU/Linux </title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="icon" type="image/png" href="/background.png" />
</head>

<body>

	<div class="site_banner">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/site_banner.php';
			include($path); 
		?>
		
	</div>
	
	<div class="leftBar">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/browse_categories.php';
			include($path); 
		?>
	</div>
	
	<div class="content">

			<h2 class="content_title"> SoftModding the Wii & Installing Debian GNU/Linux </h2>
			<h3 class="article_date" title="day/month/year"> 27/01/2016 </h3>
			
			Softmodding a Wii allows you to play backed up games and homebrew software (unofficial, community made applications and games) straight from the sd card, a usb drive or (some games) over the network. It also gives you much greater access to the system components, like storage, through various homebrew apps. An example of which being priiloader, which will allow you to change what game/program your wii boots into at launch (instead of the default system menu). <br /> <br />
			
			If you're just looking for the extended capabilities to play games, this guide will help you. However, I will also detail how to install Debian GNU/Linux, giving you the ability to turn the Wii into a low power consuming & low performance server or desktop environment, and how to boot straight into this. Low performance? Well it will be enough to host a personal website, ftp server, torrent box etc or a small portable desktop for browsing the web, checking emails, writing documents etc.
			<br /> <br />
			
			<span class="important"> Do not use this guide on a Wii U virtual Wii console. Some of the steps below may break your virtual Wii. </span> <br /> <br />
			
			<div class="contents">
				<span style="text-align: center; font-weight: bold;"> Contents: </span><br />
				<ol>
					<li><a href="#1"> [REQUIRED] Preparing </a></li>
					<li><a href="#2"> [REQUIRED] HomeBrew Channel & BootMii - softmodding the wii </a></li>
					<li><a href="#3"> [OPTIONAL] [REQUIRED] Priiloader</a></li>
					<li><a href="#4"> [OPTIONAL] Playing Games </a></li>
					<li><a href="#4"> [OPTIONAL] Installing Debian GNU/Linux </a></li>
					<li><a href="#4"> [OPTIONAL] Setting up Debian GNU/Linux </a></li>
					<li><a href="#4"> [OPTIONAL] Debian with Xorg - desktop environment </a></li>
				</ol>
			</div> 
			
			<h3 class="content_sub_title"> [REQUIRED] Preparing </h3>
			
			The term <b> bricking </b> means to screw up the software on a device so it can no longer be used. To give it the functionality of a brick. This is a risk in softmodding your Wii, however it is pretty much impossible if you follow the steps properly and properly research anything you are unsure about before continuing. Once you've install BootMii on boot2 or priiloader (both explained below) they will give you good protection against bricking. <br /><br />
			
			You will need to find your Wii's system menu version. To do this go to Options (bottom left from main screen), then settings, then in the top right it will say your version. Make a note of this. <br /><br />
			
			You'll need an SD card formatted to FAT32. If you have a system menu version 4.0 or higher, you can use SD cards up to 2GB in size or SDHC cards up to 32GB. If your menu version is lower, only standard SD cards 2GB or less will work
			<span class="source_ref">1</span>. As for micro/mini SDs, I have been unable to test. If you want to use one of these with a full size SD adapter, check to see if your Wii recognises it before continuing or formatting your card. You'll need to make sure it has at least ~700MB free for NAND backup and the few required programs.<br /><br />
			
			If you want to install games on a USB flash/hard drive, it will have to be erased of all it's data. Only partition for Wii? Network loading of discs? Seems disc based games cannot be run from NAS. Homebrew games can be. What about wii download games?<br /><br />
			
			For Debian, you will need a USB keyboard, and USB mouse if you want it with a desktop interface. You can set up the wiimote to control the mouse cursor instead.
			<br /><br />
			
			[1]<a href="http://en-americas-support.nintendo.com/app/answers/detail/a_id/2516/p/604/c/209"> http://en-americas-support.nintendo.com/app/answers/detail/a_id/2516/p/604/c/209 </a> and 
			<a href="http://kb.sandisk.com/app/answers/detail/a_id/4433/~/nintendo-wii-and-sdhc-support"> http://kb.sandisk.com/app/answers/detail/a_id/4433/~/nintendo-wii-and-sdhc-support </a> <br />
			[2]
			
			<h3 class="content_sub_title"> [REQUIRED] HomeBrew Channel & BootMii - softmodding the wii. </h3>
			
			The HomeBrew Channel allows you to run whatever Wii executable program (.elf/.dol) you want. You'll need to determine your Wii system menu version by going into the settings and looking in the top right. Version 4.3, which I have, requires a hack different from versions 4.2 and earlier. The physical model of the Wii console you have will also determine the capabilities of BootMii <span class="source_ref">1</span>. <br /> <br />
			
			In whichever guide you follow, you may be able to install BootMii as boot2 or only IOS. Installing boot2 will allow you to go straight to BootMii (Debian GNU/Linux if you install that) on power on and give better protection against bricking. However don't worry if you can't install it as boot2, Priiloader will give brick protection and allow you to boot the console into whatever program you want. <br /> <br />
			
			You'll want to make sure your SD has at least 512?? MB free to backup your NAND through BootMii. The guide for <a href="https://sites.google.com/site/completesg/hacking-guide/4-3-guide">4.3</a>, or <a href="https://sites.google.com/site/completesg/hacking-guide/the-basics">4.2 & earlier</a>. How to backup NAND?
			<br /><br />
			
			[1]<a href="https://sites.google.com/site/completesg/how-to-use/bootmii"> https://sites.google.com/site/completesg/how-to-use/bootmii </a> <br />
			
			<h3 class="content_sub_title"> [REQUIRED] Priiloader - insurance against screwup & choose what the wii boots into when turned on. </h3>
			
			Download the Priiloader installer and put it in the apps folder of sd card... install
			
			<h3 class="content_sub_title"> [OPTIONAL] Playing Games </h3>
			
			formatting USB,configurable usb loader for roms, homebrew for .elfs/.dols, wad manager for virtual console + wiiware
			
			<h3 class="content_sub_title">[OPTIONAL] Installing Debian GNU/Linux</h3><a name="4"></a>
			
			<h3 class="content_sub_title"> [OPTIONAL] Setting up Debian GNU/Linux </h3><a name="4"></a>
			
			.... <br />
			The gc-linux Debian GNU/Linux port is based off Debian 5.0 Lenny, which is now obsolete (current Debian version is 8.0 Jessie). If you try to download a package or upgrade/update those existing, you'll get errors. This is because the Lenny package repository mirrors have changed. So before we can install the packages we need, where the system looks for them needs to be changed:
			<ul>
				<div class="basics"> 
				The main way getting of getting programs on most UNIX-like operating systems is through package managers using repositories hosted & maintained by the community.
				</div>
				<li> If you're using SSH or the physical console from the Wii's video output, then run the command <code> nano /etc/apt/sources.list </code><span class="source_ref"> 1 </span>. If you are browsing the SD card filesystem on windows, open the <code> /etc/apt/sources.list </code> file with your preferred text editor. I recommend using NotePad++ (<a href="/"> free download </a>) as this shows the correct formatting.
				</li>
				<li> Next, replace (or comment out) the existing line with <code> deb http://archive.debian.org/debian/ lenny contrib main non-free </code>. Save & exit the file.</li>
				<li> Run the command <code>apt-get install debian-archive-keyring</code> and finally; <code>apt-get update</code>. </li>
			</ul>
			
			We will now do a few things to aid in system usability and security: install sudo, create a user account, disable SSH into root acount. <br />
			First, sudo, which allows permitted user accounts to run commands as the super user without logging in as the super user.
			<ul>
				<li> Run the command <code>apt-get install sudo </code> </li>
			</ul>
			<br /></br>
			
			[1]<code>nano</code> is a common command-line text editor on UNIX systems <br />
			[2]This is because of the difference between how newlines are declared in a windows standard text file and POSIX standard 
				<a href="https://en.wikipedia.org/wiki/Text_file#Windows_text_files"> https://en.wikipedia.org/wiki/Text_file#Windows_text_files </a>
			
			<h3 class="content_sub_title"> [OPTIONAL] Debian with Xorg - desktop environment </h3>
		
	</div>
	
	<div class="rightBar">
		test
	</div>
	
	<div class="comments">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= '/php_includes/comments.php';
			include($path); 
		?>
	</div>
	
	
	
	
	

</body>
</html>