
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
                <label class="form-label h5" for="fecha">Fecha de inyección</label>
                <input required class="form-control rounded" type="date" name="fecha" value="{{ isset($health->fecha)?$health->fecha  :''  }}" >
            </div>
            
            <div class=" mt-3">
                <label class="form-label h5" for="vacuna">Nombre de la vacuna</label>
                <input required class="form-control rounded" type="text" name="nombrevacuna" value="{{ isset($health->nombrevacuna)?$health->nombrevacuna:''  }}" >
            </div>
        </div>
        
        <div class="col-6  ">

            <div class=" mt-3">
                <label class="form-label h5" for="finalidad">Finalidad de la vacuna</label>
                <input required class="form-control rounded" type="text" name="finalidad" value="{{ isset($health->finalidad)?$health->finalidad:''  }}" >
            </div>

            <div class=" mt-3">
                <label class="form-label h5" for="dias_retiro">Dias de retiro</label>
                <input required class="form-control rounded" type="text" name="diasretiro" value="{{ isset($health->diasretiro)?$health->diasretiro:''  }}" >
            </div>
            

        </div> 
    </div>    
        <div class="text-center mb-4">
            <input class="btn btn-dark w-25" type="submit" value="{{$modo}} datos" ></input>
        </div>
</div>