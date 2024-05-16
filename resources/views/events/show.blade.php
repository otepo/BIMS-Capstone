<x-layout>
{{-- @include("partials._search", ['action' => '/dashboard/residents/{event}']) --}}


      <a
        href="/dashboard/events"
        class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
      </a>
      <div class="mx-4">
        <x-card>
          <div class="flex flex-col items-center justify-center text-center">
            <img
              class="w-64 mr-6 mb-6"
              src="{{$event->image ? asset("storage/" . $event->image) : asset("/images/event-landscape.jpg")}}"
              alt=""
            />

            <h3 class="text-3xl font-bold mb-2">{{$event->title}}</h3>
            
            <x-event-tags :tagsCsv="$event->tags" />
              <div class="text-lg mt-2">
                <i class="fa-solid fa-clock"></i>{{$event->when}} 
              </div>
            <div class="text-lg my-4">
              <i class="fa-solid fa-location-dot"></i>{{$event->location}} 
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
              @if(auth()->user() && auth()->user()->resident->userLevel === 'Admin')
              <div class="mt-4 p-2 flex justify-center space-x-6">
                <a class="hover:underline" href="/dashboard/events/{{$event->id}}/edit"><i class="fa-solid fa-pencil"></i>Edit</a>
                <form method="POST" action="/dashboard/events/{{$event->id}}">
                  @csrf
                  @method("DELETE")
                  <button class="text-red-500 hover:underline"><i class="fa-solid fa-trash"></i> Delete </button>
                </form>
              </div>
              @endif
            </div>
          </div>
        </x-card>

        

      </div>

</x-layout>