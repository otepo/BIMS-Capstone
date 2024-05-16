<x-layout>
    <div class="p-10 rounded max-w-xl border border-gray-200 mx-auto bg-gray-50">
          <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create Event</h2>
            <p class="mb-4">Post an event</p>
          </header>

          <form method="POST" action="/dashboard/events" enctype="multipart/form-data">
            @csrf

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
                value="{{old("title")}}"
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
                  value="{{old("when")}}"
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
                value="{{old("location")}}"
                placeholder="Example: Purok 1, Barangay Hall, Health Center"
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
                value="{{old("tags")}}"
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
                class="border border-gray-200 rounded p-2 w-full "
                name="image"
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
              >{{old("description")}}</textarea>
              @error("description")
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6 flex justify-between">
              <button class="bg-blue-700 text-white rounded py-2 px-4 hover:bg-blue-800">
                Create Event
              </button>

              <a href="/dashboard/events" class="text-black text-lg underline ml-4">
                Back
              </a>
            </div>
          </form>
    </div>
</x-layout>