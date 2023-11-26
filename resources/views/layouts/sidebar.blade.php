<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{!! url('/') !!}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{!! asset('img/logo/small-icon.png') !!}" style="width: 40px;">
              </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">سامانه اورهال</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-divider mt-0"></div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item active open">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="dashboar">دشبورد</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div data-i18n="dashboar">درخواست ها</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Pages">پروفایل کاربری</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{!! route('user.show.info') !!}" class="menu-link">
                        <div data-i18n="Profile">اطلاعات هویتی</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Teams">مدارک</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Projects">سلامت جسمانی</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Connections">اطلاعات بانکی</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-bell"></i>
                <div data-i18n="Invoice">اعلان ها</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{!! route('user.notification.unread') !!}" class="menu-link">
                        <div data-i18n="List">خوانده نشده</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Preview">خوانده شده</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Edit">همه</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->
