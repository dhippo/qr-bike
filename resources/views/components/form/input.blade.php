


<div>
    <label for="{{ $name }}" class="ml-4 block text-sm font-medium text-gray-700 "> {{ $label }} </label>
    <div class="mt-1">
        <input style="width: 420px" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" type="{{ $type }}"
               class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none {{$color}}  sm:text-sm">
        @if($errors->has($name))
            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/exclamation -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            {{$errors->first($name)}}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>