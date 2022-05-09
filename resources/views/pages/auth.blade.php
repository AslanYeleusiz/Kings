@extends('layouts.layout')
@section('main')
<div class="mountainItem v1"></div>
<div class="mountainItem v2"></div>
<section class="auth">
    <div class="loginPage alignCenter">
        <h2>Вход в аккаунт</h2>
        <p>*Вы можете войти только , если являетесь <br>студентом или преподователем учебного центра <br>“King’s school”</p>
        <form action="" class="form alignCenter">
            <input class="form-control" type="login" name="name" id="name" placeholder="login">
            <input class="form-control" type="password" name="telNum" id="telNum" placeholder="password">
            <button type="submit" class="btn btn-green">Войти</button>
        </form>
    </div>
</section>
<script>
    let $navs = $('.mob_nav');
    for(let n=0; n<$navs.length; n++){
        $navs[n].classList.remove('active');
    }
    $navs[3].classList.add('active');
</script>
@endsection
