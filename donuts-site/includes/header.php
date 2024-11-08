<?php session_start(); ?>
<header>
  <div class="common_header_bwrapper">
    <nav class="header_gmenu">
      <div class="header_hammenu_box">
        <button id="open_button">
          <span class="header_navicon"></span></button>
        <div class="hammenu_contents">
          <div class="hammenu_logos"><a href="index.php"><img src="common/images/logo.svg" alt="c.c.donutsのロゴ"></a><button id="hammenu_close_icon"><span class="hammenu_close_span"></span></button></div>
          <ul class="header_hammenu">
            <li><a href="index.php">TOP</a></li>
            <li><a href="product.php">商品一覧</a></li>
            <li><a href="#">よくある質問</a></li>
            <li><a href="#">問い合わせ</a></li>
            <li><a href="#">当サイトのポリシー</a></li>
          </ul>
        </div>
      </div>
      <div class="header_logo">
        <a href="index.php"> <img src="common/images/logo.svg" alt="c.c.donutsのロゴ"></a>
      </div>
      <div class="header_icons">
        <?php
        if (isset($_SESSION['customer'])) {
          echo <<<END
         <button onclick="location.href='logout-input.php'"><img class="header_logouticon" src="common/images/header-logout.svg" alt="ログアウトアイコン"></button>
  END;
        } else {
          echo <<<END
        <button onclick="location.href='login-input.php'"><img class="header_loginicon" src="common/images/header-login.svg" alt="ログインアイコン"></button>
  END;
        }
        ?>
        <button onclick="location.href='cart-show.php'"><img src="common/images/header-cart.svg" alt="カートアイコン"></button>
      </div>
    </nav>
    <div class="header_search"><button><img src="common/images/header-vector.svg" alt="検索アイコン"></button><input type="text"></div>
  </div>

</header>