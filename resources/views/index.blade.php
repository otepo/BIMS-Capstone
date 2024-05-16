<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barangay KodeGo</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      referrerpolicy="no-referrer"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
  </head>
  <body>
    <header>
      
<nav class="bg-white border-gray-200 border-b border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
        <img src="{{asset("images/seal1.png")}}" class="h-8 mr-3" alt="logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barangay KodeGo</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 border-2 border-gray-400 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-center">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500 hover:underline" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">About</a>
        </li>
        <li>
          <a href="/events" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Events</a>
        </li>
        <li>
          <a href="/signup" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Register</a>
        </li>
        <li>
          <a href="/login" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Log In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>

    <section class="flex justify-center items-center h-full py-64" id="hero">
      <div class="w-full mx-auto text-center">
        <h1
          class="mb-4 text-3xl font-bold tracking-tight leading-none text-white md:text-4xl lg:text-6xl dark:text-white"
        >
          Barangay KodeGo
        </h1>

        <a href="signup">
          <button
            type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-medium px-5 py-2.5 mt-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Register Now
          </button>
        </a>
      </div>
    </section>

    
<footer class="bg-white dark:bg-gray-900" id="footer">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6">
      <div class="md:flex flex-wrap md:justify-between text-center">
        
            <div>
                <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Main Office</h2>
                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                    Angeles City, Pampanga
                  </li>
                  <li class="mb-4">Tel No.: 01-2345-5678</li>
                  <li class="mb-4">Cel. No.: +63 123 456 7890</li>
                </ul>
            </div>
            <div>
                <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Peace and Order</h2>
                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                  <li class="mb-4">Cel. No.: +63 123 456 7890</li>
                </ul>
            </div>
            <div>
              <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Emergency and Rescue</h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">Cel. No.: +63 987 654 3210</li>
              </ul>
          </div>
          <div>
            <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Satellite Office</h2>
            <ul class="text-gray-600 dark:text-gray-400 font-medium">
              <li class="mb-4">
                Clark Freeport Zone, Angeles City
              </li>
              <li class="mb-4">Tel No.: 01-2345-5678</li>
              <li class="mb-4">Cel. No.: +63 987 654 3210</li>
            </ul>
        </div>

    </div>
    <hr class="pb-4 border-gray-200 sm:mx-auto dark:border-gray-700" />
    <div class="text-center">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">KodeGo™</a>. All Rights Reserved.
        </span>
    </div>
  </div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  </body>
</html>
