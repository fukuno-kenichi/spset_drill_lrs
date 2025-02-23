BIツールとは，ビジネスにおける大量のデータを収集・分析する機能を持つソフトウェアのことである．  
本研究では，オープンソースの，Apache Superset 4.1.0を採用した．  
Apache Supersetとは，Airbnb社が開発したデータの検索や可視化を行うためのオープンソースソフトウェアである．  
  
Supersetは以下のように，インストールし，設定する．  

# Supersetのインストール

## 必要パッケージなどインストールする
```
sudo apt install python3
sudo apt-get install build-essential libssl-dev libffi-dev python3-dev python3-pip libsasl2-dev libldap2-dev default-libmysqlclient-dev

sudo apt-get install python3-setuptools
pip3 install --upgrade pip
pip install --upgrade setuptools pip

apt install python3.10-venv
python3 -m venv supersetenv
source supersetenv/bin/activate
```

# Supersetをインストールする
```
pip install Superset
pip install Superset[cors]
```

# 環境変数を設定する
```
export FLASK_APP=superset
export SUPERSET_CONFIG_PATH=/home/ubuntu/superset_config.py
```

# SECRET_KEYを生成する
```
openssl rand -base64 42
```
## SECRET_KEY生成例
![SECRET_KEY生成例](image/makeSECRET_KEY.png)

# superset_config.pyを作成する
このリポジトリのファイルを参照ください．
```
SECRET_KEY='****'
SUPERSET_CONFIG_PATH='/home/ubuntu/superset_config.py'
SQLALCHEMY_DATABASE_URI = 'sqlite:////home/ubuntu/.superset/superset.db'

PUBLIC_ROLE_LIKE_GAMMA = True
PUBLIC_ROLE_LIKE = "Gamma"

CONTENT_SECURITY_POLICY = {
        'default-src': ['self', 'gsis-fukuno.com:8088'],
  # Add other directives as needed
}

ENABLE_JAVASCRIPT_CONTROLS = True

TALISMAN_ENABLED = False
ENABLE_CORS = True 
OVERRIDE_HTTP_HEADERS = { "Content-Security-Policy": "frame-ancestors https://gsis-fukuno.com;" }

SUPERSET_FEATURE_EMBEDDED_SUPERSET=True
```

# Supersetの内部データベースのフォルダを作成する
```
mkdir /home/ubuntu/.superset
```

# adminアカウントを設定する
```
superset fab create-admin 
```

# Superset内部テーブルを初期化する
```
superset db upgrade
```

# Supersetを初期化する
```
superset init
```

環境変数にPUBLIC_ROLE_LIKE_GAMMA = True，PUBLIC_ROLE_LIKE = "Gamma"を設定した後，初期化を実行すると，Gammaロール権限が，Public権限にコピーされる．  

# Supersetを起動する
このコマンドは，Supersetのみ，個別起動の場合である．
（OpenLRW，Superset，Drillの一括起動は，を参照すること．）

```
#!/bin/bash
python3 -m venv venv
. venv/bin/activate

export FLASK_APP=superset
export SUPERSET_CONFIG_PATH=/home/ubuntu/superset_config.py

superset run -h gsis-fukuno.com -p 8088 --cert "/etc/ssl/****/server.crt" --key "/etc/ssl/****/server.key"
```




