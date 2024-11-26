<div id="hs-application-sidebar"
    class="hs-overlay
    [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full
    transition-all duration-300 transform
    w-[260px] h-full fixed inset-y-0 start-0 z-[60]
    bg-white
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    shadow-xl">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4"> <!-- Changed from px-20 to px-6 -->
            <a class="flex-none rounded-xl text-2xl inline-block font-semibold focus:outline-none focus:opacity-80"
                href="#" aria-label="RManage">
                <svg class="w-36 h-auto" width="160" height="40" viewBox="0 0 160 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <text x="0" y="25" font-family="Arial, sans-serif" font-size="28" font-weight="bold"
                        fill="#14532D">R</text>
                    <text x="22" y="25" font-family="Arial, sans-serif" font-size="18" fill="#111827">Manage</text>
                </svg>
            </a>
        </div>

        <!-- Content -->
        <div class="h-full overflow-y-auto px-6">
            <nav class="hs-accordion-group w-full flex flex-col space-y-2" data-hs-accordion-always-open="">
                <ul class="space-y-1">
                    <li>
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->is('/')">
                            <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Dashboard
                        </x-nav-link>
                    </li>

                    <li>
                        <x-nav-link href="{{ route('inventory.show') }}" :active="request()->is('inventory')">
                            <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M3 20V7l9-4 9 4v13"></path>
                                <path d="M13 10h3v3h-3z"></path>
                                <path d="M6 16h12v5H6z"></path>
                            </svg>
                            Inventory
                        </x-nav-link>
                    </li>

                    <li>
                        <x-nav-link href="{{ route('sales.show') }}" :active="request()->is('sales')">
                            <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2" ry="2">
                                </rect>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <path d="M9 12h6"></path>
                            </svg>
                            Sales
                        </x-nav-link>
                    </li>
                    <li>
                    <li class="hs-accordion " id="users-accordion">
                        <button type="button"
                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-green-700 w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-gray-900 hover:text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600"
                            aria-expanded="true" aria-controls="users-accordion">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            Personnels
                            <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4 group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4 text-white group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>

                        <div id="users-accordion"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="region" aria-labelledby="users-accordion">
                            <ul class="pl-3 pt-2">
                                <li>
                                    <x-nav-link href="#" :active="request()->is('employees')">
                                        Employees
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link href="#" :active="request()->is('applicants')">
                                        Applicants
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->
        @auth
            <div class="mt-auto px-6 py-4">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-x-2 text-sm font-medium text-red-600 hover:text-red-800">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</div>
