<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
        
        
            <form action="{{ url('/terrenos') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <h1 class="h1 text-center mt-3 mb-3">Registrar terreno</h1>
                @include('terrenos.form', ['modo'=>'Crear'])
                
            </form>   
        
    
</x-app-layout>