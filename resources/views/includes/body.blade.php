<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        @include('includes.aside-left')
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            @include('includes.subheader')
            <div class="m-content">
                <!-- Begin::Content -->
                <div class="row">
                    @yield('content')
                </div>
                <!-- end::Content -->

            </div>
        </div>
    </div>
    <!-- end:: Body -->

    @include('includes.footer')
</div>
<!-- end:: Page -->
@include('includes.quick-sidebar')
@include('includes.scroll-to-top')
{{-- @include('includes.quick-nav') --}}
@include('includes.scripts')
@include('includes.snippets')


</body>
{{-- CSS assets in head section --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

{{-- ... a lot of main HTML code ... --}}

{{-- JS assets at the bottom --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
{{-- ...Some more scripts... --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@yield('scripts')
</html>