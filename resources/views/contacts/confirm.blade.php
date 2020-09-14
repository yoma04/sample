@extends('layout.common')

@section('title', 'お問い合わせ')

@section('content')


@push('css')

    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">

@endpush
@section('breadcrumbs', Breadcrumbs::render('contact'))
<div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ確認</h1>
        <div class="container">
            {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">電話番号</p>
                    <div class="col-sm-8">
                        
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">駐車場の有無<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        
                    </div>
                </div>
 
                <div class="text-center">
                    <button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
                    <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>