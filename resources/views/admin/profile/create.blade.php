<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyProfiles</title>
    </head>
    <body>
        <h1>Myプロファイル作成画面</h1>
    </body>
</html>

{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロファイルの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロファイル新規作成</h2>
            </div>
        </div>
    </div>
@endsection