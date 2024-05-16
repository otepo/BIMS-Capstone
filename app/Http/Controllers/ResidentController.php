<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Official;
use App\Models\Resident;
use App\Models\ResidentCount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ResidentController extends Controller
{
    // get terms of service
    public function terms() {
        return view("terms");
    }
    // get privacy policy
    public function privacy() {
        return view("privacy");
    }
    // get profile
    public function profile(Resident $residentId) {
        return view("profile", [
            'resident' => $residentId,
            'residents' => Resident::all()
        ]);
    }
    // get home brgy
    public function home(){
        return view('index');
    }
    // get login brgy
    public function login(){
        return view('login');
    }
    // get signup brgy
    public function signupform(){
        return view('signup');
    }
    // GET officials in CLIENTSIDE
    public function aboutHome(){
        return view('about', [
            'officials' => Official::all()
        ]);
    }
    //GET all residents
    public function index() {
        return view('adminlinks.residents.residents', [
            'residents' => Resident::latest()->filter(request(["search"]))->paginate(10)->appends(request(["search"]))
            
        ]);
    }

    // GET single residents
    public function show(Resident $residentId) {
        // dd($resident);
        return view('adminlinks.residents.resident', [
            'resident' => $residentId
        ]);
    }

      // Generate resident ID number
      private function generateResidentIdNumber()
      {
          $currentYear = date('y');
          $currentMonth = date('m');
          $randomDigits = strval(10000 + mt_rand(0, 90000));
          return "{$currentYear}{$currentMonth}{$randomDigits}";
      }
  
      
      //Store resident
      public function signup(Request $request, Resident $resident){
        //   dd($request);
          
          $formFields = $request->validate([
              // 'residentId' => $this->generateResidentIdNumber(),
              'lastName' => 'required',
              'firstName' => 'required',
              'middleName' => 'nullable',
              'suffix' => 'nullable',
              'dateOfBirth' => 'required|date',
              'gender' => 'required',
              'civilStatus' => 'required',
              'bloodType' => 'required',
              'nationality' => 'required',
              'occupation' => 'required',
              'monthlyIncome' => 'required',
              'lengthOfStay' => 'required',
              'highestEducationalAttainment' => 'required',
              'purok' => 'required',
              'contactNumber' => 'required',
              'contactNumber2' => 'string|nullable',
              'houseNumber' => 'string|nullable',
              'identification' => 'required',
              'streetName' => 'required',
              'student' => 'required',
              'voter' => 'required',
              'email' => ['required', 'email', Rule::unique('users', 'email')],
              'password' => 'required|confirmed|min:6'
          ]);
          $residentId = $this->generateResidentIdNumber();
          // Assign residentId to form fields
          $formFields['residentId'] = $residentId;
          // Hash password
          $formFields['password'] = bcrypt($formFields['password']);
  
          
          $formFields['age'] = Carbon::parse($formFields['dateOfBirth'])->age;;
            // Check if the age is 60 or greater
          
          // Create residents
          $createdResident = Resident::create($formFields);

          // Update gender
          $residentCount = ResidentCount::firstOrNew([]);
          if($formFields['gender'] === 'Male'){
            $residentCount->male_count++;
            } elseif($formFields['gender'] === 'Female') {
            $residentCount->female_count++;
            }
           
        $residentCount->save();
          // Create a new User record
          $user = User::create([
          'residentId' => $createdResident->residentId,
          'email' => $formFields['email'],
          'password' => $formFields['password'],          
          ]);
        //   Login
          auth()->login($user);
          $residentId = auth()->user()->resident->residentId;
          return redirect("/dashboard/profile/{$residentId}");
      }

      public function register(Request $request, Resident $resident){
        //   dd($request);
          
          $formFields = $request->validate([
              // 'residentId' => $this->generateResidentIdNumber(),
              'lastName' => 'required',
              'firstName' => 'required',
              'middleName' => 'nullable',
              'suffix' => 'nullable',
              'dateOfBirth' => 'required|date',
              'gender' => 'required',
              'civilStatus' => 'required',
              'bloodType' => 'required',
              'nationality' => 'required',
              'occupation' => 'required',
              'monthlyIncome' => 'required',
              'lengthOfStay' => 'required',
              'highestEducationalAttainment' => 'required',
              'purok' => 'required',
              'contactNumber' => 'required',
              'contactNumber2' => 'string|nullable',
              'houseNumber' => 'string|nullable',
              'identification' => 'required',
              'streetName' => 'required',
              'student' => 'required',
              'voter' => 'required',
              'email' => ['required', 'email', Rule::unique('users', 'email')],
              'password' => 'required|confirmed|min:6'
          ]);
          $residentId = $this->generateResidentIdNumber();
          // Assign residentId to form fields
          $formFields['residentId'] = $residentId;
          // Hash password
          $formFields['password'] = bcrypt($formFields['password']);
  
          
          $formFields['age'] = Carbon::parse($formFields['dateOfBirth'])->age;;
            // Check if the age is 60 or greater
          
          // Create residents
          $createdResident = Resident::create($formFields);

          // Update gender
          $residentCount = ResidentCount::firstOrNew([]);
          if($formFields['gender'] === 'Male'){
            $residentCount->male_count++;
            } elseif($formFields['gender'] === 'Female') {
            $residentCount->female_count++;
            }
           
        $residentCount->save();
          // Create a new User record
          $user = User::create([
          'residentId' => $createdResident->residentId,
          'email' => $formFields['email'],
          'password' => $formFields['password'],          
          ]);
        //   Login
        //   auth()->login($user);
        //   $residentId = auth()->user()->resident->residentId;
          return redirect("/dashboard/residents")->with("message", "Account created successfully!");
      }

      public function update(Request $request, Resident $residentId){
        // dd($request);
        $formFields = $request->validate([
            // 'residentId' => $this->generateResidentIdNumber(),
                'lastName' => 'required',
                'firstName' => 'required',
                'middleName' => 'nullable',
                'suffix' => 'nullable',
                'dateOfBirth' => 'required|date',
                'gender' => 'required',
                'civilStatus' => 'required',
                'bloodType' => 'nullable',
                'highestEducationalAttainment' => 'required',
                'nationality' => 'required',
                'houseNumber' => 'nullable',
                'streetName' => 'required',
                'purok' => 'nullable',
                'contactNumber' => 'required',
                'contactNumber2' => 'string|nullable',
                'occupation' => 'required',
                'monthlyIncome' => 'required',
                'lengthOfStay' => 'required',
                'identification' => 'required',
                'student' => 'required',
                'voter' => 'required',
                'userLevel' => 'required',
                'userRole'=> 'required',
                'status' => 'required'
        ]);

        // Check if the gender is being changed, and update the male/female counts accordingly
        // if ($residentId->gender !== $formFields['gender']) {
        //     $residentCount = ResidentCount::firstOrNew([]);
        //     if ($residentId->gender === 'Male') {
        //         $residentCount->male_count--;
        //     } elseif ($residentId->gender === 'Female') {
        //         $residentCount->female_count--;
        //     }

        //     if ($formFields['gender'] === 'Male') {
        //         $residentCount->male_count++;
        //     } elseif ($formFields['gender'] === 'Female') {
        //         $residentCount->female_count++;
        //     }
        //     $residentCount->save();
        // }
       


        $residentId->update($formFields);
        
        // Check if the user role is 'None'
        if ($request->input('userRole') === 'Resident') {
        // Find and delete the record in the "officialtable" by residentId
        Official::where('residentId', $residentId->residentId)->delete();
        } else {
        $officialData = [
        'position' => $request->input('userRole'),
        'lastName' => $request->input('lastName'),
        'firstName' => $request->input('firstName'),
        'middleName' => $request->input('middleName'),
        'contactNumber' => $request->input('contactNumber'),
        'residentId' => $residentId->residentId,
        ];
        // Find the existing record in the "officialtable" by residentId
        $officialRecord = Official::where('residentId', $residentId->residentId)->first();

        if ($officialRecord) {
        // Update the position in the existing record
        $officialRecord->update($officialData);
        } else {     
        // Create a new record in the "officialtable"
        Official::create($officialData);
        }
    }
        // return back();
        return redirect("/dashboard/residents")->with("message", "Account updated successfully!");
      }

      public function destroy(Resident $residentId, User $user) {
        $residentId->delete();

        return redirect("/dashboard/residents");
    }
     // ##### Log Out User ##### //

     public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return redirect("/");
        return redirect("/")->with("message", "You've successfully signed out");
    }

     // ##### Log In User ###### //

     public function authenticate(Request $request, Resident $residentId) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            $residentId = auth()->user()->resident->residentId;
            if (auth()->user()->resident->userLevel === "Resident") {
                return redirect("/dashboard/profile/{$residentId}")->with("message", "You've successfully logged in");
            } else {
                return redirect("/dashboard/")->with("message", "You've successfully logged in");
            }
        }

        return back()->withErrors(["email" => "Invalid Credentials"]);
    }


}
