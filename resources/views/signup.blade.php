<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Barangay KodeGo</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      referrerpolicy="no-referrer"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
  </head>
  <body>
    <header>
        <nav class="bg-white border-gray-200 border-b border-gray-200 dark:bg-gray-900">
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
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-100 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-center">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Home</a>
                      </li>
                  <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">About</a>
                  </li>
                  <li>
                    <a href="/events" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Events</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500 hover:underline" aria-current="page">Register</a>
                  </li>
                  <li>
                    <a href="/login" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:underline">Log In</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <div class="py-6 px-2 bg-gray-50">
        <h1 class="mx-auto pb-6 text-center text-4xl font-medium text-gray-900 px-2">Resident Application</h1>
        <div class="flex justify-center pb-2 text-yellow-600">
            <i class="uil uil-info-circle text-xl"></i>
            <p class="ml-1 mt-1.5 text-xs">Fields marked with an asterisk ( * ) are mandatory.</p>
        </div>
        
        <div class="py-2 px-10 mx-auto max-w-screen-xl rounded-lg border border-gray-300">
            
            <form method="POST" action="/signup" enctype="multipart/form-data" class="mx-auto">
              @csrf

              {{-- ACCOUNT INFO -----------------------------------}}

              <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Account Info</h3>

              {{-- EMAIL AND CONFIRM EMAIL --}}

              <div class="grid md:grid-cols-1 md:gap-6">
                <div class="relative z-0 w-full mb-6 group px-2">
                  <input
                    type="email"
                    name="email"
                    id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                    requigray
                    value="{{old("email")}}"
                  />
                  @error("email")
                  <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                  </p>
                  @enderror
                  <label
                    for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >
                    Email Address *
                  </label>
                  
                </div>
              </div>

              {{-- PASSWORD AND CONFIRM PASSWORD --}}

              <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group px-2">
                  <input
                    type="password"
                    name="password"
                    id="floating_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                    requigray
                  />
                  <label
                    for="password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >
                    Password *
                  </label>
                  @error("password")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                </div>
                <div class="relative z-0 w-full mb-6 group px-2">
                  <input
                    type="password"
                    name="password_confirmation"
                    id="floating_repeat_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                    requigray
                  />
                  <label
                    for="password_confirmation"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >
                    Confirm Password *
                  </label>
                  @error("password_confirmation")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                </div>
              </div>

              {{-- PERSONAL INFO ---------------------------------------}}

              <div>
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Personal Info</h3>
                
                {{-- LAST NAME, FIRST NAME, MIDDLE NAME --}}
                
                <div class="grid md:grid-cols-3 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="lastName"
                      id="floating_last_name"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("lastName")}}"
                    />
                    <label
                      for="lastName"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Last Name *
                    </label>
                    @error("lastName")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="firstName"
                      id="floating_first_name"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("firstName")}}"
                    />
                    <label
                      for="firstName"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      First Name *
                    </label>
                    @error("firstName")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="middleName"
                      id="floating_middle_name"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("middleName")}}"
                    />
                    <label
                      for="middleName"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Middle Name
                    </label>
                  </div>
                </div>

                {{-- EXTENSION, B-DAY, GENDER --}}

                <div class="grid md:grid-cols-3 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">

                    <select name="suffix" id="extension" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select Suffix/Extension</option>
                      <option value="None" {{ old('suffix') == 'None' ? 'selected' : '' }}>None</option>
                      <option value="Jr" {{ old('suffix') == 'Jr' ? 'selected' : '' }}>Jr.</option>
                      <option value="Sr" {{ old('suffix') == 'Sr' ? 'selected' : '' }}>Sr.</option>
                      <option value="II" {{ old('suffix') == 'II' ? 'selected' : '' }}>II</option>
                      <option value="III" {{ old('suffix') == 'III' ? 'selected' : '' }}>III</option>
                      <option value="IV" {{ old('suffix') == 'IV' ? 'selected' : '' }}>IV</option>
                    </select>
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <div class="relative max-w-xl pl-2 pt-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pt-2 pointer-events-none">
                          <svg aria-hidden="true" class="w-6 h-6 ml-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input
                        datepicker
                        datepicker-autohide
                        type="text"
                        datepicker-format="yyyy/mm/dd"
                        name="dateOfBirth"
                        class="bg-gray-100 text-gray-900 text-sm block w-full pl-10 p-2.5 border-none"
                        placeholder="Select Birth Date *"
                        value="{{old("dateOfBirth")}}"
                        />
                        @error("dateOfBirth")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                    </div>
                  </div>
                  <div class="relative z-1 w-full mb-6 group px-2">
                      <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                      <select name="gender" id="gender" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected value="">Select Gender *</option>
                      <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                      <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                      <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                      </select>
                      @error("gender")
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror
                      </div>
                </div>

                {{-- CIVIL STATUS, BLOODTYPE --}}

                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="civilStatus" id="civilStatus" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select Civil Status *</option>
                      <option value="Single" {{ old('civilStatus') == 'Single' ? 'selected' : '' }}>Single</option>
                      <option value="Married" {{ old('civilStatus') == 'Married' ? 'selected' : '' }}>Married</option>
                      <option value="Widowed" {{ old('civilStatus') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                      <option value="Annulled" {{ old('civilStatus') == 'Annulled' ? 'selected' : '' }}>Annulled</option>
                      <option value="Divorced" {{ old('civilStatus') == 'Divorce' ? 'selected' : '' }}>Divorced</option>
                    </select>
                    @error("civilStatus")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="bloodType" id="bloodType" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select Bloodtype *</option> 
                      <option value="Not sure" {{ old('bloodType') == 'Not sure' ? 'selected' : '' }}>Not sure</option>
                      <option value="A" {{ old('bloodType') == 'A' ? 'selected' : '' }}>A+</option>
                      <option value="B+" {{ old('bloodType') == 'B+' ? 'selected' : '' }}>B+</option>
                      <option value="AB+" {{ old('bloodType') == 'AB+' ? 'selected' : '' }}>AB+</option>
                      <option value="O+" {{ old('bloodType') == 'O+' ? 'selected' : '' }}>O+</option>
                      <option value="A-" {{ old('bloodType') == 'A-' ? 'selected' : '' }}>A-</option>
                      <option value="B-" {{ old('bloodType') == 'B-' ? 'selected' : '' }}>B-</option>
                      <option value="AB-" {{ old('bloodType') == 'AB-' ? 'selected' : '' }}>AB-</option>
                      <option value="O-" {{ old('bloodType') == 'O-' ? 'selected' : '' }}>O-</option>
                    </select>
                    @error("bloodType")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                
                {{-- EDUCATIONAL ATTAINMENT, NATIONALITY --}}
                
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <select name="highestEducationalAttainment" id="education" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Select Highest Educational Attainment *</option>
                        <option value="Not Applicable" {{ old('highestEducationalAttainment') == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
                        <option value="Elementary" {{ old('highestEducationalAttainment') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                        <option value="Junior High School" {{ old('highestEducationalAttainment') == 'Junior High School' ? 'selected' : '' }}>Junior High School</option>
                        <option value="Senior High School" {{ old('highestEducationalAttainment') == 'Senior High School' ? 'selected' : '' }}>Senior High School</option>
                        <option value="Vocational" {{ old('highestEducationalAttainment') == 'Vocational' ? 'selected' : '' }}>Vocational</option>
                        <option value="College" {{ old('highestEducationalAttainment') == 'College' ? 'selected' : '' }}>College</option>
                        <option value="Masteral" {{ old('highestEducationalAttainment') == 'Masteral' ? 'selected' : '' }}>Masteral</option>
                        <option value="Doctorate" {{ old('highestEducationalAttainment') == 'Doctorate' ? 'selected' : '' }}>Doctorate</option>
                      </select>
                      @error("highestEducationalAttainment")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="nationality"
                      id="floating_nationality"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("nationality")}}"
                    />
                    <label
                      for="nationality"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Nationality *
                    </label>
                    @error("nationality")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                </div>

                {{-- VOTER / STUDENT --}}
          
                {{-- student --}}

                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="student" id="student" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Are you a student? *</option>
                      <option value="not applicable" {{ old('student') == 'not applicable' ? 'selected' : '' }}>Not Applicable</option>
                      <option value="student" {{ old('student') == 'student' ? 'selected' : '' }}>Student</option>
                      <option value="graduate" {{ old('student') == 'graduate' ? 'selected' : '' }}>Graduate</option>
                    </select>
                    @error("student")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="voter" id="voter" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Are you a registered voter? *</option> 
                      

                      <option value="voter" {{ old('voter') == 'voter' ? 'selected' : '' }}>Voter</option>
                      <option value="nonVoter" {{ old('voter') == 'nonVoter' ? 'selected' : '' }}>Non-Voter</option>
                    </select>
                    @error("voter")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                </div>
              </div>

              {{-- CONTACT INFO  -----------------------------------------}}

              <div>
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Address and Contact Info</h3>
                
                {{-- HOUSE NUMBER, STREET, BARANGAY --}}
                
                <div class="grid md:grid-cols-3 md:gap-6 py-3">
                  {{-- <div class="relative z-1 w-full mb-6 group px-2">
                    <select id="barangay" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Select Barangay</option>
                      <option value="">Barangay San Nicolas, Angeles City</option>
                      <option value="">Barangay Malabanias, Angeles City</option>
                      <option value="">Barangay Balibago, Angeles City</option>
                      <option value="">Barangay Dolores, San Fernando City</option>
                      <option value="">Barangay Sindalan, San Fernando City</option>
                      <option value="">Barangay Telabastagan, San Fernando City</option>
                      <option value="">Barangay San Vicente, Apalit</option>
                      <option value="">Barangay San Juan, San Simon</option>
                      <option value="">Barangay San Agustin, Lubao</option>
                      <option value="">Barangay San Pedro, Magalang</option>
                    </select>
                  </div> --}}
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="number"
                      name="houseNumber"
                      id="floating_house_number"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("houseNumber")}}"
                    />
                    <label
                      for="houseNumber"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      House Number
                    </label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="streetName"
                      id="floating_street_name"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("streetName")}}"
                    />
                    <label
                      for="streetName"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Street Name *
                    </label>
                    @error("streetName")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                </div>

                {{-- PUROK, PHONE NUMBER, TELEPHONE NUMBER --}}

                <div class="grid md:grid-cols-3 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="number"
                      name="purok"
                      id="floating_purok"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("purok")}}"
                    />
                    <label
                      for="floating_purok"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Purok
                    </label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="tel"
                      {{-- pattern="" --}}
                      name="contactNumber"
                      id="floating_phone"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("contactNumber")}}"
                    />
                    <label
                      for="contactNumber"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Phone number (0912 345 6789) *
                    </label>
                    @error("contactNumber")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="tel"
                      name="contactNumber2"
                      id="floating_tel"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                    />
                    <label
                      for="contactNumber2"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Telephone number (01-2345-6789)
                    </label>
                  </div>
                </div>
              </div>

              {{-- WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOORK --}}
              <div>
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Employment and Household Information</h3>
                
                {{-- OCCUPATION, HOUSEHOLDNUMBER, INCOME--}}
                
                <div class="grid md:grid-cols-2 md:gap-6 py-3">
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="occupation" id="occupation" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Employment Status *</option>
                      <option value="employed" {{ old('occupation') == 'employed' ? 'selected' : '' }}>Employed</option>
                      <option value="unEmployed" {{ old('occupation') == 'unEmployed' ? 'selected' : '' }}>Unemployed</option>
                    </select>
                    @error("occupation")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                  {{-- <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="occupation"
                      id="floating_occupation"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("occupation")}}"
                    />
                    <label
                      for="occupation"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Occupation (NA if Unemployed) *
                    </label>
                    @error("occupation")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div> --}}
                  {{-- <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="number"
                      name="householdNumber"
                      id="floating_household_number"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("householdNumber")}}"
                    />
                    @error("householdNumber")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <label
                      for="householdNumber"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                    Number Of Household Members *
                    </label>
                    
                  </div> --}}
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="monthlyIncome"
                      id="income"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("monthlyIncome")}}"
                    />
                    <label
                      for="monthlyIncome"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Monthly Income (NA if Not Applicable) *
                    </label>
                    @error("monthlyIncome")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="number"
                      name="lengthOfStay"
                      id="length"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{old("lengthOfStay")}}"
                    />
                    <label
                      for="lengthOfStay"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Length of Stay in Months *
                    </label>
                    @error("lengthOfStay")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                </div>
              </div>

              

              {{-- DOCUMENT ID ---------------------------------------------}}

              <div class="">
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Document/ID</h3>
                <div class="flex items-center mb-4">
                  {{-- <input
                    id="resident-checkbox"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 text-gray-600"
                  />
                  <label
                    for="resident-checkbox"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >
                    Applying for Resident
                  </label> --}}
                </div>
                <h5 class="text-gray-700 font-meduim px-2">
                  Please upload any of the following documents to apply as
                  Resident
                </h5>
                <div class="text-gray-400 italic mb-2 px-2">
                  <div class="grid md:grid-cols-2 md:gap-6">
                    <ul class="m-5 list-disc">
                      <li>Passport</li>
                      <li>Driver's License</li>
                      <li>UMID</li>
                      <li>PhilHealth ID</li>
                      <li>TIN ID</li>
                      <li>Postal ID</li>
                      <li>Voters ID</li>
                      <li>Senior Citizen ID</li>
                      <li>OFW ID</li>
                    </ul>
                    <ul class="m-5 list-disc">
                      <li>PRC ID</li>
                      <li>National ID</li>
                      <li>NBI Clearance</li>
                      <li>Police Clearance</li>
                      <li>Barangay Clearance</li>
                      <li>Birth Certificate</li>
                      <li>Marriage Certificate</li>
                      <li>Community Tax Certificate/Cedula</li>
                    </ul>
                  </div>
                  <p>
                    <span class="font-bold">Reminder:</span> If you are sending your ID, make sure to send the back part
                    of your ID as well for a faster and better verification process
                  </p>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 px-2">
                  <div class="relative z-0 w-full mb-6 group pt-2">
                    <select name="identification" id="id" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select ID *</option>
                      <option value="None" {{ old('identification') == 'None' ? 'selected' : '' }}>None</option>
                      <option value="Passport" {{ old('identification') == 'Passport' ? 'selected' : '' }}>Passport</option>
                      <option value="Driver's License" {{ old('identification') == 'Drivers License' ? 'selected' : '' }}>Driver's License</option>
                      <option value="UMID" {{ old('identification') == 'UMID' ? 'selected' : '' }}>UMID</option>
                      <option value="PhilHealth ID" {{ old('identification') == 'PhilHealth ID' ? 'selected' : '' }}>PhilHealth ID</option>
                      <option value="TIN ID" {{ old('identification') == 'TIN ID' ? 'selected' : '' }}>TIN ID</option>
                      <option value="Postal ID" {{ old('identification') == 'Postal ID' ? 'selected' : '' }}>Postal ID</option>
                      <option value="Voters ID" {{ old('identification') == 'Voters ID' ? 'selected' : '' }}>Voters ID</option>
                      <option value="Senior Citizen ID" {{ old('identification') == 'Senior Citizen ID' ? 'selected' : '' }}>Senior Citizen ID</option>
                      <option value="OFW ID" {{ old('identification') == 'OFW ID' ? 'selected' : '' }}>OFW ID</option>
                      <option value="PRC ID" {{ old('identification') == 'PRC ID' ? 'selected' : '' }}>PRC ID</option>
                      <option value="National ID" {{ old('identification') == 'National ID' ? 'selected' : '' }}>National ID</option>
                      <option value="NBI Clearance" {{ old('identification') == 'NBI Clearance' ? 'selected' : '' }}>NBI Clearance</option>
                      <option value="Police Clearance" {{ old('identification') == 'Police Clearance' ? 'selected' : '' }}>Police Clearance</option>
                      <option value="Barangay Clearance" {{ old('identification') == 'Barangay Clearance' ? 'selected' : '' }}>Barangay Clearance</option>
                      <option value="Birth Certificate" {{ old('identification') == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate</option>
                      <option value="Marriage Certificate" {{ old('identification') == 'Marriage Certificate' ? 'selected' : '' }}>Marriage Certificate</option>
                      <option value="Community Tax Certificate/Cedula" {{ old('identification') == 'Community Tax Certificate/Cedula' ? 'selected' : '' }}>Community Tax Certificate/Cedula</option>
                    </select>
                    @error("identification")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                  </div>
                  {{-- <div class="relative z-0 w-full mb-6 group px-2">
                    <label
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                      for="file_input"
                    ></label>
                    <input
                      class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                      id="file_input"
                      type="file"
                      name="documentFile"
                    /> --}}
                    {{-- @error("documentFile")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror --}}
                  {{-- </div> --}}
                </div>
                <p class="italic text-gray-400 text-center pb-3 mb-2">
                  By clicking Submit you agree to our
                  <a class="underline" href="/termsofservice"> Terms of Service </a> and that you
                  have read our
                  <a class="underline" href="/privacypolicy"> Privacy Policy </a>
                </p>
              </div>
              <div class="flex justify-center pb-2">
                <button
                  type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
    </div>

    <footer class="bg-white border-t border-gray-200 dark:bg-gray-900" id="footer">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6">
            <div class="md:flex flex-wrap md:justify-between text-center">
              
                  <div>
                      <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Main Office</h2>
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