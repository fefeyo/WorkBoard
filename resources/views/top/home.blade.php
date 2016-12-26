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
                            <label for="name">ユーザー名</label>
                            <input type="text" name="name" class="form-control" placeholder="username">
                            <label for="email">メールアドレス</label>
                            <input type="email" name="email" class="form-control" placeholder="email">
                            <label for="password">パスワード</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                            <label for="password">パスワード確認</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="password">
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
    <script type="text/javascript">
    $(function() {
        console.log('jquery3');
    });
    </script>
</body>
</html>
