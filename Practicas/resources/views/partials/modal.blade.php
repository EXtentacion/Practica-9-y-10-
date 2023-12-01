
<!-- Modal -->
<div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/recuerdo" method="POST">
      @csrf
      
      <div class="mb-3">
          <label class="form-label">Titulo:</label>
          <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce tu titulo" value= "{{old('txtTitulo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtTitulo')}} </p>
      </div>

      <div class="mb-3">
          <label class="form-label">Recuerdo:</label>
          <input class="form-control" name="txtRecuerdo" placeholder="Introduce tu recuerdo" value= "{{old('txtRecuerdo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtRecuerdo')}} </p>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-success btn-lg" type="submit">
          Guardar
        </button>
      </div>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/recuerdo" method="POST">
      @csrf
      
      <div class="mb-3">
          <label class="form-label">Titulo:</label>
          <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce tu titulo" value= "{{old('txtTitulo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtTitulo')}} </p>
      </div>

      <div class="mb-3">
          <label class="form-label">Recuerdo:</label>
          <input class="form-control" name="txtRecuerdo" placeholder="Introduce tu recuerdo" value= "{{old('txtRecuerdo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtRecuerdo')}} </p>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-success btn-lg" type="submit">
          Guardar
        </button>
      </div>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>