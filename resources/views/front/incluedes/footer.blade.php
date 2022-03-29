<footer class="footer">
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-9">
                <div class="footer-top">
                    <div class="footer-top-logo">
                        <a href="{{ route('home-page') }}">
                            <img src="{{ asset('/') }}assets/images/logomain.png" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="footer-top-links">
                        <a href="javascript:void(0)">О нас</a>
                        <a href="javascript:void(0)">Условия</a>
                        <a href="javascript:void(0)">Политика конфиденциальности</a>
                        <a href="javascript:void(0)">Логин клиента</a>
{{--                        <a href="javascript:void(0)">Careers</a>--}}
{{--                        <a href="javascript:void(0)">Agent Hub</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-start justify-content-lg-end">
            <div class="col-lg-5">
                <div class="footer-bottom d-flex justify-content-start justify-content-lg-end">
                    <a href="javascript:void(0)">
                        <svg viewBox="0 0 165 52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="M0 0h165v51.563H0z"></path><path id="c" d="M0 51.563h165V0H0z"></path></defs><g fill="none" fill-rule="evenodd"><mask id="b" fill="#fff"><use xlink:href="#a"></use></mask><path d="M159.844 51.563H5.156C2.32 51.563 0 49.241 0 46.407V5.157C0 2.32 2.32 0 5.156 0h154.688C162.68 0 165 2.32 165 5.157v41.25c0 2.834-2.32 5.156-5.156 5.156" fill="#000" mask="url(#b)"></path><path d="M34.839 25.647c0-3.927 3.325-5.827 3.453-5.954-1.919-2.66-4.733-3.04-5.756-3.167-2.43-.253-4.86 1.394-6.012 1.394-1.279 0-3.197-1.394-5.244-1.394-2.686 0-5.116 1.52-6.523 3.927-2.814 4.814-.768 11.907 1.918 15.832 1.407 1.9 2.942 4.055 4.989 3.928 2.046-.128 2.814-1.266 5.244-1.266 2.43 0 3.07 1.266 5.244 1.266 2.175 0 3.582-1.9 4.861-3.8 1.535-2.153 2.175-4.306 2.175-4.433-.128-.128-4.35-1.647-4.35-6.333M30.329 13.308c1-1.39 1.751-3.161 1.626-5.058-1.501.126-3.503 1.012-4.504 2.403-1.001 1.138-1.877 3.035-1.627 4.805 1.627.127 3.379-.885 4.505-2.15M59.22 33.312l-1.365-4.348c-.124-.384-.372-1.536-.869-3.07-.124.639-.372 1.791-.745 3.07l-1.365 4.348h4.344zm4.718 6.907h-2.731l-1.49-4.86h-5.214l-1.365 4.86h-2.607l5.214-16.5h3.227l4.965 16.5zM74.697 34.039c0-1.185-.252-2.241-.756-2.9-.505-.791-1.26-1.186-2.27-1.186-.63 0-1.26.265-1.764.659-.504.395-.882 1.054-1.008 1.713-.126.395-.126.66-.126.79v2.11c0 .924.252 1.583.756 2.242s1.26.921 2.017.921c1.008 0 1.764-.395 2.269-1.186.63-.791.882-1.845.882-3.163m2.647 0c0 2.11-.504 3.69-1.639 5.008-1.008 1.056-2.142 1.582-3.655 1.582s-2.647-.526-3.277-1.714v6.46h-2.647v-13.18c0-1.318 0-2.636-.126-4.088h2.269l.126 1.977c.882-1.45 2.142-2.24 3.907-2.24 1.387 0 2.52.527 3.403 1.715 1.135 1.053 1.639 2.502 1.639 4.48M89.133 34.039c0-1.185-.25-2.241-.756-2.9-.504-.791-1.26-1.186-2.268-1.186-.63 0-1.26.265-1.765.659-.505.395-.883 1.054-1.009 1.713-.126.395-.126.66-.126.79v2.11c0 .924.252 1.583.756 2.242.506.659 1.26.921 2.017.921 1.01 0 1.765-.395 2.27-1.186.63-.791.881-1.845.881-3.163m2.648 0c0 2.11-.505 3.69-1.638 5.008-1.01 1.056-2.143 1.582-3.657 1.582-1.512 0-2.647-.526-3.277-1.714v6.46h-2.647v-13.18c0-1.318 0-2.636-.124-4.088h2.267l.126 1.977c.882-1.45 2.143-2.24 3.909-2.24 1.385 0 2.52.527 3.403 1.715 1.133 1.053 1.638 2.502 1.638 4.48M107.25 35.469c0 1.375-.522 2.5-1.437 3.373-1.043 1.002-2.611 1.377-4.57 1.377-1.825 0-3.263-.375-4.305-1l.652-2.125c1.175.625 2.48 1 3.916 1 1.043 0 1.828-.252 2.349-.625.523-.502.784-1 .784-1.752 0-.624-.26-1.25-.652-1.624-.523-.5-1.306-.876-2.35-1.25-3.004-1-4.438-2.624-4.438-4.626 0-1.373.522-2.373 1.566-3.248 1.044-.877 2.35-1.25 4.177-1.25 1.565 0 2.742.25 3.786.75l-.653 2.123c-.915-.498-1.958-.748-3.263-.748-.915 0-1.697.25-2.22.625-.391.375-.653.875-.653 1.5s.262 1.123.784 1.625c.392.375 1.305.748 2.479 1.25a8.832 8.832 0 013.263 1.998c.393.626.785 1.502.785 2.627M115.5 29.863h-2.913v5.899c0 1.443.507 2.228 1.52 2.228.506 0 .886 0 1.14-.13l.126 2.097c-.506.262-1.14.262-2.026.262-1.013 0-1.9-.262-2.406-.918-.633-.655-.887-1.704-.887-3.277v-6.161h-1.773v-2.098h1.773v-2.228l2.533-.787v3.015h2.913v2.098zM126.164 34.095c0-1.148-.249-2.042-.749-2.807-.498-.893-1.37-1.404-2.368-1.404-.998 0-1.87.511-2.368 1.404-.5.765-.749 1.785-.749 2.807 0 1.147.25 2.041.75 2.805.497.894 1.37 1.405 2.367 1.405.998 0 1.745-.511 2.368-1.405.5-.764.749-1.784.749-2.805m2.742-.129c0 1.788-.497 3.318-1.496 4.465-1.12 1.15-2.493 1.788-4.237 1.788-1.747 0-3.117-.638-4.114-1.788-1-1.147-1.496-2.551-1.496-4.336 0-1.786.497-3.318 1.619-4.465.997-1.148 2.493-1.786 4.24-1.786 1.744 0 3.117.638 4.114 1.786.873 1.147 1.37 2.551 1.37 4.336M137.156 30.58c-.242 0-.485-.131-.849-.131-.85 0-1.577.39-2.063 1.042a4.749 4.749 0 00-.606 2.345v6.383h-2.548v-8.337c0-1.433 0-2.605-.121-3.778h2.184l.12 2.345h.122c.243-.782.728-1.433 1.213-1.954.607-.39 1.214-.651 1.82-.651h.607v2.735h.121zM147.17 32.82c0-.767-.124-1.405-.496-2.043-.498-.764-1.12-1.147-1.989-1.147-.87 0-1.491.383-1.988 1.02-.372.51-.621 1.276-.746 2.04h5.22v.13zm2.361.637c0 .51 0 .892-.124 1.147h-7.703c0 1.15.372 2.043 1.117 2.68a3.945 3.945 0 002.485.892c1.119 0 2.237-.126 3.107-.509l.373 1.785c-1.119.512-2.361.767-3.852.767-1.74 0-3.23-.512-4.225-1.659-.994-1.022-1.49-2.551-1.49-4.337 0-1.788.496-3.317 1.365-4.466.994-1.275 2.363-1.913 4.101-1.913 1.615 0 2.982.638 3.728 1.913.87 1.02 1.118 2.296 1.118 3.7zM56.441 13.148c0-.902-.238-1.675-.714-2.191-.476-.516-1.19-.773-2.023-.773-.357 0-.714 0-.952.129v6.058h.833c.952 0 1.666-.258 2.142-.773.476-.516.714-1.418.714-2.45m1.309 0c0 1.418-.357 2.579-1.19 3.352-.714.645-1.785 1.031-3.213 1.031-.714 0-1.309 0-1.785-.129V9.41c.595-.129 1.31-.129 2.142-.129 1.31 0 2.261.258 2.975.903.595.644 1.071 1.675 1.071 2.964M64.625 14.438c0-.516-.138-1.032-.412-1.418-.275-.516-.688-.645-1.238-.645s-.962.258-1.238.645c-.275.386-.412.902-.412 1.418 0 .515.137 1.03.412 1.417.276.516.688.645 1.238.645s.962-.258 1.238-.773c.275-.258.412-.774.412-1.29m1.375 0c0 .903-.275 1.676-.825 2.192-.55.644-1.375.902-2.337.902-.963 0-1.65-.258-2.2-.902-.55-.516-.825-1.29-.825-2.192 0-.902.274-1.675.825-2.19.55-.645 1.375-.903 2.337-.903.962 0 1.65.258 2.2.902.55.516.825 1.29.825 2.191M75.281 11.344l-1.724 6.187H72.45l-.739-2.69c-.246-.673-.369-1.345-.492-2.018-.123.673-.246 1.345-.493 2.018l-.739 2.69h-1.108l-1.847-6.187h1.232l.615 2.959.37 2.018c.123-.538.246-1.21.492-2.018l.739-2.96h.985l.739 2.825c.246.673.37 1.346.492 2.018l.37-2.018.739-2.824h1.477zM82.5 17.531h-1.322V14.18c0-1.032-.397-1.547-1.19-1.547-.397 0-.661.129-.925.387-.265.257-.397.644-.397 1.03v3.481h-1.322V11.602h1.19v.902c.132-.258.396-.516.66-.774.397-.257.794-.386 1.19-.386.53 0 1.058.129 1.455.515.529.387.661 1.032.661 1.934v3.738z" fill="#FFF"></path><mask id="d" fill="#fff"><use xlink:href="#c"></use></mask><path fill="#FFF" mask="url(#d)" d="M84.563 17.531h1.03v-8.25h-1.03zM92.469 14.438c0-.516-.14-1.032-.413-1.418-.275-.516-.687-.645-1.237-.645a1.47 1.47 0 00-1.24.645c-.273.386-.41.902-.41 1.418 0 .515.137 1.03.41 1.417.277.516.688.645 1.24.645.55 0 .962-.258 1.237-.773.274-.258.413-.774.413-1.29m1.375 0c0 .903-.275 1.676-.827 2.192-.548.644-1.375.902-2.336.902-.962 0-1.65-.258-2.2-.902-.55-.516-.825-1.29-.825-2.192 0-.902.275-1.675.825-2.19a3.431 3.431 0 012.338-.903c.962 0 1.65.258 2.198.902.552.516.827 1.29.827 2.191M98.537 15.34v-.902c-1.492 0-2.305.386-2.305 1.16 0 .257.134.515.27.644.137.13.408.258.678.258.272 0 .543-.129.816-.258.271-.129.406-.387.541-.644v-.258zm1.357 2.062h-1.22l-.137-.644c-.407.515-1.085.773-1.764.773-.541 0-1.085-.129-1.357-.515-.271-.387-.541-.774-.541-1.16 0-.774.27-1.29.948-1.676.679-.387 1.494-.516 2.714-.516v-.129c0-.773-.407-1.16-1.22-1.16-.678 0-1.085.129-1.63.387l-.27-.903c.544-.386 1.222-.515 2.172-.515 1.627 0 2.442.773 2.442 2.449v2.191c-.137.645-.137 1.032-.137 1.418zM106.051 15.069v-1.355c-.12-.246-.24-.492-.48-.739-.24-.246-.48-.246-.84-.246-.478 0-.839.246-1.078.616-.24.37-.36.862-.36 1.477 0 .616.12.985.36 1.355.239.37.6.615 1.078.615.36 0 .72-.123.96-.492.24-.493.36-.862.36-1.231zm1.199 2.34h-1.079v-.863c-.36.739-.959.985-1.798.985-.72 0-1.2-.246-1.68-.739-.478-.492-.6-1.23-.6-2.093 0-.862.24-1.6.721-2.216.479-.493 1.078-.74 1.677-.74.721 0 1.2.247 1.56.74V9.28h1.199v8.127zM118.112 14.438c0-.516-.137-1.032-.412-1.418-.275-.516-.688-.645-1.237-.645-.55 0-.963.258-1.238.645-.275.386-.412.902-.412 1.418 0 .515.137 1.03.412 1.417.275.516.688.645 1.238.645s.962-.258 1.237-.773c.275-.258.412-.774.412-1.29m1.513 0c0 .903-.275 1.676-.825 2.192-.55.644-1.375.902-2.337.902-.963 0-1.65-.258-2.2-.902-.55-.516-.826-1.29-.826-2.192 0-.902.276-1.675.826-2.19.55-.645 1.374-.903 2.337-.903.963 0 1.65.258 2.2.902.55.516.825 1.29.825 2.191M125.813 17.531h-1.323V14.18c0-1.032-.397-1.547-1.189-1.547-.397 0-.661.129-.927.387-.264.257-.395.644-.395 1.03v3.481h-1.323V11.602h1.19v.902c.133-.258.397-.516.66-.774.398-.257.795-.386 1.19-.386.53 0 1.059.129 1.455.515.53.387.662 1.032.662 1.934v3.738zM133.952 12.677h-1.216v2.738c0 .747.222.996.664.996h.552v.996c-.221.124-.552.124-.885.124-.44 0-.772-.124-.993-.498-.221-.249-.332-.87-.332-1.493v-2.863h-.773v-.995h.773v-.996l1.105-.373v1.369h1.215v.995h-.11zM141.281 17.531h-1.322V14.33c0-.985-.397-1.478-1.19-1.478-.66 0-1.058.246-1.322.862V17.531h-1.322v-8.25h1.322v3.448c.396-.616 1.057-.985 1.85-.985.53 0 1.059.123 1.323.492.397.37.661 1.109.661 1.847v3.448zM147.341 13.713c0-.395-.13-.79-.258-1.053-.257-.395-.517-.526-1.03-.526-.389 0-.776.131-1.033.526-.257.264-.387.658-.387 1.053h2.708zm1.159.395v.659h-3.867c0 .658.259 1.053.517 1.316.386.263.772.395 1.289.395.644 0 1.159-.132 1.547-.263l.256.921c-.514.264-1.159.395-1.933.395-.901 0-1.676-.263-2.19-.79-.516-.526-.775-1.316-.775-2.238 0-.921.259-1.711.774-2.238.515-.658 1.16-.921 2.063-.921.902 0 1.547.263 1.934.921.257.395.385 1.053.385 1.843z"></path></g></svg>
                    </a>
                    <a href="javascript:void(0)">
                        <svg viewBox="0 0 165 52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="M0 0h165v51.563H0z"></path><path d="M1.031 1.418v27.328c0 .774.645 1.418 1.29 1.418.643 0 1.03-.258 1.288-.387l24.88-13.664c.515-.258.773-.644.773-1.03 0-.388-.258-.774-.774-1.032L3.61.387C3.223.129 2.964 0 2.32 0c-.644 0-1.289.645-1.289 1.418" id="c"></path><path d="M.773 0l15.082 15.083 4.77-4.642L2.32.387C1.934.129 1.674 0 1.031 0H.773z" id="f"></path><path d="M.387 5.93l4.64 4.64 6.703-3.738c.516-.258.774-.644.774-1.031 0-.387-.258-.774-.774-1.031L5.156 1.16.386 5.93z" id="i"></path><path d="M.902 15.727c.13 0 .13 0 0 0 .772 0 1.032-.13 1.418-.387l18.176-9.926-4.64-4.64L.901 15.726z" id="l"></path><path id="o" d="M0 51.563h165V0H0z"></path><linearGradient x1="29.488%" y1="-6.086%" x2="55.051%" y2="92.166%" id="d"><stop stop-color="#006783" offset="0%"></stop><stop stop-color="#89D1CF" offset="100%"></stop></linearGradient><linearGradient x1="-7.621%" y1="15.985%" x2="91.444%" y2="86.47%" id="g"><stop stop-color="#23BAB6" offset="0%"></stop><stop stop-color="#DBE691" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="105.755%" x2="50%" y2="-3.127%" id="j"><stop stop-color="#FBBF72" offset="0%"></stop><stop stop-color="#F4895B" offset="100%"></stop></linearGradient><linearGradient x1="10.955%" y1="117.586%" x2="90.242%" y2="11.852%" id="m"><stop stop-color="#702A8E" offset="0%"></stop><stop stop-color="#E91C26" offset="100%"></stop></linearGradient></defs><g fill="none" fill-rule="evenodd"><g><mask id="b" fill="#fff"><use xlink:href="#a"></use></mask><path d="M159.844 51.563H5.156C2.32 51.563 0 49.241 0 46.407V5.157C0 2.32 2.32 0 5.156 0h154.688C162.68 0 165 2.32 165 5.157v41.25c0 2.834-2.32 5.156-5.156 5.156" fill="#000" mask="url(#b)"></path></g><g transform="translate(11.602 10.313)"><mask id="e" fill="#fff"><use xlink:href="#c"></use></mask><path d="M1.031 1.418v27.328c0 .774.645 1.418 1.29 1.418.643 0 1.03-.258 1.288-.387l24.88-13.664c.515-.258.773-.644.773-1.03 0-.388-.258-.774-.774-1.032L3.61.387C3.223.129 2.964 0 2.32 0c-.644 0-1.289.645-1.289 1.418" fill="url(#d)" mask="url(#e)"></path></g><g transform="translate(12.89 10.313)"><mask id="h" fill="#fff"><use xlink:href="#f"></use></mask><path d="M.773 0l15.082 15.083 4.77-4.642L2.32.387C1.934.129 1.674 0 1.031 0H.773z" fill="url(#g)" mask="url(#h)"></path></g><g transform="translate(28.36 19.336)"><mask id="k" fill="#fff"><use xlink:href="#i"></use></mask><path d="M.387 5.93l4.64 4.64 6.703-3.738c.516-.258.774-.644.774-1.031 0-.387-.258-.774-.774-1.031L5.156 1.16.386 5.93z" fill="url(#j)" mask="url(#k)"></path></g><g transform="translate(12.89 24.492)"><mask id="n" fill="#fff"><use xlink:href="#l"></use></mask><path d="M.902 15.727c.13 0 .13 0 0 0 .772 0 1.032-.13 1.418-.387l18.176-9.926-4.64-4.64L.901 15.726z" fill="url(#m)" mask="url(#n)"></path></g><g><path d="M127.101 30.035c0-1.289-1.031-2.191-2.448-2.191h-2.578v4.512h2.706a2.31 2.31 0 002.32-2.32zm-19.723 4.382l4.77-2.061c-.516-.903-1.29-1.162-1.934-1.162-1.933.13-3.093 2.193-2.836 3.223zm-9.41 1.161c0-.129 0-.257.13-.386V34.032c0-.13-.13-.387-.13-.516-.385-1.29-1.547-2.192-2.706-2.192-1.546 0-2.835 1.547-2.835 3.223 0 1.804 1.289 3.223 2.963 3.223 1.031.129 2.063-.775 2.578-2.192zm-11.472-.902c0-1.548-1.032-3.223-2.965-3.223-1.934 0-2.965 1.675-2.965 3.223 0 1.547 1.031 3.223 2.965 3.223 1.933 0 2.965-1.676 2.965-3.223zm-11.602 0c0-1.548-1.031-3.223-2.965-3.223-1.933 0-2.965 1.675-2.965 3.223 0 1.547 1.032 3.223 2.965 3.223 1.806 0 2.965-1.676 2.965-3.223zm66 1.03c-.514-.385-1.289-.514-2.061-.514-1.548 0-2.45.773-2.45 1.675 0 .903.902 1.417 1.805 1.417 1.29 0 2.706-1.03 2.706-2.578zm-39.316 3.997V23.72h2.32v15.984h-2.32zm29.134.258V25.653h2.19V39.96h-2.19zm-10.83 0V25.653h4.64c2.71 0 4.9 1.933 4.9 4.252 0 2.322-1.933 4.255-4.383 4.255h-2.836v5.672h-2.32v.13zm-13.406-1.547c-1.934-2.063-1.934-5.543 0-7.734 1.934-2.064 5.156-2.064 6.961 0 .645.644 1.031 1.547 1.418 2.448l-7.09 2.966a2.753 2.753 0 002.578 1.676c1.16 0 1.934-.387 2.709-1.547l1.933 1.289c-.259.258-.517.516-.644.772-2.193 2.193-5.931 2.193-7.865.13zm-54.527-.902c-3.223-3.223-3.094-8.508.129-11.86 1.677-1.675 3.738-2.449 5.93-2.449 2.062 0 4.126.774 5.671 2.32L62.134 27.2c-2.322-2.32-6.06-2.19-8.252.128-2.32 2.45-2.32 6.189 0 8.638 2.32 2.45 6.188 2.578 8.508.129.774-.773 1.033-1.805 1.16-2.836h-5.414v-2.32h7.606c.129.515.129 1.16.129 1.804 0 1.934-.774 3.868-2.063 5.157-1.418 1.418-3.48 2.191-5.542 2.191-2.321-.129-4.642-.902-6.317-2.578zm26.168-2.836c0-2.578 1.933-5.415 5.414-5.415 3.353 0 5.414 2.837 5.414 5.415S87.01 40.09 83.53 40.09c-3.35 0-5.414-2.836-5.414-5.414zm-11.602 0c0-2.578 1.934-5.415 5.414-5.415 3.352 0 5.414 2.837 5.414 5.415S75.41 40.09 71.93 40.09c-3.48 0-5.414-2.836-5.414-5.414zm68.708 4.64c-.644-.644-.902-1.546-.902-2.449 0-.773.258-1.546.772-2.062.903-.902 2.192-1.29 3.61-1.29.902 0 1.677.13 2.321.517 0-1.549-1.289-2.193-2.321-2.193-.901 0-1.804.517-2.19 1.42l-1.934-.776c.387-.9 1.417-2.578 3.995-2.578 1.289 0 2.578.388 3.351 1.29.775.903 1.033 1.933 1.033 3.352v5.414h-2.192v-.902c-.259.387-.774.644-1.161.902-.514.257-1.159.387-1.803.387-.775-.13-1.934-.387-2.579-1.031zm10.44 4.9l2.193-5.157-3.867-8.895h2.191l2.706 6.317 2.707-6.317h2.192l-5.929 14.051h-2.192zm-54.011-.517c-.645-.515-1.159-1.417-1.418-1.933l2.062-.904c.13.26.388.645.645 1.033.516.515 1.289 1.031 2.064 1.031.772 0 1.674-.387 2.191-1.031.387-.645.645-1.29.645-2.192v-.774c-1.547 1.933-4.77 1.677-6.576-.386-1.933-2.062-1.933-5.543 0-7.605 1.934-1.934 4.77-2.192 6.445-.388v-.901h2.192v9.668c0 2.449-.903 3.867-2.061 4.768-.775.644-1.934.904-2.967.904-1.158-.13-2.32-.516-3.222-1.29z" fill="#FFF"></path><path fill="#FFF" d="M147.34 41.637h-.13v-.13h.13-.13v.13zM147.34 41.637c0-.13 0-.13 0 0 0-.13 0-.13 0 0zM147.34 41.637v-.13zM147.34 41.507v.13zM147.34 41.637v-.13zM147.34 41.637c0-.13 0-.13 0 0m0 0c0-.13 0-.13 0 0M147.47 41.637c0-.13 0-.13 0 0zm0 0c0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0zM147.47 41.507v.13zM147.47 41.637v-.13zM147.47 41.507c0 .13 0 .13 0 0 0 .13 0 .13 0 0m0 .13c0-.13 0-.13 0 0 0-.13 0-.13 0 0M147.47 41.637c0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0M147.598 41.507c0 .13 0 .13 0 0 0 .13-.13.13 0 0-.13 0 0 0 0 0m0 .13c0-.13 0-.13 0 0-.13-.13-.13-.13 0 0-.13 0-.13 0 0 0M147.598 41.637v-.13.13-.13.13-.13zM147.598 41.637c0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0 0-.13 0-.13 0 0"></path><path fill="#FFF" d="M147.726 41.507h-.129.129v.13zM147.726 41.637v-.13zM147.726 41.637c0-.13 0-.13 0 0 0-.13 0-.13 0 0zM50.144 13.02c0-2.32 1.676-3.739 3.739-3.739 1.418 0 2.32.645 2.965 1.547l-1.032.645c-.386-.516-1.031-.903-1.933-.903-1.418 0-2.45 1.032-2.45 2.578 0 1.547 1.032 2.579 2.45 2.579.773 0 1.418-.387 1.675-.645v-1.16h-2.062v-1.16h3.48v2.707c-.644.773-1.675 1.289-2.964 1.289-2.192 0-3.868-1.547-3.868-3.738M58.523 16.629v-7.22h4.899v1.161h-3.739v1.805h3.61v1.16h-3.61v2.062h3.739v1.16zM67.031 16.629V10.57H64.84V9.41h5.672v1.16H68.32v6.059z"></path><mask id="p" fill="#fff"><use xlink:href="#o"></use></mask><path fill="#FFF" mask="url(#p)" d="M74.895 16.629h1.289V9.41h-1.29zM79.664 16.629V10.57h-2.192V9.41h5.672v1.16h-2.191v6.059zM93.329 13.02c0-1.547-.903-2.579-2.45-2.579-1.418 0-2.45 1.16-2.45 2.579 0 1.546.902 2.578 2.45 2.578 1.547 0 2.45-1.16 2.45-2.578m-6.059 0c0-2.192 1.547-3.739 3.737-3.739 2.191 0 3.74 1.547 3.74 3.739 0 2.19-1.549 3.738-3.74 3.738-2.19 0-3.737-1.676-3.737-3.738M101.191 16.629l-3.738-5.157v5.157h-1.289v-7.22h1.29l3.737 5.028V9.41h1.29v7.219z"></path></g></g></svg>
                    </a>
                    <a href="javascript:void(0)">
                        <svg viewBox="0 0 162 46" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M150.588 0H11.4313C10.9931 0 10.5549 0 10.1167 0C9.75467 0 9.39268 0 9.01164 0.0183908C8.21146 0.0367816 7.41127 0.091954 6.61108 0.22069C5.81089 0.349425 5.06786 0.588506 4.32483 0.937931C3.60085 1.28736 2.95308 1.74713 2.38151 2.29885C1.80995 2.85057 1.33365 3.47586 0.971657 4.17471C0.590615 4.87356 0.36199 5.6092 0.228625 6.38161C0.0762084 7.15402 0.0381042 7.92644 0.0190521 8.69885C0 9.06667 0 9.41609 0 9.78391C0 10.2069 0 10.6299 0 11.0529V35.8805C0 36.3034 0 36.7264 0 37.1494C0 37.5172 0 37.8483 0.0190521 38.2161C0.0381042 38.9885 0.0952605 39.7609 0.228625 40.5333C0.36199 41.3057 0.609667 42.0414 0.971657 42.7402C1.33365 43.4391 1.80995 44.0644 2.38151 44.6161C2.95308 45.1678 3.60085 45.6276 4.32483 45.977C5.04881 46.3448 5.81089 46.5655 6.61108 46.7126C7.41127 46.8598 8.21146 46.8966 9.01164 46.9149C9.37363 46.9149 9.75467 46.9333 10.1167 46.9333C10.5549 46.9333 10.9931 46.9333 11.4313 46.9333H150.588C151.026 46.9333 151.464 46.9333 151.883 46.9333C152.245 46.9333 152.626 46.9333 152.988 46.9149C153.789 46.8966 154.589 46.8414 155.389 46.7126C156.189 46.5655 156.932 46.3448 157.675 45.977C158.399 45.6276 159.047 45.1678 159.618 44.6161C160.19 44.0644 160.666 43.4391 161.028 42.7402C161.39 42.0414 161.638 41.3057 161.771 40.5333C161.924 39.7609 161.962 38.9885 162 38.2161C162 37.8483 162 37.5172 162 37.1494C162 36.7264 162 36.3034 162 35.8805V11.0345C162 10.6115 162 10.1885 162 9.76552C162 9.41609 162 9.04828 162 8.69885C161.981 7.92644 161.924 7.15402 161.771 6.38161C161.638 5.6092 161.39 4.87356 161.028 4.17471C160.666 3.47586 160.19 2.85057 159.618 2.29885C159.047 1.74713 158.399 1.28736 157.675 0.937931C156.932 0.588506 156.189 0.349425 155.389 0.22069C154.608 0.0735632 153.789 0.0367816 152.988 0.0183908C152.626 0.0183908 152.245 0 151.883 0C151.464 0 151.026 0 150.588 0Z" fill="#C0C1C1"></path><path d="M10.1357 45.9029C9.7737 45.9029 9.41171 45.9029 9.04972 45.8845C8.3829 45.8661 7.58271 45.8293 6.80157 45.7006C6.0776 45.5718 5.41077 45.3695 4.82016 45.0753C4.19144 44.7626 3.63893 44.3764 3.14357 43.8983C2.64822 43.4201 2.24812 42.8868 1.92424 42.2799C1.61941 41.6914 1.40983 41.0661 1.27647 40.3672C1.12405 39.5948 1.08595 38.804 1.08595 38.1971C1.08595 37.958 1.06689 37.1489 1.06689 37.1489V9.78332C1.06689 9.78332 1.08595 8.97413 1.08595 8.75344C1.105 8.14654 1.1431 7.35574 1.27647 6.58332C1.40983 5.86608 1.61941 5.24079 1.92424 4.65229C2.24812 4.04539 2.64822 3.49367 3.14357 3.0339C3.63893 2.55573 4.21049 2.15114 4.82016 1.85688C5.42982 1.56263 6.0776 1.34194 6.80157 1.2316C7.60176 1.08447 8.421 1.06608 9.04972 1.04769L10.1357 1.0293H151.883L152.969 1.04769C153.579 1.06608 154.398 1.10286 155.198 1.2316C155.922 1.36033 156.57 1.56263 157.199 1.85688C157.808 2.16953 158.38 2.55573 158.875 3.0339C159.371 3.51206 159.771 4.04539 160.095 4.65229C160.4 5.24079 160.609 5.86608 160.743 6.56493C160.876 7.30056 160.933 8.05459 160.952 8.75344C160.952 9.08447 160.952 9.4339 160.952 9.78332C160.952 10.2247 160.952 10.6293 160.952 11.0523V35.8799C160.952 36.3029 160.952 36.7075 160.952 37.1305C160.952 37.4983 160.952 37.8477 160.952 38.2155C160.933 38.896 160.876 39.65 160.743 40.3672C160.609 41.0845 160.4 41.7098 160.095 42.2983C159.771 42.9052 159.352 43.4385 158.875 43.8983C158.38 44.3764 157.808 44.781 157.199 45.0753C156.57 45.3879 155.941 45.5902 155.198 45.719C154.436 45.8477 153.636 45.8845 152.95 45.9029C152.607 45.9029 152.226 45.9213 151.883 45.9213H150.588L10.1357 45.9029Z" fill="#000"></path><path d="M60.0903 31.7045H54.4699L53.0982 35.3275H50.6214L56.1275 21.7734H58.4709L64.1103 35.3275H61.5192L60.0903 31.7045ZM55.1749 29.8654H59.3663L57.8612 25.9849C57.6517 25.4516 57.4421 24.8631 57.2516 24.201C57.061 24.7711 56.8705 25.3596 56.6609 25.9665L55.1749 29.8654Z" fill="#fff"></path><path d="M65.2153 27.7127C65.2153 26.9587 65.1963 26.1495 65.1391 25.2484H67.3873C67.4635 25.6714 67.5206 26.0943 67.5587 26.5357C68.4923 25.561 69.5592 25.0645 70.7595 25.0645C71.4644 25.0645 72.1122 25.23 72.7028 25.5794C73.2934 25.9104 73.7697 26.4622 74.1507 27.1978C74.5127 27.9334 74.7033 28.8714 74.7033 29.9932C74.7033 31.1702 74.4937 32.1817 74.0745 33.0093C73.6554 33.8369 73.0838 34.4806 72.3217 34.9036C71.5787 35.3265 70.7023 35.5472 69.7307 35.5472C69.0257 35.5472 68.3208 35.4369 67.6349 35.1978V39.3541L65.2344 39.5564V27.7127H65.2153ZM71.5025 32.8806C71.9979 32.2553 72.2265 31.3173 72.2265 30.1035C72.2265 28.9817 72.0169 28.1541 71.6168 27.6392C71.2167 27.1242 70.6833 26.8851 69.9974 26.8851C69.5401 26.8851 69.102 26.9955 68.7019 27.1978C68.3018 27.4185 67.9398 27.6943 67.5778 28.0438V33.4507C67.8255 33.561 68.0922 33.653 68.4161 33.7265C68.74 33.8001 69.0448 33.8185 69.3496 33.8185C70.3022 33.8185 71.0072 33.5058 71.5025 32.8806Z" fill="#fff"></path><path d="M76.2084 27.7127C76.2084 26.9587 76.1893 26.1495 76.1322 25.2484H78.3803C78.4565 25.6714 78.5137 26.0943 78.5518 26.5357C79.4853 25.561 80.5523 25.0645 81.7526 25.0645C82.4575 25.0645 83.1053 25.23 83.6959 25.5794C84.2865 25.9104 84.7628 26.4622 85.1438 27.1978C85.5058 27.9334 85.6963 28.8714 85.6963 29.9932C85.6963 31.1702 85.4868 32.1817 85.0676 33.0093C84.6485 33.8369 84.0769 34.4806 83.3148 34.9036C82.5718 35.3265 81.6954 35.5472 80.7237 35.5472C80.0188 35.5472 79.3139 35.4369 78.628 35.1978V39.3541L76.2274 39.5564V27.7127H76.2084ZM82.5146 32.8806C83.01 32.2553 83.2386 31.3173 83.2386 30.1035C83.2386 28.9817 83.0291 28.1541 82.629 27.6392C82.2289 27.1242 81.6954 26.8851 81.0095 26.8851C80.5523 26.8851 80.1141 26.9955 79.714 27.1978C79.3139 27.4185 78.9519 27.6943 78.5899 28.0438V33.4507C78.8376 33.561 79.1043 33.653 79.4282 33.7265C79.7521 33.8001 80.0569 33.8185 80.3617 33.8185C81.3144 33.8185 82.0193 33.5058 82.5146 32.8806Z" fill="#fff"></path><path d="M90.1927 34.7017C89.1639 34.15 88.3637 33.3591 87.8112 32.3293C87.2587 31.2994 86.9729 30.0856 86.9729 28.6879C86.9729 27.1614 87.2968 25.8741 87.9255 24.8074C88.5732 23.7408 89.4306 22.95 90.5356 22.4166C91.6406 21.8833 92.879 21.6074 94.2508 21.6074C95.051 21.6074 95.8321 21.6994 96.5561 21.8649C97.2991 22.0304 97.9659 22.2695 98.6137 22.5637L98.0041 24.3477C96.7276 23.7591 95.5082 23.4649 94.3651 23.4649C93.3934 23.4649 92.5361 23.6672 91.7931 24.0718C91.05 24.4764 90.4975 25.0649 90.0784 25.8373C89.6783 26.6097 89.4687 27.566 89.4687 28.6695C89.4687 29.6442 89.6211 30.4902 89.945 31.2442C90.2498 31.9982 90.7452 32.5867 91.4311 33.0281C92.0979 33.4695 92.9552 33.6902 93.9841 33.6902C94.4413 33.6902 94.9176 33.6534 95.3749 33.5798C95.8321 33.5063 96.2703 33.3959 96.6895 33.2488V30.5086H93.4506V28.6879H99.0329V34.389C98.2327 34.7568 97.3944 35.0327 96.4989 35.2166C95.6225 35.4189 94.7461 35.5109 93.8697 35.5109C92.4599 35.5293 91.2405 35.2534 90.1927 34.7017Z" fill="#fff"></path><path d="M107.644 35.3427C107.568 34.9564 107.511 34.4967 107.473 34.0001C107.111 34.4231 106.616 34.7909 106.025 35.0852C105.434 35.3794 104.768 35.5266 104.024 35.5266C103.415 35.5266 102.881 35.4162 102.386 35.1771C101.891 34.9564 101.491 34.607 101.205 34.1472C100.919 33.6875 100.767 33.1358 100.767 32.4737C100.767 31.499 101.129 30.7082 101.872 30.138C102.596 29.5495 103.815 29.2553 105.53 29.2553C106.177 29.2553 106.806 29.2921 107.435 29.384V29.1817C107.435 28.2806 107.244 27.6553 106.844 27.2875C106.444 26.9196 105.892 26.7357 105.149 26.7357C104.634 26.7357 104.101 26.8093 103.51 26.9564C102.919 27.1036 102.424 27.2691 101.986 27.4714L101.605 25.7794C102.024 25.5955 102.596 25.4116 103.3 25.2645C104.005 25.1173 104.729 25.0254 105.511 25.0254C106.406 25.0254 107.187 25.1541 107.816 25.43C108.445 25.6875 108.94 26.1472 109.302 26.7909C109.664 27.4346 109.835 28.299 109.835 29.4024V33.4116C109.835 33.8346 109.854 34.4599 109.912 35.3059H107.644V35.3427ZM106.215 33.4668C106.711 33.2277 107.13 32.9518 107.435 32.6024V30.7266C106.787 30.653 106.254 30.6162 105.834 30.6162C104.844 30.6162 104.158 30.7633 103.777 31.076C103.396 31.3886 103.205 31.7932 103.205 32.3266C103.205 32.8231 103.339 33.1909 103.624 33.43C103.891 33.6691 104.272 33.7978 104.748 33.7978C105.225 33.8162 105.72 33.6875 106.215 33.4668Z" fill="#fff"></path><path d="M111.912 32.9183V20.9827L114.294 20.7988V32.5137C114.294 32.9367 114.37 33.2494 114.522 33.4333C114.675 33.6172 114.922 33.7091 115.246 33.7091C115.399 33.7091 115.608 33.6724 115.875 33.5988L116.161 35.254C115.932 35.3459 115.665 35.4195 115.322 35.4563C114.998 35.5114 114.694 35.5298 114.389 35.5298C112.75 35.5298 111.912 34.6655 111.912 32.9183Z" fill="#fff"></path><path d="M117.875 32.9183V20.9827L120.257 20.7988V32.5137C120.257 32.9367 120.333 33.2494 120.485 33.4333C120.638 33.6172 120.886 33.7091 121.209 33.7091C121.362 33.7091 121.571 33.6724 121.838 33.5988L122.124 35.254C121.895 35.3459 121.629 35.4195 121.286 35.4563C120.962 35.5114 120.657 35.5298 120.352 35.5298C118.714 35.5298 117.875 34.6655 117.875 32.9183Z" fill="#fff"></path><path d="M132.05 30.5806H125.21C125.325 32.6955 126.373 33.7438 128.335 33.7438C128.83 33.7438 129.326 33.6886 129.84 33.5783C130.354 33.4679 130.85 33.3024 131.326 33.1185L131.841 34.7001C130.678 35.2518 129.364 35.5277 127.897 35.5277C126.792 35.5277 125.839 35.3254 125.077 34.9208C124.315 34.5162 123.743 33.9277 123.362 33.1737C122.981 32.4196 122.791 31.5001 122.791 30.415C122.791 29.2932 123 28.3369 123.4 27.5277C123.801 26.7185 124.372 26.1116 125.096 25.6886C125.82 25.2656 126.658 25.0449 127.611 25.0449C128.602 25.0449 129.421 25.2656 130.088 25.707C130.755 26.1484 131.25 26.7553 131.555 27.4909C131.879 28.2265 132.031 29.0541 132.031 29.9553V30.5806H132.05ZM129.707 29.1093C129.669 28.3001 129.459 27.6932 129.078 27.307C128.697 26.9024 128.202 26.7001 127.573 26.7001C126.963 26.7001 126.468 26.9024 126.049 27.307C125.649 27.7116 125.382 28.3185 125.268 29.1093H129.707Z" fill="#fff"></path><path d="M133.974 27.7863C133.974 27.2346 133.955 26.3886 133.898 25.2484H136.146C136.184 25.5242 136.223 25.8737 136.261 26.2599C136.299 26.6461 136.318 26.9587 136.337 27.2162C136.623 26.7748 136.889 26.407 137.156 26.0943C137.423 25.7817 137.747 25.5426 138.09 25.3587C138.452 25.1748 138.852 25.0645 139.309 25.0645C139.671 25.0645 139.995 25.1012 140.262 25.1748L139.957 27.1794C139.728 27.1058 139.461 27.0691 139.176 27.0691C138.604 27.0691 138.128 27.2162 137.709 27.492C137.289 27.7679 136.832 28.2277 136.356 28.8714V35.3633H133.974V27.7863Z" fill="#fff"></path><path d="M141.69 39.465C141.348 39.4098 141.062 39.3362 140.833 39.2627L141.271 37.5707C141.424 37.6075 141.633 37.6627 141.881 37.6994C142.129 37.7362 142.357 37.7546 142.586 37.7546C143.653 37.7546 144.434 37.0925 144.967 35.7868L145.12 35.419L141.271 25.2305H143.843L145.787 30.9132C146.111 31.8879 146.301 32.6236 146.396 33.1569C146.587 32.4213 146.796 31.704 147.044 30.9684L149.006 25.2305H151.426L147.578 35.4558C147.216 36.4305 146.815 37.2029 146.396 37.7914C145.977 38.3799 145.482 38.8213 144.91 39.1155C144.339 39.4098 143.653 39.5385 142.834 39.5385C142.414 39.5569 142.052 39.5385 141.69 39.465Z" fill="#fff"></path><path d="M50.6023 8.58594H54.9272L54.8129 9.59743H51.8788V11.5469H54.6414V12.4848H51.8788V14.6365H54.9653L54.851 15.648H50.6023V8.58594Z" fill="#fff"></path><path d="M57.8992 12.061L55.613 8.60352H57.0419L58.5851 11.1415L60.2045 8.60352H61.5953L59.3281 12.0242L61.7668 15.684H60.2998L58.547 12.907L56.7751 15.684H55.4415L57.8992 12.061Z" fill="#fff"></path><path d="M62.7385 8.58594H64.7199C65.6535 8.58594 66.3584 8.76985 66.8538 9.13766C67.3491 9.50548 67.5968 10.0388 67.5968 10.7193C67.5968 11.1974 67.4825 11.602 67.2729 11.9515C67.0443 12.3009 66.7394 12.5767 66.3393 12.7606C65.9393 12.9446 65.482 13.0365 64.9866 13.0365C64.7009 13.0365 64.377 12.9997 64.034 12.9446V15.6664H62.7766V8.58594H62.7385ZM65.9202 11.7492C66.1869 11.5101 66.3203 11.179 66.3203 10.7561C66.3203 10.3147 66.1869 10.002 65.9011 9.81812C65.6344 9.63421 65.2153 9.52387 64.6818 9.52387H64.015V12.0434C64.3389 12.0986 64.5675 12.117 64.739 12.117C65.2534 12.0986 65.6535 11.9882 65.9202 11.7492Z" fill="#fff"></path><path d="M68.8352 8.58594H70.0926V14.6181H73.1219L73.0076 15.6664H68.8161V8.58594H68.8352Z" fill="#fff"></path><path d="M75.0652 15.3171C74.5318 15.0229 74.1126 14.5999 73.8268 14.0666C73.5411 13.5332 73.4077 12.9079 73.4077 12.1907C73.4077 11.4367 73.5601 10.793 73.8649 10.2413C74.1698 9.68955 74.608 9.24817 75.1795 8.95391C75.7511 8.64127 76.4179 8.49414 77.1991 8.49414C77.9421 8.49414 78.5708 8.64127 79.1043 8.93552C79.6377 9.22977 80.0378 9.65276 80.3236 10.1861C80.6094 10.7194 80.7428 11.3447 80.7428 12.0436C80.7428 12.7976 80.5903 13.4597 80.2855 14.0298C79.9807 14.5815 79.5425 15.0229 78.9709 15.3171C78.3993 15.6114 77.7325 15.7769 76.9704 15.7769C76.2274 15.7585 75.5987 15.6114 75.0652 15.3171ZM78.3422 14.4528C78.7042 14.2321 78.9709 13.9011 79.1424 13.4965C79.3138 13.0919 79.4091 12.6321 79.4091 12.1171C79.4091 11.6022 79.3329 11.1608 79.1805 10.7562C79.0281 10.3516 78.7804 10.039 78.4375 9.79989C78.0945 9.56081 77.6563 9.45046 77.1229 9.45046C76.6084 9.45046 76.1702 9.5792 75.8083 9.81828C75.4463 10.0574 75.1795 10.37 75.0081 10.7746C74.8366 11.1792 74.7413 11.6206 74.7413 12.0987C74.7413 12.6137 74.8175 13.0735 74.989 13.4781C75.1605 13.8827 75.4082 14.1953 75.7702 14.4344C76.1131 14.6735 76.5513 14.7838 77.0657 14.7838C77.5611 14.8022 77.9802 14.6735 78.3422 14.4528Z" fill="#fff"></path><path d="M82.1336 8.58594H84.4198C85.2581 8.58594 85.8868 8.75145 86.325 9.0641C86.7632 9.39513 86.9728 9.8549 86.9728 10.4434C86.9728 10.8112 86.8966 11.1423 86.7442 11.4365C86.5918 11.7308 86.4012 11.9515 86.1726 12.1354C85.944 12.3193 85.7154 12.448 85.4677 12.54L87.7158 15.6664H86.2488L84.3436 12.8526H83.4101V15.6664H82.1526V8.58594H82.1336ZM84.115 11.9331C84.4198 11.9331 84.6866 11.8779 84.9342 11.7675C85.1629 11.6572 85.3534 11.4917 85.4867 11.271C85.6201 11.0687 85.6773 10.8112 85.6773 10.5354C85.6773 10.1859 85.5629 9.92846 85.3343 9.76295C85.1057 9.59743 84.7628 9.52387 84.3246 9.52387H83.4101V11.9515H84.115V11.9331Z" fill="#fff"></path><path d="M88.7065 8.58594H93.0314L92.9171 9.59743H89.983V11.5469H92.7456V12.4848H89.983V14.6365H93.0695L92.9552 15.648H88.7065V8.58594Z" fill="#fff"></path><path d="M97.7372 8.58594H98.9947V15.6664H97.7372V8.58594Z" fill="#fff"></path><path d="M102.348 9.61582H100.081L100.195 8.58594H105.892L105.777 9.61582H103.624V15.6664H102.367V9.61582H102.348Z" fill="#fff"></path><path d="M111.379 15.3171C110.845 15.0229 110.426 14.5999 110.14 14.0666C109.854 13.5332 109.721 12.9079 109.721 12.1907C109.721 11.4367 109.873 10.793 110.178 10.2413C110.483 9.68955 110.921 9.24817 111.493 8.95391C112.064 8.64127 112.731 8.49414 113.512 8.49414C114.255 8.49414 114.884 8.64127 115.418 8.93552C115.951 9.22977 116.351 9.65276 116.637 10.1861C116.923 10.7194 117.056 11.3447 117.056 12.0436C117.056 12.7976 116.904 13.4597 116.599 14.0298C116.294 14.5815 115.856 15.0229 115.284 15.3171C114.713 15.6114 114.046 15.7769 113.284 15.7769C112.56 15.7585 111.912 15.6114 111.379 15.3171ZM114.656 14.4528C115.018 14.2321 115.284 13.9011 115.456 13.4965C115.627 13.0919 115.722 12.6321 115.722 12.1171C115.722 11.6022 115.646 11.1608 115.494 10.7562C115.341 10.3516 115.094 10.039 114.751 9.79989C114.408 9.56081 113.97 9.45046 113.436 9.45046C112.922 9.45046 112.484 9.5792 112.122 9.81828C111.76 10.0574 111.493 10.37 111.321 10.7746C111.15 11.1792 111.055 11.6206 111.055 12.0987C111.055 12.6137 111.131 13.0735 111.302 13.4781C111.474 13.8827 111.721 14.1953 112.083 14.4344C112.426 14.6735 112.865 14.7838 113.379 14.7838C113.874 14.8022 114.313 14.6735 114.656 14.4528Z" fill="#fff"></path><path d="M118.447 8.58594H119.895L123.515 14.0664C123.477 13.5514 123.477 13.0733 123.477 12.6319V8.58594H124.658V15.6664H123.248L119.571 10.094C119.609 10.7193 119.628 11.2894 119.628 11.7675V15.6664H118.447V8.58594Z" fill="#fff"></path><path fillrule="evenodd" cliprule="evenodd" d="M32.8267 8.52148H19.2997C12.9363 8.52148 10.5929 10.7652 10.5929 16.9261V29.9836C10.5929 36.1261 12.9172 38.3882 19.2997 38.3882H32.8267C39.1901 38.3882 41.5335 36.1445 41.5335 29.9836V16.9261C41.5335 10.7652 39.2091 8.52148 32.8267 8.52148Z" fill="#C8102E"></path><path d="M16.7467 23.4598H17.566V27.3586H16.7467V25.777H14.8987V27.3586H14.0794V23.4598H14.8987V25.0414H16.7467V23.4598ZM21.3573 25.6851C21.3573 26.3104 21.0335 26.6598 20.4428 26.6598C19.8522 26.6598 19.5093 26.3104 19.5093 25.6667V23.4598H18.69V25.6851C18.69 26.7885 19.3188 27.4138 20.4238 27.4138C21.5288 27.4138 22.1766 26.7701 22.1766 25.6483V23.4414H21.3573V25.6851ZM30.8453 26.1448L29.9308 23.4598H29.264L28.3495 26.1448L27.454 23.4598H26.5776L27.9875 27.3586H28.6733L29.5878 24.8023L30.5023 27.3586H31.1882L32.5981 23.4598H31.7407L30.8453 26.1448ZM34.046 25.6851H35.5321V24.9678H34.046V24.177H36.218V23.4598H33.2458V27.3586H36.2942V26.6414H34.046V25.6851ZM37.2849 27.3586H38.0851V23.4598H37.2849V27.3586ZM23.796 26.5494L23.434 27.3586H22.5957L24.3676 23.4598H25.0915L26.8634 27.3586H26.0061L25.6441 26.5494H23.796ZM24.1008 25.8322H25.3392L24.7105 24.4345L24.1008 25.8322Z" fill="#fff"></path><path d="M26.0823 18.4948C23.2435 18.4948 20.9382 16.2695 20.9382 13.5293H21.6622C21.6622 15.8833 23.6436 17.796 26.0823 17.796C28.5209 17.796 30.5024 15.8833 30.5024 13.5293H31.2263C31.2263 16.2511 28.921 18.4948 26.0823 18.4948Z" fill="#fff"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
