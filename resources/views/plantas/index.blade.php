<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agrimodels
        </h2>
    </x-slot>
    <div class=" p-6">
        <div class="w-6x1 mx-auto hx-auto sm:px-6">
            
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg   p-6 h-4x1" >
                <h1 class="h3  uppercase text-black text-center">Plantas <br><a class="btn btn-dark ml-15" href="{{ route('plantas.create') }}">Crear planta</a></h1>
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
                                <th>Nombre</th>  
                                <th>Tipo de suelo</th>
                                <th>Plantas por mt<sup>2</sup> </th>
                                <th>Altitud</th>
                                <th>Temperatura</th>
                                <th>Humedad</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($plantas as $planta )
                            <tr>
                                <td>{{ $planta->id}}</td>
                                <td>{{ $planta->nombre }}</td>
                                <td>{{ $planta->tipodesuelo }}</td>
                                <td>{{ $planta->plantasxmt2 }}</td>
                                <td>{{ $planta->altitud }}</td>
                                <td>{{ $planta->temperatura }}</td>
                                <td>{{ $planta->humedad }}</td>
                                <td><a class="btn btn-dark text-center"  href="{{ url('/plantas/'.$planta->id) }}">Ver</a></td>
                                <td>

                                    <a class="btn btn-dark text-center"  href="{{ url('/plantas/'.$planta->id.'/editar') }}">Editar</a>

                                </td>
                                <td>
                                    <form action="{{ url('/plantas/'.$planta->id) }}" method="POST">
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