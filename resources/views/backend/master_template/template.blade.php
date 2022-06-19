<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- metatags --}}
    @include('backend.includes.metatags')
    {{-- css files --}}
    @include('backend.includes.styles')
  </head>

  <body>

    {{-- left panel --}}
     @include('backend.includes.leftpanel')
    {{-- head panel --}}
     @include('backend.includes.headpanel')
    {{-- right panel --}}
     @include('backend.includes.rightpanel')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('content')
      {{-- footer --}}
       @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    {{-- scripts --}}
     @include('backend.includes.scripts')
  </body>
</html>
