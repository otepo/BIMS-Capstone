@extends("admin")

@section("officials")

<div class="flex w-full justify-between mb-4">
  <h1 class="text-3xl pb-4">Officials</h1>
  <a href="/officialCreate">
</div>
<hr class="pb-4 border-gray-200 sm:mx-auto dark:border-gray-700" />
      <div class="flex flex-row justify-center py-4 flex-wrap">

@unless (count($officials) == 0)   
@foreach ($officials as $official)
<div class="card w-60 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-2">
          <img class="rounded-full mx-auto mt-6" src={{asset("/images/capt.jpg")}} alt="" />
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center hover:underline">
                {{$official->firstName}} {{$official->lastName}}
              </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center ">
              {{$official->position}}
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center ">
              Contact No: {{$official->contactNumber}}
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">
              ID#: {{$official->residentId}}
            </p>
            {{-- <div class="mt-4 p-1 space-x-6 flex justify-end">
              <a href="/dashboard/officials/{{$official->officialNumber}}/edit">
                <i class="fa-solid fa-pencil"></i>
              </a>
              <form method="POST" action="/dashboard/officials/{{$official->officialNumber}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i></button>
            
              </form>
            </div> --}}
            
          </div>
          
      </div>
      @endforeach 
      @else
      <p>No Records Yet</p>
      @endunless
    </div>
  </section>
@endsection