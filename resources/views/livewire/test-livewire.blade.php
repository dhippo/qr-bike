<div>
    {{-- In work, do what you enjoy. --}}

    <div>
        <div class="p-12 max-w-sm mx-auto">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input wire:model="nameInput" type="text" name="nameInput" id="nameInput"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                       sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com">
            </div>
        </div>
        <div class="p-12 max-w-sm mx-auto">
            <button wire:click="addInput" type="button" class="inline-flex items-center
            px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
            shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajout input</button>

        </div>
        @foreach($inputs as $key => $value)

            <div class="p-12 max-w-sm mx-auto">
                <h3>{{ $value }}</h3>
                <input type="text" name="namefdInput-{{ $key }}" id="nameddInput-{{ $key }}"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full
                       sm:text-sm border-gray-300 rounded-md" placeholder="{{ $value }}">
            </div>



        @endforeach
        <p>

        </p>

    </div>

    <div class="p-12 max-w-sm mx-auto">
        <button wire:click="save" type="button" class="inline-flex items-center
            px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
            shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">On enregistre tout !</button>

    </div>



</div>
