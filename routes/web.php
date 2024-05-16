<?php

use App\Models\Resident;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BlotterController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Logout User
Route::post('/logout', [ResidentController::class, 'logout']);
// get dashboard events resident

// Store resident
Route::post('/signup', [ResidentController::class, 'signup']); 
// Log In User
Route::post('/login/authenticate', [ResidentController::class, 'authenticate']);
Route::get("/termsofservice", [ResidentController::class, "terms"]);
Route::get("/privacypolicy", [ResidentController::class, "privacy"]);









Route::middleware(['guest'])->group(function () {
// CLIENT SIDE
// Get home brgy website
Route::get('/', [ResidentController::class, 'home']);
// Get login brgy website
Route::get('/login', [ResidentController::class, 'login']);

// Get signup brgy website
Route::get('/signup', [ResidentController::class, 'signupform']);

// Get Officials
Route::get('/about', [ResidentController::class, 'aboutHome']);
//all events in home
Route::get("/events", [EventController::class, "events"]);
//single event in home
Route::get("/events/{event}", [EventController::class, "showevent"]);
});


Route::middleware(['admin'])->group(function () {
    // Routes for admin
    // Example:
    // Route::get('/dashboard/officials', [OfficialsController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    // GET all residents
    Route::get('/dashboard/residents', [ResidentController::class, 'index']);
    // UPDATE resident
    Route::put('/dashboard/residents/{residentId}', [ResidentController::class, 'update']);
    // Delete resident
    Route::delete('/dashboard/residents/{residentId}', [ResidentController::class, 'destroy']);
    // GET single residents
    Route::get('/dashboard/residents/{residentId}', [ResidentController::class, 'show']);
    // ...
    // OFFICIALS
// GET all officials
Route::get('/dashboard/officials', [OfficialController::class, 'index']);

// BLOTTERS
// Update a blotter
Route::put('/dashboard/blotters/{blotterId}', [BlotterController::class, 'update']);
// Display all blotter
Route::get('/dashboard/blotters', [BlotterController::class, 'index']);
// Display form
Route::get('/dashboard/create/blotters', [BlotterController::class, 'show']);
// Display the edit form
Route::get('/dashboard/blotters/{blotterId}', [BlotterController::class, 'showEdit']);
// Post a blotter
Route::post('dashboard/blotters', [BlotterController::class, 'post']);
//delete listing
Route::delete("/dashboard/blotters/{blotterId}", [BlotterController::class, "destroy"]);
// USER ACCOUNTS
// GET all user accounts
Route::get('/dashboard/userAccounts', [UserAccountController::class, 'index']);


// EVENTS

//show create form
Route::get("/dashboard/events/create", [EventController::class, "create"]);

//store event data
Route::post("/dashboard/events", [EventController::class, "store"]);

//show edit form
Route::get("/dashboard/events/{event}/edit", [EventController::class, "edit"]);

//update listing
Route::put("/dashboard/events/{event}", [EventController::class, "update"]);

//delete listing
Route::delete("/dashboard/events/{event}", [EventController::class, "destroy"]);

//show all events

Route::get("/dashboard/events", [EventController::class, "index"]);

//single event
Route::get("/dashboard/events/{event}", [EventController::class, "show"]);

// REGISTER
// Show the create form
Route::get("/dashboard/register", [RegisterController::class, "show"]);
// Create resident 
Route::post("/dashboard/register", [ResidentController::class, 'register']);
// USER ACCOUNTS
// GET all user accounts
Route::get('/dashboard/userAccounts', [UserAccountController::class, 'index']);
});

Route::get("/dashboard/events", [EventController::class, "index"]);
Route::get("/dashboard/events/{event}", [EventController::class, "show"]);


Route::middleware(['resident'])->group(function () {
    // profile
    
    
    Route::get("/dashboard/profile/{residentId}", [ResidentController::class, "profile"]);
    // get dashboard events resident
    
    

    });