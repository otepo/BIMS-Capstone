@extends("admin")

@section("events")



<main>
  <div id="admin-content">
    <div class="flex justify-between">
    <h1 class="text-3xl mb-1 pb-4">Events</h1>
    @if(auth()->user() && auth()->user()->resident->userLevel === 'Admin')
    <a href="/dashboard/events/create">
      
      <button
        type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 {{ Request::is('dashboard/events/create') ? "hidden" : "" }}"
      >
        + Add Events
      </button>
    </a>
    @endif
  </div>
  



    {{$slot}}


   
  </div>
</main>

  <x-flash-message />

@endsection
