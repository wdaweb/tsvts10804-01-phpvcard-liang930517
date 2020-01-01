<!-- 能將form表單的資料包含圖片路徑(記得存入空間)一起轉成SESSION或COOKIE，接著導向到preview.php -->

<?php
print_r($_POST);
if(!empty($_POST)){ //陣列不是空陣列 = 陣列內有東西時 => true則if成立
    session_start();

    // save to session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['job'] = $_POST['job'];
    $_SESSION['skill'] = $_POST['skill'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['cellphone'] = $_POST['cellphone'];

    copy($_FILES['photo']['tmp_name'],"upload/".time()."_".$_FILES['photo']['name']);
    $_SESSION['photo'] = "upload/".time()."_".$_FILES['photo']['name'];

    $_SESSION['type'] = $_POST['type'];
    //echo $_SESSION();
    header('location:preview.php');
}
else header('location:index.php');
?>