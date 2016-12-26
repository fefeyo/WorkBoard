@extends('main.master')

@section('add_css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <div class="flex">
        <div class="flex1" style="padding: 0 20px">
            <div class="flex">
                <div class="flex flex1" >
                    <h2 style="display: flex; align-items: center">基本情報</h2>
                </div>
                <div class="flex flex1" style="justify-content: flex-end;">
                    <button id="edit" type="button" name="edit" class="btn btn-default">編集</button>
                </div>
            </div>
            <div>
                @if(isset($profile))
                    <table class="table" style="margin-top: 20px;">
                        <tr>
                            <td>名前</td>
                            <td>{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                @if($profile == '0')
                                    男
                                @else
                                    女
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>誕生日</td>
                            <td>{{ $profile->birth }}</td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <td>在住都道府県</td>
                            <td>{{ $profile->pref }}</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>

        <div class="flex flex1" style="padding: 0 20px">
            <h2>今までに受けた案件</h2>
        </div>
    </div>
@endsection

@section('add_js')
    <script type="text/javascript">
    $(function() {
        $('#edit').on('click', function() {
            document.location.href = "/edit";
        });
    });
    </script>
@endsection
