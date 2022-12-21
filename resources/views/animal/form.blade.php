
<div class="container card ">
    <div class="row p-4">
        <div class="align-self-center col-6  ">

            
            <div class="" hidden >
                <label class="form-label h5" for="user_id"></label>
                <input required class="form-control rounded" type="text" name="user_id" value="{{ Auth::user()->id  }}" >
            </div>
            
                
            <div class="nombre mt-3">
                <label class="form-label h5" for="nombre">Nombre del Animal</label>
                <input required class="form-control rounded" type="text" name="nombre" value="{{ isset($animal->nombre) ? $animal->nombre:''  }}" >
            </div>
            <div class="mt-3">
                <label class="form-label h5" for="raza">Raza</label>
                <input required class="form-control rounded" type="text" name="raza" value="{{ isset($animal->raza) ? $animal->raza:''  }}" >
            </div>
            
            <div class="mt-3">
                <label class="form-label h5" for="genero">Genero</label>
                <select name="genero" class="form-control">
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id }}">{{ $genero->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="fechadenacimiento">Fecha de nacimiento</label>
                <input class="form-control rounded" required type="date" name="fechadenacimiento" value="{{ isset($animal->fechadenacimiento) ? $animal->fechadenacimiento:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="fechadeprimerparto">Fecha de primer parto (Solo si es hembra) </label>
                <input class="form-control rounded" null type="date" name="fechadeprimerparto" value="{{ isset($animal->fechadeprimerparto) ? $animal->fechadeprimerparto:'' }}"  >
            </div>
            {{-- <div class="">
                <label class="form-label h5" for="plantas">Plantas disponibles</label>
                
                <select name="codplanta" class="form-control">
                    @foreach ($plantas as $planta)
                        <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                    @endforeach
                </select>
            </div> --}}
                
        </div>
          
        <div class="col-6  ">

            

            <div class="mt-3">
                <label class="form-label h5" for="condicion">Condicion (1-100)</label>
                <input class="form-control rounded" required type="number" name="condicion" value="{{ isset($animal->condicion) ? $animal->condicion:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="altitud">Altitud (Mtsnm)</label>
                <input class="form-control rounded" required type="number" name="altitud" value="{{ isset($animal->altitud) ? $animal->altitud:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="peso">Peso(KG)</label>
                <input class="form-control rounded" required type="number" name="peso" value="{{ isset($animal->peso) ? $animal->peso:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="climadeprocedencia">Clima de procedencia</label>
                <input class="form-control rounded" required type="text" name="climadeprocedencia" value="{{ isset($animal->climadeprocedencia) ? $animal->climadeprocedencia:'' }}"  >
            </div>

            
            
        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}}" ></input>
        </div>
</div>