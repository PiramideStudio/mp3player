# Audio Server - Public mp3Player
Your private music streaming cloud  
html multimedia server - library and player  


# About
Audio Server - Public mp3Player is a web application for playing music and videos and
organizing them in a library. It is designed to listen your music anywhere, without 
syncing your mobile devices. It is written in html (who'd have thought?), PHP, JS and CSS.  

## Highlights
  - playlists
  - audio visualization
  - showing id3 tags and cover images from file
  - remote player functionality
  - optimized for mobile devices

## WINDOWS XAMPP SUPPORT PHP7.4


# Requirements
Audio Server was tested with the following software environment. Please
note that there will be no support for other environments!

## Server
  - Linux-based operating system
  - Apache 2
  - PHP 5 (only with "mysqlnd" package) or 7
  - MySQL or MariaDB
  - fast connection to the client; best experience if client is running on the same machine

## Client (desktop)
  - Google Chrome v60+  
    or other webkit based browsers  
    not tested with Safari
  - Mozilla Firefox v55+
  - NOT running in IE

## Client (mobile)
  - Chrome on Android 7+
  - Safari on iOS 6
    with some limitations


# Installation

## Upgrade from old version
1. Delete all files from the Audio Server directory, except: "database.php", "music" and "music_thumb" directory.
2. Copy all files from this archive to your Audio Server directory, again except "database.php", "music" and "music_thumb" directory.
3. That's it. If you encounter some problems, clear your browser cache and/or execute file scan again (Menu -> "Options" -> "Scan filesystem").

## Setup up a new installation
1. Setup up a web server with PHP interpreter and a mysql server.

   For Debian <= 9 or current Raspian 9 AND 10
   ```bash
   apt-get install apache2 php5 php5-mysqlnd libapache2-mod-php5 mysql-server
   ```

   or with PHP7 on Debian 10>
   ```bash
   apt-get install apache2 php php-mysql libapache2-mod-php mysql-server
   apt-get install apache2 php php-mysql libapache2-mod-php mariadb-server
   ```

2. Copy all files from this archive into your webserver root directory.
3. Edit the database.php file and enter your mysql database credentials.
4. Grant write access for the web server user www-data to the "music" and "music_thumb" directory.
5. Open the Audio Server directory in your browser. It should ask you to execute the database setup. Click the button to start the setup. After the setup finished, log in leaving the password box empty.
6. Place all your music files into the "music" directory. Go to Menu -> "Options" -> "Scan filesystem". You can play your music without scanning by using the "files" tab inside the menu.

Enjoy your music! :-)


# License
GNU General Public License - see LICENSE.txt  
HCS &copy; 2020-2021 Piramide Studio - [pcsnet.mywire.org][1]  
view source and fork me on [GitHub][2]

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to:
Free Software Foundation, Inc.
59 Temple Place - Suite 330
Boston, MA  02111-1307, USA.

[1]: [https://pcsnet.mywire.org]
[2]: [https://github.com/BorisPerc/mp3player/]

# Libraries
This program uses the [getid3()][3] library v1.9.21  
© 2017 James Heinrich  stable version: released Sep 22, 2021
Licensed under the terms of the GPLv2

[3]: [http://getid3.sourceforge.net]


# Support
Found a bug? Great! Please report it (preferably with a ready-to-use fix for it ;-) ) on GitHub. Questions, ideas and feature requests are also welcome.


# ToDo and planned features
Visit the GitHub page for more information.

CoverVid
========
#### ⚠️ This project is no longer maintained ⚠️

At the core of CoverVid, is the idea of this little CSS snippet being possible...
```css
.selector {
    background-video: url('../foo/bar.mp4 || ../foo/bar.webm');
    background-size: cover;
    background-position: center center;
}
```
Why is it special?
------------------
CoverVid is very lightweight, with only 800 bytes of Javascripts. It is usable in native Javascript and jQuery. Its' logic is parent based, meaning the parent element can be any size (Not necessarily just a full-screen background).

How do I use it?
----------------
1. First pull the project down from <a href="http://github.com/stefanerickson/covervid">GitHub</a>, or install with bower running <code>bower install covervid</code> and link <code>covervid.min.js</code> into your site. Make sure it is loaded after jQuery if using it.

2. It is important to note that the video you target will use its' parent element to scale. With that in mind, we will create some simple markup and add some base styling to size the videos' parent/wrapper element.

    ```html
    <div class="covervid-wrapper">
        <video class="covervid-video" autoplay loop poster="img/video-fallback.png">
            <source src="videos/video.webm" type="video/webm">
            <source src="videos/video.mp4" type="video/mp4">
        </video>
    </div>
    ```
    ```css
    .covervid-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    ```

3. Now, we would simply call <code>coverVid(Container-Element, Video-Width, Video-Height)</code> on the video element, passing through the native dimensions of the video. If you are using jQuery, we would call <code>$('.covervid-video').coverVid(1920, 1080);</code>.

