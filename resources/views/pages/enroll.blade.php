@extends('layouts.layout')
@section('main')
<div class="mountainItem v1"></div>
<div class="mountainItem v2"></div>
<section class="signUp">
    <div class="contactUs">
        <h2>Привет</h2>
        <p>*Чтобы преподаватели с вами связались<br> нам нужны ваши данные</p>
        <form action="" class="form alignCenter">
            <input class="cstInp" type="" name="name" id="name" placeholder="ФИО">
            <input class="cstInp" type="" name="telNum" id="telNum" placeholder="Номер телефона">
            <button class="btn btn-green">Отправить</button>
        </form>
    </div>

</section>

@endsection
