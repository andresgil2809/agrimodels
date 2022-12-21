<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="w-6x1 mx-auto hx-auto sm:px-6">
            
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg   p-6 h-4x1" >
                <h1 class="h3  uppercase text-black text-center">Comida <br><a class="btn btn-dark ml-15" href="{{ route('foods.create') }}">Crear comida</a></h1>
                <div class="container">

                    
                        @if (Session::has('mensaje'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('mensaje') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>             
                        @endif

                        

                    
                    
                    <table class="table table-light border rounded ">
                        <thead class="thead-light rounded">
                            <tr>
                                <th>#</th>
                                <th>Nombre animal</th>  
                                <th>Fecha de comida</th>
                                <th>Cantidad de comida(KG)</th>
                                {{-- <th>Ver</th> --}}
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($foods as $food) 
                            <tr>
                                <td>{{ $food->codigo}}</td>
                                <td>{{ $food->nombre_animal }}</td>
                                <td>{{ $food->fecha_comi }}</td>
                                <td>{{ $food->cantidad_comi }} </td>
                                {{-- <td><a class="btn btn-dark text-center"  href="{{ url('/production/'.$production->codigo) }}">Ver</a></td> --}}
                                <td>

                                    <a class="btn btn-dark text-center"  href="{{ url('/foods/'.$food->codigo.'/editar') }}">Editar</a>

                                </td>
                                <td>
                                    <form action="{{ url('/foods/'.$food->codigo) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    
                                    <button class="btn  fas fa-trash-alt" type="submit" onclick="return confirm('¿Esta seguro de borrar?')" value=""></button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                    
                    
                        
                        {{-- <a href="{{ url('/plantas/'.$planta->codigo) }}">{{ $planta->codigo }}. {{ $planta->nombre }}</a> --}}
                    
                        
                    
                
                </div> 
            </div>
        </div>
    </div>      
</x-app-layout>