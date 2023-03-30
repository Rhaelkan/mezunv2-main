<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <header>
            <nav class="bg-white border-gray-200">
                <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-center">
                        <img src="../assets/kargisLogo.jpeg" class="h-12 mr-3" alt="Kargis Logo" />
                    </a>
                    <div class="flex items-center md:order-2">
                        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">İsim Soyisim</span>
                                <span class="block text-sm  text-gray-500 truncate">isimsoyisim@gmail.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">List 1</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">List 2</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">List 3</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-black md:text-black md:bg-transparent rounded transition hover:bg-gray-100 md:hover:bg-transparent md:hover:text-black md:p-0">Home</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-600 rounded transition hover:bg-gray-100 md:hover:bg-transparent md:hover:text-black md:p-0">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-600 rounded transition hover:bg-gray-100 md:hover:bg-transparent md:hover:text-black md:p-0">Services</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-600 rounded transition hover:bg-gray-100 md:hover:bg-transparent md:hover:text-black md:p-0">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-600 rounded transition hover:bg-gray-100 md:hover:bg-transparent md:hover:text-black md:p-0">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <div class="grid grid-rows-2 gap-y-8 md:gap-y-14">
            <div class="text-center">
                <h1 class="text-3xl text-center text-gray-900 font-semibold mt-10 px-5 md:text-4xl md:mt-20">
                    MAKÜ | Mezun'a giriş yapın...
                </h1>
                <p class="text-sm text-gray-500 font-medium mt-5 px-5 md:text-lg sm:px-12">
                    TC. Kimlik Numaranızı, kayıtlarımız ile karşılaştırıp, üniversitemiz mezunu olduğunuzdan emin olmak için istiyoruz.
                </p>
            </div>
            <div class="text-center px-5">
                <form action="" class="space-y-4">
                    <div class="relative max-w-md mx-auto">
                        <input type="text" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="TC. Kimlik No" required>
                        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 font-medium rounded-lg text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                    <div class="relative max-w-md mx-auto">
                        <input type="password" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Parola" required>
                        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 font-medium rounded-lg text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                    <div class="relative max-w-md mx-auto">
                        <input type="password" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Parola Tekrarı" required>
                        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 font-medium rounded-lg text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>
</html>
