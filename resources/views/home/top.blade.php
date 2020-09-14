@extends('layout.common')

@section('title', 'ホーム')

@section('content')


@push('css')

    <link href="{{ asset('css/top.css') }}" rel="stylesheet">

@endpush
@section('breadcrumbs', Breadcrumbs::render('home'))

<section class="section1">
<div class="move">
    <a href="#"><img src="images/p1.jpg" alt="p"></a>
    <a href="#"><img src="images/p2.jpg" alt="p"></a>
    <a href="#"><img src="images/p3.jpg" alt="p"></a>
</div>
</section>

<div class="container">

    <section class="section2">
        <h2>サービス</h2>
        <div class="wide">
        <div class="service-menu">
            <a href="#"><img src="images/view.jpg" alt="view"></a>
        </div>
        </div>
        <div class="wide">
        <div class="service-menu">
        <a href="#"><img src="images/view2.jpg" alt="view"></a>
        </div>
        </div>
        <div class="wide">
        <div class="service-menu">
        <a href="#"><img src="images/view.jpg" alt="view"></a>
        </div>
        </div>
        <div class="wide">
        <div class="service-menu">
        <a href="#"><img src="images/view2.jpg" alt="view"></a>
        </div>
        </div>
    </section>
    </div>
@endsection