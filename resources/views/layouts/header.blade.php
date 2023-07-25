<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Header</title>
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
                  <img src=" images/ravi.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="font-semibold text-lg">
                  <div class="">Ravikant Kumar</div>
                </div>
              </div>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-40 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                <ul class="space-y-3 dark:text-white">
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
</body>
<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

</html>