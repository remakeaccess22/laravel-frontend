<x-layout>
    <x-slot name="heading">
        Inventory
    </x-slot>
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Card -->
            <div class="w-full mb-12">
                <!-- Card Container -->
                {{-- <div class="flex gap-4">
                    <!-- Card 1 -->
                    <div class="flex flex-col shadow-sm rounded-xl bg-green-900 text-white p-5 flex-1">
                        <p class="text-xs uppercase tracking-wide">Total Inventory</p>
                        <h3 class="text-3xl font-bold mt-2">53</h3>
                    </div>
                    <!-- Card 2 -->
                    <div class="flex flex-col shadow-sm rounded-xl bg-green-900 text-white p-5 flex-1">
                        <p class="text-xs uppercase tracking-wide">New Stocks Arrival</p>
                        <h3 class="text-3xl font-bold mt-2">39</h3>
                    </div>
                </div> --}}
            </div>
            <!-- End Card -->

            <!-- Filter Button -->
            <div class="flex justify-end items-center space-x-4">
                <div class="relative">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg shadow-sm text-gray-700 bg-white hover:bg-gray-100 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600"
                        id="filterButton">
                        Filter
                        <svg class="w-5 h-5 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M6 12h12"></path>
                            <path d="M10 18h4"></path>
                        </svg>
                    </button>

                    <!-- Filter Placeholder -->
                    <div id="filterMenu"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg hidden z-10">
                        <div class="p-4">
                            <label for="filter-category"
                                class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="filter-category" name="filter-category"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                                <option>All</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="relative max-w-xs">
                    <label for="hs-table-search" class="sr-only">Search</label>
                    <input type="text" name="hs-table-search" id="hs-table-search"
                        class="py-2 pl-10 pr-4 block w-full border border-gray-300 rounded-lg text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-green-700 focus:ring-1 focus:ring-green-700 shadow-sm"
                        placeholder="Search for items">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                </div>

                <!-- Add Product Button -->
                <button type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-green-900 hover:bg-green-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Product
                </button>

            </div>

            <script>
                // JavaScript for toggle dropdown
                const filterButton = document.getElementById('filterButton');
                const filterMenu = document.getElementById('filterMenu');

                filterButton.addEventListener('click', () => {
                    filterMenu.classList.toggle('hidden');
                });

                // Optional: Close dropdown if clicked outside
                window.addEventListener('click', (e) => {
                    if (!filterButton.contains(e.target) && !filterMenu.contains(e.target)) {
                        filterMenu.classList.add('hidden');
                    }
                });
            </script>


            <!-- Table -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle mb-8">
                        <div class="border rounded-lg shadow overflow-hidden dark:shadow-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-900 uppercase">
                                            Product Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-900 uppercase">
                                            Product ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-900 uppercase">
                                            Unit Price
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-900 uppercase">
                                            In Stock
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-900 uppercase">
                                            Total Value
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-900 uppercase">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-900 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 text-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Pre-starter</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VPS1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Starter</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VS1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Grower</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VG1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Finisher</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VF1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Gestation</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VGE1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            (vital)Lactating</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VF1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Php 1200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">50
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Php
                                            60,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            In-stock</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>

</x-layout>
