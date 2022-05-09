@extends('layouts.layout')
@section('main')
<div class="mountainItem v1"></div>
<div class="mountainItem v2"></div>
<section class="main_info">
    <div class="mainContent">
        <div class="homePage">
            <h1>Учебный центр “King’s school”</h1>
            <div class="p">
                <p>Студенты для нас не просто ученики, они часть нашего учебного центра</p>
                <ul>
                    <li>Курсы для детей, подростков и врослых</li>
                    <li>Мы гарантируем результаты</li>
                </ul>
            </div>
            <a href="/authorization"><button class="btn btn_white">Войти</button></a>
            <a href="/sign-up"><button class="btn btn-success mainBtn"><span>Записаться на пробный урок</span></button></a>
        </div>
    </div>
</section>
<script>
    let $navs = $('.mob_nav');
    for(let n=0; n<$navs.length; n++){
        $navs[n].classList.remove('active');
    }
    $navs[0].classList.add('active');
</script>
@endsection
