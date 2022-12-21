
<div class="container    card ">
    <div class="row  p-4">
        <div class="align-self-center col-12  ">
            
            
            
            <div class="mt-3">
                <label class="form-label h5" for="animal_id">Animal</label>
                <select name="animal_id" class="form-control">
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}">{{ $animal->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class=" mt-3">
                <label class="form-label h5" for="fecha">Fecha de comida</label>
                <input required class="form-control rounded" type="date" name="fecha" value="{{ isset($food->fecha)?$food->fecha  :''  }}" >
            </div>
            
            <div class=" mt-3">
                <label class="form-label h5" for="vacuna">Cantidad en KG</label>
                <input required class="form-control rounded" type="text" name="cantidadkg" value="{{ isset($food->cantidadkg)?$food->cantidadkg:''  }}" >
            </div>
        </div>
        
        <div class="col-6  ">

            
            

        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}} datos" ></input>
        </div>
</div>