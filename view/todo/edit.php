<?php
require_once '../../config/database.php';
require_once '../../model/todo.php';
require_once '../../controller/TodoController.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = new TodoController;
    $action->edit();
} else {
    $action = new TodoController;
    $todo = $atcion->edit();
}

session_start();
// セッション情報の取得
$error_msgs = $_SESSION['error_msgs'];

//セッション削除
unset($_SESSION["error_msgs"]);

// $title = '';
// $detail = '';
// if($_SERVER["REQUEST_METHOD"] === "GET") {
//     if(isset($_GET['title'])) {
//         $title = $_GET['title'];
//     }
//     if(isset($_GET['detail'])) {
//         $detail = $_GET['detail'];
//     }
// }
// session_start();
// // セッション情報の取得
// $error_msgs = $_SESSION['error_msgs'];

// //セッション削除
// unset($_SESSION["error_msgs"]);



?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集</title>
</head>
<body>
    <div>編集</div>
    <form action="./new.php" method="post">
        <div>
            <div>タイトル</div>
            <div>
                <input name="title" type="text" value="<?php echo $todo['title'];?>">
            </div>
        </div>
        <div>
            <div>詳細</div>
            <div>
                <textarea name="detail">"<?php echo $todo['detail'];?></textarea>
            </div>
        </div>
        <button type="submit">登録</button>
    </form>
    <?php if($error_msgs):?>
        <div>
            <ul>
            <?php foreach($error_msgs as $error_msg):?>
                <li><?php echo $error_msg; ?></li>
            <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>
</body>
</html>