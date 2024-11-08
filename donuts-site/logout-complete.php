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
    <link rel="stylesheet" href="common/css/login_out.css">
    <!-- ↑ページ別の.cssをリンク -->
    <title>ログアウト完了｜C.C.Donuts</title>
</head>

<body>
    <?php
    require 'includes/header.php';
    ?>

    <!-- パンくず -->

    <!-- ユーザー名 -->

    <!-- コンテンツ -->
    <main>
        <?php
        if (isset($_SESSION['customer'])) {
            unset($_SESSION['customer']);
            unset($_SESSION['product']);

            echo <<<END
        <div class="inner">
            <h1 class="common_subpage">ログアウト完了</h1>
            <div class="login_wrapper">
                <div class="login_frame_complete">
                    <p class="complete_text">ログアウトが完了しました。</p>
                </div>
                <div class="login_frame2">
                    <p class="linkedtext"><a href="index.php">TOPページへ戻る</a></p>
                </div>

            </div>
        </div>

        END;
        } else {
            echo <<<END
        <div class="inner">
            <h1 class="common_subpage">ログアウト失敗</h1>
            <div class="login_wrapper">
                <div class="login_frame_complete">
                    <p class="complete_text">すでにログアウトしています。</p>
                </div>
                <div class="login_frame2">
                    <p class="linkedtext"><a href="index.php">TOPページへ戻る</a></p>
                </div>

            </div>
        </div>

        END;
        }
        ?>
    </main>
    <?php
    require 'includes/footer.php';
    ?>