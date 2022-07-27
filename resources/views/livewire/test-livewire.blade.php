<div>
    {{-- In work, do what you enjoy. --}}

    <div>
        <div class="p-6 max-w-sm mx-auto flex">

            <!-- Input Key -->
            <div class="mt-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Key</label>
                <input wire:model="nameInputK" type="text" name="nameInputK" id="nameInputK"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                       sm:text-sm border-gray-300 rounded-md" placeholder="Name">
            </div>

            <!-- Input Value -->
            <div class="mt-1">

                <label for="email" class="block text-sm font-medium text-gray-700">Value</label>
                <input wire:model="nameInputV" type="text" name="nameInputV" id="nameInputV"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                   sm:text-sm border-gray-300 rounded-md" placeholder="Data">
            </div>

        </div>

        <div class="p-12 max-w-sm mx-auto">

            <button wire:click="addInput" type="button" class="inline-flex items-center
            px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
            shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Ajout input
            </button>

        </div>

        @foreach($inputs as $keys => $key)

            <div class="p-12 max-w-sm mx-auto">

                <input type="text" name="nameInputK-{{ $key }}" id="nameInputK-{{ $key }}"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                       sm:text-sm border-gray-300 rounded-md" placeholder="{{ $key }}">
            </div>

        @endforeach

        @foreach($inputs as $values => $value)

            <div class="p-12 max-w-sm mx-auto">

                <input type="text" name="nameInputV-{{ $value }}" id="nameInputV-{{ $value }}"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                       sm:text-sm border-gray-300 rounded-md" placeholder="{{ $value }}">
            </div>

        @endforeach

        <p>
            {{$key}}
            {{$value}}

        </p>

    </div>

    <div class="p-12 max-w-sm mx-auto">
        <button wire:click="save" type="button" class="inline-flex items-center
        px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
        shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
        focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">On enregistre tout !
        </button>

    </div>


</div>
