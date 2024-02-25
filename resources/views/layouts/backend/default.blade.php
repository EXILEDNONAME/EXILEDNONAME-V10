<!DOCTYPE html>
<html lang="en" >
@include('layouts.backend.__includes.head')

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

  <!--begin::Main-->
  <!--begin::Header Mobile-->
  <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
    <!--begin::Logo-->
    <a href="index.html">
      <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
      <!--begin::Aside Mobile Toggle-->
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
      <!--end::Aside Mobile Toggle-->

      <!--begin::Header Menu Mobile Toggle-->
      <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
        <span></span>
      </button>
      <!--end::Header Menu Mobile Toggle-->

      <!--begin::Topbar Mobile Toggle-->
      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"/>
            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
          </g>
        </svg><!--end::Svg Icon--></span>		</button>
        <!--end::Topbar Mobile Toggle-->
      </div>
      <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
          <!--begin::Brand-->
          <div class="brand flex-column-auto " id="kt_brand">
            <!--begin::Logo-->
            <a href="index.html" class="brand-logo">
              <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
            </a>
            <!--end::Logo-->

            <!--begin::Toggle-->
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
              <span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                  <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                </g>
              </svg><!--end::Svg Icon--></span>
            </button>
            <!--end::Toolbar-->
          </div>
          <!--end::Brand-->
          <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" 			>
              <ul class="menu-nav">
                <li class="menu-item" aria-haspopup="true"><a href="index.html" class="menu-link">
                  <i class="menu-icon flaticon-home">
                  </i><span class="menu-text"> Dashboard </span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--end::Aside-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header  header-fixed " >
            <!--begin::Container-->
            <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
              <!--begin::Header Menu Wrapper-->
              <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                  <!--begin::Header Nav-->
                  <ul class="menu-nav ">
                    <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active"  data-menu-toggle="click" aria-haspopup="true">
                      <a  href="javascript:;" class="menu-link menu-toggle"><span class="menu-text">Pages</span><i class="menu-arrow"></i></a>
                      <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
              </div>
              <!--end::Header Menu Wrapper-->

              <!--begin::Topbar-->
              @include('layouts.backend.__includes.topbar')
              <!--end::Topbar-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->

          <!--begin::Content-->
          <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Subheader-->
            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
              <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">

                  <!--begin::Page Heading-->
                  <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                      Empty Page	                	            </h5>
                      <!--end::Page Title-->

                      <!--begin::Breadcrumb-->
                      <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                          <a href="" class="text-muted">
                            General	                        	</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                              Empty Page	                        	</a>
                            </li>
                          </ul>
                          <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page Heading-->
                      </div>
                      <!--end::Info-->

                      <!--begin::Toolbar-->

                        <!--end::Toolbar-->
                      </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                      <!--begin::Container-->
                      <div class=" container ">
                        <p>Page content goes here...</p>
                      </div>
                      <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                  </div>
                  <!--end::Content-->

                  <!--begin::Footer-->
                  @include('layouts.backend.__includes.footer')
                  <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Page-->
            </div>
            <!--end::Main-->





            <!-- begin::User Panel-->

                              <!-- end::User Panel-->


                              <!--begin::Quick Cart-->

                              <!--end::Quick Cart-->

                              <!--begin::Quick Panel-->
                              
                                      <!--end::Quick Panel-->

                                      <!--begin::Chat Panel-->
                                      <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <!--begin::Card-->
                                            <div class="card card-custom">
                                              <!--begin::Header-->
                                              <div class="card-header align-items-center px-4 py-3">
                                                <div class="text-left flex-grow-1">
                                                  <!--begin::Dropdown Menu-->
                                                  <div class="dropdown dropdown-inline">
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Communication/Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                          <polygon points="0 0 24 0 24 24 0 24"/>
                                                          <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                          <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                        </g>
                                                      </svg><!--end::Svg Icon--></span>                            </button>
                                                      <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                              <span class="navi-text">New Group</span>
                                                            </a>
                                                          </li>
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                              <span class="navi-text">Contacts</span>
                                                            </a>
                                                          </li>
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                              <span class="navi-text">Groups</span>
                                                              <span class="navi-link-badge">
                                                                <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                              </span>
                                                            </a>
                                                          </li>
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                              <span class="navi-text">Calls</span>
                                                            </a>
                                                          </li>
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                              <span class="navi-text">Settings</span>
                                                            </a>
                                                          </li>

                                                          <li class="navi-separator my-3"></li>

                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                              <span class="navi-text">Help</span>
                                                            </a>
                                                          </li>
                                                          <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                              <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                              <span class="navi-text">Privacy</span>
                                                              <span class="navi-link-badge">
                                                                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                              </span>
                                                            </a>
                                                          </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                      </div>
                                                    </div>
                                                    <!--end::Dropdown Menu-->
                                                  </div>
                                                  <div class="text-center flex-grow-1">
                                                    <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                                                    <div>
                                                      <span class="label label-dot label-success"></span>
                                                      <span class="font-weight-bold text-muted font-size-sm">Active</span>
                                                    </div>
                                                  </div>
                                                  <div class="text-right flex-grow-1">
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"  data-dismiss="modal">
                                                      <i class="ki ki-close icon-1x"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="card-body">
                                                  <!--begin::Scroll-->
                                                  <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                                                    <!--begin::Messages-->
                                                    <div class="messages">
                                                      <!--begin::Message In-->
                                                      <div class="d-flex flex-column mb-5 align-items-start">
                                                        <div class="d-flex align-items-center">
                                                          <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_12.jpg"/>
                                                          </div>
                                                          <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">2 Hours</span>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                          How likely are you to recommend our company
                                                          to your friends and family?
                                                        </div>
                                                      </div>
                                                      <!--end::Message In-->

                                                      <!--begin::Message Out-->
                                                      <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                          <div>
                                                            <span class="text-muted font-size-sm">3 minutes</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                          </div>
                                                          <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_21.jpg"/>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                          Hey there, we’re just writing to let you know
                                                          that you’ve been subscribed to a repository on GitHub.
                                                        </div>
                                                      </div>
                                                      <!--end::Message Out-->

                                                      <!--begin::Message In-->
                                                      <div class="d-flex flex-column mb-5 align-items-start">
                                                        <div class="d-flex align-items-center">
                                                          <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_21.jpg"/>
                                                          </div>
                                                          <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                          Ok, Understood!
                                                        </div>
                                                      </div>
                                                      <!--end::Message In-->

                                                      <!--begin::Message Out-->
                                                      <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                          <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                          </div>
                                                          <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_21.jpg"/>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                          You’ll receive notifications for all issues, pull requests!
                                                        </div>
                                                      </div>
                                                      <!--end::Message Out-->

                                                      <!--begin::Message In-->
                                                      <div class="d-flex flex-column mb-5 align-items-start">
                                                        <div class="d-flex align-items-center">
                                                          <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_12.jpg"/>
                                                          </div>
                                                          <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                          You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                                        </div>
                                                      </div>
                                                      <!--end::Message In-->

                                                      <!--begin::Message Out-->
                                                      <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                          <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                          </div>
                                                          <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_21.jpg"/>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                          Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed
                                                        </div>
                                                      </div>
                                                      <!--end::Message Out-->

                                                      <!--begin::Message In-->
                                                      <div class="d-flex flex-column mb-5 align-items-start">
                                                        <div class="d-flex align-items-center">
                                                          <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_12.jpg"/>
                                                          </div>
                                                          <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                          Most purchased Business courses during this sale!
                                                        </div>
                                                      </div>
                                                      <!--end::Message In-->

                                                      <!--begin::Message Out-->
                                                      <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                          <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                          </div>
                                                          <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="/assets/backend/media/users/300_21.jpg"/>
                                                          </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                          Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                                                        </div>
                                                      </div>
                                                      <!--end::Message Out-->
                                                    </div>
                                                    <!--end::Messages-->
                                                  </div>
                                                  <!--end::Scroll-->
                                                </div>
                                                <!--end::Body-->

                                                <!--begin::Footer-->
                                                <div class="card-footer align-items-center">
                                                  <!--begin::Compose-->
                                                  <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                                                  <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="mr-3">
                                                      <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                                                      <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                                                    </div>
                                                    <div>
                                                      <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                                    </div>
                                                  </div>
                                                  <!--begin::Compose-->
                                                </div>
                                                <!--end::Footer-->
                                              </div>
                                              <!--end::Card-->
                                            </div>
                                          </div>
                                        </div>
                                        <!--end::Chat Panel-->

                                        <!--begin::Scrolltop-->
                                        <div id="kt_scrolltop" class="scrolltop">
                                          <span class="svg-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <polygon points="0 0 24 0 24 24 0 24"/>
                                              <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
                                              <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                          </svg><!--end::Svg Icon--></span></div>
                                          <!--end::Scrolltop-->

                                          <!--begin::Sticky Toolbar-->
                                          <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
                                            <!--begin::Item-->
                                            <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip"  title="Check out more demos" data-placement="right">
                                              <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
                                                <i class="flaticon2-drop"></i>
                                              </a>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
                                              <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/preview/demo1/builder.html" target="_blank">
                                                <i class="flaticon2-gear"></i>
                                              </a>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
                                              <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
                                                <i class="flaticon2-telegram-logo"></i>
                                              </a>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
                                              <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
                                                <i class="flaticon2-chat-1"></i>
                                              </a>
                                            </li>
                                            <!--end::Item-->
                                          </ul>
                                          <!--end::Sticky Toolbar-->
                                          <!--begin::Demo Panel-->
                                          <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
                                            <!--begin::Header-->
                                            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
                                              <h4 class="font-weight-bold m-0">
                                                Select A Demo
                                              </h4>
                                              <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                                                <i class="ki ki-close icon-xs text-muted"></i>
                                              </a>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Content-->
                                            <div class="offcanvas-content">
                                              <!--begin::Wrapper-->
                                              <div class="offcanvas-wrapper mb-5 scroll-pull">
                                                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5><div class="overlay rounded-lg mb-8 offcanvas-demo ">
                                                  <div class="overlay-wrapper rounded-lg">
                                                    <img src="/assets/backend//../../../../../../doc//assets/backend/img/demos/demo30.png" alt="" class="w-100"/>
                                                  </div>
                                                  <div class="overlay-layer">
                                                    <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled" >Coming soon</a>

                                                  </div>
                                                </div>		</div>
                                                <!--end::Wrapper-->

                                                <!--begin::Purchase-->
                                                <div class="offcanvas-footer">
                                                  <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">
                                                    Buy Metronic Now!
                                                  </a>
                                                </div>
                                                <!--end::Purchase-->
                                              </div>
                                              <!--end::Content-->
                                            </div>
                                            <!--end::Demo Panel-->

                                            <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
                                            <!--begin::Global Config(global config for global JS scripts)-->
                                            <script>
                                            var KTAppSettings = {
                                              "breakpoints": {
                                                "sm": 576,
                                                "md": 768,
                                                "lg": 992,
                                                "xl": 1200,
                                                "xxl": 1400
                                              },
                                              "colors": {
                                                "theme": {
                                                  "base": {
                                                    "white": "#ffffff",
                                                    "primary": "#3699FF",
                                                    "secondary": "#E5EAEE",
                                                    "success": "#1BC5BD",
                                                    "info": "#8950FC",
                                                    "warning": "#FFA800",
                                                    "danger": "#F64E60",
                                                    "light": "#E4E6EF",
                                                    "dark": "#181C32"
                                                  },
                                                  "light": {
                                                    "white": "#ffffff",
                                                    "primary": "#E1F0FF",
                                                    "secondary": "#EBEDF3",
                                                    "success": "#C9F7F5",
                                                    "info": "#EEE5FF",
                                                    "warning": "#FFF4DE",
                                                    "danger": "#FFE2E5",
                                                    "light": "#F3F6F9",
                                                    "dark": "#D6D6E0"
                                                  },
                                                  "inverse": {
                                                    "white": "#ffffff",
                                                    "primary": "#ffffff",
                                                    "secondary": "#3F4254",
                                                    "success": "#ffffff",
                                                    "info": "#ffffff",
                                                    "warning": "#ffffff",
                                                    "danger": "#ffffff",
                                                    "light": "#464E5F",
                                                    "dark": "#ffffff"
                                                  }
                                                },
                                                "gray": {
                                                  "gray-100": "#F3F6F9",
                                                  "gray-200": "#EBEDF3",
                                                  "gray-300": "#E4E6EF",
                                                  "gray-400": "#D1D3E0",
                                                  "gray-500": "#B5B5C3",
                                                  "gray-600": "#7E8299",
                                                  "gray-700": "#5E6278",
                                                  "gray-800": "#3F4254",
                                                  "gray-900": "#181C32"
                                                }
                                              },
                                              "font-family": "Poppins"
                                            };
                                            </script>
                                            <!--end::Global Config-->

                                            <!--begin::Global Theme Bundle(used by all pages)-->
                                            <script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.6"></script>
                                            <script src="/assets/backend/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
                                            <script src="/assets/backend/js/scripts.bundle.js?v=7.0.6"></script>
                                            <!--end::Global Theme Bundle-->

                                            <!--begin::Page Vendors(used by this page)-->
                                            <script src="/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
                                            <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM?v=7.0.6"></script>
                                            <script src="/assets/backend/plugins/custom/gmaps/gmaps.js?v=7.0.6"></script>
                                            <!--end::Page Vendors-->

                                            <!--begin::Page Scripts(used by this page)-->
                                            <script src="/assets/backend/js/pages/widgets.js?v=7.0.6"></script>
                                            <!--end::Page Scripts-->
                                          </body>
                                          <!--end::Body-->
                                          </html>
