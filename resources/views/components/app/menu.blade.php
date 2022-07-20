<div>
    <div x-data="{ openWin: false }" class="h-full flex">

        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

            <div x-show="openWin" class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div x-show="openWin" class="fixed inset-0 flex z-40">

                <div x-transition:enter="transition ease-linear duration-300"
                     x-transition:enter-start="-translate-x-full opacity-80"
                     x-transition:enter-end="translate-x-0 opacity-100"

                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="translate-x-0 opacity-100"
                     x-transition:leave-end="-translate-x-full opacity-80"

                     x-show="openWin" class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">

                    <div @click="openWin = !openWin" class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button"
                                class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Boutton close sidebar  -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 flex flex-col h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center px-4">
                            <img class="h-8 w-auto"
                                 src="https://tailwindui.com/img/logos/workflow-logo-pink-500-mark-gray-900-text.svg"
                                 alt="MY QR">
                        </div>

                        <nav class="mt-5 flex-auto flex flex-col justify-between" aria-label="Sidebar">

                            <div>
                                <div class="px-2 space-y-1">

                                    <!-- My Account -->
                                    <a href="{{ Route('myaccounttmp') }}"
                                       class="{{ $selectAccount }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        My Account
                                    </a>

                                    <!-- My QR -->
                                    <a href="{{ Route('myqr') }}"
                                       class="{{ $selectQR }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                                        </svg>
                                        My QR
                                    </a>

                                    <!-- Templates -->
                                    <a href="{{ Route('templates') }}"
                                       class="{{ $selectTemplates }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                        </svg>
                                        Templates
                                    </a>

                                    <!-- Create new QR -->
                                    <a href="{{ Route('createqr') }}"
                                       class="{{ $selectNew }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md"
                                       aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                        </svg>
                                        Create new Qr
                                    </a>

                                    <!-- Shop -->
                                    <a href="{{ Route('shop') }}"
                                       class="{{ $selectShop }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                        Shop
                                    </a>

                                </div>

                                <hr class="border-t border-gray-200 my-5" aria-hidden="true">

                                <div class="px-2 space-y-1">

                                    <!-- Help -->
                                    <a href="{{ Route('helpaccount') }}"
                                       class="{{ $selectHelp }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <!-- Heroicon name: outline/view-grid-add -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                                        </svg>
                                        Help
                                    </a>

                                    <!-- Settings -->
                                    <a href="{{ Route('settings') }}"
                                       class="{{ $selectSetting }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <!-- Heroicon name: outline/cog -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Settings
                                    </a>

                                </div>
                            </div>

                            <div class="flex justify-center">

                                <!-- Disconnect -->
                                <a href="{{ Route('disconnect') }}"
                                   class="hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md border-2">

                                    Disconnect
                                </a>

                            </div>
                        </nav>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="h-screen hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-gray-100">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="h-8 w-auto"
                                 src="https://tailwindui.com/img/logos/workflow-logo-pink-500-mark-gray-900-text.svg"
                                 alt="Workflow">
                        </div>

                        <nav class="mt-5 flex-1 flex flex-col justify-between" aria-label="Sidebar">

                            <div>
                                <div class="px-2 space-y-1">

                                    <!-- My Account -->
                                    <a href="{{ Route('myaccounttmp') }}"
                                       class="{{ $selectAccount }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        My Account
                                    </a>

                                    <!-- My QR -->
                                    <a href="{{ Route('myqr') }}"
                                       class="{{ $selectQR }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                                        </svg>
                                        My QR
                                    </a>

                                    <!-- Templates -->
                                    <a href="{{ Route('templates') }}"
                                       class="{{ $selectTemplates }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                        </svg>
                                        Templates
                                    </a>

                                    <!-- Create new QR -->
                                    <a href="{{ Route('createqr') }}"
                                       class="{{ $selectNew }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                                       aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                        </svg>
                                        Create new QR
                                    </a>

                                    <!-- Shop -->
                                    <a href="{{ Route('shop') }}"
                                       class="{{ $selectShop }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                        Shop
                                    </a>

                                </div>

                                <hr class="border-t border-gray-200 my-5" aria-hidden="true">

                                <div class="flex-1 px-2 space-y-1">

                                    <!-- Help -->
                                    <a href="{{ Route('helpaccount') }}"
                                       class="{{ $selectHelp }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <!-- Heroicon name: outline/view-grid-add -->
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                                        </svg>
                                        Help
                                    </a>

                                    <!-- Settings -->
                                    <a href="{{ Route('settings') }}"
                                       class="{{ $selectSetting }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Settings
                                    </a>

                                </div>
                            </div>

                            <div class="flex justify-center">

                                <!-- Disconnect -->
                                <a href="{{ Route('disconnect') }}"
                                   class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md border-2">
                                    Disconnect
                                </a>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
            <div class="lg:hidden">
                <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-pink-500.svg"
                             alt="Workflow">
                    </div>
                    <div>
                        <button @click="openWin = !openWin" type="button"
                                class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-900">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex-1 relative z-0 flex overflow-hidden">
                <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">
                    <article>
                        <!--====== EDITABLE AREA   ======-->

                        @yield('article')

                        <!--====== END OF EDITABLE AREA ======-->
                    </article>
                </main>
            </div>
        </div>
    </div>
    <!-- He who is contented is rich. - Laozi -->
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>



