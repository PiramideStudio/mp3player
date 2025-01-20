<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Piramide Studio NET :: Media Portal - HomeCraftSoft@2000</title>
	<meta name="description" content="Piramide Studio NET - HomeCraftSoft@2000 - Media Portal Portorose, Si-EU">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/styles/normalize.css" />
	<link rel="stylesheet" href="assets/styles/styles.css" />
	<meta name="keywords" content="Piramide, Studio, NET, HomeCraftSoft@2000, pcsnet, media, server, ddlenigma, documents, opensource, apps, download, upload, share, hcs2000, portorose, slovenia, europe" />
	<meta name="author" content="Piramide Studio NET" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta http-equiv="Content-Language" content="sl-SI" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="/i/1gsm.png">
</head>

<body>

	<section class="masthead">
		<video class="masthead-video" autoplay loop muted poster="assets/images/poster.jpg">
			<source src="assets/videos/dreamscapes.mp4" type="video/mp4">
			<source src="assets/videos/dreamscapes.webm" type="video/webm">
		</video>
		<div class="masthead-overlay"></div>
		<div class="masthead-arrow"></div>
		<h1>Piramide Studio NET<span>Media Portal HomeCraftSoft@2000 Portorož</span></h1>
		<a class="masthead-video-credit" href="https://psmedia.mywire.org/" target="_blank">
			<span>Administrator: Boris Perc</span>
			<span>Privatno Omrežje PCSNET</span>
		</a>
	</section>
	<section class="content">
		<div class="container">
			<h2>PCSNET - Spletne Aplikacije in Dostop</h2>
			<p>
			<center><a title="PercNET" href="https://perc.ddns.net/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1social.png" alt="PercNET" width="45" height="48" /></a><a title="Forumi" href="https://piramide.zapto.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1gsm.png" alt="Forumi" width="45" height="48" /></a><a title="Audio" href="https://pcs.sytes.net/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1aud.png" alt="Audio" width="45" height="48" /></a><a title="Media" href="https://obala.hopto.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/16tv.png" alt="Media" width="45" height="48" /></a><a title="Oglasi" href="https://oglasi.hopto.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/4worldyellow.png" alt="Oglasi" width="45" height="48" /></a><a title="WEBDisk" href="https://pcsnet.myftp.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1secure.png" alt="WEBDisk" width="45" height="48" /></a><a title="DDLeWDisk" href="https://pcsnet.mywire.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/6config.png" alt="DDLeWDisk" width="45" height="48" /></a><a title="MServer PCSNET Tube" href="https://psmedia.mywire.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/11tvmedia.png" alt="MServerPSTube" width="45" height="48" /></a><a title="PSDDLMedia" href="https://pcsnet.freeddns.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/3worldgreen.png" alt="PSDDLMedia" width="45" height="48" /></a><a title="PSMedia Forums" href="https://psmedia.freeddns.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/10antena.png" alt="PSMForums" width="45" height="48" /></a><a title="PSMedia Portal" href="https://psmedia.ddnsgeek.com/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/13server.png" alt="PSMedia" width="45" height="48" /></a><a title="PCSNETMedia" href="https://pcsnet.ddnsgeek.com/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/9satelit.png" alt="PCSNETMedia" width="45" height="48" /></a></center>
			</p>
			<p>
			<center><a title="WEBDisk" href="https://pcsnetmedia.quickconnect.to" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1download.gif" alt="WEBDisk" width="32" height="32" /></a> 
			<a title="DDLEnigma" href="https://pcsnet.mywire.org/" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1pcsnetga.gif" alt="DDLEnigma" width="120" height="90" /></a> 
			<a title="WEBDisk" href="https://pcsnetmedia.quickconnect.to" rel="noopener" target="_blank"><img src="https://psmedia.mywire.org/i/1download.gif" alt="WEBDisk" width="32" height="32" /></a></center>
			</p>
			<hr>
			<h2>Audo Server - Postopek namestitve</h2>
			<ol>
	<li>Prenesite aplikacijo mp3player <a href="https://github.com/BorisPerc/mp3player">GitHub</a> in namestite app na vaš strežnik. Nastavitve baze podatkov spremenite v <code>database.php</code> in za drugo lokacijo medijskih datotek mp3 lahko spremenite direktive v datoteki <code>scan.php</code></li>
				
	<li>Namestitev primer Debian/RaspberryPI Server Minimal nemestitev brez Namizja - Apache2+MariaDB+php7.4 - Debian12 Lite<br>
	<font color="darkred" face="Verdana, Geneva, sans-serif" size="2">Poberite si najnovejši operacijski sistem za vaš raspberrypi4, pomembno da upoštevate naslednje: Za RPI4/5 do 4GB RAM priporočam namestiev 32bit Operacijski sistem Raspbian12 oz. Debian12 Lite install - preko rpi-imager si pripravite vašo SD kartico z vašimi pristopnimi podatki! Zaženite vaš RaspberryPI - POSTOPEK NAMESTITEVE:</font><br>
	<code>sudo apt update && sudo apt upgrade -y</code><br>
	<code>sudo apt install iptables ipset iprange -y</code><br>
	<code>sudo apt-get install ca-certificates apt-transport-https software-properties-common wget curl lsb-release -y</code><br>
	<code>sudo apt install automake autoconf libtool libpam-runtime -y</code><br>
	<code>sudo apt-get install git -y</code><br>
	<code>sudo apt-get install libssl-dev pkg-config build-essential -y</code><br>
	<code>sudo apt-get -y install gcc make autoconf libc-dev pkg-config lm-sensors -y</code><br>
	<code>sudo apt install -y curl wget gnupg2 ca-certificates lsb-release apt-transport-https</code><br>
	<code>sudo apt install bzip2 gzip unzip zip findutils file fdisk dpkg dpkg-dev dphys-swapfile -y</code><br>
	<code>sudo apt-get install openssl ssl-cert</code><br>
	<code>sudo apt-get install apache2 apache2-utils apache2-dev -y</code><br>
	<code>sudo apt-get install mariadb-server mariadb-client -y</code><br>
	<code>sudo apt install tcpd libwrap0-dev libwrap0 -y</code><br>
	<code>sudo apt-get -y install ntfs-3g exfat-fuse lsof udftools</code><br>
	<font color="red" face="Verdana, Geneva, sans-serif" size="2">Za lažje delo z vašim strežnikom si namestite WEBMin:</font><br>
	<code>sudo su</code><br>
	<code>cd /tmp</code><br>
	<code>apt install gnupg2 curl -y</code><br>
	<code>curl -o setup-repos.sh https://raw.githubusercontent.com/webmin/webmin/master/setup-repos.sh</code><br>
	<code>sh setup-repos.sh</code><br>
	<code>apt update && apt upgrade -y</code><br>
	<code>apt-get install webmin --install-recommends -y</code><br>
	<font color="red" face="Verdana, Geneva, sans-serif" size="2">Namesti php:</font><br>
	<code>sudo apt update</code><br>
	<code>sudo apt -y install lsb-release apt-transport-https ca-certificates</code><br>
	<code>sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg</code><br>
	<code>sudo echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list</code><br>
	<code>sudo apt update && sudo apt upgrade -y</code><br>
	<code>sudo apt-get install php libapache2-mod-php php-fpm php-mysql php-common php-gd php-cli php-cgi php-tokenizer php-mbstring php-imagick php-xml php-memcached libapache2-mod-fcgid -y</code><br>
	<code>sudo apt-get install imagemagick php7.4-imagick libmagickcore-dev -y && sudo apt install -y php7.4-mysql php7.4-dom php7.4-simplexml php7.4-ssh2 php7.4-xml php7.4-xmlreader php7.4-curl php7.4-exif php7.4-ftp php7.4-gd php7.4-iconv php7.4-imagick php7.4-mbstring php7.4-posix php7.4-sockets php7.4-tokenizer</code><br>
	<code>sudo apt-get install imagemagick php-imagick libmagickcore-dev -y</code><br>
	<code>sudo apt-get install libgeoip-dev -y && sudo apt-get install geoip-bin -y && sudo apt-get install libgeoip1 -y && sudo apt-get install libgeoip2-perl -y && sudo apt-get install libpam-geoip -y && sudo apt-get install php-geoip -y</code><br>
	<code>sudo apt-get install libapache2-mod-geoip -y && sudo apt-get install geoip-bin -y && sudo apt-get install geoip-database -y && sudo apt install libmaxminddb0 libmaxminddb-dev mmdb-bin -y
</code><br>
		</li>
				<li>Preko terminala v WEBMin ali preko putty ipd. ustvari bazo podatkov, uporabnika in geslo sql:<br/>  
				<code>sudo mariadb</code> ali <code>sudo mysql uroot pmojegeslosql</code><br/> 
				<code>CREATE DATABASE mp3player;</code><br/>
				<code>CREATE USER 'mp3player'@'localhost' IDENTIFIED BY 'dajsvojokodotukaj';</code><br/>
				<code>GRANT ALL PRIVILEGES ON mp3player.* to 'mp3player'@'localhost';</code><br/>
				<code>FLUSH PRIVILEGES;</code><br/>
	<sup>Spremenite podatke v database.php in obiščite url aplikacije npr. http://mojastran.si/setup.php</sup><br/>
			</li>

	<li>Obišči interne info strani za komplet postopek namestitve</li>
	<hr>
	<li>Direktni dostop: https://pcsnet.dyn.ts.si & perc.ddns.net</li>
	<h4 style="text-align: center; font-family:verdana; color:blue;"><audio controls="controls" autoplay="autoplay"><source src="https://stream.liferadio.tirol/italo/mp3-192/" type="audio/mpeg" /></audio></h4>
			</ol>
		</div>
	</section>

	<footer>
		<div class="container">
			<hr />
			<iframe src="http://ghbtns.com/github-btn.html?user=BorisPerc&repo=mp3player&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
			<iframe src="http://ghbtns.com/github-btn.html?user=BorisPerc&repo=mp3player&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="156px" height="30px"></iframe>
			<iframe src="http://ghbtns.com/github-btn.html?user=BorisPerc&type=follow&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="224px" height="30px"></iframe>
		</div>
	</footer>

	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/covervid.js"></script>
	<script src="assets/scripts/scripts.js"></script>

	<script type="text/javascript">
		// If using jQuery
			// $('.masthead-video').coverVid(1920, 1080);
		// If not using jQuery (Native Javascript)
			coverVid(document.querySelector('.masthead-video'), 640, 360);
	</script>

</body>

</html>
