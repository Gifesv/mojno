<header class="header">
    <div class="container">
    <div class="header__inner">
        <div class="header__logo">
            <img class="header__img" src="public/img/header/logo.svg" alt="logo" />
            <div class="header__agency">BRANDING  AGENCY</div>
        </div>
        <div class="header__nav-menu">
            <span class="header__nav-icon"></span>
        </div>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a class="header__nav-link {{ Request::is('about') ? 'header__nav-link_underline' : '' }}" href="/about">о нас</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link {{ Request::is('portfolio', 'project') ? 'header__nav-link_underline' : '' }}" href="/portfolio">портфолио</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link {{ Request::is('services') ? 'header__nav-link_underline' : '' }}" href="/services">услуги</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link {{ Request::is('blog') ? 'header__nav-link_underline' : '' }}" href="/blog">блог</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link {{ Request::is('audit') ? 'header__nav-link_underline' : '' }}" href="/audit">аудит</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link header__contact {{ Request::is('contact') ? 'header__nav-link_underline' : '' }}" href="/contact">связаться</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</header>
