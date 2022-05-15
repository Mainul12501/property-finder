<!-- jQuery Link Starts Here -->
<script src="{{ asset('/') }}assets/script/vendor/jquery-3.5.1.min.js"></script>
<!-- jQuery Link Ends Here -->

<!-- jQuery Link Starts Here -->
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
<!-- jQuery Link Ends Here -->

<!-- Bootstrap JS Link Starts Here -->
<script src="{{ asset('/') }}assets/script/vendor/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS Link Ends Here -->

<!-- Slick Slider JS Link Starts Here -->
<script src="{{ asset('/') }}assets/script/vendor/slick.min.js"></script>
<!-- Slick Slider JS Link Ends Here -->

<!-- Magnific-Popup JS Link Starts Here -->
<script src="{{ asset('/') }}assets/script/vendor/jquery.magnific-popup.min.js"></script>
<!-- Magnific-Popup JS Link Ends Here -->

<!-- Waypoint JS Link Starts Here -->
<script src="{{ asset('/') }}assets/script/vendor/waypoint.min.js"></script>
<!-- Waypoint JS Link Ends Here -->

<!-- simple-lightbox link starts here-->
<script src="{{ asset('/') }}assets/script/vendor/simple-lightbox.jquery.min.js"></script>
<!-- simple-lightbox link ends here-->

<!-- dynamic gallery lightbox link starts here-->
<script src="{{ asset('/') }}assets/script/vendor/gallery.min.js"></script>
<!-- dynamic gallery lightbox link ends here-->

<!-- toastr js script starts here-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- toastr js script ends here-->

<!-- show hide text script starts here-->
{{--<script src="{{ asset('/') }}assets/script/vendor/show-hide-text.min.js"></script>--}}
<!-- show hide text script ends here-->

<!--barchart Script Link Starts Here -->
{{--<script src="{{ asset('/') }}assets/script/vendor/bar-chart.js"></script>--}}
<!--barchart Script Link Ends Here -->

<!--2GIS map Script Link Starts Here -->
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<!--2GIS map Script Link Ends Here -->

<!--chart js Script Link Starts Here -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--chart js Script Link Ends Here -->

<!--Custom Template Script Link Starts Here -->
<script src="{{ asset('/') }}assets/script/script.js"></script>
<!--Custom Template Script Link Ends Here -->

@yield('front-js')

<script>
    $(document).on('click', '#registrationOff', function (){
        event.preventDefault();
        toastr.error('currently registration from client side is off.. please contact admin for registration.');
    })
</script>
