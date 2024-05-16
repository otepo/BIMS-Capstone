<x-layout>
    @include("partials._search", ['action' => '/dashboard/events'])
    
    
    <div class="lg:grid lg:grid-cols-1 xl:grid-cols-2 lg:grid gap-4 space-y-4 md:space-y-0">
    
    @unless(count($events) == 0)
    
    @foreach($events as $event)
    
    <x-event-card :event="$event"/>
    
    @endforeach
    
    @else
    <div>
    <h3 class="text-3xl">
        No upcoming events as of this time.
    </h3>
    </div>
    @endunless
    </div>
    
    <div class="mt-6 p-4">
        {{$events->links()}}
    </div>
    
    </x-layout>



