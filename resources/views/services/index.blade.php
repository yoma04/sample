@extends('layout.common')

@section('title', 'サービス')

@section('content')


@push('css')

    <link href="{{ asset('css/service.css') }}" rel="stylesheet">

@endpush

@section('breadcrumbs', Breadcrumbs::render('services'))

<div class="container">
    <div class="serviceTitle">
    <h1>サービス一覧</h1>
    </div>
    <div class="serviceContent">
    <!--section１-->
    <section class="section1">
    <div class="Contentbox">
    <div class="contentTop">
    <div class="ContentTitle">
        <h2>ハウスクリーニング</h2>
    </div>
    <div class="contentbtn">
    <a href="#"><i class="fas fa-angle-right"></i>一覧はこちら</a>
    </div>
    </div>
    <div class="contentTxt">
    <h3>プロのお掃除技術でお部屋をスッキリへ!!</h3>
    <p>職人の技術と専門知識でお部屋を綺麗にするプロフェッショナルサービスです。<BR>
    普段ご自身でできないような部分をプロフェッショナル達が隅々まで綺麗にします。</p>
    </div>
    <div class="Recommended"> <p>サクラプランニングの一押しお掃除</p></div>
    <div class="content">
        <ul>
        <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>

                <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>

        <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>
                <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>
        </ul>
    </div>
    </div>
    </section>
    <!--section2-->

    <section class="section2">
    <div class="Contentbox">
    <div class="contentTop">
    <div class="ContentTitle">
        <h2>ビルクリーニング</h2>
    </div>
    <div class="contentbtn">
    <a href="#"><i class="fas fa-angle-right"></i>一覧はこちら</a>
    </div>
    </div>
    <div class="contentTxt">
    <h3>プロのお掃除技術でお部屋をスッキリへ!!</h3>
    <p>職人の技術と専門知識でお部屋を綺麗にするプロフェッショナルサービスです。
    普段ご自身でできないような部分をプロフェッショナルが隅々まで綺麗にします。</p>
    </div>
    <div class="Recommended"> <p>サクラプランニングの一押しお掃除</p></div>
    <div class="content">
        <ul>

        <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>

                <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>

                <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>

                <li><div class="service">
                <a href="#" class="hoge">
                <div>
                    <img src="images/housecleaning.jpg" alt="">
                </div><h4><i class="fas fa-angle-right"></i>床クリーニング</h4>
                </div>
                </a>
                </li>
        </ul>
    </div>
    </div>
    </section>
    </div>
</div>
@endsection