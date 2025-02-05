<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Mirrored from separateweb.com/niwax-template/web-design-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 04:56:15 GMT -->

  {{--  styles  --}}
  @include('frontend.layouts.partials.styles')

  <body>

    <!--Start Preloader -->
    @include('frontend.layouts.partials.preloader')
    <!--End Preloader -->

    <!--Start Header -->
    @include('frontend.layouts.partials.header')
    <!--End Header -->

    <!--Start sidebar -->
    @include('frontend.layouts.partials.sidebar')
    <!--end sidebar -->

    <!--Start content-->
    @yield('content')
    <!--End content-->

    <!--Start Footer-->
    @include('frontend.layouts.partials.footer')
    <!--End Footer-->

    <!-- js placed at the end of the document so the pages load faster -->
    @include('frontend.layouts.partials.scripts')

  </body>

  <!-- Mirrored from separateweb.com/niwax-template/web-design-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 04:56:51 GMT -->
</html>
