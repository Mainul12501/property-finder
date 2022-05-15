@extends('front.master')

@section('title')

@endsection

@section('body')
    <!-- Breadcrumb Starts Here -->
    <section class="breadcrumb-area calc-breadcrumb-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <div class="breadcrumb-area-content-start">
                            <a href="{{ url('/') }}">{{ Session::has('kaz') ? 'Үйлер' : '' }}{{ Session::has('rus') ? 'Дома' : '' }}{{ Session::has('eng') ? 'Houses' : '' }}</a>
                        </div>
                        <div class="breadcrumb-area-content-icon">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
              </span>
                        </div>
                        <div class="breadcrumb-area-content-end">
                            <p>{{ Session::has('kaz') ? 'Жалдау және сатып алу калькуляторы' : '' }}{{ Session::has('rus') ? 'Калькулятор аренды и покупки' : '' }}{{ Session::has('eng') ? 'Rent and Buy Calculator' : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Ends Here -->

    <!-- Page Intro Starts Here -->
    <section class="page-intro calc-page-intro">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-intro-content">
                        <h2>{{ Session::has('kaz') ? 'Жалдау және сатып алу калькуляторы' : '' }}{{ Session::has('rus') ? 'Калькулятор аренды и покупки' : '' }}{{ Session::has('eng') ? 'Rent and Purchase Calculator' : '' }}</h2>
                        <p>
                            {{ Session::has('kaz') ? 'Жалға алу немесе сатып алу? Осы маңызды сұраққа жауап беруге көмектесу үшін біздің калькулятор жылжымайтын мүлікті сатып алуға байланысты ең маңызды шығындарды алады және оларды жалдау ақысының баламалы шығындарымен салыстырады. Байқап көріңіз!' : '' }}{{ Session::has('rus') ? 'Арендовать или купить? Чтобы помочь вам ответить на этот важный вопрос, наш калькулятор берет самые важные расходы, связанные с покупкой недвижимости, и сравнивает их с эквивалентными затратами на аренду. Попробуйте!' : '' }}{{ Session::has('eng') ? 'Rent or buy? To help you answer this important question, our calculator takes the most important costs associated with buying a property and compares them to equivalent rental costs. Try it!' : '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Intro Ends Here -->

    <!-- Calc Area Starts Here -->
    <section class="calc-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="calc-area-start">
                        <div class="calc-area-start-single">
{{--                            <p>What is your yearly rent?</p>--}}
                            <p>{{ Session::has('kaz') ? 'Сіздің жылдық жалдау ақысы қандай?' : '' }}{{ Session::has('rus') ? 'Какова ваша годовая арендная плата?' : '' }}{{ Session::has('eng') ? 'What is your annual rent?' : '' }}</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="96,000" id="yearlyRentInput" onkeyup="buyRentCalculator()">
                                <div class="calc-area-form-text">
                                    <span>{{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                </div>
                            </form>
                            <h6>8,000 {{ Session::has('kaz') ? 'Tenge' : 'AED' }} {{ Session::has('kaz') ? 'ай сайын' : '' }}{{ Session::has('rus') ? 'ежемесячно' : '' }}{{ Session::has('eng') ? 'monthly' : '' }}</h6>
                        </div>
                        <div class="calc-area-start-single">
{{--                            <p>How much does the property cost?</p>--}}
                            <p>{{ Session::has('kaz') ? 'Мүліктің құны қанша?' : '' }}{{ Session::has('rus') ? 'Сколько стоит недвижимость?' : '' }}{{ Session::has('eng') ? 'How much does the property cost?' : '' }}</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="1,100,000" id="propertyPrice" onkeyup="buyRentCalculator()" />
                                <div class="calc-area-form-text">
                                    <span>{{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                </div>
                            </form>
                        </div>
                        <div class="calc-area-start-single">
{{--                            <p>What is your down payment amount?</p>--}}
                            <p>{{ Session::has('kaz') ? 'Сіздің бастапқы жарнаңыз қанша?' : '' }}{{ Session::has('rus') ? 'Какова сумма вашего первоначального взноса?' : '' }}{{ Session::has('eng') ? 'What is your down payment amount?' : '' }}</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="220,000" id="downpayment" onkeyup="buyRentCalculator()">
                                <div class="calc-area-form-text">
                                    <span>{{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                </div>
                            </form>
                            <span class="text-danger downPaymentErrorText" style="font-size: 11px;"></span>
                        </div>
                        <div class="calc-area-start-single">
{{--                            <p>How long are you planning to stay in the property?</p>--}}
                            <p>{{ Session::has('kaz') ? 'Меншікте қанша уақыт тұруды жоспарлайсыз?' : '' }}{{ Session::has('rus') ? 'Как долго вы планируете оставаться в собственности?' : '' }}{{ Session::has('eng') ? 'How long are you planning to stay in the property?' : '' }}</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="5" id="duration" onkeyup="buyRentCalculator()" />
                                <div class="calc-area-form-text">
{{--                                    <span>years</span>--}}
                                    <span>{{ Session::has('kaz') ? 'жылдар' : '' }}{{ Session::has('rus') ? 'годы' : '' }}{{ Session::has('eng') ? 'years' : '' }}</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="calc-area-end">
                        <div class="calc-area-end-top">
                            <h4><span id="chartTitleFirst">Buying</span> is <span id="chartTitlePercent">33</span>% cheaper than <span id="chartTitleSecond">renting</span></h4>
                            <div class="row">
                                <div class="col-md-12">
{{--                                    <div id="barChart"></div>--}}

                                    <div style="width: 80%" id="chartParentDiv">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="calc-navs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="calc-navs-btn nav-link" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                                            type="button" role="tab" aria-controls="one" aria-selected="true"
                                            style="border-right:none!important;">{{ Session::has('kaz') ? 'Жалдау құнының жіктелуі' : '' }}{{ Session::has('rus') ? 'Разбивка стоимости аренды' : '' }}{{ Session::has('eng') ? 'Rent cost breakdown' : '' }}{{--Rent cost breakdown--}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link calc-navs-btn active" id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                                            type="button" role="tab" aria-controls="two" aria-selected="false">{{ Session::has('kaz') ? 'Сатып алу құнының жіктелуі' : '' }}{{ Session::has('rus') ? 'Разбивка стоимости покупки' : '' }}{{ Session::has('eng') ? 'Buy cost breakdown' : '' }}{{--Buy cost breakdown--}}</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <div class="calc-navs-content">
                                        <div class="calc-navs-content-single">
{{--                                            <span class="calc-navs-text">Monthly rent</span>--}}
                                            <span class="calc-navs-text">{{ Session::has('kaz') ? 'Ай сайынғы төлем' : '' }}{{ Session::has('rus') ? 'Месячная оплата' : '' }}{{ Session::has('eng') ? 'Monthly rent' : '' }}</span>
                                            <span class="calc-navs-digit" id="rentTabMonthlyrent">8,000 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                          <span class="calc-navs-text">{{ Session::has('kaz') ? 'Агенттік комиссия' : '' }}{{ Session::has('rus') ? 'Комиссия агента' : '' }}{{ Session::has('eng') ? 'Agent commission' : '' }}{{--Agent commission--}}
{{--                                            <small data-bs-toggle="tooltip" title="Purchase price minus down payment">--}}
{{--                                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                   class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                              <path--}}
{{--                                                  d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                            </svg>--}}
{{--                                            </small>--}}
{{--                                            <div class="tooltip bs-tooltip-top" role="tooltip">--}}
{{--                                              <div class="tooltip-arrow"></div>--}}
{{--                                              <div class="tooltip-inner">--}}
{{--                                                Purchase price minus down payment--}}
{{--                                              </div>--}}
{{--                                            </div>--}}
                                          </span>
                                            <span class="calc-navs-digit" id="rentTabAgentComission">5,040 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">{{--Ejari fee--}}{{ Session::has('kaz') ? 'Эджаридің ақысы' : '' }}{{ Session::has('rus') ? 'Плата Эджари' : '' }}{{ Session::has('eng') ? 'Ejari fee' : '' }}</span>

                                            <span class="calc-navs-digit">195 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single calc-navs-content-single-footer border-top-0">
                                            <span class="calc-navs-text">{{--Total rental cost over--}}{{ Session::has('kaz') ? 'Жалға алудың жалпы құнынан асып кетті' : '' }}{{ Session::has('rus') ? 'Общая стоимость аренды более' : '' }}{{ Session::has('eng') ? 'Total rental cost over' : '' }} <span class="durationInYears">5</span> <!--years-->{{ Session::has('kaz') ? 'жылдар' : '' }}{{ Session::has('rus') ? 'годы' : '' }}</span>
                                            <span class="calc-navs-digit" id="rentTabTotalRentCost">486,015 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                    </div>
                                    <div class="calc-navs-bottom">
                                        <div>
                                            <h4 class="mb-0">{{--Looking to rent?--}}{{ Session::has('kaz') ? 'Жалға алғыңыз келе ме?' : '' }}{{ Session::has('rus') ? 'Хотите арендовать?' : '' }}{{ Session::has('eng') ? 'Looking to rent?' : '' }}</h4>
                                            <p class="mb-0 mt-2">{{--Choose from thousands of properties available for rent in Dubai--}}{{ Session::has('kaz') ? 'Қазақстанда жалға алуға болатын мыңдаған жылжымайтын мүлікті таңдаңыз' : '' }}{{ Session::has('rus') ? 'Выбирайте из тысяч объектов недвижимости, доступных для аренды в Казахстане' : '' }}{{ Session::has('eng') ? 'Choose from thousands of properties available for rent in Kazak' : '' }}</p>
                                        </div>
                                        <div>
                                            <div>
                                                <a href="{{ route('rent-page') }}" class="red-btn-lg d-inline-block">{{--Find properties for rent--}}{{ Session::has('kaz') ? 'Жалға берілетін мүлікті табыңыз' : '' }}{{ Session::has('rus') ? 'Найти недвижимость в аренду' : '' }}{{ Session::has('eng') ? 'Find properties for rent' : '' }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    <div class="calc-navs-content">
                                        <div class="calc-navs-content-single">
                                            <span class="calc-navs-text">{{--Purchase price--}}{{ Session::has('kaz') ? 'Сатып алу бағасы' : '' }}{{ Session::has('rus') ? 'Цена покупки' : '' }}{{ Session::has('eng') ? 'Purchase price' : '' }}</span>
                                            <span class="calc-navs-digit" id="buyTabPurchasePrice">1,100,000 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">{{--Down payment of--}}{{ Session::has('kaz') ? 'Бастапқы төлем' : '' }}{{ Session::has('rus') ? 'Первоначальный взнос 20%' : '' }}{{ Session::has('eng') ? 'Down payment of' : '' }}</span>
                                            <span class="calc-navs-digit" id="buyTabDownPayment">220,000 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">{{--Principal amount--}}{{ Session::has('kaz') ? 'Негізгі сома' : '' }}{{ Session::has('rus') ? 'Основная сумма' : '' }}{{ Session::has('eng') ? 'Principal amount' : '' }}</span>
                                            <span class="calc-navs-digit" id="buyTabPrincipalAmount">880,000 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                          <span class="calc-navs-text">{{--Buying fees--}}{{ Session::has('kaz') ? 'Сатып алу ақысы' : '' }}{{ Session::has('rus') ? 'Плата за покупку' : '' }}{{ Session::has('eng') ? 'Buying fees' : '' }}
                                          </span>
                                            <span class="calc-navs-digit align-self-start" id="buyTabBuyingFees">82,140 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">{{--Monthly Company payment--}}{{ Session::has('kaz') ? 'Компанияның ай сайынғы төлемі' : '' }}{{ Session::has('rus') ? 'Ежемесячный платеж компании' : '' }}{{ Session::has('eng') ? 'Monthly Company payment' : '' }}</span>
                                            <span class="calc-navs-digit" id="buyTabCompanyMonthlyFee">4,038 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                        <div class="calc-navs-content-single calc-navs-content-single-footer border-top-0">
                                            <span class="calc-navs-text">{{--Total buying cost over--}}{{ Session::has('kaz') ? 'Жалпы сатып алу бағасы аяқталды' : '' }}{{ Session::has('rus') ? 'Общая стоимость покупки свыше' : '' }}{{ Session::has('eng') ? 'Total buying cost over' : '' }} <span class="durationInYears"></span> <!--years-->годы</span>
                                            <span class="calc-navs-digit">324,420 {{ Session::has('kaz') ? 'Tenge' : 'AED' }}</span>
                                        </div>
                                    </div>
                                    <div class="calc-navs-bottom">
                                        <div>
                                            <h4 class="mb-0">{{--Ready to buy?--}}{{ Session::has('kaz') ? 'Сатып алуға дайынсыз ба?' : '' }}{{ Session::has('rus') ? 'Готовы купить?' : '' }}{{ Session::has('eng') ? 'Ready to buy?' : '' }}</h4>
                                            <p class="mb-0 mt-2">{{--Choose from thousands of properties available for sale in Dubai--}}{{ Session::has('kaz') ? 'Қазақстанда сатуға болатын мыңдаған жылжымайтын мүлікті таңдаңыз' : '' }}{{ Session::has('rus') ? 'Выберите из тысяч объектов недвижимости, доступных для продажи в Казахстане' : '' }}{{ Session::has('eng') ? 'Choose from thousands of properties available for sale in kazak' : '' }}</p>
                                        </div>
                                        <div class="calc-navs-bottom-last">
                                            <div>
                                                <a href="{{ route('buy-page') }}" class="red-btn-lg d-inline-block mb-3">{{--Find properties for sale--}}{{ Session::has('kaz') ? 'Сатылатын мүлікті табыңыз' : '' }}{{ Session::has('rus') ? 'Найти недвижимость на продажу' : '' }}{{ Session::has('eng') ? 'Find properties for sale' : '' }}</a>
                                            </div>
{{--                                            <div>--}}
{{--                                                <a href="" class="red-btn-lg-outline d-inline-block">Calculate mortgage payments</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Calc Area Ends Here -->

    <!-- Calc Text Area Starts Here -->
    <section class="calc-text-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>{{--Buy vs Rent Methodology--}}{{ Session::has('kaz') ? 'Сатып алу және жалға беру әдістемесі' : '' }}{{ Session::has('rus') ? 'Методология покупки и аренды' : '' }}{{ Session::has('eng') ? 'Buy vs Rent Methodology' : '' }}</h4>
{{--                    <p>--}}
{{--                        Our buy vs. rent calculator methodology compares the total cost of renting with the total cost of buying by--}}
{{--                        looking at much more than a monthly rent or mortgage payment.--}}
{{--                    </p>--}}
                    <p>
                        {{ Session::has('kaz') ? 'Біздің «Сатып алу мен жалдау» калькуляторы әдістемесі жалдау ақысының жалпы құнын сатып алудың жалпы құнымен салыстырады, ай сайынғы жалдау немесе ипотекалық төлемнен әлдеқайда көп.' : '' }}{{ Session::has('rus') ? 'Наша покупка против Методология калькулятора арендной платы сравнивает общую стоимость аренды с общей стоимостью покупки, рассматривая гораздо больше, чем ежемесячная арендная плата или платеж по ипотеке.' : '' }}{{ Session::has('eng') ? 'Our buy vs. rent calculator methodology compares the total cost of renting with the total cost of buying by looking at much more than a monthly rent or mortgage payment.' : '' }}
                    </p>
                    <p>
{{--                        To calculate the cost of renting, we begin with the monthly rent, one-time agent commission based on the--}}
{{--                        total yearly rent amount and yearly EJARI fees. This calculation does not include any maintenance fees you--}}
{{--                        may incur as a tenant.--}}
                        {{ Session::has('kaz') ? 'Жалдау құнын есептеу үшін біз ай сайынғы жалдау ақысынан, жалпы жылдық жалдау ақысына негізделген бір жолғы агенттік комиссиядан және жылдық EJARI алымдарынан бастаймыз. Бұл есептеу сіз жалға алушы ретінде алатын қызмет ақысын қамтымайды.' : '' }}{{ Session::has('rus') ? 'Чтобы рассчитать стоимость аренды, мы начинаем с ежемесячной арендной платы, единовременной комиссии агента на основе общей суммы годовой арендной платы и ежегодных сборов EJARI. Этот расчет не включает плату за обслуживание, которую вы можете понести как арендатор.' : '' }}{{ Session::has('eng') ? 'To calculate the cost of renting, we begin with the monthly rent, one-time agent commission based on the total yearly rent amount and yearly EJARI fees. This calculation does not include any maintenance fees you may incur as a tenant.' : '' }}
                    </p>
                    <p class="text-justify">
                        {{--To calculate the cost of buying, we begin with the purchase price and calculate the initial down payment and
                        various fees involved; the monthly mortgage payment agent commission, Dubai Land Department registration
                        fees, Registration Trustee fees, property valuation fee, mortgage processing and registration fees. These
                        costs are pre-defined and do not include service fees, home maintenance fees or utility fees. This
                        calculator provides baseline assumptions based on your input.--}}
                        {{ Session::has('kaz') ? 'Сатып алу бағасын есептеу үшін біз сатып алу бағасынан бастаймыз және бастапқы жарнаны және әртүрлі алымдарды есептейміз; ипотекалық агенттің ай сайынғы алымдары, Дубай жер департаментінің тіркеу жарналары, сенімгерлікпен тіркеу жарналары, мүлікті бағалау жарналары, ипотеканы өңдеуге алымдар және тіркеу жарналары. Бұл шығындар алдын ала анықталған және оларға техникалық қызмет көрсету ақысы, үйге қызмет көрсету ақысы немесе коммуналдық төлемдер кірмейді. Бұл Калькулятор сіздің енгізуіңізге негізделген негізгі болжамдарды береді.' : '' }}{{ Session::has('rus') ? 'Чтобы рассчитать стоимость покупки, мы начинаем с покупной цены и рассчитываем первоначальный взнос и задействованы различные сборы; ежемесячная комиссия агента по ипотечным платежам, регистрационные сборы Земельного департамента Дубая, сборы за регистрацию доверенного лица, сборы за оценку имущества, сборы за оформление ипотеки и регистрационные сборы. Эти расходы определены заранее и не включают плату за обслуживание, плату за обслуживание дома или плату за коммунальные услуги. Этот Калькулятор обеспечивает базовые предположения на основе вашего ввода.' : '' }}{{ Session::has('eng') ? 'To calculate the cost of buying, we begin with the purchase price and calculate the initial down payment and various fees involved; the monthly mortgage payment agent commission, Dubai Land Department registration                         fees, Registration Trustee fees, property valuation fee, mortgage processing and registration fees. These                         costs are pre-defined and do not include service fees, home maintenance fees or utility fees. This calculator provides baseline assumptions based on your input.' : '' }}
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>{{--Down Payment--}}{{ Session::has('kaz') ? 'Бастапқы төлем' : '' }}{{ Session::has('rus') ? 'Первоначальный взнос' : '' }}{{ Session::has('eng') ? 'Down Payment' : '' }}</h4>
                    <p>
{{--                        Saving for a down payment in the UAE is one of the biggest challenges of buying. This is probably one of the--}}
{{--                        reasons why 70% of the expats rent. Per UAE Central Bank Guidelines, the maximum loan to value (LTV) for--}}
{{--                        expatriates is 75%, providing it is a first mortgage and the property is valued under Dh5 million. For--}}
{{--                        purchases higher than Dh5 million, the LTV reduces to 65 per cent and 60 per cent for all subsequent--}}
{{--                        purchases.--}}
                        {{ Session::has('kaz') ? 'БАӘ-де бастапқы жарнаны үнемдеу - сатып алу кезіндегі ең үлкен мәселелердің бірі. Экспаттардың 70 пайызының пәтер жалдауының бір себебі осы болса керек. БАӘ Орталық банкінің нұсқауларына сәйкес, экспатрианттар үшін ең жоғары несие (LTV) 75% құрайды, егер ол бірінші ипотека болса және мүліктің құны 5 миллион AED-ден аспаса. 5 миллион AED-ден асатын сатып алулар үшін LTV 65 пайызға және кейінгі барлық сатып алулар үшін 60 пайызға дейін төмендейді.' : '' }}{{ Session::has('rus') ? 'Экономия на первоначальном взносе в ОАЭ — одна из самых больших проблем при покупке. Вероятно, это одна из причин, по которой 70% экспатов арендуют жилье. Согласно руководящим принципам Центрального банка ОАЭ, максимальная сумма кредита к стоимости (LTV) для экспатриантов составляет 75%, при условии, что это первая ипотека, а стоимость недвижимости не превышает 5 миллионов дирхамов. Для покупок на сумму более 5 миллионов дирхамов LTV снижается до 65 процентов и 60 процентов для всех последующих покупок.' : '' }}{{ Session::has('eng') ? 'Saving for a down payment in the UAE is one of the biggest challenges of buying. This is probably one of the reasons why 70% of the expats rent. Per UAE Central Bank Guidelines, the maximum loan to value (LTV) for expatriates is 75%, providing it is a first mortgage and the property is valued under Dh5 million. For purchases higher than Dh5 million, the LTV reduces to 65 per cent and 60 per cent for all subsequent purchases.' : '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Calc Text Area Ends Here -->
@endsection

@section('front-js')
    <script>
        $(function () {
            buyRentCalculator();
        })
    </script>
    <script>
        function buyRentCalculator() {
            $('.downPaymentErrorText').text('');
            var yearlyRentInput = $('#yearlyRentInput').val();
            var yearlyRent = Number(yearlyRentInput.replace(/[^0-9\.-]+/g,""));

            var propertyPriceInput = $('#propertyPrice').val();
            var propertyPrice = Number(propertyPriceInput.replace(/[^0-9\.-]+/g,""));

            var downpamentInput = $('#downpayment').val();
            var downpament = Number(downpamentInput.replace(/[^0-9\.-]+/g,""));


            var duration = parseInt($('#duration').val());

            var monthlyRent = yearlyRent/12;
            var totalMonths = duration*12;

            // show error message for down payment start
            var minDownPaymentAmount = (propertyPrice * 20) / 100;
            if ((downpament < minDownPaymentAmount) || (downpament > propertyPrice))
            {
                // $('.downPaymentErrorText').text('Value must be between 20% and 100% of the property cost');
                $('.downPaymentErrorText').text('Стоимость должна быть от 20% до 100% от стоимости объекта');
            }
            // show error message for down payment end

            var rentCostData = rentCost();
            var buyCostData = buyCost();

            if (rentCostData > buyCostData)
            {
                // buy is cheapper
                var costDifference = rentCostData - buyCostData;
                var percentResult   = Math.round((costDifference * 100) / rentCostData);
                $('#chartTitleFirst').text('Buying');
                // $('#chartTitleFirst').text('Покупка');
                $('#chartTitlePercent').text(percentResult);
                $('#chartTitleSecond').text('renting');
                // $('#chartTitleSecond').text('аренда');
            } else if (rentCostData < buyCostData)
            {
                // rent is cheapper
                var costDifference = buyCostData - rentCostData;
                var percentResult = Math.round((costDifference * 100) / buyCostData);
                $('#chartTitleFirst').text('Renting');
                // $('#chartTitleFirst').text('аренда');
                $('#chartTitlePercent').text(percentResult);
                // $('#chartTitleSecond').text('Покупка');
                $('#chartTitleSecond').text('Buying');
            }
            var finalMonthlyBuyingCost = Math.round((propertyPrice + buyCostData) / totalMonths);
            var finalMonthlyRentingCost = Math.round((propertyPrice + rentCostData) / totalMonths);

            // bar chart section start
            document.getElementById('chartParentDiv').innerHTML = '<canvas id="myChart"></canvas>';
            // plugin name : chart.js
            chartjs(finalMonthlyRentingCost,finalMonthlyBuyingCost);

        }
        function chartjs(finalMonthlyRentingCost,finalMonthlyBuyingCost) {
            const ctx = document.getElementById('myChart');

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    // labels: ['RENT MONTHLY COST', 'BUY MONTHLY COST'],
                    labels: ['RENT MONTHLY\n Cost', 'BUY MONTHLY\n COST'],
                    datasets: [{
                        label: '',
                        data: [finalMonthlyRentingCost, finalMonthlyBuyingCost],
                        backgroundColor: [
                            // 'rgba(255, 99, 132, 0.2)',
                            'rgb(227,102,102)',
                            // 'rgba(54, 162, 235, 0.2)',
                            'rgb(129,204,147)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1,
                        datalabels: {
                            color: 'red',
                            align: 'top',
                            labels: {
                                title: {
                                    color: 'white',
                                    align: 'center',
                                    font: {
                                        size: '16px',
                                    }
                                },
                            },
                            formatter: function(value, context) {
                                // return context.chart.data.labels[context.dataIndex];

                                // return 'RENT MONTHLY COST \n' + Math.ceil(value);
                                return context.chart.data.labels[context.dataIndex]+' '+value+ ' ADE';
                            }
                        }
                    }],
                },
                plugins: [ChartDataLabels],
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },

                },
            });
            // myChart.data.datasets.data = [finalMonthlyRentingCost, finalMonthlyBuyingCost];
            // myChart.update();
        }
        function buyCost() {
            var propertyPriceInput = $('#propertyPrice').val();
            var propertyPrice = Number(propertyPriceInput.replace(/[^0-9\.-]+/g,""));

            var downpamentInput = $('#downpayment').val();
            var downpament = Number(downpamentInput.replace(/[^0-9\.-]+/g,""));

            var duration = parseInt($('#duration').val());
            var totalMonths = duration*12;

            var agentFees   = (propertyPrice * 2)/100;
            var landDepartmentFee = (propertyPrice * 4)/100;
            if (propertyPrice < 500000)
            {
                var registrationFee = 2000 +(2000 * 5)/100;
            } else {
                var registrationFee = 4000 +(4000 * 5)/100;
            }

            var monthlyCompanyCharge = Math.round((propertyPrice * .30)/100);

            // replace tab data
            $('#buyTabPurchasePrice').text(propertyPrice.toLocaleString('en-US')+' ADE');
            $('#buyTabDownPayment').text(propertyPrice.toLocaleString('en-US')+' ADE');
            $('#buyTabPrincipalAmount').text((propertyPrice - downpament).toLocaleString('en-US')+' ADE');
            $('#buyTabBuyingFees').text((agentFees + landDepartmentFee + registrationFee ).toLocaleString('en-US')+' ADE');
            $('#buyTabCompanyMonthlyFee').text(monthlyCompanyCharge.toLocaleString('en-US')+' ADE');
            $('.durationInYears').text(duration);
            return  agentFees + landDepartmentFee + registrationFee + (monthlyCompanyCharge * totalMonths);
            // return totalBuyingFees;
        }
        function rentCost() {
            var yearlyRentInput = $('#yearlyRentInput').val();
            var yearlyRent = Number(yearlyRentInput.replace(/[^0-9\.-]+/g,""));
            var duration = parseInt($('#duration').val());
            var monthlyRent = yearlyRent/12;
            var totalMonths = duration*12;
            var agentCommission = (yearlyRent * 5)/100;
            var ejariFee = 195;

            // replace tab data
            $('#rentTabMonthlyrent').text(monthlyRent.toLocaleString('en-US')+' ADE');
            $('#rentTabAgentComission').text(agentCommission.toLocaleString('en-US')+' ADE');
            $('#rentTabTotalRentCost').text(((monthlyRent * totalMonths) + agentCommission + ejariFee).toLocaleString('en-US')+' ADE');
            $('.durationInYears').text(duration);

            return (monthlyRent * totalMonths) + agentCommission + ejariFee;
            // return totalRentCost;
        }
    </script>
@endsection
