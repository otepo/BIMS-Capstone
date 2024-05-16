@extends("admin")

@section("content")

    <div class="flex w-full justify-between mb-4">
      <h1 class="text-3xl mx-1">Residents</h1>

      <a href="register">
        <button
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          + Add Resident
        </button>
      </a>
    </div>
    @include("partials._search", ['action' => '/dashboard/residents'])
    {{-- <form id="form-search" class="mb-8 w-4/6 mx-auto">
      <label
        for="default-search"
        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
      >
        Search
      </label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg
            aria-hidden="true"
            class="w-5 h-5 text-gray-500 dark:text-gray-400"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            ></path>
          </svg>
        </div>
        <input
          type="search"
          id="default-search"
          class="block p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full"
          placeholder="Input application ID"
          required
        />
        <button
          type="submit"
          class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Search
        </button>
      </div>
    </form> --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
          <tr class="bg-blue-700 text-white">
            <th scope="col" class="px-6 py-4 ">
              Resident ID
            </th>
            <th scope="col" class="px-6 py-3">
              Name
            </th>
            <th scope="col" class="px-6 py-3">
              Date Requested
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>

@unless(count($residents) == 0)

@foreach ($residents->sortByDesc('created_at') as $resident)
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
            <th
              scope="row"
              class="py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
            {{-- <a href="/residents/{{$resident->residentId}}"></a> --}}
              #{{$resident->residentId}}
          </th>
          <td class="py-4">{{$resident->firstName}} {{$resident->lastName}}</td>
          <td class="py-4">{{$resident->created_at}}</td>
          <td class="px-8 py-4">
            <p class="
                @if($resident->status === 'Approved')
                    bg-green-500
                @elseif($resident->status === 'Denied')
                    bg-red-500
                @elseif($resident->status === 'Pending')
                    bg-gray-500
                @endif
                rounded-full text-white font-medium py-1.5"
            >
                {{$resident->status}}
            </p>
        </td>
          {{-- <td class="px-8 py-4"> <p class="bg-green-500 rounded-full text-white font-medium py-1.5">{{$resident->status}}</p></td> --}}
          <td class="flex w-fit flex-wrap justify-center mx-auto w-auto py-4">
            <a class="hover:underline" href="/dashboard/residents/{{$resident->residentId}}">
              <i class="fa-solid fa-pencil "></i> Edit
            </a>
            <form method="POST" action="/dashboard/residents/{{$resident->residentId}}">
              @csrf
              @method("DELETE")
              <button class="text-red-500 ml-4 hover:underline">
                <i class="fa-solid fa-trash"></i> Delete
              </button>
            </form>
          </td> 
        </tr>

@endforeach

@else

<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
  <th
    scope="row"
    class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
  >
  
</th>
<td class="py-4"></td>
<td class="py-4">No records yet</td>
<td class="px-8 py-4"></td>
<td class="py-4">
  <a
    href="#"
    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
  >
  </a>
</td>
</tr>

@endunless
        </tbody>
      </table>
    </div>
  </section>
  <div class="mt-6 p-4">
    {{$residents->links()}}
</div>

  

@endsection

{{-- <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
  <th
    scope="row"
    class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
  >
    #1000000002
  </th>
  <td class="py-4">Joe Black</td>
  <td class="py-4">June 11, 2023</td>
  <td class="px-8 py-4"> <p class="bg-gray-500 rounded-full text-white font-medium py-1.5">For Approval</p></td>
  <td class="py-4">
    <a
      href="#"
      class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
    >
      View Record
    </a>
  </td>
</tr> --}}