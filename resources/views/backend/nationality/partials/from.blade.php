
<form action="{{ route('nationality.store') }}" id="frmreg" enctype="multipart/form-data" method="post">

  <div class="form-group">
    <label for="pais">* Ingrese su Pais:</label>
    <input type="text" class="form-control" id="pais"   name="pais" title="Solo alfanumericos" placeholder="Ingrese pais del trabajador" required>
  </div>  
			
	<div class="form-group">
    <label for="ciudad">* Ingrese su Ciudad:</label>
    <input type="text" class="form-control" id="ciudad"   name="ciudad" title="Solo alfanumericos" placeholder="Ingrese ciudad del trabajador" required>
  </div>  

  <button type="submit" class="btn btn-default">Grabar</button>

</form>