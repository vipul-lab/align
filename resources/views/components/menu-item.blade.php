@props([
    'accordion' => false,
    'icon' => 'fa-grid-2',    // default icon
    'title',                   // required
    'href' => '#',             // default link
    'active' => false,
])

@if($accordion)
    <li class="kt-menu-item"
         data-kt-menu-item-toggle="accordion"
         data-kt-menu-item-trigger="click">
        <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-2.5 ps-2.5 pe-2.5 py-1.5"
             tabindex="0">
            <span class="kt-menu-icon items-start text-gray-600">
                <i class="icon-{{ $icon }}"></i>
            </span>
            <span class="kt-menu-title text-sm font-medium text-gray-600">
                {{ $title }}
            </span>
            <span class="kt-menu-arrow text-gray-600 w-5 shrink-0 justify-end ms-1 -me-2.5">
                <span class="inline-flex kt-menu-item-show:hidden">
                    <i class="icon-right-arrow text-[11px]"></i>
                </span>
                <span class="hidden kt-menu-item-show:inline-flex">
                    <i class="icon-down-arrow text-[11px]"></i>
                </span>
            </span>
        </div>
        <div class="kt-menu-accordion gap-1 ps-2.5 relative
             before:absolute before:start-5 before:top-0 before:bottom-0 before:border-s before:border-dashed before:border-gray-400">
            {{ $slot }}
        </div>
    </li>
@else
    <div class="kt-menu-item hover:bgborder border-r-4 group @if($active) bg-primary-100 border-primary @else border-transparent hover:bg-primary-100 @endif">
        <a href="{{ $href }}" class="kt-menu-label border border-transparent gap-2.5 ps-2 lg:ps-7 pe-1 lg:pe-3 py-2.5 flex items-center" tabindex="0">
            <span class="kt-menu-icon size-5 justify-center group-hover:text-primary hover:bg-primary-100 rounded-lg @if($active) text-primary @else text-gray-600 @endif">
                <i class="{{ $icon }} text-xl"></i>
            </span>
            <span class="kt-menu-title text-sm font-medium group-hover:text-primary hover:bg-primary-100 @if($active) text-primary @else text-gray-600 @endif">
                {{ $title }}
            </span>
        </a>
    </div>
@endif
