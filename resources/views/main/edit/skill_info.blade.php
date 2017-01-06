@extends('main.master')

@section('add_css')
<style>
input, textarea, select {
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
    <h1 style="margin: 20px 0; font-size: 2.0em">経験・スキル情報編集</h1>
    <form class="edit_form" action="/skill_edit" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="work_exp">受注開発やアルバイトでの実務経験</label>
            <textarea name="work_exp" rows="8" cols="80" class="form-control">{{ $experience->work_exp or '' }}</textarea>
            <label for="school_exp">学校での制作経験</label>
            <textarea name="school_exp" rows="8" cols="80" class="form-control">{{ $experience->school_exp or '' }}</textarea>
            <label for="hackathon_exp">ハッカソンでの制作経験</label>
            <textarea name="hackathon_exp" rows="8" cols="80" class="form-control">{{ $experience->hackathon_exp or '' }}</textarea>
            <label for="intern_exp">インターンでの制作経験</label>
            <textarea name="intern_exp" rows="8" cols="80" class="form-control">{{ $experience->intern_exp or '' }}</textarea>
            <label for="pr_exp">自己PR</label>
            <textarea name="pr_exp" rows="8" cols="80" class="form-control">{{ $experience->pr_exp or '' }}</textarea>
        </div>
        <div class="form-group">
            <label>プログラミングスキルレベル</label>
            <p>
                1 - 全く知らない<br />
                2 - 授業などで使ったことがある<br />
                3 - プロダクトを作ったことがある<br />
                4 - 人に教えることが出来る<br />
                5 - 実務で難なく使うことが出来る
            </p>
            @php
                $skills = Config::get('skill');
            @endphp
            ここも調整中
            @foreach ($skills as $skill)
                <label for="tech[]">{{ $skill }}</label>
                <select class="form-control" name="tech[]">
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                </select>
            @endforeach
            <input type="submit" value="確定" class="form-control">
        </div>
    </form>
@endsection

@section('add_js')
@endsection
