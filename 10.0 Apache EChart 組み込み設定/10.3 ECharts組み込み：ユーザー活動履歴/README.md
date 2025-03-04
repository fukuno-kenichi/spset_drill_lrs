# ECharts組み込み：ユーザー活動履歴

##  EChartsによる可視化
SupersetのSQL実行結果CSVを取得し，可視化する．  

![EChartsによる可視化](image/echart_buble.png)

以下に，実装方法を示す．  

##  Superset SQL保存
Supersetのメニュー「SQL」より「SQLLab」を選択し，SQLを登録する．  
リポジトリのSQLファイルを，参照ください．

```
SELECT 
    classId,
    FUKU_COURCE_NAME,
    FUKU_ID_USER_NAME,
    FUKU_TASK_QNO,
    FUKU_TASK_NAME,
    FUKU_EVTM_MIN,
    COUNT(*) as `CNT`
FROM
(
    SELECT 
        DAY(mongoEvent.event.`eventtime`) AS FUKU_SEL_DD,
        HOUR(mongoEvent.event.`eventtime`) AS FUKU_SEL_HH,
        MINUTE(mongoEvent.event.`eventtime`) AS FUKU_SEL_MM,
        date_trunc('DAY', mongoEvent.event.`eventtime`) AS FUKU_EVTM_DAY,
        date_trunc('HOUR', mongoEvent.event.`eventtime`) AS FUKU_EVTM_HOUR,
        date_trunc('MINUTE', mongoEvent.event.`eventtime`) AS FUKU_EVTM_MIN,
        classId,
        mongoEvent.event.`group`.`_id` AS FUKU_COURCE_ID,
        mongoEvent.event.`group`.`name` AS FUKU_COURCE_NAME,
        split_part(mongoEvent.event.`action`,'#', 2) AS FUKU_ACT,
        userId,
        mongoEvent.event.`agent`.`name` AS FUKU_USER_NAME,
        concat(userId, ':', mongoEvent.event.`agent`.`name`) AS FUKU_ID_USER_NAME,
        mongoEvent.event.`target`.`_id` AS FUKU_TASK_URL,
        split_part(mongoEvent.event.`target`.`_id` ,'id=', 2) AS FUKU_TASK_ID,
        mongoEvent.event.`target`.`name` AS FUKU_TASK_NAME,
        split_part(mongoEvent.event.`target`.`name`,'.', 1) AS FUKU_TASK_QNO,
        split_part(mongoEvent.event.`membership`.`roles`[0],'#', 2) AS FUKU_ROLE
    FROM 
        mongo.fuku_db.mongoEvent
    ORDER BY
        mongoEvent.event.`eventtime` DESC
) AS virtual_table
WHERE 
    FUKU_ROLE IN ('Learner') 
AND
    FUKU_TASK_NAME IS NOT NULL
AND
    FUKU_ACT IN ('Started', 'Submitted') 
GROUP BY
    classId,
    FUKU_COURCE_NAME,
    FUKU_ID_USER_NAME,
    FUKU_TASK_QNO,
    FUKU_TASK_NAME,
    FUKU_EVTM_MIN
ORDER BY
    classId DESC,
  FUKU_EVTM_MIN DESC
;
```

##  Superset SqlLabのURL取得
「DOWNLOAD TO CSV」ボタンのリンクURLをコピーする．  

![タスク活用チェックURL](image/ユーザー活動履歴_sqllabo.png)

##  Moodleへのリソース，ファイル追加
Moodleを編集モードに変更し，活動またはリソースを追加するから，ファイルを選択する．  

![リソース追加](image/リソース追加.png)

##  ファイルページ設定
名称を指定し，可視化に必要なファイルをアップロードし，リソースを保存する．　　

![リソース追加](image/ユーザー活動履歴_編集.png)

## 追加するファイル
|No.|ファイル名|概要|
|----|----|----|
|1|d3.v7.min.js|オープンソースのJavaScriptデータ視覚化ライブラリ|
|2|ECharts.min.js|オープンソースのJavaScriptデータ視覚化ライブラリ|
|3|jquery-3.7.1.js|JavaScriptコードをより容易に記述できるようにするために設計されたJavaScriptライブラリ|
|4|qe_us_tsk_ymd_now_real.html|本研究用に作成した，JavaScriptを含むhtmlファイル|
  
## ダウンロードURL
jquery  
https://jquery.com/download/
  
d3  
https://d3js.org/d3.v7.min.js
