<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
    <title>Events | Barangay KodeGo</title>
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
                    <a href="/about" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:text-blue-700 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">About</a>
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

    <section class="">
        <h1 class="text-center text-4xl py-4 my-4">EVENT</h1>

        {{-- <form action="/events" >
            <div class="max-w-screen-xl relative mx-auto border-2 border-gray-100 m-4 rounded-lg">
              <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
              </div>
              <input
                type="text"
                name="search"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search for event"
              />
              <div class="absolute top-2 right-2">
                <button
                  type="submit"
                  class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-blue-600"
                >
                  Search
                </button>
              </div>
            </div>
          </form> --}}
          
         
          
            {{-- @include("partials._search") --}}
            
      <div class="max-w-screen-xl relative mx-auto">
            
            
            {{-- @unless(count($events) == 0)
            
            @foreach($events as $event)
            
            <div class="bg-tranparent border border-gray-500 p-6">
              <div class="flex">
                <img
                  class="hidden w-48 mr-6 md:block"
                  src="{{$event->image ? asset("storage/" . $event->image) : asset("/images/event-landscape.jpg")}}"
                  alt="123"
                />
                <div>
                  <h3 class="text-3xl font-bold">
                    <a href="/events/{{$event->id}}">{{$event->title}}</a>
                  </h3>
                  <x-event-tags :tagsCsv="$event->tags"/>
          
                    <div class="uppercase text-lg mt-4">
                      <i class="fa-solid fa-clock"></i> {{$event->when}}
                    </div>
                
                  <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i> {{$event->location}}
                  </div>
                </div>
              </div>
          </div>
            
            @endforeach
            
            @else
            <div class="text-center">
            <h3 class="text-3xl">
                There are no upcoming events at this time.
            </h3>
            </div>
            @endunless
            </div>
            
            <div class="mt-6 p-4">
                {{$events->links()}}
            </div> --}}
            <div class="flex flex-col items-center justify-center text-center p-5">
                <img
                  class="w-1/2 mr-6 mb-6"
                  src="{{$event->image ? asset("storage/" . $event->image) : asset("/images/event-landscape.jpg")}}"
                  alt=""
                />
    
                <h3 class="text-3xl font-bold mb-2">{{$event->title}}</h3>
                
                <x-event-tags :tagsCsv="$event->tags" />
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 p-3">
                  <div class="text-lg">
                    <i class="fa-solid fa-clock"></i> {{$event->when}} 
                  </div>
                    
                <div class="text-lg">
                  <i class="fa-solid fa-location-dot"></i> {{$event->location}} 
                </div>

            </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                  <h3 class="text-2xl mb-4">Event Description</h3>
                  <div class="text-lg space-y-6">
                    {{$event->description}}
                  {{-- <div class="flex justify-center">
                    <a
                      href="/contact"
                      class="block bg-blue-700 text-white max-w-sm mt-6 py-2 p-5 rounded-xl hover:opacity-80"
                      ><i class="fa-solid fa-message"></i> Contact Barangay KodeGo</a>
                  </div>   --}}
                  </div>
                </div>
              </div>
      </div>
            
           
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
