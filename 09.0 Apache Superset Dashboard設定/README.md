# Supersetダッシュボード設定
## ダッシュボード公開
Supersetのダッシュボード機能を用いて，チャートを以下のようにダッシュボードに配置する．  

![ダッシュボード画像](image/dashboard.png)

## 閲覧用ユーザー作成
SupersetのSettingメニューより，List Usersを選択する．  

![メニュー：ユーザー](image/menu_user.png)

Public権限を持つユーザーを作成する．  

![ユーザー作成](image/user_free.png)

## PUBLIC権限の設定
SupersetのSettingメニューより，List Roleを選択する．  

![メニュー：ロール](image/menu_role.png)

ログイン無しで，ダッシュボードを閲覧できように，Public権限を設定する．  
Edit Recordアイコンより，Publicの権限を編集する．  

![ロール編集](image/role_edit.png)

コネクションへのアクセス権限“database access on [Drill].(id:1)”　及び，Dashboardに関連する権限を，必要に応じて設定する．

![ロール追加](image/role.png)

### Public Roleに追加する権限
|No.|Permissions|
|----|-----|
|1|can read on Dashboard|
|2|can read on DashboardPermalinkRestApi|
|3|can get embedded on Dashboard|
|4|can read on EmbeddedDashboard|
|5|can dashboard on Superset|
|6|can dashboard permalink on Superset|
|7|can view query on Dashboard|
|8|can view chart as table on Dashboard|
|9|database access on [Drill].(id:1)|
|10|can cache dashboard screenshot on Dashboard|

上部メニューDashboardsより，ダッシュボード一覧を表示する．  
ダッシュボード一覧より，Actions列→Editを選択する．  

![ダッシュボード編集](image/dashboard_edit.png)

## 更新サイクルの設定
![更新サイクルの設定](image/refresh.png)

Dashboard properties画面のADVANCEDを選択し，拡張設定要素を表示する．  
JSON METADATAの要素に，30秒の更新サイクルを設定する．  

