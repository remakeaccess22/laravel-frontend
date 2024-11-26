<x-layout>
    <x-slot name="heading">
        Dashboard
    </x-slot>

    <head>
        <title>RRRStore</title>
    </head>
    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Card -->
                <div class="flex flex-colshadow-sm rounded-xl bg-green-900">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-white">
                                Total Sales
                            </p>
                            <div class="hs-tooltip">
                                <div class="hs-tooltip-toggle">
                                    <svg class="shrink-0 size-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                    <span
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                                        role="tooltip"
                                        style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(318px, -288px, 0px);"
                                        data-popper-placement="top">
                                        The number of total sales made
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-white">
                                ₱1,273,890
                            </h3>
                            <span class="flex items-center gap-x-1 text-green-400">
                                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                                <span class="inline-block text-sm">
                                    2.7%
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-colshadow-sm rounded-xl bg-green-900">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-white">
                                Total Employees
                            </p>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                7
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-col shadow-sm rounded-xl bg-green-900">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-white">
                                Total Stock
                            </p>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                1,080
                            </h3>

                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-col shadow-sm rounded-xl bg-green-900">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-white">
                                Total Sales per Year
                            </p>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-white">
                                ₱18,092,913
                            </h3>
                            <span class="flex items-center gap-x-1 text-green-400">
                                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                                <span class="inline-block text-sm">
                                    3.7%
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- Grids -->
            <div>
                <!-- Chart Card -->
                <div class="flex justify-between items-center">
                    <!-- Card Title -->
                    <h2 class="text-xl font-semibold text-gray-900">Sales</h2>

                    <!-- Dropdown Button -->
                    <div class="relative">
                        <button id="dropdownButton"
                            class="text-gray-500 hover:text-gray-700 focus:outline-none focus:ring focus:ring-gray-300 rounded-lg px-4 py-2">
                            <span>View</span>
                            <svg class="inline-block w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Daily
                                Sales</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Weekly
                                Sales</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Monthly
                                Sales</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annual
                                Sales</a>
                        </div>
                    </div>
                </div>

                <!-- Chart Placeholder -->
                <div class="mt-4 h-64 bg-gray-100 flex items-center justify-center rounded-lg">
                    <p class="text-gray-500">Chart Here</p>
                </div>
            </div>

            <script>
                // JavaScript to toggle dropdown visibility
                const dropdownButton = document.getElementById('dropdownButton');
                const dropdownMenu = document.getElementById('dropdownMenu');

                dropdownButton.addEventListener('click', () => {
                    dropdownMenu.classList.toggle('hidden');
                });

                // Optional: Close dropdown if clicked outside
                window.addEventListener('click', (e) => {
                    if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            </script>
            <div>
                <!-- Chart Card -->
                <div class="flex justify-between items-center">
                    <!-- Card Title -->
                    <h2 class="text-xl font-semibold text-gray-900">Top Selling Brand</h2>

                    <!-- Dropdown Button -->
                    <div class="relative">
                        <button id="dropdownButton"
                            class="text-gray-500 hover:text-gray-700 focus:outline-none focus:ring focus:ring-gray-300 rounded-lg px-4 py-2">
                            <span>View</span>
                            <svg class="inline-block w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Chart Placeholder -->
                <div class="mt-4 h-64 bg-gray-100 flex items-center justify-center rounded-lg">
                    <p class="text-gray-500">Chart Here</p>
                </div>
            </div>
        </div>

    </div>


    <!-- End Content -->
    </body>

</x-layout>
