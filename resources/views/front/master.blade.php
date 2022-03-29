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
