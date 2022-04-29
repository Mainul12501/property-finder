<!doctype html>
<html lang="en">

<head>

    @include('front.incluedes.meta')

   @include('front.incluedes.css')

    <!-- Website Title Starts Here -->
    <title>@yield('title')</title>
    <!-- Website Title Ends Here -->
    @yield('default-seo-head')
    @yield('front-seo-head')
        @if(Session::has('kaz'))
            <style>
                @media screen and (min-width: 1451px) and (max-width: 1476px){
                    #propertyPriceMenu {
                        display: none;
                    }
                }
            </style>
        @endif
        <style>
            @media screen and (max-width: 685px){
                #priceIdRent {
                    min-width: unset!important;
                }
            }

            @media only screen and (min-width: 420px) and (max-width: 574px) {
                .price-selector-buttons .btn {
                    width: unset!important;
                }
            }
        </style>
</head>

<body>
<!-- Header Starts Here -->
@include('front.incluedes.header')
<!-- Header Ends Here -->

<!-- body content starts here -->
@yield('body')
<!-- body content ends here -->

<!-- Footer Starts Here -->
@include('front.incluedes.footer')
<!-- Footer Ends Here -->

<!-- Script Link Starts Here -->
@include('front.incluedes.js')
<!-- Script Link Ends Here -->
@yield('default-seo-body')
@yield('front-seo-body')
</body>

</html>
