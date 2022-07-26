
    @if (Request::routeIs($name))
    <a href="{{$href}}"
        class="text-base font-medium py-2 px-4 border border-transparent rounded-md text-white {{$color}}"
        style="">
        {{ $value }}
    </a>
    @else
        <a href="{{$href}}" id="{{$name}}" class="text-base font-medium py-2 px-4 border border-transparent rounded-md hover:text-white duration-300">
            {{ $value }}
        </a>
                <style>
                    #{{$name}}:hover {
                        background-color: {{ $hovercolor  }};
                        {{--box-shadow: 0 0 0 2px #ffffff, 0 0 0 4px {{ $hovercolor  }}, 0 0 #0000;--}}
                    }
                    #{{$name}}:focus {
                         background-color: {{ $hovercolor  }};
                         {{--box-shadow: 0 0 0 2px #ffffff, 0 0 0 4px {{ $hovercolor  }}, 0 0 #0000;--}}
                     }
                </style>
    @endif
