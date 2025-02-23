
# spset_drill_lrs
このリポジトリでは，Moodle4.3(LMS)からIMS CaliperイベントをOpenLRW(LRS)に出力して，Apache Superset 4.1.1 を用いて可視化する方法について，説明します．  
OpenLRWはMongoDBにデータを蓄積しており，Apache Drill(スキーマフリー・SQLクエリエンジン)を用いて，直接データを参照して，Apache Supersetで可視化します．  
その他，Apache Supersetのクエリ出力結果を用いた，Apache EChartsによる可視化方法も紹介します．    

![概要図](/image/概要図_v6.png)

# システム要件
| 分類 | 仕様 |
| ---- | ---- |
|OS|Ubuntu 22.04|
|CPU|6 CPU|
|メモリ|8 GB|
|SSD|160GB|

# 謝辞
この資料は，熊本大学大学院　教授システム学専攻　修士論文の一部を編集して，可視化システムを構築する方法を，研究者のために公開したものです．  
主指導の喜多敏博先生，副指導の戸田真志先生，中野裕司先生，教授システム学専攻の先生方，研究協力者の皆様に，深く感謝申し上げます．
