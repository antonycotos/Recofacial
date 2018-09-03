    <form action="{{ route('biophoto.store') }}" id="frmreg" enctype="multipart/form-data" method="post">

        {{ csrf_field() }}

  <hr>
			  <div class="form-group">
          <label for="file">Imagen</label>
          <input name="file" type="file" id="file">
        </div>
  
 <hr>
            <button type="submit" class="btn btn-default">Grabar</button>
    </form>