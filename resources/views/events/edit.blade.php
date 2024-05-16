<x-layout>
    
  <div class="pb-4">
    <a href="/dashboard/events/{{$event->id}}" class="text-black ml-4 {{ Request::is('dashboard/events') ? "hidden" : "" }}">
      <i class="fa-solid fa-arrow-left"></i> Back
    </a>
  </div>
    <x-card class="p-10 rounded max-w-md mx-auto mt-24">
          <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Event</h2>
            <p class="mb-4">Edit: {{$event->title}}</p>
          </header>

          <form method="POST" action="/dashboard/events/{{$event->id}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-6">
              <label
                for="title"
                class="inline-block text-lg mb-2"
                >Event Title</label
              >
              <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                value="{{$event->title}}"
                placeholder="Libreng Tuli"
              />
              @error("title")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label
                for="when"
                class="inline-block text-lg mb-2"
                >Event Date & Time</label
              >
              <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="when"
                value="{{$event->when}}"
                placeholder="Example: June 29, 2023 - 8:00AM"
              />
              @error("when")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label
                for="location"
                class="inline-block text-lg mb-2"
                >Event Location</label
              >
              <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                value="{{$event->location}}"
                placeholder="Example: Remote, BGC, Cebu, etc"
              />
              @error("location")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label
                for="tags"
                class="inline-block text-lg mb-2"
              >
                Tags (Comma Separated)
              </label>
              <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                value="{{$event->tags}}"
                placeholder="Example: Health, Tuli, Covid, Libre"
              />
              @error("tags")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label
                for="image"
                class="inline-block text-lg mb-2"
              >
                Event Image
              </label>
              <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="image"
              />

              <img
              class="w-48 mr-6 mb-6"
              src="{{$event->image ? asset("storage/" . $event->image) : asset("/images/event-landscape.jpg")}}"
              alt=""
            />
              @error("image")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label
                for="description"
                class="inline-block text-lg mb-2"
              >
                Event Description
              </label>
              <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="5"
                placeholder="WHAT, WHEN"
              >{{$event->description}}</textarea>
              @error("description")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6 flex justify-between">
              <button class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black">
                Update Event
              </button>
            </div>
          </form>
    </x-card>
</x-layout>