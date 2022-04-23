@extends('front.master')

@section('title')
    Property Finder - blog
@endsection

@section('body')
    <!-- Blog List Starts Here -->

{{--    additional menu starts--}}
{{--    <section class="blog-list d-none d-lg-block">--}}
{{--        <div class="container custom-container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <ul class="blog-list-row list-inline">--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">News</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Life at home</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Research</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Tips & Advice</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">EXPO 2020</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Inside Property Finder</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">For Agents</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a href="#" class="blog-list-single">Trends</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    additional menu endsc--}}

{{--    <section class="blog-list-small d-lg-none d-block mb-3">--}}
{{--        <div class="container custom-container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <!-- BTN -->--}}
{{--                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSectionBlogList" aria-expanded="false" aria-controls="collapseSectionBlogList" style="background-color: #ef5e4e; border-color: transparent; margin-bottom: 3px;">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify-right" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <!-- BTN -->--}}
{{--                    <div class="collapse" id="collapseSectionBlogList">--}}
{{--                        <div class="card card-body p-0 border-0">--}}
{{--                            <!-- Content -->--}}
{{--                            <ul class="blog-list-row list-inline">--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Home</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">News</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Life at home</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Research</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Tips & Advice</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">EXPO 2020</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Inside Property Finder</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">For Agents</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <a href="#" class="blog-list-single">Trends</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <!-- Content -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Blog List Ends Here -->


        <!-- Blogs Area Starts Here -->
        <section class="blogs-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-8">
                        @if(count($blogs)>0)
                            <div class="row">
                                @foreach($blogs as $blog)
                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="blog-card">
                                            <div class="blog-card-image">
                                                <a href="{{ route('blog-details', ['id' => $blog->id, 'slug' => $blog->slug]) }}" class="d-block">
                                                    <img src="{{ asset($blog->main_image) }}" alt="Blog Image" class="img-fluid" style="height: 250px;">
                                                </a>
                                            </div>
                                            <div class="blog-card-body">
                                                <div class="blog-card-title">
                                                    <h4 class="mb-0">
                                                        <a href="" class="d-block">{{ $blog->blog_title }}</a>
                                                    </h4>
                                                </div>
                                                <div class="blog-card-text">
                                                    <p class="mb-0">
                                                        {!! substr_replace($blog->content,'...', 90) !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="blog-card-overlay">
                                                <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                                                    <a href="{{ route('blog-details', ['id' => $blog->id, 'slug' => $blog->slug]) }}" class="btn">
                                                        <span>
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                          </svg>
                                                        </span>
                                                        Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            @if(count($blogs)>9)
                                <div class="row py-4">
                                    <div class="col-lg-12">
                                        <div class="pagination-area justify-content-center border-0 pt-0">
                                            <div class="pagination-area-end">
        {{--                                        <a href="" class="active">1</a>--}}
        {{--                                        <a href="">2</a>--}}
        {{--                                        <a href="">3</a>--}}
        {{--                                        <a href="">4</a>--}}
        {{--                                        <a href="">5</a>--}}
        {{--                                        <a href="" class="next">--}}
        {{--                                            Next--}}
        {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
        {{--                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>--}}
        {{--                                            </svg>--}}
        {{--                                        </a>--}}
                                                {{ $blogs->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @else
                            <div style="min-height: 400px">
                                <h5 class="text-capitalize  mt-5">{{ Session::has('kaz') ? 'Кешіріңіз, ақпарат табылмады....' : '' }}{{ Session::has('rus') ? 'К сожалению, информация не найдена....' : '' }}{{ Session::has('eng') ? 'Sorry, no information found....' : '' }}</h5>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-4 blogs-area-border">
                        <div class="blogs-area-form" style="margin-top: 30px;">
                            <form action="{{ route('search-blog') }}" method="post" id="blogSearchForm">
                                @csrf
                                <input type="text" class="form-control" name="search_text" placeholder="Search" onblur="submitForm()">
                                <div class="d-none">
                                    <input type="submit">
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-4">
                                <div class="expo-banner my-4">
                                    <a href="" class="d-block">
                                        <img src="{{ asset('/') }}assets/images/card/blog/expo.gif" alt="Gif" class="img-fluid w-100">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="popular-posts mb-4">
                            <div class="popular-posts-heading">
                                <h4 class="mb-0">{{ Session::has('kaz') ? 'ТАНЫМАЛ ПОСТТАР' : '' }}{{ Session::has('rus') ? 'ПОПУЛЯРНЫЕ ПОСТЫ' : '' }}{{ Session::has('eng') ? 'POPULAR POSTS' : '' }}</h4>
                            </div>
                            @if(count($popularBlogs)>0)
                                @foreach($popularBlogs as $popularBlog)
                                    <div class="popular-posts-single">
                                        <div class="image">
                                            <a href="{{ route('blog-details', ['id' => $popularBlog->id, 'slug' => $popularBlog->slug]) }}" class="d-inline-block">
                                                <img src="{{ asset($popularBlog->main_image) }}" alt="{{ $popularBlog->blog_title }}" class="img-fluid" style="height: 65px; width: 65px;">
                                            </a>
                                        </div>
                                        <div class="texts">
                                            <a href="">{{ $popularBlog->blog_title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>{{ Session::has('kaz') ? 'Ақпарат табылмады' : '' }}{{ Session::has('rus') ? 'Информация не найдена' : '' }}{{ Session::has('eng') ? 'Information not found' : '' }}</span>
                            @endif
                        </div>
                        <div class="popular-posts mb-4">
                            <div class="popular-posts-heading">
                                <h4 class="mb-0">{{ Session::has('kaz') ? 'СОҢҒЫ ХАБАРЛАР' : '' }}{{ Session::has('rus') ? 'ПОСЛЕДНИЕ СООБЩЕНИЯ' : '' }}{{ Session::has('eng') ? 'LAST MESSAGES' : '' }}</h4>
                            </div>
                            @if(count($latestBlogs)>0)
                                @foreach($latestBlogs as $latestBlog)
                                    <div class="popular-posts-single">
                                        <div class="image">
                                            <a href="{{ route('blog-details', ['id' => $latestBlog->id, 'slug' => $latestBlog->slug]) }}" class="d-inline-block">
                                                <img src="{{ asset($latestBlog->main_image) }}" alt="{{ $latestBlog->blog_title }}" class="img-fluid" style="height: 65px; width: 65px;">
                                            </a>
                                        </div>
                                        <div class="texts">
                                            <a href="">{{ $latestBlog->blog_title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>{{ Session::has('kaz') ? 'Ақпарат табылмады' : '' }}{{ Session::has('rus') ? 'Информация не найдена' : '' }}{{ Session::has('eng') ? 'Information not found' : '' }}</span>
                            @endif
                        </div>
    {{--                    <div class="stay-touch">--}}
    {{--                        <div class="stay-touch-heading">--}}
    {{--                            <h4>STAY IN TOUCH</h4>--}}
    {{--                        </div>--}}
    {{--                        <div class="stay-touch-links">--}}
    {{--                            <a href="">--}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">--}}
    {{--                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>--}}
    {{--                                </svg>--}}
    {{--                            </a>--}}
    {{--                            <a href="">--}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">--}}
    {{--                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>--}}
    {{--                                </svg>--}}
    {{--                            </a>--}}
    {{--                            <a href="">--}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">--}}
    {{--                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>--}}
    {{--                                </svg>--}}
    {{--                            </a>--}}
    {{--                            <a href="">--}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">--}}
    {{--                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>--}}
    {{--                                </svg>--}}
    {{--                            </a>--}}
    {{--                            <a href="">--}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">--}}
    {{--                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>--}}
    {{--                                </svg>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Blogs Area Ends Here -->

@endsection

@section('front-js')
    <script>
        function submitForm ()
        {
            document.getElementById('blogSearchForm').submit();
        }
    </script>
@endsection
