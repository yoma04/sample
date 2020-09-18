@extends('layout.common')

@section('title', 'サービス')

@section('content')


@push('css')

    <link href="{{ asset('css/serviceclean.css') }}" rel="stylesheet">

@endpush

@section('breadcrumbs', Breadcrumbs::render('houseclean'))
<div class="toplist">
    <nav>
        <ul>
            <li><a href="#house"><i class="fas fa-caret-down"></i>ハウスクリーニング<BR>(お部屋・窓・エアコン)</a></li>
            <li><a href="#mizu"><i class="fas fa-caret-down"></i>水回りクリーニング<BR>(キッチン・浴槽・トイレ)</li></a>
            <li><a href="#other"><i class="fas fa-caret-down"></i>その他<BR>(その他)</li></a>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="content-1">
    <div class="serviceTitle house">
        <a name="house"><h1>ハウスクリーニング</h1></a>
            <div class="fast back">
                <ul>
                    <li><p>サクラプランニングのハウスクリーニングサービスです。プロの技術・機材で<span class="beautiful">綺麗</span>を提供します。</p></li>
                    <li><p>普段ご自身ではできない部分や落としにくい汚れなどをサクラプランニングが解決します。</p></li>
                </ul>
            </div>
        </div>
    <section class="section1">
        <ul>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>FLOOR</p> <h2>フロアコーティング</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>WINDOW</p> <h2>窓まわり</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
        </ul>
        <ul>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>AIR CONDITIONER</p> <h2>エアコンクリーニング<BR>【壁掛け型】</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>AIR CONDITIONER</p> <h2>エアコンクリーニング<BR>【天井埋め込み型】</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
                <a name="mizu"><div class="ContentBtn"></a>
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            
        </ul>
    </section>
    </div>
<div class="content-2">
<div class="serviceTitle house">
<h1>水回りクリーニング</h1>
            <div class="two back">
            </div>
        </div>
    <section class="section2">
        <ul>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>FLOOR</p> <h2>フロアコーティング</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>WINDOW</p> <h2>窓まわり</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
        </ul>
        <ul>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>AIR CONDITIONER</p> <h2>エアコンクリーニング<BR>【壁掛け型】</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            <li>
            <div class="ContentBox">
                <div class="mess"> 
                <p>AIR CONDITIONER</p> <h2>エアコンクリーニング<BR>【天井埋め込み型】</h2>
                <img src="{{ asset('/images/image0.jpg') }}" alt="インスタ">
                </div>
            <div class="ContentBtn">
                <a href="#"><i class="fas fa-angle-right"></i>詳しく見る</a>
                <p>人間は地に足をつけて生活する。
                <BR>だからこそ綺麗にせよ。
                </p>
            </div>
            </div>
            </li>
            </section>
        </ul>
    
</div>
 
</div>
@endsection