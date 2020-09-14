@extends('layout.common')

@section('title', 'お問い合わせ')

@section('content')


@push('css')

    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">

@endpush
@section('breadcrumbs', Breadcrumbs::render('contact'))
<div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
        <div class="container">
            {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">電話番号</p>
                    <div class="col-sm-8">
                        {{ Form::text('tel', null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">駐車場の有無<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <label>{{ Form::radio('gender', "男性") }}あり</label>
                        <label>{{ Form::radio('gender', "女性") }}なし</label>
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                
                <div class="text-center">
                    {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>