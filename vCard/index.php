<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard產生器</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <div class="main">
    <h1>vCard產生器</h1>
    <form action="api.php" method="post" enctype="multipart/form-data">
    <div class="box">
        <p>你的名字 | <input type="text" name="name" value="梁舒絨">
        <p>職位名稱 | <input type="text" name="job" value="網頁設計師">
        <p><span style="vertical-align:top">技能說明 | </span>
        <textarea name="skill" cols="30" rows="10">HTML/CSS網頁概念基礎,PHP/MySQL資料處理,JS/JQ前端網頁設計,AI/PS平片影像處理,UI/UX設計規劃</textarea>
        <p>email　　| <input type="text" name="mail" value="liang930517@yahoo.com.tw">
        <p>手機號碼 | <input type="text" name="cellphone" value="0916761517">
        <p>人像照 　| <input type="file" name="photo">
        <p>版型選擇 |
            <select name="type">
            <option value="1">萬聖節</option>
            <option value="2">聖誕節</option>
            <option value="3">中秋節</option>
            <option value="4">元宵節</option>
            </select>
        </p>
    </div>
        <br><input type="submit" value="送出預覽">
    </form>
    </div>
</body>

</html>