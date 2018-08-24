    <form action="{{ route('biophoto.store') }}" id="frmreg" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="pais">* Caracteristicas del trabajador:</label>
              <input type="text" class="form-control" id="pais"   name="pais" title="Solo alfanumericos" placeholder="Ingrese pais del trabajador" required>
            </div>  

			<div class="form-group">
              <label for="archivo">* IMAGEN:</label>
              <input type="file" class="form-control" id="archivo" name="archivo" accept="imagen/*" required>             
            </div>

            <button type="submit" class="btn btn-default">Grabar</button>
    </form>