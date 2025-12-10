<div class="kt-sidebar h-full bg-background fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]" data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start top-0 bottom-0" id="sidebar">

    <div class="kt-sidebar-header bg-[#001529] hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
        <a class="dark:hidden" href="html/demo1.html">
        <img class="default-logo h-[25px] max-w-none" src="assets/images/logo.svg"/>
        <img class="small-logo h-[25px] max-w-none" src="assets/images/mini-logo.svg"/>
        </a>
        <a class="hidden dark:block" href="html/demo1.html">
        <img class="default-logo h-[25px] max-w-none" src="assets/images/default-logo-dark.svg"/>
        <img class="small-logo h-[25px] max-w-none" src="assets/images/mini-logo.svg"/>
        </a>
        <button class="kt-btn kt-btn-outline kt-btn-icon size-[30px] absolute start-full top-2/4 -translate-y-2/4" data-kt-toggle="body" data-kt-toggle-class="kt-sidebar-collapse" id="sidebar_toggle">
        <i class="fa-solid fa-angle-right kt-toggle-active:rotate-180 transition-all duration-300 rtl:translate rtl:rotate-180 rtl:kt-toggle-active:rotate-0">
        </i>
        </button>
    </div>

    <div class="kt-sidebar-content flex flex-col grow shrink-0 border-e border-e-border" id="sidebar_content">
        <div class="overflow-auto grow flex-1 shrink-0 flex" data-kt-scrollable="true"
            data-kt-scrollable-dependencies="#sidebar_header" data-kt-scrollable-height="auto"
            data-kt-scrollable-offset="0px" data-kt-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
            <div class="kt-menu flex flex-col grow gap-1" data-kt-menu="true" data-kt-menu-accordion-expand-all="false"
                id="sidebar_menu">
                <x-menu-item icon="icon-speed" title="Dashboard" href="{{ route('admin.dashboad') }}" active="true" />
                <x-menu-item icon="icon-lightning" title="Workouts" href="{{ route('workout.index') }}" />
                <x-menu-item icon="icon-file" title="Recipes" href="{{ route('recipe.index') }}" />
                <x-menu-item icon="icon-users" title="Customers" href="#" />
                <x-menu-item icon="icon-money" title="Transactions" href="#" />
                <x-menu-item icon="icon-gift" title="Rewards" href="#" />
                <x-menu-item icon="icon-user-circle" title="My Account" href="#" />
            </div>
        </div>
        <ul class="mt-auto border-t border-t-gray-200 flex flex-col kt-menu py-3">
            <x-menu-item icon="fa-solid fa-power-off" title="Log out" href="#" class="adminLogout" />
        </ul>
    </div>
</div>
