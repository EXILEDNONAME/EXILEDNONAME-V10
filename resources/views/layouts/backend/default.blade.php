<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.backend.__includes.head')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <a href="index.html"><img alt="Logo" src="/assets/backend/media/logos/logo-light.png"></a>

    <div class="d-flex align-items-center">
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>

      <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
        <span></span>
      </button>

      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24"/>
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
            </g>
          </svg>
        </span>
      </button>

    </div>
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">

      @include('layouts.backend.__includes.sidebar-default')

      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            @include('layouts.backend.__includes.topbar-left')
            @include('layouts.backend.__includes.topbar-right')
          </div>
        </div>

        <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
          @include('layouts.backend.__includes.breadcrumb')
          <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
              @stack('content')
            </div>
          </div>
        </div>

        @include('layouts.backend.__includes.footer')
      </div>
    </div>
  </div>

  @include('layouts.backend.__includes.panel-chat')
  @include('layouts.backend.__includes.scroll-top')
  @include('layouts.backend.__includes.sticky-toolbar')
  @include('layouts.backend.__includes.panel-demo')
  @include('layouts.backend.__includes.js')

</body>
</html>
