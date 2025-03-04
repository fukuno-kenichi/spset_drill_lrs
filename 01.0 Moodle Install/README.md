LMSは学習管理システムとも呼ばれ，eラーニングによる学習をスムーズに進行させるためのシステムである．  
Moodleは、オープンソースのeラーニングプラットフォームである．  
本研究では，オープンソースの，Moodle 4.3を採用した．  

Moodleは以下のように，Ubuntu 22.04にインストールする．  

# PHP をコマンドラインで実行できるようにする．  
```
sudo apt -y install php8.1-cli  
```

# moodleinst.phpを作成する．  
リポジトリのファイルを参照ください．

## 参考URL
https://qiita.com/t-kita/items/0663d07ca51cd0376859

## Moodleブランチ名の指定
「$ver = "403"; // Moodle 4.3.*」，「MOODLE_403_STABLE」のように，Moodleブランチ名の指定ルールはこちらを参照ください  
https://docs.moodle.org/4x/ja/%E7%AE%A1%E7%90%86%E8%80%85%E7%94%A8Git

# 以下のコマンドを実行し，Moodleをインストールする．
```
sudo chmod 600 moodleinst.php  
sudo php moodleinst.php  
```

# Moodleのフォルダ権限を変更する．
```
sudo chgrp -R www-data /var/www/html/mdl_itpass  
sudo chmod -R g+rw /var/www/html/mdl_itpass  
sudo chmod g-w /var/www/html/mdl_itpass/config.php  
```

