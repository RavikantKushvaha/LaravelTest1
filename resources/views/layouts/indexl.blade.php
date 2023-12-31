<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Dashboard</title>
</head>

<body>
  <style>
    /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
    /* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
    :root {
      --light: #edf2f9;
      --dark: #152e4d;
      --darker: #12263f;
    }

    .dark .dark\:text-light {
      color: var(--light);
    }

    .dark .dark\:bg-dark {
      background-color: var(--dark);
    }

    .dark .dark\:bg-darker {
      background-color: var(--darker);
    }

    .dark .dark\:text-gray-300 {
      color: #d1d5db;
    }

    .dark .dark\:text-indigo-500 {
      color: #6366f1;
    }

    .dark .dark\:text-indigo-100 {
      color: #e0e7ff;
    }

    .dark .dark\:hover\:text-light:hover {
      color: var(--light);
    }

    .dark .dark\:border-indigo-800 {
      border-color: #3730a3;
    }

    .dark .dark\:border-indigo-700 {
      border-color: #4338ca;
    }

    .dark .dark\:bg-indigo-600 {
      background-color: #4f46e5;
    }

    .dark .dark\:hover\:bg-indigo-600:hover {
      background-color: #4f46e5;
    }

    .dark .dark\:border-indigo-500 {
      border-color: #6366f1;
    }

    .hover\:overflow-y-auto:hover {
      overflow-y: auto;
    }
  </style>
  <nav class="w-full h-16   text-gray-500 bg-slate-50 transition-colors rounded-md dark:text-light flex justify-between px-4 items-center md:px-4 sticky top-0">
    <div>
      <img class="h-12 w-12 " src="images/logo.png" alt="">
    </div>

    <div class="hidden md:flex font-semibold ">
      <div>
        <!-- <img class="h-10 w-10" src="images/loginn.png" alt=""> -->
        <div class="h-scree flex justify-center items-center">
          <div x-data="{ open: false }" class=" flex justify-center items-center">
            <div @click="open = !open" class=" " x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
              <div class="flex justify-center items-center space-x-3 cursor-pointer">
                <div class="w-12 h-12 rounded-full overflow-hidden ">
                  <img src="{{ Session::get('image2') }}" alt="" class="w-full h-full object-cover"> 
                 
                </div>
                <div class="font-semibold text-lg">
                <div>
                                    @if(Session::has('student'))
                                        {{ Session::get('student') }}
                                    @endif
                </div>
              </div>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-40 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-1">
                <ul class="space-y-3  dark:text-white">
                  <li class="font-medium">
                    <a href="login" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                      </div>
                      Login
                    </a>
                  </li>
                  <li class="font-medium">
                    <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                      </div>
                      Setting
                    </a>
                  </li>
                  <hr class="dark:border-gray-700">
                  <li class="font-medium">
                    <a href="#" class="flex items-center transform transition-colors  text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300">
                      <div class="mr-3 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                      </div>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <a href="" class="cursor-pointer py-2 px-2 font-medium  text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300">Log In</a>
		<a href="" class="cursor-pointer py-2 px-2 font-medium  text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300">Sign Up</a> -->
    </div>
  </nav>
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark }" @resize.window="watchScreen()">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light fixed  top-16">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
        Loading.....
      </div>

      <!-- Sidebar -->
      <!-- Backdrop -->
      <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-indigo-800 lg:hidden" style="opacity: 0.5" aria-hidden="true"></div>

      <aside x-show="isSidebarOpen" x-transition:enter="transition-all transform duration-300 ease-in-out" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition-all transform duration-300 ease-in-out" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-ref="sidebar" @keydown.escape="window.innerWidth <= 1024 ? isSidebarOpen = false : ''" tabindex="-1" class="fixed inset-y-0 z-10 flex flex-shrink-0 overflow-hidden bg-slate-50 border-r lg:static dark:border-indigo-800 dark:bg-darker focus:outline-none">

        <!-- Sidebar links -->
        <nav aria-label="Main" class="flex-1 w-64 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
          <!-- Dashboards links -->
          <a href="dashboard" class="flex items-center p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ml-3">Dashboard</span>
            </a>

          <!-- Components links -->
          <div x-data="{ isActive: false, open: false }">
            <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
            <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600" :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
              <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
              </span>
              <span class="ml-2 text-sm"> Components </span>
              <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </a>
            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
              <!-- active & hover classes 'text-gray-700 dark:text-light' -->
              <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
                Alerts
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
                Buttons
               </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Cards
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Dropdowns
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Forms
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Lists
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Modals
              </a>
            </div>
          </div>

          <!-- Pages links -->
          <div x-data="{ isActive: false, open: false }">
            <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
            <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600" :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
              <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </span>
              <span class="ml-2 text-sm"> Pages </span>
              <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </a>
            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
              <!-- active & hover classes 'text-gray-700 dark:text-light' -->
              <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
              <a href="users" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
                Users
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
                Profile
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Pricing
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Kanban
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Feed
              </a>
            </div>
          </div>

          <!-- Authentication links -->
          <div x-data="{ isActive: false, open: false}">
            <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
            <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600" :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
              <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </span>
              <span class="ml-2 text-sm"> Authentication </span>
              <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </a>
            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
              <!-- active & hover classes 'text-gray-700 dark:text-light' -->
              <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
              <a href="register" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Register
              </a>
              <a href="loginUsers" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Login
              </a>
              <a href="reset" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md hover:bg-indigo-100 hover:text-gray-700">
                Password Reset
              </a>
            </div>
          </div>

          <!-- Layouts links -->
          <div x-data="{ isActive: true, open: true}">
            <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
            <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600" :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
              <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </span>
              <span class="ml-2 text-sm"> Layouts </span>
              <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </a>
            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
              <!-- active & hover classes 'text-gray-700 dark:text-light' -->
              <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 hover:bg-indigo-100 hover:text-gray-700">
                Two Columns Sidebar
              </a>
              <a href="#" role="menuitem" class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light hover:bg-indigo-100 hover:text-gray-700">
                Mini + One Columns Sidebar
              </a>
            </div>
          </div>
        </nav>
      </aside>

      <!-- Sidebars button -->
      <div class="fixed flex items-center space-x-4 top-5 right-10 lg:hidden">
        <button @click="isSidebarOpen = true; $nextTick(() => { $refs.sidebar.focus() })" class="p-1 text-indigo-400 transition-colors duration-200 rounded-md bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100  dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:ring">
          <span class="sr-only">Toggle main manu</span>
          <span aria-hidden="true">
            <svg x-show="!isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </button>
      </div>


      <!-- Panels -->

      <!-- Settings Panel -->
      <!-- Backdrop -->
      <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen" @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-indigo-800" style="opacity: 0.5" aria-hidden="true"></div>
      <!-- Panel -->
      <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel" tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false" class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" aria-labelledby="settinsPanelLabel">
        <div class="absolute left-0 p-2 transform -translate-x-full">
          <!-- Close button -->
          <button @click="isSettingsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <!-- Panel content -->
        <div class="flex flex-col h-screen">
          <!-- Panel header -->
          <div class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-indigo-700">
            <span aria-hidden="true" class="text-gray-500 dark:text-indigo-600">
              <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </span>
            <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Settings</h2>
          </div>
          <!-- Content -->
          <div class="flex-1 overflow-hidden hover:overflow-y-auto">
            <!-- Theme -->
            <div class="p-4 space-y-4 md:p-8">
              <h6 class="text-lg font-medium text-gray-400 dark:text-light">Mode</h6>
              <div class="flex items-center space-x-8">
                <!-- Light button -->
                <button @click="setLightTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-indigo-600 dark:hover:text-indigo-100 dark:hover:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-400 dark:focus:ring-indigo-700" :class="{ 'border-gray-900 text-gray-900 dark:border-indigo-500 dark:text-indigo-100': !isDark, 'text-gray-500 dark:text-indigo-500': isDark }">
                  <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                  </span>
                  <span>Light</span>
                </button>

                <!-- Dark button -->
                <button @click="setDarkTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-indigo-600 dark:hover:text-indigo-100 dark:hover:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-400 dark:focus:ring-indigo-700" :class="{ 'border-gray-900 text-gray-900 dark:border-indigo-500 dark:text-indigo-100': isDark, 'text-gray-500 dark:text-indigo-500': !isDark }">
                  <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                  </span>
                  <span>Dark</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Notification panel -->
      <!-- Backdrop -->
      <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isNotificationsPanelOpen" @click="isNotificationsPanelOpen = false" class="fixed inset-0 z-10 bg-indigo-800" style="opacity: 0.5" aria-hidden="true"></div>
      <!-- Panel -->
      <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-ref="notificationsPanel" x-show="isNotificationsPanelOpen" @keydown.escape="isNotificationsPanelOpen = false" tabindex="-1" aria-labelledby="notificationPanelLabel" class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
        <div class="absolute right-0 p-2 transform translate-x-full">
          <!-- Close button -->
          <button @click="isNotificationsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
          <!-- Panel header -->
          <div class="flex-shrink-0">
            <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-indigo-800">
              <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
              <div class="space-x-2">
                <button @click.prevent="activeTabe = 'action'" class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none" :class="{'border-indigo-700 dark:border-indigo-600': activeTabe == 'action', 'border-transparent': activeTabe != 'action'}">
                  Action
                </button>
                <button @click.prevent="activeTabe = 'user'" class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none" :class="{'border-indigo-700 dark:border-indigo-600': activeTabe == 'user', 'border-transparent': activeTabe != 'user'}">
                  User
                </button>
              </div>
            </div>
          </div>

          <!-- Panel content (tabs) -->
          <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
            <!-- Action tab -->
            <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
              <p class="px-4">Action tab content</p>
              <!--  -->
              <!-- Action tab content -->
              <!--  -->
            </div>

            <!-- User tab -->
            <div class="space-y-4" x-show.transition.in="activeTabe == 'user'">
              <p class="px-4">User tab content</p>
              <!--  -->
              <!-- User tab content -->
              <!--  -->
            </div>
          </div>
        </div>
      </section>

      <!-- Search panel -->
      <!-- Backdrop -->
      <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSearchPanelOpen" @click="isSearchPanelOpen = false" class="fixed inset-0 z-10 bg-indigo-800" style="opacity: 0.5" aria-hidden="ture"></div>
      <!-- Panel -->
      <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSearchPanelOpen" @keydown.escape="isSearchPanelOpen = false" class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
        <div class="absolute right-0 p-2 transform translate-x-full">
          <!-- Close button -->
          <button @click="isSearchPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <h2 class="sr-only">Search panel</h2>
        <!-- Panel content -->
        <div class="flex flex-col h-screen">
          <!-- Panel header (Search input) -->
          <div class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-indigo-800 dark:focus-within:text-light focus-within:text-gray-700">
            <span class="absolute inset-y-0 inline-flex items-center px-4">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </span>
            <input x-ref="searchInput" type="text" class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring" placeholder="Search..." />
          </div>

          <!-- Panel content (Search result) -->
          <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
            <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
            <p class="px=4">Search resault</p>
            <!--  -->
            <!-- Search content -->
            <!--  -->
          </div>
        </div>
      </section>
    </div>
  </div>

 
  <footer class="bg-slate-50 text-center text-lg-start fixed right-0 left-64 bottom-0">
    <div class="text-center p-3">
      ©Copyright 2023 Cabbalistic Technologies
      <a class="text-dark" href="#"></a>
    </div>

  </footer>

  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
        setLightTheme() {
          this.isDark = false
          setTheme(this.isDark)
        },
        setDarkTheme() {
          this.isDark = true
          setTheme(this.isDark)
        },
        watchScreen() {
          if (window.innerWidth <= 1024) {
            this.isSidebarOpen = false
          } else if (window.innerWidth >= 1024) {
            this.isSidebarOpen = true
          }
        },
        isSidebarOpen: window.innerWidth >= 1024 ? true : false,
        toggleSidbarMenu() {
          this.isSidebarOpen = !this.isSidebarOpen
        },
        isNotificationsPanelOpen: false,
        openNotificationsPanel() {
          this.isNotificationsPanelOpen = true
          this.$nextTick(() => {
            this.$refs.notificationsPanel.focus()
          })
        },
        isSettingsPanelOpen: false,
        openSettingsPanel() {
          this.isSettingsPanelOpen = true
          this.$nextTick(() => {
            this.$refs.settingsPanel.focus()
          })
        },
        isSearchPanelOpen: false,
        openSearchPanel() {
          this.isSearchPanelOpen = true
          this.$nextTick(() => {
            this.$refs.searchInput.focus()
          })
        },
      }
    }
  </script>
</body>

</html>