@extends('main.master')

@section('add_css')
    <style>
        input {
            margin-bottom: 20px;
            border: none;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <h1 style="margin: 20px 0; font-size: 2.0em">プロフィール情報編集</h1>
    <form class="edit_form" action="/edit" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control">

            <label for="gender">男</label>
            <input type="radio" name="gender" value="0" checked><br />
            <label for="gender">女</label>
            <input type="radio" name="gender" value="1">
            <br /><br />

            <label for="birth">誕生日</label>
            <input type="date" name="birth" class="form-control">

            <label for="email">メールアドレス</label>
            <input type="email" name="email" class="form-control">

            <label for="name">在住都道府県</label>
            <input type="text" name="pref" class="form-control">

            <input type="submit" value="確認" class="form-control">
        </div>
    </form>
@endsection

@section('add_js')
@endsection
