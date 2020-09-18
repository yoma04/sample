<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', url('home'));
});
// service
Breadcrumbs::for('services', function ($trail) {
    $trail->parent('home');
    $trail->push('サービス一覧', url('service'));
});

Breadcrumbs::for('houseclean', function ($trail) {
    $trail->parent('services');
    $trail->push('ハウスクリーニング', url('houseclean'));
});

//order
Breadcrumbs::for('order', function ($trail) {
    $trail->parent('home');
    $trail->push('ご注文の流れ', url('order'));
});

//orvervieew
Breadcrumbs::for('overview', function ($trail) {
    $trail->parent('home');
    $trail->push('会社概要', url('overview'));
});
//contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('お問い合わせ', url('contact'));
});