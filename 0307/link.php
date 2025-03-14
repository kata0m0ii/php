<html>
    <head>
        <meta charset="utf-8">
        <title>
            迎新活動行程與報名表
        </title>
    </head>

    <body>
        <h2>活動行程</h2><BR>
        活動時間 : x 月 y 日
        <table border="1">
            <tr><td>時間</td><td>活動</td></tr>
            <tr><td>9:00~12:00</td><td>破冰遊戲</td></tr>
            <tr><td>12:00~13:00</td><td>吃午餐</td></tr>
            <tr><td>13:00~15:00</td><td>玩桌遊</td></tr>
            <tr><td>15:00~17:00</td><td>PY派對</td></tr>
        </table><BR>

        <HR width="80%">
        
        <h2>填寫表單</h2><BR>
        <form action="link_info.php" method="GET">
            您的姓名:<input type="text" name="uName"><BR>
            您的學號:<input type="text" name="uId"><BR>
            您的電話:<input type="text" name="uPhone"><BR>
            您的信箱:<input type = "email" name = "uEmail"><br>
            您的性別:男性<input type = "radio" name = "uGender" value = "男性">
            女性<input type = "radio" name = "uGender" value = "女性"><br>
            您的年齡:<input type = "number" name = "uAge"><br>
            您的生日:<input type = "date" name = "uBirth"><br>
            密碼設定:<input type = "password" name = "uPwd"><br>
            網站評價:<input type = "range" name = "uLike"><br>
            <input type = "hidden" name = "uSecret" value = "12345"><br>

            您的興趣:
            讀書<input type = "checkbox" name = "uInterest[]" value = "讀書">
            睡覺<input type = "checkbox" name = "uInterest[]" value = "睡覺">
            遊戲<input type = "checkbox" name = "uInterest[]" value = "遊戲"><br>

            所在城市:
            <select name="uCity">
                <option value = "台北">台北</option>
                <option value = "台中">台中</option>
                <option value = "高雄">高雄</option>
            </select><br>

            意見調查:<BR>
            <textarea cols="40" rows="15" name="uComment"></textarea><BR>

            <input type="submit"><input type="reset">
        </form>
    </body>

</html>