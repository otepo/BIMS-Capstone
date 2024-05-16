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
    <title>About | Barangay KodeGo</title>
  </head>
  <body id="hero-about">
    <header>
        <nav class="bg-white border-gray-200 border-b-2 border-gray-200 dark:bg-gray-900">
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
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:text-blue-700 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline" aria-current="page">About</a>
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

    <section class="dark:bg-gray-900 py-12 my-12 h-full" id="mission">
        <div class="px-4 mx-auto w-5/6 flex flex-wrap justify-center">
          <div class="text-center max-w-sm p-6 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Mission</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400 h-full">Barangay KodeGo is dedicated to performing its duties and responsibilities in implementing plans, programs, and policies through providing excellent service to meet the basic needs of its citizens.</p>
            </div>
            <div class="mx-auto w-52">
              <img src="{{asset("images/seal1.png")}}" alt="seal">
            </div>  
          <div href="#" class="text-center max-w-sm p-6 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Vission</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400 h-full">Barangay KodeGo is a progressive and sustainable barangay built by the collaboration between its citizens and officials to create better living conditions for every individual residing in the community.</p>
          </div>
        </div>
     </section>

        <h1 class="pb-12 text-center text-5xl font-medium mx-auto">Your Barangay Officials</h1>

      <section class="pb-16" id="officials-about">
        <div class="flex flex-wrap justify-center pb-6">
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/capt.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Hon. Joseph Malundas</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Chairman</p>
            </div>
          </div>
        </div>
        
        @foreach ($officials as $official)
        <div class="flex flex-wrap justify-around pb-6">
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/sec.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{$official->firstName}}</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div>
          {{-- <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/k1.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Mary Jane</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div>
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/k7.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Reynaldo Libor</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div> --}}
        </div>
        @endforeach
        {{-- <div class="flex flex-wrap justify-around pb-6">
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/k3.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Sarah Princesa</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div>
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/k4.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Gwen Zamora</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div>
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/k5.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Jane De Leon</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Barangay Kagawad</p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center pb-6">
          <div class="ofcl max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg max-h-min" src="{{asset("../images/sk.jpg")}}" alt="" />
          <div class="p-5">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Christian Halili</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">SK Chairman</p>
            </div>
          </div>
        </div> --}}
      </section>

      <footer class="bg-white border-t-2 border-gray-200 dark:bg-gray-900" id="footer">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6">
            <div class="md:flex flex-wrap md:justify-between text-center">
              
                  <div>
                      <h2 class="mb-4 text-sm font-semibold text-slate-900 uppercase dark:text-white">Main Office</h2>
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
