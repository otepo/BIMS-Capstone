
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Barangay KodeGo</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      referrerpolicy="no-referrer"
    />
    <script src="https://kit.fontawesome.com/6c05a12edb.js" crossorigin="anonymous"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    
  </head>
  <style type="text/css" media="print">
    .noPrint{
      display: none;
    }
  </style>
  <body>
<header class="noPrint">
    <nav
      class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700"
    >
      <div class="px-3 py-4 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button
              data-drawer-target="logo-sidebar"
              data-drawer-toggle="logo-sidebar"
              aria-controls="logo-sidebar"
              type="button"
              class="inline-flex border-2 border-gray-400 items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            >
              <span class="sr-only">Open sidebar</span>
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                ></path>
              </svg>
            </button>
            <a href="/" class="flex ml-2 md:mr-24">
              <img src="{{asset("images/seal1.png")}}" class="h-8 mr-3" alt="" />
              <span
                class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"
              >
                Barangay KodeGo
              </span>
            </a>
          </div>
          @auth
          <div class="flex items-center">
            <div class="mr-3">
              <span>{{auth()->user()->resident->lastName}}, {{auth()->user()->resident->firstName}}</span>
            </div>
            <div class="flex items-center ml-3">
              <div>
                <button
                  type="button"
                  class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                  aria-expanded="false"
                  data-dropdown-toggle="dropdown-user"
                >
                  <span class="sr-only">Open user menu</span>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="user photo"
                  />
                </button>
              </div>
              <div
                class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown-user"
              >
                <div class="px-4 py-3" role="none">
                  <p
                    class="text-sm text-gray-900 dark:text-white"
                    role="none"
                  >
                  {{auth()->user()->resident->firstName}} {{auth()->user()->resident->lastName}}
                  </p>
                  <p
                    class="text-sm font-medium text-gray-900 truncate dark:text-gray-300"
                    role="none"
                  >
                  {{auth()->user()->email}}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  {{-- <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                      role="menuitem"
                    >
                      Settings
                    </a>
                  </li> --}}
                  <li>
                    <form class="inline" method="POST" action="/logout">
                      @csrf
                    <button
                      type="submit"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                      role="menuitem"
                    >
                      Sign out
                    </button>
                  </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          @endauth
        </div>
       
      </div>
    </nav>
</header>

  <aside
    id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar"
  >
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        @if(auth()->user() && auth()->user()->resident->userLevel === 'Admin')
        <li>
          <a
            href="/dashboard/"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-dashboard"></i>
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
      @endif
      @if(auth()->user() && auth()->user()->resident->userLevel === 'Resident')
      <li>
        <a href="/dashboard/profile/{{ auth()->user()->resident->residentId }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/profile/' . auth()->user()->resident->residentId) ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
          <i class="uil uil-user"></i>
          <span class="ml-3">Profile</span>
        </a>
      </li>
      @endif
        <li>
          <a
            href="/dashboard/events"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/events') || Request::is('dashboard/events/*') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
          <i class="uil uil-calendar-alt"></i>
            <span class="ml-3">Events</span>
          </a>
        </li>
        
        @if(auth()->user() && auth()->user()->resident->userLevel === 'Admin')
        <li>
          <a href="/dashboard/residents/"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/residents') || Request::is('dashboard/residents/*') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-users-alt"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Residents</span>
          </a>
        </li>
        

        <li>
          <a
            href="/dashboard/officials"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/officials') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-house-user"></i>
            <span class="ml-3">Barangay Officials</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('admin/reports') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-file-graph"></i>
            <span class="ml-3">Reports</span>
          </a>
        </li>
        <li>
          <a
            href="/dashboard/register"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/register') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-user-plus"></i>
            <span class="ml-3">Register</span>
          </a>
        </li>
        <li>
          <a
            href="/dashboard/blotters"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/blotters') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-book"></i>
            <span class="ml-3">Blotter</span>
          </a>
        </li>
        <li>
          <a
            href="/dashboard/userAccounts"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-800 hover:text-white dark:hover:bg-gray-700 {{ Request::is('dashboard/userAccounts') ? 'text-white bg-blue-700 hover:bg-blue-800' : '' }}">
            <i class="uil uil-user"></i>
            <span class="ml-3">User Accounts</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </aside>


  <div id="admin-content" class="max-w-screen min-h-screen ml-72 mr-8 pt-24">
    
    @yield("content")
    @yield("resident")
    @yield("officials")
    @yield("signup")
    @yield("officialCreate")
    @yield("userAccounts")
    @yield("blotters")
    @yield("blotter")
    @yield("editBlotter")
    @yield("events")
    @yield("dashboard")
    @yield("profile")
  </div>

    
<footer class="bg-white dark:bg-gray-900 ml-72 mr-8 noPrint" id="admin-footer">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6">
    <hr class="pb-4 border-gray-200 sm:mx-auto dark:border-gray-700" />
    <div class="text-center">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">KodeGo™</a>. All Rights Reserved.
        </span>
    </div>
  </div>
</footer>

<x-flash-message />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    
  </body>
</html>
