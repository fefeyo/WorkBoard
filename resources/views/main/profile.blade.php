@extends('main.master')

@section('add_css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <div class="wrapper">
        <div class="half_contains" style="padding: 0 20px">
            <div class="profile_header">
                <div class="split_title" >
                    <h2 style="display: flex; align-items: center">基本情報</h2>
                </div>
            </div>
            <div class="profile_contains">
                <table class="table" style="margin-top: 20px;">
                    <img src="{{ asset('image/noimg.gif') }}" alt="写真" width="130" height="130">
                    <tr>
                        <td>ユーザー種別</td>
                        <td>
                            @if ($user->role === 'student')
                                学生
                            @else
                                企業
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>氏名</td>
                        <td>{{ $user->family_name or '' }} {{ $user->last_name or '' }}</td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>
                            @if($user->gender == 0)
                                男
                            @else
                                女
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>誕生日</td>
                        <td>{{ $user->birth or '' }}</td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{ $user->email or '' }}</td>
                    </tr>
                    <tr>
                        <td>在住都道府県</td>
                        <td>{{ Config::get('prefecture.'.($user->pref_id - 1)) }}</td>
                    </tr>
                </table>
            </div>
            @if ($user->role == 'student')
                <div class="profile_header">
                    <div class="split_title" >
                        <h2 style="display: flex; align-items: center">学校情報</h2>
                    </div>
                    <div class="split_title" style="justify-content: flex-end;">
                        <button id="school_edit" type="button" class="btn btn-default">編集</button>
                    </div>
                </div>
                <div class="profile_contains">
                    <table class="table">
                        <tr>
                            <td>学校種別</td>
                            @if (isset($school->school_type))
                                <td>{{ Config::get('school_type'.$school->school_type) }}</td>
                            @endif
                        </tr>
                        <tr>
                            <td>大学・専門学校名</td>
                            <td>{{ $school->school_name or '' }}</td>
                        </tr>
                        <tr>
                            <td>学部</td>
                            <td>{{ $school->school_place or '' }}</td>
                        </tr>
                        <tr>
                            <td>学科</td>
                            <td>{{ $school->school_subject or '' }}</td>
                        </tr>
                        <tr>
                            <td>ゼミ・研究室</td>
                            <td>{{ $school->seminor or '' }}</td>
                        </tr>
                        <tr>
                            <td>研究テーマ</td>
                            <td>{{ $school->seminor_contains or '' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="profile_header">
                    <div class="split_title" >
                        <h2 style="display: flex; align-items: center">経験・スキル情報</h2>
                    </div>
                    <div class="split_title" style="justify-content: flex-end;">
                        <button id="skill_edit" type="button" class="btn btn-default">編集</button>
                    </div>
                </div>
                <div class="profile_contains">
                    <h3 class="skill-title">受注開発やアルバイトでの実務経験</h3>
                    <p class="skill-contains">{{ $experience->work_exp or '' }}</p>
                    <h3 class="skill-title">学校での制作経験</h3>
                    <p class="skill-contains">{{ $experience->school_exp or '' }}</p>
                    <h3 class="skill-title">ハッカソンでの制作経験</h3>
                    <p class="skill-contains">{{ $experience->hackathon_exp or '' }}</p>
                    <h3 class="skill-title">インターンシップでの制作経験</h3>
                    <p class="skill-contains">{{ $experience->intern_exp or '' }}</p>
                    <h3 class="skill-title">自己PR</h3>
                    <p class="skill-contains">{{ $experience->pr_exp or '' }}</p>
                    <h3 class="skill-title">プログラミングスキル</h3>
                    <p class="skill-contains">調整中</p>
                </div>
            @else
                <div class="profile_header">
                    <div class="split_title" >
                        <h2 style="display: flex; align-items: center">企業情報</h2>
                    </div>
                    <div class="split_title" style="justify-content: flex-end;">
                        <button id="company_edit" type="button" class="btn btn-default">編集</button>
                    </div>
                </div>
                <div class="profile_header">
                    <div class="split_title" >
                        <h2 style="display: flex; align-items: center">貼り出し中の依頼</h2>
                    </div>
                    <div class="split_title" style="justify-content: flex-end;">
                        <button id="post_edit" type="button" class="btn btn-default">編集</button>
                    </div>
                </div>
            @endif
        </div>

        <div class="half_contains" style="padding: 0 20px">
            <h2>今までに受けた案件</h2>
        </div>
    </div>
@endsection

@section('add_js')
    <script type="text/javascript">
    $(function() {
        $('#school_edit').on('click', function() {
            document.location.href = "/school_edit";
        });
        $('#skill_edit').on('click', function() {
            document.location.href = "/skill_edit";
        });
    });
    </script>
@endsection
