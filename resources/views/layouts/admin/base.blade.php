<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trugrains</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-full">
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-green bg-opacity-75" aria-hidden="true"></div>
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="{{ asset('images/png/trugrain-logo.png') }}" alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a href="#"
                            class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/home -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="bg-green hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow overflow-y-auto">
                {{-- logo --}}
                <div class="flex justify-center items-center flex-shrink-0 px-4 bg-lime-500">
                    <img class="" src="{{ asset('images/png/trugrain-logo.png') }}" alt="Trugrains">
                </div>

                {{-- navigation --}}
                <div class="mt-5 flex-1 flex flex-col">
                    <nav class="flex-1 pl-2 pb-4 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="bg-lime-500 text-black group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="{{ route('admin.products.index') }}"
                            class="text-black hover:bg-lime-500 group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>
                            Products
                        </a>

                        <a href="{{ route('admin.recipes.index') }}"
                            class="text-black hover:bg-lime-500 group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                              </svg>
                            Recipes
                        </a>

                        <a href="#"
                            class="text-black hover:bg-lime-500 group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Subsciptions
                        </a>

                        <a href="{{ route('admin.posts.index') }}"
                            class="text-black hover:bg-lime-500 group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Articles
                        </a>

                        <a href="#"
                            class="text-black hover:bg-lime-500 group flex items-center px-4 py-2 text-sm font-medium rounded-l-full">
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button type="button"
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <div class="flex-1 px-4 flex justify-end">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                            class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button type="button"
                                    class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>

                            {{-- <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-0">Your Profile</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1">Settings</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Sign out</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <main class="bg-lime">
                <div class="py-6">
                    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-wagner font-semibold text-gray-900">Dashboard</h1>
                    </div> --}}
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="py-4">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>