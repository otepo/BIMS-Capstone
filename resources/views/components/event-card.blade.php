@props(["event"])

<x-card>
    <div class="flex">
      <img
        class="hidden w-48 mr-6 md:block"
        src="{{$event->image ? asset("storage/" . $event->image) : asset("/images/event-landscape.jpg")}}"
        alt=""
      />
      <div>
        <h3 class="text-3xl font-bold">
          <a href="/dashboard/events/{{$event->id}}">{{$event->title}}</a>
        </h3>
        <x-event-tags :tagsCsv="$event->tags"/>
        <div class="uppercase text-lg mt-4">
            <i class="fa-solid fa-clock"></i> {{$event->when}}
        </div>
        <div class="text-lg mt-4">
          <i class="fa-solid fa-location-dot"></i> {{$event->location}}
        </div>
      </div>
    </div>
</x-card>