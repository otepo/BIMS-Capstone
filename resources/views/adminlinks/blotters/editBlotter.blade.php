@extends("admin")
@section("editBlotter")



<div class="py-6 px-2 bg-gray-50">
  <h1 class="mx-auto pb-6 text-center text-4xl font-medium text-gray-900 px-2">Edit Blotter</h1>
  <div class="py-2 px-10 mx-auto max-w-screen-md rounded-lg border border-gray-300">
    <form method="POST" action="/dashboard/blotters/{{$blotter->blotterId}}" enctype="multipart/form-data" class="mx-auto">
      @csrf
      @method('PUT')
      <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Complainant Info</h3>
      
  
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-2 group px-2" >
          <p class="font-semibold">Blotter #{{$blotter->blotterId}}</p>
        </div>
        <div class="relative z-0 w-full mb-2 group px-2" >
            <select name="complaintStatus" id="userLevel" class="border-none bg-gray-100 text-gray-900 text-sm focus:ring-gray-50 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected disabled value="{{old("complaintStatus")}}">Select User Level *</option>
              <option value="On going" {{ old('complaintStatus', $blotter->complaintStatus) == 'On going' ? 'selected' : '' }}>On going</option>
              <option value="Closed" {{ old('complaintStatus', $blotter->complaintStatus) == 'Closed' ? 'selected' : '' }}>Closed</option>
            </select> 
          </div>
      </div>
      <div class="grid md:grid-cols-6 md:gap-6">
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
          data-modal-target="residentModal" data-modal-toggle="residentModal"
            type="text"
            name="complainantFullName"
            id="residentFullName"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complainantFullName}}"
          />
          @error("complainantFullName")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
           Full Name
          </label>
        </div>
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
            type="text"
            name="complainantAddress"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complainantAddress}}"
          />
          @error("complainantAddress")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Address
          </label>
        </div>
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
            type="text"
            name="complainantNumber"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complainantNumber}}"
          />
          @error("complainantNumber")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Contact No.
          </label>
        </div>
        
      </div>
      <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Complainee Info</h3>
      <div class="grid md:grid-cols-6 md:gap-6">
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
          data-modal-target="residentModal" data-modal-toggle="residentModal"
            type="text"
            name="complaineeFullName"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complaineeFullName}}"
          />
          @error("complaineeFullName")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
           Full Name
          </label>
        </div>
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
            type="text"
            name="complaineeAddress"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complaineeAddress}}"
          />
          @error("complaineeAddress")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Address
          </label>
        </div>
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          <input
            type="text"
            name="complaineeNumber"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complaineeNumber}}"
          />
          @error("complaineeNumber")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Contact No.
          </label>
        </div>
      </div>
      <h3 class="text-md py-2 text-center my-2 font-bold bg-gray-200">Blotter Info</h3>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-2 group px-2">
          <div class="relative max-w-xl pl-2 pt-2">
              <div class="absolute inset-y-0 left-0 flex items-center pl-2 pt-2 pointer-events-none">
                <svg aria-hidden="true" class="w-6 h-6 ml-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
              </div>
              <input
              datepicker
              datepicker-autohide
              type="text"
              datepicker-format="yyyy/mm/dd"
              name="incidentDate"
              class=" text-gray-900 text-sm block w-full pl-10 p-2.5 border-none"
              placeholder="Incedent Date"
              value="{{$blotter->incidentDate}}"
              />
              @error("incidentDate")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          </div>
        </div>
        <div class=" relative z-0 w-full mb-6 group px-2">
          <input
            type="text"
            name="complaintSubject"
            id="floating_email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "
            requigray
            value="{{$blotter->complaintSubject}}"
          />
          @error("complaintSubject")
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <label
            for="floating_first_name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Complaint Subject
          </label>
        </div>
        <div class="col-span-2 relative z-0 w-full mb-6 group px-2">
          
<label for="message" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400 ">Complain</label>
<textarea id="message" name="complaint" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your complain here...">{{$blotter->complaintSubject}}"
</textarea>
              @error('complaint')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror

          </label>
        </div>
        
      </div>
      <div class="flex justify-center pb-2">
        <button
          type="submit"
          class="text-white bg-gray-800 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
        >
          Submit
        </button>
      </div>
    </form>
  </div>

</div>



@endsection