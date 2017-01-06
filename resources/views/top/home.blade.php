<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{{asset('/css/home.css')}}}" rel="stylesheet">
    <style>
    html, body, .container, .blur, .mainBox {
        width: 100%;
        height: 100%;
        font-size: 12px;
        padding: 0;
        margin: 0;
    }
    .container {
        background: url('{{{asset('/image/haikei.jpg')}}}');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .blur {
        background-color: rgba(0, 0, 0, 0.3);
    }
    .logo {
        text-align: center;
        margin-bottom: 20px;
    }
    .mainBox {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column;
    }
    .loginTitle {
        font-size: 1.5em;
        text-align: center;
        margin: 10px 0 -5px 0 ;
    }
    .loginBox {
        background: white;
        width: 400px;
        padding: 3px 16px;
    }
    .loginForm input, .registerForm input {
        margin: 15px 0;
        border-radius: 0 !important;
    }
    .registerForm input {
        margin-top: 0;
    }
    .loginForm .submit {
        display: flex;
    }
    .loginForm div {
        flex: 1;
    }
    .submit_register {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .submit_login {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    </style>
    <title>Let's Share</title>
</head>
<body>

    <div class="container">

        <div class="blur">
            <div class="mainBox">
                <div class="logo">
                    <img src="{{{asset('/image/logo.png')}}}" alt="">
                </div>
                <div class="loginBox">
                    <h1 class="loginTitle">Sign in</h1>
                    <hr>
                    <form class="loginForm" action="auth/login" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group" style="margin-bottom: 0">
                            <input type="email" name="email" class="form-control" placeholder="email">
                            <input type="password" name="password" class="form-control" placeholder="password">
                            <div class="submit">
                                <div class="submit_register">
                                    <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#registerDialog" style="padding: 0">
                                        新規登録
                                    </button>
                                </div>
                                <div class="submit_login">
                                    <input type="submit" name="login" class="btn btn-info" value="ログイン">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="registerDialog" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document" style="margin-top: 10%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">新規登録</h4>
                    </div>
                    <form class="registerForm" action="auth/register" method="post">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                                <input type="email" name="email" class="form-control" placeholder="email" required>
                                <label for="password">パスワード</label>
                                <input type="password" name="password" class="form-control" placeholder="password" minlength="6" required>
                                <label for="password">パスワード確認</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="password" minlength="6" required>
                            </div>
                            <div class="form-group">
                                <label for="name">性</label>
                                <input type="text" name="family_name" class="form-control" placeholder="family" required>
                                <label for="name">名</label>
                                <input type="text" name="last_name" class="form-control" placeholder="last" required>
                                <label for="gender">男</label>
                                <input type="radio" name="gender" value="0" class="form-control" required>
                                <label for="gender">女</label>
                                <input type="radio" name="gender" value="1" class="form-control" required>
                                <label for="birth">誕生日</label>
                                <input type="date" name="birth" class="form-control" required>
                                <label for="pref_id">在住都道府県</label>
                                <select name="pref_id" class="form-control" required>
                                    <option value="1">北海道</option>
                                    <option value="2">青森県</option>
                                    <option value="3">岩手県</option>
                                    <option value="4">宮城県</option>
                                    <option value="5">秋田県</option>
                                    <option value="6">山形県</option>
                                    <option value="7">福島県</option>
                                    <option value="8">茨城県</option>
                                    <option value="9">栃木県</option>
                                    <option value="10">群馬県</option>
                                    <option value="11">埼玉県</option>
                                    <option value="12">千葉県</option>
                                    <option value="13">東京都</option>
                                    <option value="14">神奈川県</option>
                                    <option value="15">新潟県</option>
                                    <option value="16">富山県</option>
                                    <option value="17">石川県</option>
                                    <option value="18">福井県</option>
                                    <option value="19">山梨県</option>
                                    <option value="20">長野県</option>
                                    <option value="21">岐阜県</option>
                                    <option value="22">静岡県</option>
                                    <option value="23">愛知県</option>
                                    <option value="24">三重県</option>
                                    <option value="25">滋賀県</option>
                                    <option value="26">京都府</option>
                                    <option value="27">大阪府</option>
                                    <option value="28">兵庫県</option>
                                    <option value="29">奈良県</option>
                                    <option value="30">和歌山県</option>
                                    <option value="31">鳥取県</option>
                                    <option value="32">島根県</option>
                                    <option value="33">岡山県</option>
                                    <option value="34">広島県</option>
                                    <option value="35">山口県</option>
                                    <option value="36">徳島県</option>
                                    <option value="37">香川県</option>
                                    <option value="38">愛媛県</option>
                                    <option value="39">高知県</option>
                                    <option value="40">福岡県</option>
                                    <option value="41">佐賀県</option>
                                    <option value="42">長崎県</option>
                                    <option value="43">熊本県</option>
                                    <option value="44">大分県</option>
                                    <option value="45">宮崎県</option>
                                    <option value="46">鹿児島県</option>
                                    <option value="47">沖縄県</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="student">学生</label>
                                <input type="radio" name="role" value="student" class="form-control" required>
                                <label for="student">企業</label>
                                <input type="radio" name="role" value="company" class="form-control" required>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submit" value="新規登録" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
