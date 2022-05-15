<!-- Header Starts Here -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light p-lg-0 border-bottom">
        <div class="container custom-container">
            <!-- Logo Starts Here -->
            <a class="navbar-brand" href="{{ route('home-page') }}">
                <img src="{{ isset($siteSetting)? asset($siteSetting->site_logo) : asset('./assets/images/logo_main.png') }}" alt="Logo" class="img-fluid">
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
                        <a class="nav-link" href="{{ route('buy-page') }}">{{ Session::has('kaz') ? 'Сатып' : '' }}{{ Session::has('rus') ? 'Купить' : '' }}{{ Session::has('eng') ? 'Buy' : '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rent-page') }}">{{ Session::has('kaz') ? 'Жалға' : '' }}{{ Session::has('rus') ? 'Аренда' : '' }}{{ Session::has('eng') ? 'Rent' : '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('commercial-rent-page') }}">{{ Session::has('kaz') ? 'Коммерциялық' : '' }}{{ Session::has('rus') ? 'Коммерческий' : '' }}{{ Session::has('eng') ? 'Commercial' : '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('new-projects-page') }}">{{ Session::has('kaz') ? 'жобалар' : '' }}{{ Session::has('rus') ? 'проекты' : '' }}{{ Session::has('eng') ? 'Projects' : '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('find-company-and-agents-page') }}">{{ Session::has('kaz') ? 'Агентті табыңыз' : '' }}{{ Session::has('rus') ? 'Найти агента' : '' }}{{ Session::has('eng') ? 'Find Agent' : '' }}</a>
                    </li>
                    <li class="nav-item hover-dropdown" id="propertyPriceMenu">
                        <a class="nav-link" href="javascript:void(0)">
                            {{ Session::has('kaz') ? 'Жылжымайтын мүлік бағасы' : '' }}{{ Session::has('rus') ? 'Цены на недвижимость' : '' }}{{ Session::has('eng') ? 'Property Prices' : '' }}
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
                                <a href="{{ route('rent-vs-buy-calculator') }}">{{ Session::has('kaz') ? 'Калькуляторды жалға алу және сатып алу' : '' }}{{ Session::has('rus') ? 'Калькулятор аренды или покупки' : '' }}{{ Session::has('eng') ? 'Rent vs Buy Calculator' : '' }}</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="">Mo'asher: Dubai Price Index</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
                    <li class="nav-item hover-dropdown" id="blogMenu">
                        <a class="nav-link" href="javascript:void(0)">
                            {{ Session::has('kaz') ? 'Жүргізу' : '' }}{{ Session::has('rus') ? 'Проводить' : '' }}{{ Session::has('eng') ? 'Explore' : '' }}
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
                                    <a href="{{ route('community-guide-page') }}">{{ Session::has('kaz') ? 'Қауымдастық гидтері' : '' }}{{ Session::has('rus') ? 'Путеводители сообщества' : '' }}{{ Session::has('eng') ? 'Community Guides' : '' }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-page') }}">{{ Session::has('kaz') ? 'мүлік блогы' : '' }}{{ Session::has('rus') ? 'Блог о недвижимости' : '' }}{{ Session::has('eng') ? 'Property Blog' : '' }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('renter-blog-page') }}">{{ Session::has('kaz') ? 'Жалға алушы нұсқаулығы' : '' }}{{ Session::has('rus') ? 'Руководство арендатора' : '' }}{{ Session::has('eng') ? 'Renter guide' : '' }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('buyer-blog-page') }}">{{ Session::has('kaz') ? 'Сатып алушыға арналған нұсқаулық' : '' }}{{ Session::has('rus') ? 'Руководство покупателя' : '' }}{{ Session::has('eng') ? 'Buyer Guide' : '' }}</a>
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
                                    @if(Session::has('kaz'))
                                        <img src="{{ asset('/') }}assets/images/icon/flag/kazakhstan.jpg" alt="Kazakhstan">
                                    @elseif(Session::has('eng'))
                                        <img src="{{ asset('/') }}assets/images/icon/flag/uk.png" alt="English">
                                    @else
                                        <img src="{{ asset('/') }}assets/images/icon/flag/russia.png" alt="russia">
                                    @endif
                                  </span>
                                <span class="countray-name">
                                    @if(Session::has('kaz'))
                                        Қазақстан
                                    @elseif(Session::has('eng'))
                                        English
                                    @else
                                        Россия
                                    @endif
                                </span>

                                <span class="down-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </span>
                            </a>
                            <div class="hover-dropdown-body hover-dropdown-flag">
                                <ul class="px-0 hover-dropdown-content">
                                    @if(!Session::has('kaz'))
                                        <li>
                                            <a href="{{ route('language-change',['name' => 'kaz']) }}">
                                              <span class="d-flex align-items-center">
                                                <img src="{{ asset('/') }}assets/images/icon/flag/kazakhstan.jpg" alt="kazakhstan">
                                                <span>қазақстан</span>
                                              </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if(!Session::has('rus'))
                                        <li>
                                            <a href="{{ route('language-change',['name' => 'rus']) }}">
                                              <span class="d-flex align-items-center">
                                                <img src="{{ asset('/') }}assets/images/icon/flag/russia.png" alt="russia">
                                                <span>Россия</span>
                                              </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if(!Session::has('eng'))
                                        <li>
                                            <a href="{{ route('language-change',['name' => 'eng']) }}">
                                              <span class="d-flex align-items-center">
                                                <img src="{{ asset('/') }}assets/images/icon/flag/uk.png" alt="English">
                                                <span>English</span>
                                              </span>
                                            </a>
                                        </li>
                                    @endif
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
                                            {{ Session::has('kaz') ? 'Таңдаулы элементтерді құрылғылар арасында синхрондау үшін жүйеге кіріңіз немесе тіркеліңіз' : 'Войдите или зарегистрируйтесь, чтобы синхронизировать ваши любимые объекты на разных устройствах' }}
                                        </p>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="red-btn">{{ Session::has('kaz') ? 'кіру' : 'Войти' }}</a>
                                    </li>
                                    <li>
                                        <a href="" class="hover-dropdown-content-link" id="registrationOff">{{ Session::has('kaz') ? 'Создать новый аккаунт' : 'Создать новый аккаунт' }}</a>
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


