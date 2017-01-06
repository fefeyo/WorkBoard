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
    <h1 style="margin: 20px 0; font-size: 2.0em">学校情報編集</h1>
    <form class="edit_form" action="/school_edit" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <p>ここの初期状況も調整中</p>
            <p>{{ $school->school_type }}</p>            
            <label>学校種別</label><br />
            <label for="type">高専</label>
            <input type="radio" name="school_type" value="0">
            <label for="type">専門学校</label>
            <input type="radio" name="school_type" value="1">
            <label for="type">短大</label>
            <input type="radio" name="school_type" value="2">
            <label for="type">大学</label>
            <input type="radio" name="school_type" value="3">
            <label for="type">大学院</label>
            <input type="radio" name="school_type" value="4">
        </div>
        <div class="form-group">
            <label for="name">学校名</label>
            <input type="text" name="school_name" class="form-control" value="{{ $school->school_name or '' }}">
            <label for="name">学部</label>
            <input type="text" name="school_place" class="form-control" value="{{ $school->school_place or '' }}">
            <label for="name">学科</label>
            <input type="text" name="school_subject" class="form-control" value="{{ $school->school_subject or '' }}">
            <label for="name">ゼミ・研究室</label>
            <input type="text" name="seminor" class="form-control"  value="{{ $school->seminor or '' }}">
            <label for="name">研究内容</label>
            <input type="text" name="seminor_contains" class="form-control" value="{{ $school->seminor_contains or '' }}">
            <input type="submit" value="確定" class="form-control">
        </div>
    </form>
@endsection

@section('add_js')
@endsection
