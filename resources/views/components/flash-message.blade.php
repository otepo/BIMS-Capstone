@if(session()->has("message"))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-blue-700 text-white px-48 py-3 z-1">
        <p>
            {{ session("message") }}
        </p>
    </div>
@endif
