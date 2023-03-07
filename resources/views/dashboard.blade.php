<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>

    <div class="py-12 p-6 ">
        <div class="w-6x1 mx-auto hx-auto sm:px-6 container">
            <div class=" bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg text-start flex p-6 h-4x1" >
                
                <div class="terreno flex-1">
                    <h2 class="h2 font-extrabold text-center uppercase text-black " >Gestion de cultivos</h2>

                    <ul class="space-y-1 text-center">
                        <li><a href="{{ route('plantas.create') }}" class="w-50  bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Registrar una planta  </a></li>
                        <li><a href="{{ route('plantas.index') }}" class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Listado de plantas</a></li>
                        <li><a href="{{ route('terrenos.create') }}" class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Crear un nuevo terreno</a></li>
                        <li><a href="{{ route('terrenos.index') }}" class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Consultar un terreno</a></li>
                    </ul>
                    
                </div>
                <div class="ganado flex-1">
                    <h2 class=" h2 font-extrabold uppercase text-center text-black " >Gestion de ganado</h2>
                    <ul class="space-y-1 text-center">
                        <li><button type="button" class="btn btn-dark btn-lg btn-block"><a href="{{ route('animal.create') }}" class="text-white ">Agregar un nuevo animal</a></button></li>
                        <li><button type="button" class="btn btn-dark btn-lg btn-block"><a href="{{ route('animal.index') }}" class="text-white">Listado de animales</a></button></li>
                        <li><button type="button" class="btn btn-dark" ><a href="{{ route('production.index') }}" class="text-white">Producción</a></button></li>
                        <li><button type="button" class="btn btn-dark"><a href="{{ route('healths.index') }}" class="text-white">Sanidad</a></button></li>
                        <li><button type="button" class="btn btn-dark"><a href="{{ route('foods.index') }}" class="text-white">Comida</a></button></li>
                        

                        {{-- <li><a href="{{ route('animal.create') }}" class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Agregar un nuevo animal</a></li>
                        <li><a href="{{ route('animal.index') }}" class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center">Listado de animales</a></li>
                        <li><a class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center " href="{{ route('production.index') }}">Produccion</a></li>
                        <li><a class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center " href="{{ route('healths.index') }}">Sanidad</a></li>
                        <li><a class="w-50 bg-gray-800 hover:bg-gray-400 text-white border border-solid-black hover:bg-gray-700 font-bold py-2 px-4 rounded inline-flex hover:bg-gray-400 transition items-center " href="{{ route('foods.index') }}">Comida</a></li> --}}
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


    
    
    
