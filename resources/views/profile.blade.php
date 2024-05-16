@extends("admin")

@section("profile")

<script>
  function functionPrint() {
    document.querySelectorAll("#nonPrintable").className = "noPrint";
    window.print();
}

</script>



<div class="flex justify-start noPrint">
  <div>
    <h1 class="mx-auto pb-6 text-xl font-medium text-gray-900 px-2">Resident # {{$resident->residentId}}</h1>
  </div>

  
 
</div>
@if ($resident->status === 'Approved')
<div class="flex justify-center noPrint">
  <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-4 mr-2" type="button">
    Barangay ID: Front
  </button>

  <button data-modal-target="popup-modal1" data-modal-toggle="popup-modal1" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-4" type="button">
    Barangay ID: Back
  </button>
</div>

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg dark:bg-gray-700">
          <div class="pb-12 mb-2 noPrint">
            
          <button type="button" class="absolute top-3 left-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white " onclick="functionPrint()">
            <svg aria-hidden="true" class="w-6 h-6 mx-auto mt-px" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Print</span>
          </button>
        </button>
          
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

          </div>


            <div id="modal-body" class="relative rounded-lg dark:bg-gray-700">
              <div id="modal-id" class="pt-6 pl-6 pr-6 pb-1 flex justify-between">
                <img src="{{asset("images/seal1.png")}}" alt="seal">
                <p class="my-auto font-bold">Barangay KodeGo - City of Angeles</p>
                <img src="{{asset("images/seal3.png")}}" alt="seal">
              </div>
              <div class="flex justify-between pb-2">
                <p class="my-auto mx-auto font-medium">Barangay Resident's Card</p>
              </div>
              <div  class="flex align-center rounded-b-lg">
                <div id="modal-info" class="pl-4 pr-4">
                  <div class="flex  justify-between pb-2 pt-4">
                    <div >
                      <p class="uppercase text-xs pb-1">Full name</p>
                      <p class="text-md font-medium">{{$resident->lastName}}, {{$resident->firstName}} {{$resident->middleName}}</p>
                    </div>
                    <div>
                      <p class="uppercase text-xs pb-1">Resident ID</p>
                      <p class="text-md font-medium">{{$resident->residentId}}</p>
                    </div>
                  </div>
                  <div class="flex justify-between pb-2">
                    <div>
                      <p class="uppercase text-xs pb-1">Date of Birth</p>
                    <p class="text-md font-medium">{{$resident->dateOfBirth}}</p>
                    </div>
                    <div>
                      <p class="uppercase text-xs pb-1">Civil Status</p>
                    <p class="text-md font-medium">{{$resident->civilStatus}}</p>
                    </div>
                    <div>
                      <p class="uppercase text-xs pb-1">Gender</p>
                    <p class="text-md font-medium">{{$resident->gender}}</p>
                    </div>
                  </div>
                  <div class="pb-2">
                    <p class="uppercase text-xs pb-1">Address</p>
                    <p class="text-md font-medium">{{$resident->houseNumber}}, {{$resident->streetName}}, {{$resident->purok}}, Barangay KodeGo</p>
                  </div>
                </div>
                <div class="flex align-center pr-4 " id="modal-img">
                  <img class="pt-4 pb-4" src="{{asset("images/capt.jpg")}}" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div id="popup-modal1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="pb-12 mb-2 noPrint">
          
        <button type="button" class="absolute top-3 left-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white " onclick="functionPrint()">
          <svg aria-hidden="true" class="w-6 h-6 mx-auto mt-px" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Print</span>
        </button>
      </button>
        
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal1">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Close modal</span>
          </button>

        </div>


        <div id="modal-body" class="relative rounded-lg dark:bg-gray-700 ">
          <div id="modal-id" class="pt-6 pl-6 pr-6 pb-2 flex justify-center">
            <img class="mr-2" src="{{asset("images/seal1.png")}}" alt="seal">
            <img src="{{asset("images/seal3.png")}}" alt="seal">
          </div>
          <div class="flex justify-between pb-2">
            <p class="my-auto mx-auto font-medium">Additional Information</p>
          </div>
          <div  class="flex align-center pt-3 justify-around rounded-b-lg">
            <div id="modal-info" class="pl-4 pr-4">
              <div class="flex  justify-between pb-2 pt-4">
                <div >
                  <p class="uppercase text-xs pb-1">Nationality</p>
                  <p class="text-md font-medium">{{$resident->nationality}}</p>
                </div>
                <div>
                  <p class="uppercase text-xs pb-1">Blood Type</p>
                  <p class="text-md font-medium">{{$resident->bloodType}}</p>
                </div>
              </div>
              <div class="flex justify-between pb-2">
                <div>
                  <p class="uppercase text-xs pb-1">Date of Issue</p>
                <p class="text-md font-medium">June 29, 2023</p>
                </div>
                <div>
                  <p class="uppercase text-xs pb-1"></p>
                <p class="text-md font-medium"></p>
                </div>
                <div>
                  <p class="uppercase text-xs pb-1"></p>
                <p class="text-md font-medium"></p>
                </div>
              </div>
              <div class="pb-2">
                <p class="uppercase text-xs pb-1">Emergency Contact</p>
                <p class="text-md font-medium">Achilles Halili - 0975-584-2006</p>
              </div>
            </div>
            <div class="flex flex-col align-center pr-4" id="modal-img">
              <img class="pt-4" src="{{asset("images/seal4.png")}}" alt="">
              <p class="text-xs pt-2 underline text-center">Joseph Malundas</p>
              <p class="text-xs pb-2 text-center">Chairman</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>


    <div id="nonPrintable" class="py-6 px-2 bg-gray-50 noPrint">
        <h1 class="mx-auto pb-6 text-center text-4xl font-medium text-gray-900 px-2">Resident Info</h1>
        <div class="flex justify-center pb-2 text-yellow-600">
            <i class="uil uil-info-circle text-xl"></i>
            <p class="ml-1 mt-1.5 text-xs">Fields marked with an asterisk ( * ) are mandatory.</p>
        </div>
        
        <div class="py-2 px-10 mx-auto max-w-screen-xl rounded-lg border border-gray-300">
            
            <form method="POST" action="/dashboard/residents/{{$resident->residentId}}" enctype="multipart/form-data" class="mx-auto">
              @csrf
              @method('PUT')


              {{-- User Role --}}

              {{-- <div>
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">User Role / User Level / Application Status</h3>
                

                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="userRole" id="userRole" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected disabled>Select User Role *</option>
                      <option value="Resident" {{ old('userRole', $resident->userRole) == 'Resident' ? 'selected' : '' }}>Resident</option>
                      <option value="Chairman" {{ old('userRole', $resident->userRole) == 'Chairman' ? 'selected' : '' }}>Chairman</option>
                      <option value="Secretary" {{ old('userRole', $resident->userRole) == 'Secretary' ? 'selected' : '' }}>Secretary</option>
                      <option value="Kagawad" {{ old('userRole', $resident->userRole) == 'Kagawad' ? 'selected' : '' }}>Kagawad</option>
                      <option value="SK Chairman" {{ old('userRole', $resident->userRole) == 'SK Chairman' ? 'selected' : '' }}>SK Chairman</option>
                    </select>
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="userLevel" id="userLevel" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected disabled value="{{old("userLevel")}}">Select User Level *</option>
                      <option value="Resident" {{ old('userLevel', $resident->userLevel) == 'Resident' ? 'selected' : '' }}>Resident</option>
                      <option value="Admin" {{ old('userLevel', $resident->userLevel) == 'Admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                  </div>
                  
                 
              </div>
              <div class="grid md:grid-cols-1 md:gap-6">
                <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                  <select name="status" id="userRole" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled value="">Application Status</option>
                    <option value="Pending" {{ old('status', $resident->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Approved" {{ old('status', $resident->status) == 'Approved' ? 'selected' : '' }}>Approved</option>
                    <option value="Deny" {{ old('status', $resident->status) == 'Deny' ? 'selected' : '' }}>Deny</option>
                  </select>
                </div>
               
            </div>
              </div> --}}

              <div>
                <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Personal Info</h3>
                
                {{-- LAST NAME, FIRST NAME, MIDDLE NAME --}}
                
                <div class="grid md:grid-cols-3 md:gap-6 mt-4">
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <input
                      type="text"
                      name="lastName"
                      id="floating_last_name"
                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      placeholder=" "
                      requigray
                      value="{{$resident->lastName}}"
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
                      value="{{$resident->firstName}}"
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
                      value="{{$resident->middleName}}"
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
                      <option value="None" {{ old('suffix', $resident->suffix) == 'None' ? 'selected' : '' }}>None</option>
                      <option value="Jr" {{ old('suffix', $resident->suffix) == 'Jr' ? 'selected' : '' }}>Jr.</option>
                      <option value="Sr" {{ old('suffix', $resident->suffix) == 'Sr' ? 'selected' : '' }}>Sr.</option>
                      <option value="II" {{ old('suffix', $resident->suffix) == 'II' ? 'selected' : '' }}>II</option>
                      <option value="III" {{ old('suffix', $resident->suffix) == 'III' ? 'selected' : '' }}>III</option>
                      <option value="IV" {{ old('suffix', $resident->suffix) == 'IV' ? 'selected' : '' }}>IV</option>
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
                        value="{{$resident->dateOfBirth}}"
                        />
                        @error("dateOfBirth")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
                    </div>
                  </div>
                  <div class="relative z-1 w-full mb-6 group px-2">
                      <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                      <select name="gender" id="gender" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select Gender *</option>
                      <option value="Male" {{ old('gender', $resident->gender ) == 'Male' ? 'selected' : '' }}>Male</option>
                      <option value="Female" {{ old('gender', $resident->gender ) == 'Female' ? 'selected' : '' }}>Female</option>
                      <option value="Other" {{ old('gender', $resident->gender ) == 'Other' ? 'selected' : '' }}>Other</option>
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
                      <option value="Single" {{ old('civilStatus', $resident->civilStatus) == 'Single' ? 'selected' : '' }}>Single</option>
                      <option value="Married" {{ old('civilStatus', $resident->civilStatus) == 'Married' ? 'selected' : '' }}>Married</option>
                      <option value="Widowed" {{ old('civilStatus', $resident->civilStatus) == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                      <option value="Annulled" {{ old('civilStatus', $resident->civilStatus) == 'Annulled' ? 'selected' : '' }}>Annulled</option>
                      <option value="Divorced" {{ old('civilStatus', $resident->civilStatus) == 'Divorce' ? 'selected' : '' }}>Divorced</option>
                    </select>
                    @error("civilStatus")
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                    <select name="bloodType" id="bloodType" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Select Bloodtype *</option> 
                      <option value="Not sure" {{ old('bloodType', $resident->bloodType) == 'Not sure' ? 'selected' : '' }}>Not sure</option>
                      <option value="A" {{ old('bloodType', $resident->bloodType) == 'A' ? 'selected' : '' }}>A+</option>
                      <option value="B+" {{ old('bloodType', $resident->bloodType) == 'B+' ? 'selected' : '' }}>B+</option>
                      <option value="AB+" {{ old('bloodType', $resident->bloodType) == 'AB+' ? 'selected' : '' }}>AB+</option>
                      <option value="O+" {{ old('bloodType', $resident->bloodType) == 'O+' ? 'selected' : '' }}>O+</option>
                      <option value="A-" {{ old('bloodType', $resident->bloodType) == 'A-' ? 'selected' : '' }}>A-</option>
                      <option value="B-" {{ old('bloodType', $resident->bloodType) == 'B-' ? 'selected' : '' }}>B-</option>
                      <option value="AB-" {{ old('bloodType', $resident->bloodType) == 'AB-' ? 'selected' : '' }}>AB-</option>
                      <option value="O-" {{ old('bloodType', $resident->bloodType) == 'O-' ? 'selected' : '' }}>O-</option>
                    </select>
                  </div>
                </div>

                {{-- EDUCATIONAL ATTAINMENT, NATIONALITY --}}
                
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group px-2">
                    <select name="highestEducationalAttainment" id="education" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Select Highest Educational Attainment *</option>
                        <option value="Not Applicable" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
                        <option value="Elementary" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                        <option value="Junior High School" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Junior High School' ? 'selected' : '' }}>Junior High School</option>
                        <option value="Senior High School" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Senior High School' ? 'selected' : '' }}>Senior High School</option>
                        <option value="Vocational" {{ old('highestEducationalAttainment',  $resident->highestEducationalAttainment) == 'Vocational' ? 'selected' : '' }}>Vocational</option>
                        <option value="College" {{ old('highestEducationalAttainment',  $resident->highestEducationalAttainment) == 'College' ? 'selected' : '' }}>College</option>
                        <option value="Masteral" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Masteral' ? 'selected' : '' }}>Masteral</option>
                        <option value="Doctorate" {{ old('highestEducationalAttainment', $resident->highestEducationalAttainment) == 'Doctorate' ? 'selected' : '' }}>Doctorate</option>
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
                      value="{{$resident->nationality}}"
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
                  <option value="not applicable" {{ old('student', $resident->student) == 'not applicable' ? 'selected' : '' }}>Not Applicable</option>
                  <option value="student" {{ old('student', $resident->student) == 'student' ? 'selected' : '' }}>Student</option>
                  <option value="graduate" {{ old('student', $resident->student) == 'graduate' ? 'selected' : '' }}>Graduate</option>
                </select>
                @error("student")
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="relative z-0 w-full mb-6 group px-2 pt-2">
                <select name="voter" id="voter" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option disabled selected>Are you a registered voter? *</option> 
                  

                  <option value="voter" {{ old('voter', $resident->voter) == 'voter' ? 'selected' : '' }}>Voter</option>
                  <option value="nonVoter" {{ old('voter', $resident->voter) == 'nonVoter' ? 'selected' : '' }}>Non-Voter</option>
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
                      value="{{$resident->houseNumber}}"
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
                      value="{{$resident->streetName}}"
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
                      value="{{$resident->purok}}"
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
                      value="{{$resident->contactNumber}}"
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
                      value="{{$resident->contactNumber2}}"
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
                      <option value="employed" {{ old('occupation', $resident->occupation) == 'employed' ? 'selected' : '' }}>Employed</option>
                      <option value="unEmployed" {{ old('occupation', $resident->occupation) == 'unEmployed' ? 'selected' : '' }}>Unemployed</option>
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
                      value="{{$resident->occupation}}"
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
                      value="{{$resident->householdNumber}}"
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
                      value="{{$resident->monthlyIncome}}"
                    />
                    <label
                      for="monthlyIncome"
                      class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >
                      Monthly Income (NA if Not Applicable) *
                    </label>
                    @error("income")
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
                      value="{{$resident->lengthOfStay}}"
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
                      <option value="None" {{ old('identification', $resident->identification) == 'None' ? 'selected' : '' }}>None</option>
                      <option value="Passport" {{ old('identification', $resident->identification) == 'Passport' ? 'selected' : '' }}>Passport</option>
                      <option value="Driver's License" {{ old('identification', $resident->identification) == 'Drivers License' ? 'selected' : '' }}>Driver's License</option>
                      <option value="UMID" {{ old('identification', $resident->identification) == 'UMID' ? 'selected' : '' }}>UMID</option>
                      <option value="PhilHealth ID" {{ old('identification', $resident->identification) == 'PhilHealth ID' ? 'selected' : '' }}>PhilHealth ID</option>
                      <option value="TIN ID" {{ old('identification', $resident->identification) == 'TIN ID' ? 'selected' : '' }}>TIN ID</option>
                      <option value="Postal ID" {{ old('identification', $resident->identification) == 'Postal ID' ? 'selected' : '' }}>Postal ID</option>
                      <option value="Voters ID" {{ old('identification', $resident->identification) == 'Voters ID' ? 'selected' : '' }}>Voters ID</option>
                      <option value="Senior Citizen ID" {{ old('identification', $resident->identification) == 'Senior Citizen ID' ? 'selected' : '' }}>Senior Citizen ID</option>
                      <option value="OFW ID" {{ old('identification', $resident->identification) == 'OFW ID' ? 'selected' : '' }}>OFW ID</option>
                      <option value="PRC ID" {{ old('identification', $resident->identification) == 'PRC ID' ? 'selected' : '' }}>PRC ID</option>
                      <option value="National ID" {{ old('identification', $resident->identification) == 'National ID' ? 'selected' : '' }}>National ID</option>
                      <option value="NBI Clearance" {{ old('identification', $resident->identification) == 'NBI Clearance' ? 'selected' : '' }}>NBI Clearance</option>
                      <option value="Police Clearance" {{ old('identification', $resident->identification) == 'Police Clearance' ? 'selected' : '' }}>Police Clearance</option>
                      <option value="Barangay Clearance" {{ old('identification', $resident->identification) == 'Barangay Clearance' ? 'selected' : '' }}>Barangay Clearance</option>
                      <option value="Birth Certificate" {{ old('identification', $resident->identification) == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate</option>
                      <option value="Marriage Certificate" {{ old('identification', $resident->identification) == 'Marriage Certificate' ? 'selected' : '' }}>Marriage Certificate</option>
                      <option value="Community Tax Certificate/Cedula" {{ old('identification', $resident->identification) == 'Community Tax Certificate/Cedula' ? 'selected' : '' }}>Community Tax Certificate/Cedula</option>
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
                
              </div>
              {{-- <div class="flex justify-center pb-2">
                <button
                  type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                >
                  Update
                </button>
              </div> --}}
            </form>

            @elseif ($resident->status === 'Pending')
            <div class="py-8">
              <p class="text-center font-medium mx-auto">Application Status: <span class="text-gray-700">Pending</span> approval from Barangay Officials</p>
            </div>
           
        @elseif ($resident->status === 'Deny')
        <div class="py-8">

            
            <p class="text-center font-medium mx-auto">Application Status: <span class="text-red-700">Denied</span>, please contact Barangay Secretary for more information</p>
          </div>
        @endif
          </div>
    </div>

    


  @endsection

