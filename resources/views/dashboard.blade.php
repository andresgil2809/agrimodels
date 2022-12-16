<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>

    <div class="py-12 p-6 ">
        <div class="w-6x1 mx-auto hx-auto sm:px-6 container">
            <div class=" bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg text-start flex p-6 h-4x1" >
                
                <div class="terreno flex-1 text-center ">
                    <h2 class="h2 font-extrabold  uppercase text-black " >Gestion de cultivos</h2>
                    <ul class="space-y-1">
                        <li><a href="{{ route('plantas.create') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Registrar una planta  </a></li>
                        <li><a href="{{ route('plantas.index') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Listado de plantas</a></li>
                        <li><a href="{{ route('terrenos.create') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Crear un nuevo terreno</a></li>
                        <li><a href="{{ route('terrenos.index') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Consultar un terreno</a></li>
                        {{-- <li><a href="" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Eliminar un terreno</a></li> --}}
                        {{-- <li><a href="" class="items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Eliminar terreno</a></li> --}}
                    </ul>
                    
                </div>
                <div class="ganado flex-1 text-center">
                    <h2 class=" h2 font-extrabold uppercase  text-black " >Gestion de ganado</h2>
                    <ul class="space-y-1">
                        <li><a href="{{ route('animal.create') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Agregar un nuevo animal</a></li>
                        <li><a href="{{ route('animal.index') }}" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Listado de animales</a></li>
                        <li><a href="" class="bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Eliminar animal</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


    
    
    
