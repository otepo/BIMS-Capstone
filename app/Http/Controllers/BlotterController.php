<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blotter;
use App\Models\Resident;
use Illuminate\Http\Request;

class BlotterController extends Controller
{
    //SHOW all blotter
    public function index() {
        return view('adminlinks.blotters.blotters', [
            'blotters' => Blotter::latest()->filter(request(["search"]))->paginate(10)
        ]);
    }
 
    function generateBlotterId()
{
    $today = Carbon::now();
    $year = $today->year;
    $month = $today->format('m');
    
    $count = Blotter::count(); // Assuming you have a model named "Blotter" for storing the records
    
    $padLength = 5;
    $blotterId =$year . $month . str_pad($count + 1, $padLength, '0', STR_PAD_LEFT);
    
    return $blotterId;
}
    // Post a blotter
    public function post(Request $request) {
        // dd($request);
       $formFields = $request->validate([
        'complainantFullName' => 'required',
        'complainantAddress'=> 'required',
        'complainantNumber'=> 'required',
        'complaineeFullName' => 'required',
        'complaineeAddress'=> 'required',
        'complaineeNumber' => 'required',
        'incidentDate' => 'required',
        'complaintSubject' => 'required',
        'complaintStatus' => 'nullable',
        'complaint' => 'required',
       ]);
       $blotterId = $this->generateBlotterId();
       $formFields['blotterId'] = $blotterId;
       Blotter::create($formFields);
        return redirect('/dashboard/blotters');
    }
    // Display the add form
    public function show(Blotter $blotterId){
        return view('adminlinks.blotters.blotter', [
            'blotter' => $blotterId
        ]);
    }
    // Display the edit form
    public function showEdit(Blotter $blotterId){
        return view('adminlinks.blotters.editBlotter', [
            'blotter' => $blotterId
        ]);
    }
    // Update a blotter
    public function update(Request $request, Blotter $blotterId){
        // dd($request);
        $formFields = $request->validate([
            'complainantFullName' => 'required',
            'complainantAddress'=> 'required',
            'complainantNumber'=> 'required',
            'complaineeFullName' => 'required',
            'complaineeAddress'=> 'required',
            'complaineeNumber' => 'required',
            'incidentDate' => 'required',
            'complaintSubject' => 'required',
            'complaintStatus' => 'nullable',
            'complaint' => 'required',
           ]);
           $blotterId->update($formFields);
           return redirect('/dashboard/blotters');
    }
    // Delete a blotter 
    public function destroy(Blotter $blotterId){
        $blotterId->delete();
        return redirect('/dashboard/blotters');
    }

}
