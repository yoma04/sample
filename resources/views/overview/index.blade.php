@extends('layout.common')

@section('title', '会社概要')

@section('content')


@push('css')

    <link href="{{ asset('css/overview.css') }}" rel="stylesheet">

@endpush

@section('breadcrumbs', Breadcrumbs::render('overview'))

<div class="overTitle">
<h1>企業情報・会社概要</h1>
</div>
<table border="1"class="company">
<tbody class="listbody">
<tr>
  <th>会社名</th>
  <td>株式会社サクラプランニング</td>
</tr>
<tr>
  <th>本社所在地</th>
  <td>〒596-0045<br>大阪府岸和田市別所町3-15-23</td>
</tr>
<tr>
  <th>TEL</th>
  <td>072-439-6016</td>
</tr>
<tr>
  <th>FAX</th>
  <td>072-432-2212</td>
</tr>
<tr>
  <th>創業</th>
  <td>平成16年(2004)10月</td>
</tr>
<tr>
  <th>設立</th>
  <td>令和元年(2020)11月29日</td>
  <tr>
    <th>事業内容</th>
    <td>ハウスクリーニング全般・ビルクリーニング業務全般<br>
        家庭用・業務用エアコンクリーニング</br>
        木部灰汁洗い・各種コーティング
  </td>
  </tr>
</tr>
</tbody>
</table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection