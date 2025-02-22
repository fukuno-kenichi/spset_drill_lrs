MongoDBは，NoSQLの高パフォーマンス／スケーラビリティを保持しつつ，RDBライクな機能をバランスよく組み込むことを目指して開発されているドキュメント指向データベースである．  
本研究では，オープンソースの，MongoDB 7.0.15を採用した．  
（MongoDBは，OpenLRWの要件である．）  
  
MongoDB Community Edition は以下のように，インストールする．   

# 公開鍵をインポートする
```
sudo apt-get install gnupg curl
curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | \  
   sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg \  
   --dearmor  
```

# リストファイルを作成する
```
echo "deb [ arch=amd64,arm64 signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] https://repo.mongodb.org/apt/ubuntu jammy/mongodb-org/8.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
```

# パッケージデータベースをリロードする
sudo apt-get update  

# MongoDBをインストールする
sudo apt-get install -y mongodb-org  

# MongoDBを起動する
sudo systemctl start mongod  

# MongoDB の正常起動を確認する
sudo systemctl status mongod  

# MongoDB を自動起動するように設定する
sudo systemctl enable mongod  
