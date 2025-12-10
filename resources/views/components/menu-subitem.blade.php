@props([
    'href' => '#',
    'title',
    'active' => false,  // true for active state
])

<div class="kt-menu-item">
    <a href="{{ $href }}"
       class="
            kt-menu-link
            border border-transparent items-center grow
            gap-3.5 ps-2.5 pe-2.5 py-2
            hover:bg-accent/60 hover:rounded-lg
            @if($active) kt-menu-item-active:bg-accent/60 kt-menu-item-active:rounded-lg @endif
       "
       tabindex="0">

        <span class="kt-menu-bullet flex size-2 rounded-full p-px -start-1 rtl:start-0 relative
            @if($active)
                bg-[linear-gradient(90deg,#26B7FF_0%,#1D4AFE_100%)]
            @else
                bg-gray-500
            @endif
        ">
            <span class="size-full rounded-full
                @if($active)
                    bg-primary-100
                @else
                    bg-gray-400
                @endif
            "></span>
        </span>


        <span
            class="
                kt-menu-title text-2sm font-normal
                @if($active)
                    text-gray-950
                @else
                    text-foreground
                @endif">
            {{ $title }}
        </span>
    </a>
</div>
