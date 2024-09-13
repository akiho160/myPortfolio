<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&family=Lily+Script+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Schedule | PHP</title>
</head>

<body>
  <div class="flex">
    <p class="schedule">Schedule</p>
    <div class="container">
      <form action="output.php" method="post">
        <p class="form-label">日付</p>
        <input type="date" name="date" required>
        <p class="form-label">カテゴリー</p>
        <select name="category" required>
          <option value="" disabled selected>選択してください</option>
          <option value="就職活動" name="">就職活動</option>
          <option value="訓練" name="">訓練</option>
          <option value="プライベート" name="">プライベート</option>
        </select>
        <p class="form-label">内容</p>
        <textarea name="content"></textarea>
        <div class="submit-area">
          <input type="submit" value="スケジュールを登録する">
        </div>
      </form>
    </div>
  </div>
</body>

</html>