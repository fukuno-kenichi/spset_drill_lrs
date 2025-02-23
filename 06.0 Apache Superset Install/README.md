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







