
@extends('layout.common')

@section('title', 'ご注文の流れ')

@section('content')


@push('css')

    <link href="{{ asset('css/order.css') }}" rel="stylesheet">

@endpush

@section('breadcrumbs', Breadcrumbs::render('order'))
<div class="orderContainer">
<div class="orderTitle">
  <h1>ご注文の流れ</h1>
</div>
<div class="Steps1"><h2><span>STEP1</span>お問い合わせ</h2></div>
<div class="box">
  <div class="stepOne">
    <p>１、サイトの「お問い合わせ」ページからお問い合わせください。</p>
    <div class="step1img">
    <img src="images/titi.png" alt="" class="image"></div>
    <p>２、「お問い合わせ」が完了致しましたら、担当の者が確認メールをお送りいたします。<br>
    (確認メールが届かない場合、お申し込みが失敗している可能性がございます。再度お申し込みください。)</p>
    <p>３、お客様の希望時間にお電話をさせていただきます。ご依頼場所への訪問する日程や<br>
      詳細をお伺いいたします。希望日や時間帯をお伝えください。
    </p>
  </div>
</div>
<div class="box">
  <div class="Steps1"><h2><span>STEP2</span>クリーニング</h2></div>
  <div class="stepTwo">
    <p>１、ご依頼をいただいた日時、場所にスタッフがお伺いいたします。</p>
    <p>２、最後にご依頼内容・サービス時間を確認させていただきます。<br>
    その後クリーニングを開始いたします。</p>
    <p>３、クリーニング終了後、お客様に仕上がりを確認していただき、クリーニング完了です。
    </p>
  </div>
</div>
<div class="contactBox">
    <a href="#">お問い合わせページ</a>
</div>
</div>
@endsection