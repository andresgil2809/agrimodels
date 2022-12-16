<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="card container w-50 align-self-center">
            <div class="row p-3">
                <div class="img col-5 align-self-center ">
                    <img style="width: 200px; height:200px; border-radius: 20px;" class="pb-2 mx-auto d-block w-0" src="{{ asset('storage').'/'.$plantas->foto }}" alt="">                   
                </div>
                <div class="texto col-7">
                    <h1 class="h1 text-black text-center"> {{ $plantas->nombre }}</h1>
                    <h2 class="h6">Su tipo de suelo es: {{ $plantas->tipodesuelo }}</h2>
                    <h2 class="h6">Plantas por metro cuadrado: {{ $plantas->plantasxmt2 }}</h2>
                    <h2 class="h6">Su altitud es: {{ $plantas->altitud }}</h2>
                    <h2 class="h6">Su temperatura es: {{ $plantas->temperatura }}</h2>
                    <h2 class="h6">Su humedad es: {{ $plantas->humedad }}</h2>
                    <a class="btn btn-dark text-center " href="{{ url('/plantas/'.$plantas->id.'/editar') }}">Editar</a>
                    <a class="btn btn-dark text-center " href="{{ route('plantas.index') }}">Plantas</a>

                </div>
            </div>
            {{-- <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg text-center p-4" > --}}
                

                
            </div>
        </div>
    </div>      
</x-app-layout>