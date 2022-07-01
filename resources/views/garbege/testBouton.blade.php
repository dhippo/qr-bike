
@extends('layouts.master')

@section('content')


    <input class="flex justify-center">
        <div
            x-data="{
            gsang:'',  //   gsang : variable name (set null)
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
                x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                x-id="['blood-button']"
                class="relative"
        >
            <!-- Button -->
            <button
                    x-ref="button"
                    x-on:click="toggle()"
                    :aria-expanded="open"
                    :aria-controls="$id('blood-button')"
                    type="button"
                    class="bg-white px-5 py-2.5 rounded-md shadow"
            >
                <span>Actions</span>
                <span aria-hidden="true">&darr;</span>
            </button>


            <!-- print choice -->

            <span x-text="gsang"></span>


            <!-- Panel -->
            <div
                    x-ref="panel"
                    x-show="open"
                    x-transition.origin.top.left
                    x-on:click.outside="close($refs.button)"
                    :id="$id('blood-button')"
                    style="display: none;"
                    class="absolute left-0 mt-2 w-40 bg-white rounded shadow-md overflow-hidden"
            >
                <div>
                    <a href="#" @click.prevent="gsang = 'A+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        A +
                    </a>

                    <a href="#" @click.prevent="gsang = 'A-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        A -
                    </a>
                </div>

                <div class="border-t border-gray-200">
                    <a href="#" @click.prevent="gsang = 'B+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        B +
                    </a>

                    <a href="#" @click.prevent="gsang = 'B-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        B -
                    </a>
                </div>

                <div class="border-t border-gray-200">
                    <a href="#" @click.prevent="gsang = 'AB+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        AB +
                    </a>

                    <a href="#" @click.prevent="gsang = 'AB-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        AB -
                    </a>
                </div>

                <div class="border-t border-gray-200">
                    <a href="#" @click.prevent="gsang = 'O+'" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                        O +
                    </a>

                    <a href="#" @click.prevent="gsang = 'O-'" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        O -
                    </a>
                   <!----- <input name="groupsang" type="hidden" x-model="gsang">--->
                </div>
            </div>
        </div>

<!---
        <select name="blood"  class="bg-white px-5 py-2.5 rounded-md shadow">
            <option>untfyuvyhbijnok,p</option>
            <option>untfyuvyhbijnop</option>
        </select>
    </div>
    -->

@endsection