    <form action="{{ route('people.store') }}" id="frmreg" enctype="multipart/form-data" method="post">

          {{ csrf_field() }}
            
            
            <div class="form-group">
              <label for="nationality_id">Nacionalidad</label>
              <select class="form-control" id="nationality_id" name="nationality_id">
              @foreach($nationalities as $nationality)
                <option value="{{ $nationality->id }}">{{ $nationality->pais }}</option>
              @endforeach
              </select>
            </div>
            
            
           
      {{--       <div class="form-group">
              <label for="biophoto_id">Imagen</label>
              <select class="form-control" id="biophoto_id" name="biophoto_id">
               @foreach($biophotos as $biophoto)
                <option value="{{ $biophoto->id }}" >{{ $biophoto->file }}</option>
              @endforeach
            </select>
            </div> --}}
            

            <div class="form-group">
              <label for="nombre">* Ingrese su Nombre:</label>
              <input type="text" class="form-control" id="nombre"   name="nombre" title="Solo alfanumericos" placeholder="nombre del trabajador" required>
            </div>  
			
			      <div class="form-group">
              <label for="apellido">* Ingrese su Apellidos:</label>
              <input type="text" class="form-control" id="apellido"   name="apellido" title="Solo alfanumericos" placeholder="apellido del trabajador" required>
            </div>

            <div class="form-group">
              <label for="dni">* Ingrese su dni:</label>
              <input type="text" class="form-control" id="dni"   name="dni" title="Solo alfanumericos" min="8" maxlength="8"  max="8"  placeholder="dni del trabajador" required>
            </div> 

            <div class="form-group">
              <label for="direccion">* Ingrese su direccion:</label>
              <input type="text" class="form-control" id="direccion"   name="direccion" title="Solo alfanumericos" placeholder="direccion del trabajador" required>
            </div> 

            <div class="form-group">
              <label for="ciudad">* Ingrese su celular:</label>
              <input type="text" class="form-control" id="ciudad"   name="ciudad" title="Solo alfanumericos" placeholder="ciudad del trabajador" minlength="9" maxlength="11"required>
            </div> 
            
            <div class="form-group">
              <label for="correo">* Ingrese su correo:</label>
              <input type="email" class="form-control" id="correo"   name="correo" title="Solo alfanumericos" placeholder="correo del trabajador" required>
            </div> 

            <div class="form-group">
              <label for="rol">* Ingrese su Rol de Desempeño:</label>
              <input type="text" class="form-control" id="rol"   name="rol" title="Solo alfanumericos" placeholder="rol del trabajador" required>
            </div> 

            <button type="submit" class="btn btn-default">Grabar</button>
    </form>