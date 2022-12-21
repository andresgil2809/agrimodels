<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class="container">
        <div class="cont w-6x1 mx-auto hx-auto sm:px-6">
            <h1 class="h1 text-center mt-3 mb-3">Editar comida <br> <a class="btn btn-dark text-center " href="{{ route('foods.index') }}">Comida</a></h1>
            <form action="{{ url('/foods/'.$food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                @include('foods.form',['modo'=>'Editar'])

            </form>
               
                
                  
        </div> 
    </div>
</x-app-layout>