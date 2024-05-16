@extends("admin")

@section("blotters")

    <div class="flex w-full justify-between mb-4">
      <h1 class="text-3xl mx-1">Blotters</h1>

      <a href="/dashboard/create/blotters">
        <button
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          + Add Blotter
        </button>
      </a>
     
    </div>
    @include("partials._search", ['action' => '/dashboard/blotters'])
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
          <tr class="bg-blue-700 text-white">
            <th scope="col" class="px-6 py-4 ">
              Blotter ID
            </th>
            <th scope="col" class="px-6 py-3">
              Complainant
            </th>
            <th scope="col" class="px-6 py-3">
              Complainee
            </th>
            <th scope="col" class="px-6 py-3">
              Date Filled
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
@unless (count($blotters) == 0)

    
@foreach ($blotters->sortByDesc('created_at') as $blotter)
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
            <th
              scope="row"
              class="py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
            {{-- <a href="/residents/{{$resident->residentId}}"></a> --}}
            #{{$blotter->blotterId}}
          </th>
          <td class="py-4">{{$blotter->complainantFullName}}</td>
          <td class="py-4">{{$blotter->complaineeFullName}}</td>
          <td class="py-4">{{$blotter->created_at}}</td>
          <td class="px-8 py-4"> <p class="bg-green-500 rounded-full text-white font-medium py-1.5">{{$blotter->complaintStatus}}</p></td>
          <td class="flex w-fit flex-wrap justify-center mx-auto w-auto py-4">
            <a class="ml-4 hover:underline" href="/dashboard/blotters/{{$blotter->blotterId}}">
              <i class="fa-solid fa-pencil "></i> Edit
            </a>
            
            <form method="POST" action="/dashboard/blotters/{{$blotter->blotterId}}">
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
<td colspan="2" class="py-4">No records yet</td>
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
    {{$blotters->links()}}
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