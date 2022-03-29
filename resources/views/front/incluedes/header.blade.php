<!-- Header Starts Here -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light p-lg-0 border-bottom">
        <div class="container custom-container">
            <!-- Logo Starts Here -->
            <a class="navbar-brand" href="{{ route('home-page') }}">
                <img src="{{ asset('/') }}assets/images/logomain.png" alt="Logo" class="img-fluid">
            </a>
            <!-- Logo Ends Here -->
            <!-- Mobile Menu Starts Here -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Mobile Menu Ends Here -->
            <!-- Main Menu Starts Here -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buy-page') }}">Купить</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rent-page') }}">Аренда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('commercial-rent-page') }}">Коммерческий</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('new-projects-page') }}">проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('find-company-and-agents-page') }}">Найти агента</a>
                    </li>
                    <li class="nav-item hover-dropdown" id="propertyPriceMenu">
                        <a class="nav-link" href="javascript:void(0)">
                            Цены на недвижимость
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </span>
                        </a>
                        <ul class="hover-dropdown-body px-0 hover-dropdown-content">
{{--                            <li>--}}
{{--                                <a href="{{ route('house-prices-page') }}">House prices</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="{{ route('rent-vs-buy-calculator') }}">Калькулятор аренды или покупки</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="">Mo'asher: Dubai Price Index</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
                    <li class="nav-item hover-dropdown">
                        <a class="nav-link" href="javascript:void(0)">
                            Проводить
                            <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </span>
                        </a>
                        <div class="hover-dropdown-body">
                            <ul class="px-0 hover-dropdown-content">
{{--                                <li>--}}
{{--                                    <a href="{{ route('building-reviews-page') }}">Обзоры зданий</a>--}}
{{--                                </li>--}}
                                <li>
                                    <a href="{{ route('community-guide-page') }}">Путеводители сообщества</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-page') }}">Блог о недвижимости</a>
                                </li>
                                <li>
                                    <a href="{{ route('renter-blog-page') }}">Руководство арендатора</a>
                                </li>
                                <li>
                                    <a href="{{ route('buyer-blog-page') }}">Руководство покупателя</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="">Mortgages</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="header-features">
                    <ul class="list-inline">
                        <li class="list-inline-item header-features-item hover-dropdown">
                            <a href="javascript:void(0)" class="header-features-item-flag">
                                <span class="countray-flag">
                                    <img src="{{ asset('/') }}assets/images/icon/flag/kazakhstan.jpg" alt="Kazakhstan">
                                  </span>
                                <span class="countray-name">Казахстан</span>
                                <span class="down-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </span>
                            </a>
                            <div class="hover-dropdown-body hover-dropdown-flag">
                                <ul class="px-0 hover-dropdown-content">
                                    <li>
                                        <a href="">
                                            <span class="d-flex align-items-center">
                                            <img src="{{ asset('/') }}assets/images/icon/flag/russia.png" alt="Flag">
                                            <span>Россия</span>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-inline-item header-features-item hover-dropdown">
                            <a href="javascript:void(0)" class="header-features-item-btn">
                                Авторизоваться
                            </a>
                            <div class="hover-dropdown-body hover-dropdown-login">
                                <ul class="px-0 hover-dropdown-content">
                                    <li>
                                        <p class="text-center" style="font-size: 12px;">
                                            Войдите или зарегистрируйтесь, чтобы синхронизировать ваши любимые объекты на разных устройствах
                                        </p>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="red-btn">Войти</a>
                                    </li>
                                    <li>
                                        <a href="" class="hover-dropdown-content-link" id="registrationOff">Создать новый аккаунт</a>
                                    </li>
{{--                                    unnecessary sections -- need to think about this section later--}}

{{--                                    <li>--}}
{{--                                        <a href="" class="hover-dropdown-content-box_link">--}}
{{--                                            <span>Saved properties (0)</span>--}}
{{--                                            <span>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
{{--                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                        </svg>--}}
{{--                      </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="" class="hover-dropdown-content-box_link">--}}
{{--                                            <span>Contacted properties (0)</span>--}}
{{--                                            <span>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
{{--                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                        </svg>--}}
{{--                      </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="" class="hover-dropdown-content-box_link">--}}
{{--                                            <span>Saved searches (0)</span>--}}
{{--                                            <span>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
{{--                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                        </svg>--}}
{{--                      </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}

                                    {{--                                    unnecessary sections -- need to think about this section later--}}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main Menu Ends Here -->
        </div>
    </nav>
</header>
<!-- Header Ends Here -->
