@extends('main')
@section('content')
{{--<form method="post" action="{{route('post_login')}}">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label>username</label>--}}
{{--        <input type="text" name="name" class="form-control">--}}
{{--        <label>password</label>--}}
{{--        <input type="password" name="password" class="form-control">--}}
{{--        <button type="submit">Login</button>--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label>Register</label>--}}
{{--        <a href="{{ route('register_view') }}" class="text-sm text-gray-700 underline">Register</a>--}}

{{--    </div>--}}
{{--</form>--}}
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

</style>
<form class="form-signin" method="post" action="{{route('post_login')}}">
    @csrf
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
    <label for="inputEmail" class="sr-only">username</label>
    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="username" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
        <label>Register</label>
        <a href="{{ route('register_view') }}" class="text-sm text-gray-700 underline">Register</a>

    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">login</button>
</form>

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->


