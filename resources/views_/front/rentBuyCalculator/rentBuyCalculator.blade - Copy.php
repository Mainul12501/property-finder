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
                            <a href="{{ url('/') }}">Дома</a>
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
                            <p>Калькулятор аренды и покупки</p>
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
                        <h2>Калькулятор аренды и покупки</h2>
                        <p>
                            Арендовать или купить? Чтобы помочь вам ответить на этот важный вопрос, наш калькулятор берет самые важные расходы, связанные с покупкой недвижимости, и сравнивает их с эквивалентными затратами на аренду. Попробуйте!
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
                            <p>What is your yearly rent?</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="96,000" id="yearlyRentInput" onkeyup="buyRentCalculator()">
                                <div class="calc-area-form-text">
                                    <span>AED</span>
                                </div>
                            </form>
                            <h6>8,000 AED monthly</h6>
                        </div>
                        <div class="calc-area-start-single">
                            <p>How much does the property cost?</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="1,100,000" id="propertyPrice" onkeyup="buyRentCalculator()" />
                                <div class="calc-area-form-text">
                                    <span>AED</span>
                                </div>
                            </form>
                        </div>
                        <div class="calc-area-start-single">
                            <p>What is your down payment amount?</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="220,000" id="downpayment" onkeyup="buyRentCalculator()">
                                <div class="calc-area-form-text">
                                    <span>AED</span>
                                </div>
                            </form>
                            <span class="text-danger downPaymentErrorText" style="font-size: 11px;"></span>
                        </div>
                        <div class="calc-area-start-single">
                            <p>How long are you planning to stay in the property?</p>
                            <form action="" class="calc-area-form">
                                <input type="text" maxlength="10" class="form-control" value="5" id="duration" onkeyup="buyRentCalculator()" />
                                <div class="calc-area-form-text">
                                    <span>years</span>
                                </div>
                            </form>
                        </div>
{{--                        <div class="calc-area-start-single">--}}
{{--                            <p>What is the mortgage interest rate?</p>--}}
{{--                            <form action="" class="calc-area-form">--}}
{{--                                <input type="text" maxlength="10" class="form-control" value="2.7">--}}
{{--                                <div class="calc-area-form-text">--}}
{{--                                    <span>%</span>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="calc-area-start-single">--}}
{{--                            <p>What is the mortgage loan period?</p>--}}
{{--                            <form action="" class="calc-area-form">--}}
{{--                                <input type="text" maxlength="10" class="form-control" value="25">--}}
{{--                                <div class="calc-area-form-text">--}}
{{--                                    <span>years</span>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="calc-area-end">
                        <div class="calc-area-end-top">
                            <h4><span id="chartTitleFirst">Buying</span> is <span id="chartTitlePercent">33</span>% cheaper than <span id="chartTitleSecond">renting</span></h4>
{{--                            <div class="calc-chart">--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>8,400</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>7,000</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>5,600</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>4,200</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>2,800</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>1,400</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                                <div class="calc-chart-single">--}}
{{--                                    <div class="calc-chart-single-start">--}}
{{--                                        <p>0</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="calc-chart-single-end"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="calc-area-end-top-bar">--}}
{{--                                <div class="calc-area-end-top-bar-one">--}}
{{--                                    <p>RENT MONTHLY COST</p>--}}
{{--                                    <h4>8,101 AED</h4>--}}
{{--                                </div>--}}
{{--                                <div class="calc-area-end-top-bar-two">--}}
{{--                                    <p>BUY MONTHLY COST</p>--}}
{{--                                    <h4>5,407 AED</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
                                            style="border-right:none!important;">Rent cost breakdown</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link calc-navs-btn active" id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                                            type="button" role="tab" aria-controls="two" aria-selected="false">Buy cost breakdown</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <div class="calc-navs-content">
                                        <div class="calc-navs-content-single">
                                            <span class="calc-navs-text">Monthly rent</span>
                                            <span class="calc-navs-digit" id="rentTabMonthlyrent">8,000 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                          <span class="calc-navs-text">Agent commission
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
                                            <span class="calc-navs-digit" id="rentTabAgentComission">5,040 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">Ejari fee</span>

                                            <span class="calc-navs-digit">195 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single calc-navs-content-single-footer border-top-0">
                                            <span class="calc-navs-text">Total rental cost over 5 years</span>
                                            <span class="calc-navs-digit" id="rentTabTotalRentCost">486,015 AED</span>
                                        </div>
                                    </div>
                                    <div class="calc-navs-bottom">
                                        <div>
                                            <h4 class="mb-0">Looking to rent?</h4>
                                            <p class="mb-0 mt-2">Choose from thousands of properties available for rent in Dubai</p>
                                        </div>
                                        <div>
                                            <div>
                                                <a href="{{ route('rent-page') }}" class="red-btn-lg d-inline-block">Find properties for rent</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    <div class="calc-navs-content">
                                        <div class="calc-navs-content-single">
                                            <span class="calc-navs-text">Purchase price</span>
                                            <span class="calc-navs-digit" id="buyTabPurchasePrice">1,100,000 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">Down payment of 20%</span>
                                            <span class="calc-navs-digit" id="buyTabDownPayment">220,000 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">Principal amount</span>
                                            <span class="calc-navs-digit" id="buyTabPrincipalAmount">880,000 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                          <span class="calc-navs-text">Buying fees
{{--                                            <details class="d-none d-lg-block">--}}
{{--                                              <summary>Show breakdown</summary>--}}
{{--                                              <div class="calc-table">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Agent fees--}}
{{--                                                    <small data-bs-toggle="tooltip" title="Purchase price minus down payment"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16"> <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" /> </svg> </small> <div class="tooltip bs-tooltip-top" role="tooltip"> <div class="tooltip-arrow"></div> <div class="tooltip-inner"> Purchase price minus down payment </div> </div>--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>23,100 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Land department fees--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>44,580 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Registration trustee fee--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>4,200 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Mortgage valuation fee--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>3,150 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Mortgage processing fee--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>4,620 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Mortgage registration fee--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>2,200 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Knowledge fee--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>290 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0 bg-white">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p>Monthly mortgage payment--}}
{{--                                                    <span>--}}
{{--                                                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"--}}
{{--                                                           class="bi bi-info-circle-fill" viewBox="0 0 16 16">--}}
{{--                                                        <path--}}
{{--                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />--}}
{{--                                                      </svg>--}}
{{--                                                    </span>--}}
{{--                                                  </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p>4,038 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                              <div class="calc-table border-top-0">--}}
{{--                                                <div class="calc-table-start">--}}
{{--                                                  <p style="font-weight: 700; color: black;">Total buying cost over 5 years</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="calc-table-end">--}}
{{--                                                  <p style="font-weight: 700; color: black;">324,420 AED</p>--}}
{{--                                                </div>--}}
{{--                                              </div>--}}
{{--                                            </details>--}}
                                          </span>
                                            <span class="calc-navs-digit align-self-start" id="buyTabBuyingFees">82,140 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single border-top-0">
                                            <span class="calc-navs-text">Monthly Company payment</span>
                                            <span class="calc-navs-digit" id="buyTabCompanyMonthlyFee">4,038 AED</span>
                                        </div>
                                        <div class="calc-navs-content-single calc-navs-content-single-footer border-top-0">
                                            <span class="calc-navs-text">Total buying cost over 5 years</span>
                                            <span class="calc-navs-digit">324,420 AED</span>
                                        </div>
                                    </div>
                                    <div class="calc-navs-bottom">
                                        <div>
                                            <h4 class="mb-0">Ready to buy?</h4>
                                            <p class="mb-0 mt-2">Choose from thousands of properties available for sale in Dubai</p>
                                        </div>
                                        <div class="calc-navs-bottom-last">
                                            <div>
                                                <a href="{{ route('buy-page') }}" class="red-btn-lg d-inline-block mb-3">Find properties for sale</a>
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
                    <h4>Buy vs Rent Methodology</h4>
                    <p>
                        Our buy vs. rent calculator methodology compares the total cost of renting with the total cost of buying by
                        looking at much more than a monthly rent or mortgage payment.
                    </p>
                    <p>
                        To calculate the cost of renting, we begin with the monthly rent, one-time agent commission based on the
                        total yearly rent amount and yearly EJARI fees. This calculation does not include any maintenance fees you
                        may incur as a tenant.
                    </p>
                    <p>
                        To calculate the cost of buying, we begin with the purchase price and calculate the initial down payment and
                        various fees involved; the monthly mortgage payment agent commission, Dubai Land Department registration
                        fees, Registration Trustee fees, property valuation fee, mortgage processing and registration fees. These
                        costs are pre-defined and do not include service fees, home maintenance fees or utility fees. This
                        calculator provides baseline assumptions based on your input.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>Down Payment</h4>
                    <p>
                        Saving for a down payment in the UAE is one of the biggest challenges of buying. This is probably one of the
                        reasons why 70% of the expats rent. Per UAE Central Bank Guidelines, the maximum loan to value (LTV) for
                        expatriates is 75%, providing it is a first mortgage and the property is valued under Dh5 million. For
                        purchases higher than Dh5 million, the LTV reduces to 65 per cent and 60 per cent for all subsequent
                        purchases.
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
                $('.downPaymentErrorText').text('Value must be between 20% and 100% of the property cost');
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
                $('#chartTitlePercent').text(percentResult);
                $('#chartTitleSecond').text('renting');
            } else if (rentCostData < buyCostData)
            {
                // rent is cheapper
                var costDifference = buyCostData - rentCostData;
                var percentResult = Math.round((costDifference * 100) / buyCostData);
                $('#chartTitleFirst').text('Renting');
                $('#chartTitlePercent').text(percentResult);
                $('#chartTitleSecond').text('buying');
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
                    labels: ['RENT MONTHLY COST', 'BUY MONTHLY COST'],
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
                                        size: '15px',
                                    }
                                },
                            },
                            formatter: function(value, context) {
                                // return context.chart.data.labels[context.dataIndex];

                                // return 'RENT MONTHLY COST \n' + Math.ceil(value);
                                return context.chart.data.labels[context.dataIndex]+'\n'+value;
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

            return (monthlyRent * totalMonths) + agentCommission + ejariFee;
            // return totalRentCost;
        }
    </script>
@endsection
