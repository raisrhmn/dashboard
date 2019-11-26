<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">
    <div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
        <div class="kt-header__brand-logo">
            <a href="index.html">
                <img alt="Logo" src="https://ui-avatars.com/api/?size=50&name=Alto&background=0D8ABC&color=fff" />
            </a>
        </div>
    </div>

    <h3 class="kt-header__title kt-grid__item">
        Performance Dashboard
    </h3>

    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
            class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
        </div>
    </div>

    <div class="kt-header__topbar">
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                <span class="kt-hidden kt-header__topbar-username">{{auth()->user()->name}}</span>
                <img class="kt-hidden" alt="Pic" src="https://i.pravatar.cc/50" />
                <span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                    style="background-image: url(https://i.pravatar.cc/300)">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="https://i.pravatar.cc/300" />
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">ALT</span>
                    </div>
                    <div class="kt-user-card__name">
                        {{auth()->user()->name}}
                    </div>
                </div>
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Profile
                            </div>
                            <div class="kt-notification__item-time">
                                Account settings and more
                            </div>
                        </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                        <a class="btn btn-label btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>