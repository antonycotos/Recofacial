    <form action="{{ route('biophoto.store') }}" id="frmreg" enctype="multipart/form-data" method="post">

        {{ csrf_field() }}

          {{-- <div class="form-group">
            <label for="pais">* Caracteristicas del trabajador:</label>
            <input type="text" class="form-control" id="pais"   name="pais" title="Solo alfanumericos" placeholder="Ingrese pais del trabajador" required>
          </div>   --}}


  <hr>
			  <div class="form-group">
          <label for="file">Imagen</label>
          <input name="file" type="file" id="file">
        </div>
  
 <hr>
            <button type="submit" class="btn btn-default">Grabar</button>
    </form>