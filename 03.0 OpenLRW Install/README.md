LRSは，学習活動のデータを保存，管理，共有するためのシステムである．  
OpenLRWは，Java ベースで開発された学習記録のためのシステムである．  

本研究では，オープンソースの，OpenLRW 1.2.3を採用した．  

# インストール
以下のコマンドを実行し，インストールする．  
```
Useradd -m -c "Boot User" boot
mkdir /opt/openlrw/
cd /opt/openlrw/
git clone https://github.com/Apereo-Learning-Analytics-Initiative/OpenLRW
chown -R boot /opt/openlrw
su boot -c "bash OpenLRW/src/scripts/install.sh"
```
![install.sh実行例](image/install_sh.png)
