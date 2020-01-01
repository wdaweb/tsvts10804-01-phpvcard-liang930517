<!-- 主要是能自動依版型(link到layout.css)跟session資訊(或cookie) 整合到HTML，
成為完整的vCard畫面。 -->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="layout.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>預覽資訊</title>
</head>
<style>

</style>
<body>
<div class="main">

<!-- <img src= "./img/HappyHalloween.jpg" width="500" height="500">
 -->



    <div <?php if ($_SESSION['type'] == 1) echo 'class="Halloween"';
            elseif($_SESSION['type'] == 2) echo 'class="Christmas"';
            elseif($_SESSION['type'] == 3) echo 'class="Moonfestival"';
            elseif($_SESSION['type'] == 4) echo 'class="LanternFestival"';
    
    ?>>
        <img src=<?=$_SESSION['photo']?> width="100" style="width: 130px;height: 130px;border-radius: 999em;box-shadow: 0px 0px 20px white;margin-top: 52px;">
        <p style="text-align:center;font-size: 30px;font-family: 'Fredoka One', cursive;
font-family: 'Noto Sans TC', sans-serif;background-color: #FFF;width: 117px;margin: 25px auto;border-radius: 6px;"><?=$_SESSION['name']?>
        <p style="text-align:center;font-size: 20px;font-family: 'Fredoka One', cursive;font-family: 'Noto Sans TC', sans-serif;background-color: #FFF;width: 315px;margin: -7px auto;letter-spacing: 9px;border-radius: 10px;"><?=$_SESSION['job']?>
        <hr>
        <p style="text-align: center;font-family: 'Noto Sans TC', sans-serif;width: 315px;margin: 16px auto;letter-spacing: 2px;color: #555;"><?=$_SESSION['skill']?>
        <p style="padding: 6px;font-size: 19px;font-family: 'Fredoka One', cursive;background: url(img/background2.jpg);background-size: cover;text-align:center;margin: 0px 30px;letter-spacing: 1px;"><?=$_SESSION['mail']?>
        <p style="padding: 6px;font-size: 18px;font-family: 'Fredoka One', cursive;background: url(img/background2.jpg);background-size: cover;text-align:center;margin: 18px 30px;letter-spacing: 4px;"><?=$_SESSION['cellphone']?>
        
    </div>

    <br><button onclick="window.history.go(-1)">回頁面</button>
    </div>

    

</body>
</html>