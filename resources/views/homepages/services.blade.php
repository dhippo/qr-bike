@extends('layouts.homepages')

@section('content')

    <!-- This example Tailwind  for services page -->
    <div class="bg-brandcolor-second200 mt-16">

<!--        IMAGE EN DEGRADE

        <div aria-hidden="true" class="relative">
            <img src="https://tailwindui.com/img/ecommerce-images/product-feature-02-full-width.jpg" alt=""
                 class="w-full h-96 object-center object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-brandcolor-second200"></div>
        </div>
-->
        <div class="relative -mt-12 max-w-7xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center lg:max-w-4xl">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Services
                    Specifications</h2>
                <p class="mt-4 text-gray-500">Organize data to keep your private data and photos all day long aside you.</p>
            </div>

            <dl class="mt-16 max-w-2xl mx-auto grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:max-w-none lg:grid-cols-3 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Origin</dt>
                    <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Material</dt>
                    <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and polycarbonate
                        add-ons.
                    </dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Dimensions</dt>
                    <dd class="mt-2 text-sm text-gray-500">15&quot; x 3.75&quot; x .75&quot;</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Finish</dt>
                    <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Includes</dt>
                    <dd class="mt-2 text-sm text-gray-500">Pen Tray, Phone Tray, Small Tray, Large Tray, Sticky Note
                        Holder
                    </dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Considerations</dt>
                    <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each
                        item.
                    </dd>
                </div>
            </dl>
        </div>
    </div>

@endsection