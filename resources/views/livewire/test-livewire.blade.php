<div>
    {{-- In work, do what you enjoy. --}}

    <div class="flex flex-col justify-center">

        <div class="p-1 max-w-sm mx-auto">
            <button wire:click="addField" type="button" class="inline-flex items-center
            px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
            shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajout input</button>

        </div>

        @foreach($fields as $key => $value)
            <div class="p-3 max-w-sm mx-auto">
                <div class="mt-1 flex flex-row">

                    <input type="text" name="fields[]" id="namefield{{ $key }}"
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                           sm:text-sm border-gray-300 rounded-md" value="{{ $key }}" placeholder="name field {{ $key }}">

                    <input type="text" name="valuefield{{ $key }}" id="valuefield{{ $key }}"
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                           sm:text-sm border-gray-300 rounded-md mx-1" value="{{ $value }}" placeholder="value field {{ $key }}">

                    <button wire:click="removeField({{ $key }})" type="button" class="inline-flex items-center
                            px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
                            shadow-sm text-white bg-red-600 ">remove input</button>

                </div>
            </div>
        @endforeach



    </div>
    <div class="flex justify-center">
        <button wire:click="save({{$fields}})" type="button" class="
                px-3 py-2  text-sm leading-4 font-medium rounded-md
                shadow-sm text-white bg-kit-green-dark ">SAVE DATA !</button>
    </div>


</div>