
<div class="container card ">
    <div class="row p-4">
        <div class="align-self-center col-6  ">

            
            <div class="" hidden >
                <label class="form-label h5" for="idusuario"></label>
                <input required class="form-control rounded" type="text" name="idusuario" value="{{ Auth::user()->id  }}" >
            </div>
            
                
            <div class="nombre mt-3">
                <label class="form-label h5" for="nombre">Nombre del terreno</label>
                <input required class="form-control rounded" type="text" name="nombre" value="{{ isset($terreno->nombre) ? $terreno->nombre:''  }}" >
            </div>
            
            <div class="">
                <label class="form-label h5" for="plantas">Plantas disponibles</label>
                {{-- <input required class="form-control rounded" type="text" name="codplanta" value="{{ isset($terreno->codplanta) ? $terreno->codplanta:''  }}" > --}}
                <select name="codplanta" class="form-control">
                    @foreach ($plantas as $planta)
                        <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                    @endforeach
                </select>
            </div>
                
        </div>
          
        <div class="col-6  ">

            

            <div class="">
                <label class="form-label h5" for="tamañomt2">Tamaño en mt2</label>
                <input class="form-control rounded" required type="number" name="tamañomt2" value="{{ isset($terreno->tamañomt2) ? $terreno->tamañomt2:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="tipodesuelo">Tipo de suelo</label>
                <input class="form-control rounded" required type="text" name="tipodesuelo" value="{{ isset($terreno->tipodesuelo) ? $terreno->tipodesuelo:'' }}"  >
            </div>
            <div class="mt-3">
                <label class="form-label h5" for="altitud">Altitud</label>
                <input class="form-control rounded" required type="number" name="altitud" value="{{ isset($terreno->altitud) ? $terreno->altitud:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="ubicacion">Ubicacion</label>
                <input class="form-control rounded" required type="text" name="ubicacion" value="{{ isset($terreno->ubicacion) ? $terreno->ubicacion:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="humedad">Humedad</label>
                <input class="form-control rounded" required type="number" name="humedad" value="{{ isset($terreno->humedad) ? $terreno->humedad:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="temperatura">Temperatura</label>
                <input class="form-control rounded" required type="number" name="temperatura" value="{{ isset($terreno->temperatura) ? $terreno->temperatura:'' }}"  >
            </div>
            
        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}}" ></input>
        </div>
</div>