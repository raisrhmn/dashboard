<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
    <ul class="kt-menu__nav ">
        @foreach (config('dashauto.menu') as $idx => $menu)
        @if (!isset($menu['submenu']))
        <li class="kt-menu__item  kt-menu__item{{ url()->current() == route($menu['url']) ? '--active' : '' }}" aria-haspopup="true">
            <a href="{{ isset($menu['url']) && $menu['url'] ? route($menu['url']) : '#' }}" class="kt-menu__link ">
                <i class="kt-menu__link-icon {{$menu['icon']}}"></i>
                <span class="kt-menu__link-text">{{$menu['text']}}</span>
            </a>
        </li>
        @endif
        @if (isset($menu['submenu']) && $menu['submenu'])
        <li class="kt-menu__item  kt-menu__item--submenu {{ request()->segment(1) == $menu['module'] ? 'kt-menu__item--open' : '' }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
            <a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-analytics-2"></i>
                <span class="kt-menu__link-text">{{$menu['text']}}</span>
                <i class="kt-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                <ul class="kt-menu__subnav">
                    @foreach ($menu['submenu'] as $sm)
                    <li class="kt-menu__item" aria-haspopup="true">
                        <a href="{{ route($sm['url']) }}" class="kt-menu__link ">
                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                            <span class="kt-menu__link-text">{{$sm['text']}}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
        @endif
        @endforeach
    </ul>
</div>