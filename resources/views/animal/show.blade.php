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
                    <h1 class="h1 text-center"> {{ $animal->nombre }}</h1>  
                    <h2 class="h4 text-center" name="raza">Su raza es: {{ $animal->raza }}</h2>     
                </div>
                
                <div class="texto align-self-center col-7 ">
                    <h2 class="h6 text-center">Su condicion: {{ $animal->condicion }} </h2>
                    <h2 class="h6 text-center">Su altitud es: {{ $animal->altitud }}Mt2</h2>
                    <h2 class="h6 text-center">Su peso es: {{ $animal->peso }}Kg</h2>
                    <h2 class="h6 text-center">Su climade procedencia es: {{ $animal->climadeprocedencia }}</h2>
                    <h2 class="h6 text-center">Su genero es: {{ $animal->genero }}</h2>
                    <h2 class="h6 text-center">Su fecha de nacimiento: {{ $animal->fechadenacimiento }}</h2>
                    <h2 class="h6 text-center">Su fecha de primer parto: {{ $animal->fechadeprimerparto }}</h2>
                    
                        
                    
                    a
                    <a class="btn btn-dark align-self-center " href="">Produccion</a>
                    <a class="btn btn-dark align-self-center " href="{{ url('/animal/'.$animal->id.'/editar') }}">Editar</a>
                    <a class="btn btn-dark align-self-center " href="{{ route('animal.index') }}">Animales</a>
                </div>

            </div>       
        </div>
    </div>
          
</x-app-layout>