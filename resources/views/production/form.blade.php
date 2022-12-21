
<div class="container card ">
    <div class="row p-4">
        <div class="align-self-center col-6  ">
            
            
            
            <div class="mt-3">
                <label class="form-label h5" for="animal_id">Animal</label>
                <select name="animal_id" class="form-control">
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}">{{ $animal->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class=" mt-3">
                <label class="form-label h5" for="diaproducido">Fecha de produccion</label>
                <input required class="form-control rounded" type="date" name="diaproducido" value="{{ isset($production->diaproducido)?$production->diaproducido:''  }}" >
            </div>
            
        </div>
        
        <div class="col-6  ">
            <div class=" mt-3">
                <label class="form-label h5" for="cantidad">Cantidad en litros</label>
                <input required class="form-control rounded" type="number   " name="cantidad" value="{{ isset($production->cantidad)?$production->cantidad:''  }}" >
            </div>
            

        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}} datos" ></input>
        </div>
</div>