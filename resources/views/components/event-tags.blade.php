@props(["tagsCsv"])

@php
    $tags = explode("," , $tagsCsv)    
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li
      class="flex items-center justify-center bg-blue-700 text-white py-1 px-4 mr-2 mt-2 text-sm"
    >
      <a href="/dashboard/events/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
  </ul>