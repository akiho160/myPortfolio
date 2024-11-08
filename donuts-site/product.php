<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="商品一覧：CCドーナツ当店オリジナル、チョコレートディライト、キャラメルクリーム、プレーンクラシック、(新商品)サマーシトラス、ストロベリークラッシュ、その他バラエティセットをご紹介。">
    <link rel="stylesheet" href="common/css/reset.css">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/product.css">
    <!-- ↑ページ別の.cssをリンク -->
    <title>商品一覧｜C.C.Donuts</title>
</head>

<body>
    <?php require 'includes/header.php';
    ?>
    <!-- パンくず -->
    <nav class="navigator">
        <ol class="bread_crumb">
            <li><a href="index.php">TOP</a></li>
            <li>商品一覧</li>
        </ol>
    </nav>
    <hr class="brown_line">

    <!-- ユーザー名 -->
    <div class="navigator">

        <?php
        // データベース接続
        require 'includes/database.php';
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
        <section class="sec_1">
            <h1 class="common_title">商品一覧</h1>
            <div class="common_product_form">
                <ul class="common_product_content">

                    <?php
                    //データベース接続
                    require 'includes/database.php';

                    $shop = $pdo->query('select * from product limit 6');

                    foreach ($shop as $row) {
                        $id = $row['id'];
                        $price = number_format($row['price']);
                        echo <<<END

                    <li class="common_product_items">
                     <a href="detail.php?id={$id}" class="common_products_imglink">
                         <img alt="image" src="common/images/{$id}.png" class="common_produts_img hover">
                     </a>
                     <a href="detail.php?id={$id}" class="flex_grow">
                         <p class="common_products_name hover_text">{$row['name']}</p>
                     </a>
                     <div class="common_pricearea">
                     <p class="common_price">税込　 ¥{$price}</p>
                     <a href="#!">
                     <img src="common/images/heart.png" alt="お気に入りボタン" class="common_heart">
                     </a>
                     </div>
                    
                <div class="common_btn_cart">
                 <form action="cart-input.php" method="post" >

                    <input type="hidden" name="id" value="{$id}">
                    <input type="hidden" name="name" value="{$row['name']}">
                    <input type="hidden" name="price" value="{$row['price']}">
                    <input type="hidden" name="count" value=1>

                        <input type="submit" class="product_submit" value="カートに入れる">
                        </form>
                        </div>
                                    

END;
                    }
                    ?>
                </ul>
            </div>
        </section>
        <section class="sec_2">
            <h2 class="common_title">バラエティセット</h2>
            <div class="common_product_form">
                <ul class="common_product_content">
                    <?php
                    $shop = $pdo->query('select * from product limit 12 offset 6');


                    foreach ($shop as $row) {
                        $id = $row['id'];
                        echo <<<END
                        <li class="common_product_items">                 <a href="detail.php?id={$id}">
                        <img alt="image" src="common/images/{$id}.png" class="common_produts_img hover"></a>
                        <a href="detail.php?id={$id}" class="flex_grow">
                         <p class="common_products_name hover_text">{$row['name']}</p>
                        </a>
                        <div class="common_pricearea">
                         <p class="common_price">税込　 ¥{$price}</p>
                         <a href="#!">
                             <img src="common/images/heart.png" alt="お気に入りボタン" class="common_heart">
                         </a>
        </div>
     <div class="common_btn_cart">
                                     <form action="cart-input.php" method="post" >

        <input type="hidden" name="id" value="{$id}">
        <input type="hidden" name="name" value="{$row['name']}">
        <input type="hidden" name="price" value="{$row['price']}">
        <input type="hidden" name="count" value=1>
        <p><input type="submit" class="product_submit" 
        name="test" value="カートに入れる"></p>
        </form>
        </div>
       
        </li>
END;
                    }
                    ?>
                </ul>
            </div>
        </section>

    </main>
    <!-- パンくずJsonLD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "TOP",
                    "item": "index.php"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "商品一覧",
                    "item": "product.php"
                }
            ]
        }
    </script>
    <?php require 'includes/footer.php'; ?>