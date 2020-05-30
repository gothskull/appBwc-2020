

    <!-- begin::Head -->
    @include('partials.head')
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        @include('partials.header-mobile')

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->
                <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
                {{-- @include('partials.aside') --}}

                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                   @include('partials.header')

                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        @include('partials.subheader')

                        <!-- begin:: Contenido -->
                        @yield('content')

                        <!-- end:: Contenido -->
                    </div>

                    <!-- begin:: Footer -->
                    @include('partials.footer')

                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Quick Panel -->
        @include('partials.quick-panel')

        <!-- end::Quick Panel -->

        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- end::Scrolltop -->

        <!-- begin::Sticky Toolbar -->
        @include('partials.toolbar')
        

        <!-- end::Sticky Toolbar -->

        <!-- begin::Demo Panel -->
        @include('partials.demo-panel')
        

        <!-- end::Demo Panel -->

        <!--Begin:: Chat-->
        @include('partials.chat')
        

        <!--ENd:: Chat-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        @include('partials.scripts')
        <script src="{{ asset('js/custom.js') }} "></script>

    </body>

</html>