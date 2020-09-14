<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | サクラプランニング</title>
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">
    @stack('css')
    <!--フォントウェイサムのURL-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css"rel="stylesheet">
</head>
<body>

    <header>
    <div class="headerTop">
    <a href="#"><img src="images/logo.png" alt="logo"></a>
    <p class="headerTitle">あなたのお部屋も心も綺麗に。</p>
    <div class="header-insta"><a href="https://www.instagram.com/gawasa2929/"><img src="images/insta.png" alt="インスタ"></a></div>
    <address class="headerContact"><span class="tell"><a href="tel:+072-432-2212">072-432-2212</a></span><BR>受付時間0:00~23:59</address>
    </div>
    <nav class="header-menu">
    <ul class="menu">
    <!--フォントウェイサムでのURL化-->
    <li><a href="/home"><i class="fas fa-home"></i> ホーム</a></li>
    <li><a href="/service"><i class="fas fa-caret-down"></i>サービス</a>
        <ul>
        <div class="sub">
        <li><a href="#">ハウスクリーニング</a></li>
        <li><a href="#">オフィスクリーニング</a></li>
        <li><a href="#">木部灰汁洗い</a><li>
        <li><a href="#">エアコンクリーニング</a><li>
        </div>
        </ul>
    </li>
    <li><a href="/order">ご注文の流れ</a></li>
    <li><a href="/contact">お問い合わせ</a></li>
    <li><a href="/overview">会社概要</a></li>
    </ul>
    </nav>
    @yield('breadcrumbs')
    </header>
    @yield('content')
    <footer>
    <div class="footer-body">
        <div class="footerTop">
            <div class="txtTop"><a href="#"><img src="#" alt=""></a></div>
            <p class="txtBottom">ー　あなたのお部屋も心も綺麗に　ー</p>
        </div>
        <address class="footerAddress">072-432-2212</address>
        <div class="footerList">
            <ul>
                <li><a href="#">ホーム</a></li>
                <li><a href="#">サービス</a></li>
                <li><a href="#">ご注文の流れ</a></li>
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">会社概要</a></li>
            </ul>
        </div>
        <div class="instag">
        <a href="https://www.instagram.com/gawasa2929/"><i class="fab fa-instagram"></i></a>
        </div>
        </div>
    </footer>
</body>
</html>


