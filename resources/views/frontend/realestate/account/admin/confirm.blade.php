@extends('frontend.'.$current_theme.'.slave')

@section('content')

    <style>
        body {
            background: #d2d6de;
            font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif, Open Sans;
            font-size: 14px;
            line-height: 1.42857;
            height: 350px;
            padding: 0;
            margin: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;

        }

        .form-control {
            background-color: #ffffff;
            background-image: none;
            border: 1px solid #999999;
            border-radius: 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            color: #333333;
            display: block;
            font-size: 14px;
            height: 34px;
            line-height: 1.42857;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
        }

        .login-box, .register-box {
            width: 360px;
            margin: 7% auto;
        }

        .login-page, .register-page {
            background: #d2d6de;
        }

        .login-logo, .register-logo {
            font-size: 35px;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .login-box-msg, .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
        }

        .login-box-body, .register-box-body {
            background: #fff;
            padding: 20px;
            border-top: 0;
            color: #666;
        }

        .has-feedback {
            position: relative;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .has-feedback .form-control {
            padding-right: 42.5px;
        }

        .login-box-body .form-control-feedback, .register-box-body .form-control-feedback {
            color: #777;
        }

        .form-control-feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }

        .checkbox, .radio {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .icheck > label {
            padding-left: 0;
        }

        .checkbox label, .radio label {
            min-height: 20px;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: 400;
            cursor: pointer;
        }

    </style>


    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/')}}"><img src="{{ url($settings['logo']) }}" /></a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            <h4 class="login-box-msg">Xác nhận 2Factor</h4>

            <form method="POST" action="{{ route('control.confirm.admin') }}" aria-label="{{ __('Đăng nhập') }}">
                @csrf

                {!! $twofactor !!}
                <input type="hidden" name="remember" value="{{$remember}}">
                <input type="hidden" name="stoken" value="{{$stoken}}">
                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Xác nhận
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
