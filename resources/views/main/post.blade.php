@extends('main.master')

@section('add_css')
    <style>
        input, textarea {
            margin-bottom: 20px;
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
    <h1 style="margin: 20px 0; font-size: 2.0em">案件登録</h1>
    <form class="edit_form" action="/post" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">案件名</label>
            <input type="text" name="title" class="form-control">

            <label for="birth">報酬</label>
            <input type="number" name="badget" class="form-control">

            <label for="due">期日</label>
            <input type="date" name="due" class="form-control">

            <label for="detail">案件詳細</label>
            <textarea class="form-control" rows="10" name="detail"></textarea>

            <input type="submit" value="確認" class="form-control">
        </div>
    </form>
@endsection

@section('add_js')
@endsection
