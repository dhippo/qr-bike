
<a href="{{ $link }}"
   class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
    <!-- svg -->
    {{ $herocoin }}

    {{ $name }}
</a>


<!--
    $link = path

    $herocoin = copy "svg" in 'https://heroicons.com/'

    difference entre div et div selectionnner
    pour la prochaine fois faire un composant avec un exemple
    sidebar static et pour responsive(phone):
                - normal avec option de survol
                - sur la page seectionner

    faire un controller qui vas lier les deux, avec des variable
    renovoie de la meme chose pour eviter la difference entre les deuc menus

--->



<!-- Static sidebar for desktop -->
<div class="h-screen hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-gray-100">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-pink-500-mark-gray-900-text.svg" alt="Workflow">
                </div>
                <nav class="mt-5 flex-1" aria-label="Sidebar">
                    <div class="px-2 space-y-1">
                        <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!--
                              Heroicon name: outline/home

                              Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                            -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            My Infos
                        </a>



    <div  class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex-shrink-0 flex items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-pink-500-mark-gray-900-text.svg" alt="Workflow">
        </div>
        <nav aria-label="Sidebar" class="mt-5">
            <div class="px-2 space-y-1">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">

                    <!--
                      Heroicon name: outline/home

                      Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                    -->
                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>