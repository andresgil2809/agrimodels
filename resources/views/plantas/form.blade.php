
<div class="container card ">
    <div class="row p-4">
        <div class="align-self-center col-6  ">
            
            <div class="foto ">
                <label class="form-label h5" for="foto">Foto</label> <br>
                @if (isset($planta->foto))
                <img src="{{ asset('storage').'/'.$planta->foto }}" alt="" class="rounded mx-auto d-block">
                @endif
                <input class="" type="file" name="foto" value="" autocomplete="off">
            </div>  
            
            <div class="" hidden >
                <label class="form-label h5" for="idusuario"></label>
                <input required class="form-control rounded" type="text" name="idusuario" value="{{ Auth::user()->id  }}" >
            </div>
            <div class="nombre mt-3">
                <label class="form-label h5" for="nombre">Nombre de la planta</label>
                <input required class="form-control rounded" type="text" name="nombre" value="{{ isset($planta->nombre)?$planta->nombre:''  }}" >
            </div>
        </div>

        <div class="col-6  ">
            <div class="">
                <label class="form-label h5" for="tipodesuelo">Tipo de suelo</label>
                <input class="form-control rounded" required type="text" name="tipodesuelo" value="{{ isset($planta->tipodesuelo)?$planta->tipodesuelo:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="plantasxmt2">Plantas por mt2</label>
                <input class="form-control rounded" required type="number" name="plantasxmt2" value="{{ isset($planta->plantasxmt2)?$planta->plantasxmt2:'' }}"  >
            </div>
            <div class="mt-3">
                <label class="form-label h5" for="altitud">Altitud</label>
                <input class="form-control rounded" required type="number" name="altitud" value="{{ isset($planta->altitud)?$planta->altitud:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="temperatura">Temperatura</label>
                <input class="form-control rounded" required type="number" name="temperatura" value="{{ isset($planta->temperatura) ? $planta->temperatura:'' }}"  >
            </div>

            <div class="mt-3">
                <label class="form-label h5" for="humedad">Humedad</label>
                <input class="form-control rounded" required type="number" name="humedad" value="{{ isset($planta->humedad) ? $planta->humedad:'' }}"  >
            </div>
            
        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}} datos" ></input>
        </div>
</div>