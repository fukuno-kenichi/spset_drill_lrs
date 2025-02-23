OpenLRWがデータを蓄積しているMongoDB（データベース）を，直接参照するために使用した．  
Apache Drillは，様々なデータベースに対応した，SQLクエリエンジンである．  
本研究では，オープンソースの，Apache Drill 1.21.2を採用した．  
  
Drillは以下のように，インストールする．   

# Apache Drillのインストール
## Drillをダウンロードする
以下のURLから，インストール用の圧縮ファイルをダウンロードする．  
```
https://drill.apache.org/download/
```

## Drillをインストールする
ディレクトリにファイルを移動し，圧縮ファイルを解凍する．  
```
cd /home/ubuntu/
tar -xvzf Drill-1.21.2.tar.gz
```

## Drillを起動する
```
cd /home/ubuntu/Drill-1.21.2
./bin/drill-embedded
```

## Web GUI表示
以下のURLをWebブラウザで表示する．  
※ポートを解放していない場合は，GUIから表示する．

```
http://localhost:8047
```

### Drill管理画面例
![Drill管理画面例](image/drill_admin.png)

### StorageのMongoDBプラグイン変更
Storageメニューより，mongoをEnableに設定する．  
![MongoDBを有効化](image/drill_opt.png)

## Superset用のpackagesをインストールする．
```
python3 -m venv venv
. venv/bin/activate
pip install sqlalchemy-drill
```
