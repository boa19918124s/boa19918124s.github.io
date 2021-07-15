1.程式碼放置於Xampp htdocs內.

2.修改System32/drivers/etc/hosts,新增music.edu.tw.

3.其次修改Xampp/\apache\conf\extra/httpd-vhosts.conf,額外新增一組port並將目
  錄指向於下載資料夾放置的位址.

4.於phpmyadmin新建一資料庫,名稱命名為music_db,並將下載好的資料夾內的music_db.
  sql檔案匯入於新建好的phpmyadmin/music_db.

5.於下載好的資料夾內,找到db_connect.php,修改3~6行原自行能連上的phpmyadmin帳號密碼,且另需在10行修改成自己連上phpmyadmin的帳號名稱及密碼.

6.開啟瀏覽器並輸入新建的網址名稱即可連線進入.


範例音樂下載&上傳測試
https://www.bensound.com

帳戶測試
---------------------------------------------------
管理者帳戶
email: admin@admin.com
password: admin123
----------------------------------------------------
使用者帳戶
email: jsmith@sample.com
password: jsmith123
----------------------------------------------------
