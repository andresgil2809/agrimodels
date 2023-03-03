<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="card container w-40 align-self-center">
            <div class="row p-3">

                <div class=" col-5 align-self-center ">
                    <h1 class="h1 text-center"> {{ $terrenos->nombre }}</h1>  
                    {{-- <h2 name="planta" class="h3 text-center">
                        @foreach ($pas as $pa)
                               Su planta sembrada es: {{$pa->nombre}} 
                        @endforeach
                        </h2> --}}
                    <h2 class="h4 text-center" name="codplanta">Su planta sembrada es: {{ $terrenos->nombre }}</h2>     
                </div>
                
                <div class="texto align-self-center col-7 ">
                    <h2 class="h6 text-center">Su tamaño en metros cuadrados es: {{ $terrenos->tamañomt2 }}</h2>
                    <h2 class="h6 text-center">Su tipo de suelo es: {{ $terrenos->tipodesuelo }}</h2>
                    <h2 class="h6 text-center">Su altitud es: {{ $terrenos->altitud }}</h2>
                    <h2 class="h6 text-center">Su ubicacion es: {{ $terrenos->ubicacion }}</h2>
                    <h2 class="h6 text-center">Su humedad es: {{ $terrenos->humedad }}</h2>
                    <h2 class="h6 text-center">Su temperatura: {{ $terrenos->temperatura }}</h2>
                    <a class="btn btn-dark align-self-center " href="{{ url('/terrenos/'.$terrenos->id.'/editar') }}">Editar</a>
                    <a class="btn btn-dark align-self-center " href="{{ route('terrenos.index') }}">Terrenos</a>
                </div>

            </div>       
        </div>
    </div>
          
</x-app-layout>