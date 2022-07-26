@extends('layouts.homepages')

@section('content')

    <!-- design page tailwind for services  -->
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="https://tailwindui.com/img/ecommerce-images/product-feature-02-full-width.jpg" alt="" class="w-full h-96 object-center object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
        </div>

        <div class="relative -mt-12 max-w-7xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center lg:max-w-4xl">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
                <p class="mt-4 text-gray-500">Organize is a system to keep your desk tidy and photo-worthy all day long. Procrastinate your work while you meticulously arrange items into dedicated trays.</p>
            </div>

            <dl class="mt-16 max-w-2xl mx-auto grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:max-w-none lg:grid-cols-3 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Origin</dt>
                    <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Material</dt>
                    <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and polycarbonate add-ons.</dd>
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
                    <dd class="mt-2 text-sm text-gray-500">Pen Tray, Phone Tray, Small Tray, Large Tray, Sticky Note Holder</dd>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Considerations</dt>
                    <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- message error -->
    <main class="min-h-full bg-cover bg-top sm:bg-top">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-48">
            <p class="text-sm font-semibold text-black text-opacity-50 uppercase tracking-wide">404 error</p>
            <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re lost.</h1>
            <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like the page you’re looking for doesn't exist.</p>
            <div class="mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50"> Go back home </a>
            </div>
        </div>
    </main>


@endsection