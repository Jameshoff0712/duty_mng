@component('mail::message')
■件名
【本社人事部より】パスワード変更のお知らせ

■本文
{{ $name }} 様
お疲れ様です。

勤怠管理システムおよび保育園システムのパスワードを変更しました。
今後ログインには下記の新パスワードをご使用下さい。

【パスワード：{{ $password }}】

パスワードの取扱いには十分注意して下さい。

---
株式会社Lateral Kids
本社人事部 システム管理責任者
@endcomponent
