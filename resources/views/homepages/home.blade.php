@extends('layouts.homepages')

@section('content')
<div class="background" style="background-color: rgba(186,217,234,255)">

    <!-- Hero -->
    <section  class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
        <div class="md:flex-1 md:mr-10">
            <h1 class="font-pt-serif text-5xl font-bold mb-7">
                Create simple QR in a fev minutes.
                <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
              cool website
            </span>
            </h1>
            <p class="font-pt-serif font-normal mb-7">
                The purpose of our project is to offer a solution to athletes that would allow them to generate a QR code in order to access their health data in case of emergency.
                Thus, they will be able to print the generated QR code and find a way to stick it on their bike, their helmet, their equipment.<br /><br />

            </p>
            <div class="font-montserrat">
                <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2">
                    Sign in
                </button>
                <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
                    Get Started
                </button>
            </div>
        </div>

    </section>

    <!-- stats-->
    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Trusted by developers from over 80 planets</h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.</p>
            </div>
        </div>
        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">live save</dt>
                                <dd class="order-1 text-5xl font-extrabold text-indigo-600">1%</dd>
                            </div>
                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">qr codes generated</dt>
                                <dd class="order-1 text-5xl font-extrabold text-indigo-600">1</dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">different uses </dt>
                                <dd class="order-1 text-5xl font-extrabold text-indigo-600">100k</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How it works -->
    <section class="bg-black text-white sectionSize">
        <div>
            <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    1
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Eat</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    2
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Sleep</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    3
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Rave</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="sectionSize bg-secondary">
        <div>
            <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
        </div>
        <div class="md:grid md:grid-cols-2 md:grid-rows-2">

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Feature #1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Feature #2</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Feature #3</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Feature #4</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Pricing -->
    <section class="sectionSize bg-secondary py-0">
        <div>
            <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Pricing</h2>
        </div>
        <div class="flex w-full flex-col md:flex-row">

            <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Good
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $25
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-12'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Bad
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $40
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Ugly
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $50
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

        </div>
    </section>

    <!-- FAQ  -->
    <section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
        <div>
            <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
                FAQ
            </h2>
        </div>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Where can I get this HTML template?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                You can download it on Gumroad.com
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Is this HTML template free?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! For you it is free.
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Am I awesome?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! No doubt about it.
            </div>
        </div>
        <hr class="w-full bg-white" />

    </section>

    <!-- Footer -->
    <section class="bg-black sectionSize">
        <div class="mb-4">
            <img src='dist/assets/Logo_white.svg' alt="Logo" class="h-4" />
        </div>
        <div class="flex mb-8">
            <a href="#">
                <img src='dist/assets/logos/Facebook.svg' alt="Facebook logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Youtube.svg' alt="Youtube logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Instagram.svg' alt="Instagram logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Twitter.svg' alt="Twitter logo" class="mx-4" />
            </a>
        </div>
        <div class="text-white font-montserrat text-sm">
            © 2021 STARTUP. All rights reserved
        </div>
    </section>

</div>

@endsection