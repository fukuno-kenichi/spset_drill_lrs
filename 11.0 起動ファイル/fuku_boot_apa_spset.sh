#!/bin/bash

python3 -m venv venv
. venv/bin/activate


export FLASK_APP=superset

export SUPERSET_SECRET_KEY=****
export SUPERSET_CONFIG_PATH=/home/ubuntu/superset_config.py
export PUBLIC_ROLE_LIKE_GAMMA=True

#superset run -h 0.0.0.0 -p 8088
#superset run -h gsis-fukuno.com -p 8088

superset run -h gsis-fukuno.com -p 8088 --cert "/etc/ssl/****/server.crt" --key "/etc/ssl/****/server.key"

# ファイル内の **** は，自分の環境に合わせて，書き換えてください．
