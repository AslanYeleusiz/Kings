@extends('layouts.layout')
@section('main')
<div class="mountainItem v1"></div>
<div class="mountainItem v2"></div>
<section class="openwait">
    <div class="openSans alignCenter">
        <p>Страница находиться в разработке</p>
        <span>ОТКРЫТИЕ</span>
        <p>совсем скоро</p>
    </div>
</section>
<script>
    let $navs = $('.mob_nav');
    for(let n=0; n<$navs.length; n++){
        $navs[n].classList.remove('active');
    }
    $navs[1].classList.add('active');
</script>
@endsection
