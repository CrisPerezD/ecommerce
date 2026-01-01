@php
    $links = [
        [
            'icon' => 'fa-solid fa-grip',
            'name' => 'Dashboard',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard')
        ]
    ];
@endphp

<aside id="logo-sidebar"
    class="bg-white fixed top-6 left-0 z-40 w-64 h-[100dvh] transition-transform -translate-x-full sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{         
        '-translate-x-0 ease-out':sidebarOpen,
        '-translate-x-full ease-in': !sidebarOpen
            }" 
    aria-label="Sidebar">
    <div class="top-6 h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
        <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3" alt="Flowbite Logo" />
            <span class="self-center text-lg text-heading font-semibold whitespace-nowrap">Flowbite</span> --}}
        </a>
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                        
                <li>
                    <a href="{{ $link['route'] }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover-bg-gray-700 group {{ $link['active'] ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                        
                        <span class="inline-flex w-6 h-6 justify-center items-center">
                            <i class="{{ $link['icon'] }} text-gray-500"></i>
                        </span>

                        <span class="ms-2">
                            {{ $link['name'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
