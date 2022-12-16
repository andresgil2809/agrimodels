<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="w-6x1 mx-auto hx-auto sm:px-6">
            
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg   p-6 h-4x1" >
                <h1 class="h3  uppercase text-black text-center">Animales</h1>
                <div class="container">
                    <a class="btn btn-dark ml-15" href="{{ route('animal.create') }}">Crear animal</a><br><br>

                    <table class="table table-light border rounded ">
                        <thead class="thead-light rounded">
                            <tr>
                                <th>#</th>
                                <th>Nombre del animal</th>  
                                <th>Raza</th>  
                                <th>Condicion</th>
                                <th>Altitud</th>
                                <th>Peso</th>
                                <th>Clima de procedencia</th>
                                <th>Genero</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Fecha de primer parto</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            @foreach ($animals as $animal )
                            <tr>

                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->nombre }}</td>
                                <td>{{ $animal->raza }}</td>
                                <td>{{ $animal->condicion }}</td>
                                <td>{{ $animal->altitud }}</td>
                                <td>{{ $animal->peso }}</td>
                                <td>{{ $animal->climadeprocedencia }}</td>
                                <td>{{ $animal->genero }}</td>
                                <td>{{ $animal->fechadenacimiento }}</td>
                                <td>{{ $animal->fechadeprimerparto }}</td>
                                <td><a class="btn btn-dark text-center"  href="{{ url('/animal/'.$animal->id) }}">Ver</a></td>
                                <td>

                                    <a class="btn btn-dark text-center"  href="{{ url('/animal/'.$animal->id.'/editar') }}">Editar</a>

                                </td>
                                <td>
                                    <form action="{{ url('/animal/'.$animal->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    
                                    <button class="btn  fas fa-trash-alt" type="submit" onclick="return confirm('¿Esta seguro de borrar?')" value=""></button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                
                    
                    
                        
                        {{-- <a href="{{ url('/plantas/'.$planta->id) }}">{{ $planta->id }}. {{ $planta->nombre }}</a> --}}
                    
                        
                    
                
                </div> 
            </div>
        </div>
    </div>      
</x-app-layout>