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
        <!-- Dashboards -->
        <li class="menu-item">
        <li class="menu-item active">
            <a href="{!! url('/register') !!}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="register">ثبت نام</div>
            </a>
        </li>

    </ul>
</aside>
<!-- / Menu -->
