<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&family=Lily+Script+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Response | Schedule</title>
</head>

<body>
  <div class="flex">
    <p class="schedule">Schedule</p>
    <div class="container">
      <form action="index.php" method="post">
        <?php
        // データベース接続
        $pdo = new PDO('mysql:host=localhost;dbname=schedule;charset=utf8', 'schedule', 'password');

        // 変数の代入
        $date = $_REQUEST['date'];
        $category = $_REQUEST['category'];
        $content = htmlspecialchars($_REQUEST['content']);

        // SQL文の準備
        $sql = $pdo->prepare('insert into register values(null,?,?,?)');

        if (isset($date, $category)) {
          // 日付とカテゴリーがセットされている＝true、SQL文を実行
          if ($sql->execute([$date, $category, $content])) {
            // SQL実行できた＝true、登録内容表示
            echo <<<END
<p class="message">スケジュールの登録が完了しました。</p>
<div class="text-left">
 <p class="result">日付：{$date}</p>
 <p class="result">カテゴリー：{$category}</p>
 <p class="result">内容：{$content}</p>
</div>
<div class="submit-area">
  <input type="submit" value="もう1件登録する">
</div>
END;
          } else {
            // SQL実行できなかった=false、エラーメッセージの表示
            echo <<<END
<p class="message">登録に失敗しました。</p>'
<div class="submit-area">
  <input type="submit" value="もう一度登録する">
</div>
END;
          }
        }
        ?>
      </form>
    </div>
  </div>

</body>

</html>