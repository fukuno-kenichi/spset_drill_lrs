<?php
// サーバによって違う parameters (各自編集してください):
$host = "localhost";  // set host IP address
// $host = "your.host.jp";  // or DNS hostname
$ver = "403"; // Moodle 4.3.*
$mdpass= 'secretpass'; // moodle admin, mysql user （'&' はダメみたい）
$adminemail = "ghub@rezotech.co.jp";

$md = 'mdl_itpass'; // 同一サーバ上で2つ目のMoodleをセットアップする時は変える

// Moodle 動作に必要な packages をインストール
system("apt -y install apache2 mysql-client mysql-server php8.1 libapache2-mod-php");
system("apt -y install git graphviz aspell ghostscript clamav php8.1-pspell php8.1-curl php8.1-gd php8.1-intl php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-ldap php8.1-zip php8.1-soap php8.1-mbstring");

// PHP設定 max_input_vars を 5000 に
system("cp /etc/php/8.1/apache2/php.ini /etc/php/8.1/apache2/php.ini.orig");
system("sed -i '/max_input_vars = .*/a\max_input_vars = 5000' /etc/php/8.1/apache2/php.ini");
system("cp /etc/php/8.1/cli/php.ini /etc/php/8.1/cli/php.ini.orig");
system("sed -i '/max_input_vars = .*/a\max_input_vars = 5000' /etc/php/8.1/cli/php.ini");

system("systemctl restart apache2.service");

// Download Moodle
$mdroot = "/var/www/html/${md}";
if ($md == "moodle"){
  system("cd /var/www/html/ ; git clone git://git.moodle.org/moodle.git");
}else{
  system("cd /tmp/ ; git clone git://git.moodle.org/moodle.git");
  system("mv /tmp/moodle ${mdroot}");
}
system("cd ${mdroot}/; git checkout -b local_${ver}_STABLE origin/MOODLE_${ver}_STABLE");
system("chmod 755 ${mdroot}");

// data dir
$dataroot = "/var/www/${md}d";
system("mkdir ${dataroot}; chown www-data:www-data ${dataroot}/");

// DB
$dbuser = "dbu${md}";
system("mysql -u root -e \"CREATE DATABASE $md  DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; \";");
system("mysql -u root -e \"CREATE USER ${dbuser}@localhost IDENTIFIED BY '$mdpass'; \"; ");
system("mysql -u root -e \"GRANT ALL ON ${md}.* TO ${dbuser}@localhost ; \"; ");
// mysql パスワードありの場合は、 mysql -u root -pmysqlpassword -e ... と書く

// moodle directory を書き込み可能に
system("chown -R www-data:www-data ${mdroot}");

$url = "http://${host}/${md}";  // if apache documentroot is as default

// non-interactive install command
system("cd ${mdroot}/;  sudo -u www-data /usr/bin/php  admin/cli/install.php --non-interactive --agree-license --lang=ja --wwwroot=\"${url}\" --dataroot=\"${dataroot}\" --dbtype=mysqli --dbname=$md --dbuser=${dbuser} --dbpass=$mdpass --fullname=\"${md} site\" --shortname=${md} --adminpass=$mdpass --adminemail=$adminemail");

// moodle directory を書き込みできないように
system("chown -R root:root ${mdroot}");
system("chmod 644 ${mdroot}/config.php");

echo("$url でMoodleが使えます。\n adminパスワードは $mdpass です。\n 以下を crontab に追加してください: \n* * * * * php ${mdroot}/admin/cli/cron.php > /dev/null 2>&1 \n");

// おまけ： Let's encrypt の設定
// system("a2ensite default-ssl ; a2enmod ssl"); // apache の sslを有効に
// system("snap install --classic certbot");
// system("certbot certonly -n --webroot -w /var/www/html -d $host -m $adminemail --agree-tos ");
// system("certbot install --apache --no-redirect");  // これがもしダメなら手動で ssl.conf を変更。

