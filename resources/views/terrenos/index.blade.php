<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="w-6x1 mx-auto hx-auto sm:px-6">
            
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg   p-6 h-4x1" >
                <h1 class="h3  uppercase text-black text-center">Terrenos <br><a class="btn btn-dark ml-15" href="{{ route('terrenos.create') }}">Crear terreno</a></h1>
                <div class="container">
                    

                    <table class="table table-light border rounded ">
                        <thead class="thead-light rounded">
                            <tr>
                                <th>#</th>
                                <th>Nombre del terreno</th>  
                                <th>Planta</th>  
                                <th>Tamaño en mt2</th>
                                <th>Tipo de suelo<sup>2</sup> </th>
                                <th>Altitud</th>
                                <th>Ubicacion</th>
                                <th>Humedad</th>
                                <th>Temperatura</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            @foreach ($terrenos as $terreno )
                            <tr>

                                <td>{{ $terreno->id }}</td>
                                <td>{{ $terreno->nomTerreno}}</td>
                                <td>{{ $terreno->nomPlanta }}</td>
                                <td>{{ $terreno->tamañomt2 }}</td>
                                <td>{{ $terreno->tipodesuelo }}</td>
                                <td>{{ $terreno->altitud }}</td>
                                <td>{{ $terreno->ubicacion }}</td>
                                <td>{{ $terreno->humedad }}</td>
                                <td>{{ $terreno->temperatura }}</td>
                                <td><a class="btn btn-dark text-center"  href="{{ url('/terrenos/'.$terreno->id) }}">Ver</a></td>
                                <td>

                                    <a class="btn btn-dark text-center"  href="{{ url('/terrenos/'.$terreno->id.'/editar') }}">Editar</a>

                                </td>
                                <td>
                                    <form action="{{ url('/terrenos/'.$terreno->id) }}" method="POST">
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