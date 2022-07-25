<div>

    @if (Request::routeIs($name))
    <a href="{{$href}}" class="text-base font-medium py-2 px-4 border border-transparent rounded-md
        shadow-sm
        text-white
        {{$color}}
        ring-2
        ring-offset-2
        ring-kit-yellow-gold
    ">
        @else
            <a href="{{$href}}" class="text-base font-medium py-2 px-4 border border-transparent rounded-md
        text-gray-500
        hover:shadow-sm
        hover:text-white
        hover:{{$color}}
        focus:ring-2
        focus:ring-offset-2
        focus:ring-{{$color}}
    ">

        @endif


        {{$value}}

    </a>
</div>