@extends('layouts.default')

@section('content')
    <div class="tagline">
        <div class="tagline__wrapper">
            <p class="tagline__text">Мы создаем бренды, <br> которыми предприниматели <br> будут гордиться</p>
            <img class="tagline__letter-img" src="public/img/main/one_letter_logo.png" alt="one_letter_logo">
        </div>
    </div>

    <div class="jobs">
        <div class="container">
            <ul class="jobs-list">
                <li class="jobs-list__item">упаковка бренда</li>
                <li class="jobs-list__item">дизайн</li>
                <li class="jobs-list__item">исследования</li>
                <li class="jobs-list__item">таргет</li>
                <li class="jobs-list__item">соцсети</li>
                <li class="jobs-list__item">исследования</li>
                <li class="jobs-list__item">сайты</li>
            </ul>
        </div>
    </div>

    <div class="projects">
        <div class="section-title">
            <div class="section-title__line">
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
                <p class="section-title__line-text">ПРОЕКТЫ АГЕНСТВА</p>
            </div>
        </div>
        <div class="projects-list">
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/pika_coffee.png" alt="pika_coffee">
                <p class="projects-list__item-text">Айдентика и дизайн <br> этикеток для Pika <br> Coffee</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/beirut.png" alt="beirut">
                <p class="projects-list__item-text">Айдентика для <br> закусочной Бейрут</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/tiger_stickers.png" alt="tiger_stickers">
                <p class="projects-list__item-text">Стикерпак «Тигр» <br> для газеты <br> «Известия»</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/merch.png" alt="merch">
                <p class="projects-list__item-text">Иллюстрации и <br> мерч</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/health.png" alt="health">
                <p class="projects-list__item-text">Постеры с услугами <br> для института <br> здоровья</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/dragon_stickers.png" alt="dragon_stickers">
                <p class="projects-list__item-text">Стикерпак «Дракон» <br> для газеты <br> «Известия»</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/bom_blue.png" alt="bom_blue">
                <p class="projects-list__item-text">Логотип и наклейки <br> на упаковку для <br> Bom Blue</p>
            </div>
            <div class="projects-list__item">
                <img class="projects-list__item-img" src="public/img/main/algorithm_club.png" alt="algorithm_club">
                <p class="projects-list__item-text">Брендинг и соцсети <br> для Alorithm <br> Club</p>
            </div>
        </div>
    </div>

    <div class="services">
        <p class="services__text">Каждому проекту мы создаем сильную брендинговую платформу,
            чтобы креативные идеи работали на ваш бизнес.</p>
        <p class="services__text">Мы знаем, как для предпринимателя важно его дело, поэтому выстраиваем нашу
            работу понятно и комфортно для всех участников.</p>
        <button class="services__btn">НАШИ УСЛУГИ</button>
    </div>

    <x-team></x-team>
@endsection
