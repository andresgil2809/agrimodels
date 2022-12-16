<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
        
        
            <form action="{{ url('/animal') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <h1 class="h1 text-center mt-3 mb-3">Registrar Animal</h1>
                @include('animal.form', ['modo'=>'Crear'])
                
            </form>   
        
    
</x-app-layout>