@extends("admin")

@section('officialCreate')
<div
class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
<header class="text-center">
  <h2 class="text-2xl font-bold uppercase mb-1">Edit Official</h2>
  {{-- <p class="mb-4">Post a job to find a developer</p> --}}
</header>

<form method="POST" action="/dashboard/officials/{{$official->officialNumber}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label
      for="firstName"
      class="inline-block text-lg mb-2"
      >First Name</label
    >
    <input
      type="text"
      class="border border-gray-200 rounded p-2 w-full"
      name="firstName"
      value="{{$official->firstName}}"
    />
    @error('firstName')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-6">
    <label
      for="middleName"
      class="inline-block text-lg mb-2"
      >Middle Name</label
    >
    <input
      type="text"
      class="border border-gray-200 rounded p-2 w-full"
      name="middleName"
      value="{{$official->middleName}}"
    />
    @error('middleName')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-6">
    <label
      for="lastName"
      class="inline-block text-lg mb-2"
      >Last Name</label
    >
    <input
      type="text"
      class="border border-gray-200 rounded p-2 w-full"
      name="lastName"
      value="{{$official->lastName}}"
    />
    @error('lastName')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-6">
    <label
      for="position"
      class="inline-block text-lg mb-2"
      >Position</label
    >
    <input
      type="text"
      class="border border-gray-200 rounded p-2 w-full"
      name="position"
      value="{{$official->position}}"
    />
    @error('position')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label
      for="contactNumber"
      class="inline-block text-lg mb-2"
      >Contact Number</label
    >
    <input
      type="tel"
      class="border border-gray-200 rounded p-2 w-full"
      name="contactNumber"
      value="{{$official->contactNumber}}"
    />
    @error('contactNumber')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
   <div class="mb-6">
    <button
      class="bg-blue-700 hover:bg-blue-800 text-white rounded py-2 px-4 hover:bg-black"
    >
      Edit Official
    </button>

    <a
      href="/dashboard/officials"
      class="text-black ml-4"
    >
      Back
    </a>
  </div>
</form>
</div>
@endsection