@extends('layouts.default')

@section('content')
    <div class="about">
        <div class="section-title">
            <div class="section-title__line">
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
                <p class="section-title__line-text">О НАС</p>
            </div>
        </div>
        <img class="about__pic" src="public/img/about/about-pic.png" alt="about-pic">
        <div class="about__wrap">
            <h2 class="about__title">БРЕНДИНГОВОЕ АГЕНСТВО МОЖНО</h2>
            <p class="about__text">Многие ребята из нашей команды учились в одном универе. Маша на графического
                дизайнера, Вика и Нина на
                маркетологов. На тот момент, работая над проектами вуза, мы пересекались и реализовывали задачи вместе.
                Окончив вуз, мы работали по своим специальностям и набирались опыта. В 2021 году Маша собрала сильную
                дизайн команду, а сейчас мы создали брендинговое агентство, объединив наши сферы и скиллы. Чтобы делать
                бренды, которыми предприниматели <br> будут гордиться.</p>
        </div>
    </div>

    <x-team></x-team>

    <div class="staff">
        <img class="staff__img" src="public/img/about/photo-1.png" alt="photo-1">
        <div>
            <h2 class="staff__name">МАША АБАДИЕР</h2>
            <p class="staff__text">Мы создаем бренды, которыми предприниматели будут гордиться которыми предприниматели будут
                гордитьсякоторыми предприниматели будут гордитьсякоторыми предприниматели будут гордиться.</p>
        </div>
        <img class="staff__group" src="public/img/about/group-photo.png" alt="group-photo">
        <div class="staff__wrap">
            <h2 class="staff__name">НИНА САМОТОИНА</h2>
            <p class="staff__text">Мы создаем бренды, которыми предприниматели будут гордиться которыми предприниматели будут
                гордитьсякоторыми предприниматели будут гордитьсякоторыми предприниматели будут гордиться.</p>
        </div>
        <img class="staff__img" src="public/img/about/photo-2.png" alt="photo-2">
    </div>

    <div class="join">
        <h2 class="join__head">МОЖНО ПРИСОЕДИНИТЬСЯ К КОМАНДЕ</h2>
        <p class="join__text">Присылай свое резюме на почту:</p>
        <div class="join__email">
            <a class="join__email-item" href="mailto:mojhno.agency@gmail.com">mojhno.agency@gmail.com</a>
        </div>
    </div>

    <x-contact></x-contact>
@endsection

