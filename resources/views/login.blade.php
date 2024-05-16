<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Barangay KodeGo | Login</title>
  </head>
  <body>
    <header>
        <nav class="bg-white border-gray-200 border-b border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="/" class="flex items-center">
                  <img src="{{asset("images/seal1.png")}}" class="h-8 mr-3" alt="logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barangay KodeGo</span>
              </a>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex border-2 border-gray-400 items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              </button>
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-center">
                  <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded md:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 md:p-0 dark:text-white md:dark:text-blue-500 hover:underline">Home</a>
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
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500 hover:underline" aria-current="page">Log In</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section class="bg-gray-50 dark:bg-gray-900 py-12">
        <div
          class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16"
        >
          <div class="flex flex-col justify-center text-center">
            <h1
              class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-white"
            >
              United We Stand, Prosperous Barangay KodeGo.
            </h1>
            <p
              class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400"
            >
              In Barangay KodeGo, we believe that unity is the key to prosperity.
              We stand together as a community, bound by a common goal of progress
              and success.
            </p>
          </div>
          <div>
            <div
              class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800"
            >
              <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center">
                Sign in to Barangay KodeGo
              </h2>
              <form method="POST" class="mt-8 space-y-6" action="/login/authenticate">
                @csrf
                <div>
                  <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >
                    Your email
                  </label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Email"
                    required
                  />
                </div>
                <div>
                  <label
                    for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >
                    Your password
                  </label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="••••••••"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required
                  />
                </div>
  
                <button
                  type="submit"
                  class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  Login to your account
                </button>
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <div
                      class="text-sm font-medium text-gray-900 dark:text-white"
                    >
                      Not registered yet?
                      <a
                        href="/signup"
                        class="text-gray-500 hover:underline dark:text-blue-500"
                      >
                        Create account
                      </a>
                    </div>
                  </div>
  
                  {{-- <a
                    href="#"
                    class="ml-auto text-sm font-medium text-gray-500 hover:underline dark:text-blue-500"
                  >
                    Lost Password?
                  </a> --}}
                </div>
              </form>
            </div>
          </div>
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
