@extends("admin")

@section("dashboard")


<div id="admin-content">
    <div class="flex justify-between">
    <h1 class="text-3xl mb-1 pb-4">Dashboard</h1>
  </div>

<div id="dashboard" class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    
<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents">

    <div >
        <i class="uil uil-users-alt text-2xl text-center"></i>
    </div>

</a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Population</h5>

    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->count()}}</p>
    </div>
</div>


<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=male">

    <div>
        <i class="uil uil-mars text-2xl text-center"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Male</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where("gender", "Male")->count()}}</p>


    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=female">

    <div >
        <i class="uil uil-venus text-2xl text-center"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Female</h5>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where("gender", "Female")->count()}}</p>

        
    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=senior">


    <div >
        <i class="uil uil-user text-2xl text-center"></i>
    </div>

    </a>
    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Senior Citizen</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('seniorCitizen', '==', "senior")->count();}}</p>

        
    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=voter">


    <div >
        <i class="uil uil-user-check text-2xl text-center"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Voter</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('voter', '==', "voter")->count();}}</p>

    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=nonVoter">


    <div >
        <i class="uil uil-user-times text-2xl text-center"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Non-voter</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('voter', '==', "nonVoter")->count();}}</p>
        
    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/blotters">


    <div >
        <i class="uil uil-book text-2xl text-center"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Blotters</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$blotters->count()}}</p>


    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=student">


    <div >
        <i class="uil uil-graduation-cap text-2xl"></i>
    </div>

    </a>

    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Student</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('student', '==', "student")->count();}}</p>

        
    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=employed">


    <div >
        <i class="uil uil-bag text-2xl text-center"></i>
    </div>

    </a>
    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Employed</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('occupation', '==', "employed")->count();}}</p>

        
    </div>
</div>

<div class="dashboard-card flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mx-auto">

    <a class="text-center p-8 h-full items-center bg-blue-700 text-white font-medium rounded-l-lg flex hover:bg-blue-800" href="/dashboard/residents?search=unEmployed">


    <div >
        <i class="uil uil-bag-slash text-2xl text-center"></i>
    </div>

    </a>
    <div class="flex flex-col justify-center p-4 mx-auto">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center uppercase">Unemployed</h5>
        
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">{{$residents->where('occupation', '==', "unEmployed")->count();}}</p>

        
    </div>
</div>

</div>
</div>
</section>

@endsection