# アクセス回数（ユーザー／日）

データセット（DS_MAIN）を元に，HEATMAPを用いて，可視化する．

![グラフ](image/gra06.png)

パラメタ | 値
|----|----|
X AXIS | イベント時刻（分単位に変換）
Y AXIS | ユーザーID＋ユーザー名
METRIC | 回数
FILTER | ユーザー属性＝学習者（Learner）<br>コースID＝４　※評価実験用に限定<br>アクション＝Started, Submitted　に限定
