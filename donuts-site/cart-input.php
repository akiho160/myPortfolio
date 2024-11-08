<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common/css/reset.css">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/cart_show.css">
    <!-- ↑ページ別の.cssをリンク -->
    <title>ショッピングカート｜C.C.Donuts</title>
</head>

<body>
    <?php require 'includes/header.php'; ?>
    <!-- パンくず -->
    <nav class="navigator">
        <ol class="bread_crumb">
            <li><a href="index.php">TOP</a></li>
            <li><a href="product.php">商品一覧</a></li>
        </ol>
    </nav>
    <hr class="brown_line">
    <!-- ユーザー名 -->
    <div class="navigator">

        <?php
        // データベース接続
        // ログインしていたらユーザー名表示、していなければゲスト様を表示
        if (isset($_SESSION['customer'])) {
            echo '<p class="greeting">ようこそ　', $_SESSION['customer']['name'], '様</p>';
        } else {
            echo '<p class="greeting">ようこそ　ゲスト様</p>';
        }
        ?>

    </div>
    <hr class="brown_line">
    <!-- コンテンツ -->
    <main>
        <?php
        $id = $_REQUEST['id'];
        if (isset($_SESSION['customer'])) {
            if (!isset($_SESSION['product'])) {
                $_SESSION['product'] = [];
            }

            $count = 0;



            if (isset($_SESSION['product'][$id])) {
                $count = $_SESSION['product'][$id]['count'];
            }



            if ($_REQUEST['count'] >= 1) {
                $_SESSION['product'][$id] = [
                    'name' => $_REQUEST['name'],
                    'price' => $_REQUEST['price'],
                    'count' => $count + $_REQUEST['count']
                ];
                echo '<div class="navigator">';
                echo '<p style="color:#333;">カートに商品を追加しました。</p>';
                echo '</div>';
                // echo '<hr>';

            } else {
                // echo <<<END
                echo '<div class="result_box">';
                echo '<p>0個だったら買えんでしょうが！！</p>';
                echo '<p class="link_pr"><a href="product.php">商品一覧に戻る</a></p>';
                echo '</div>';
                // END;
            }
        }
        require 'cart.php';


        ?>
    </main>
    <?php require 'includes/footer.php'; ?>