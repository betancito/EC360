<!--begin::Aside-->
<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
<!--begin::Logo-->
<div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
    <a href="index.html">
        <img alt="Logo" src="{{asset('assets/img/Logo-alone-inverted.png')}}" class="h-40px" />
    </a>
</div>
<!--end::Logo-->
<!--begin::Nav-->
<div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
    <!--begin::Aside menu-->
    <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-y scroll-lg-ms d-flex"
        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: trur}"
        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
        <div id="kt_aside_menu"
            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6 my-auto"
            data-kt-menu="true">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="right-start" class="menu-item here show py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <i class="ki-duotone ki-home-2 fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link active" href="index.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Default</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
        </div>
    </div>
    <!--end::Aside menu-->
</div>
<!--end::Nav-->
<!--begin::Footer-->
<div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
    <!--begin::Menu-->
    <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip"
        data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
        <button type="button" class="btn btn-custom" data-kt-menu-trigger="click"
            data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
            <i class="ki-duotone ki-entrance-left fs-2x">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </button>
        <!--begin::Menu 2-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">New Ticket</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">New Customer</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                data-kt-menu-placement="right-start">
                <!--begin::Menu item-->
                <a href="#" class="menu-link px-3">
                    <span class="menu-title">New Group</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--end::Menu item-->
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Admin Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Staff Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Member Group</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">New Contact</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator mt-3 opacity-75"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
    </div>
    <!--end::Menu-->
</div>
<!--end::Footer-->
</div>
<!--end::Aside-->
