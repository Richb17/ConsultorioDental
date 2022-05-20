@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="calendar"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Modal -->
            <div class="modal fade" id="consulta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="mb-3">
                             <label for="title" class="form-label">Escribe el titulo</label>
                             <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                             <small id="helpId" class="form-text text-muted">Help text</small>
                           </div>

                           <div class="mb-3">
                             <label for="descripcion" class="form-label">Descripcion</label>
                             <textarea class="form-control" name="descripcion" id="descripcion" rows="3"> </textarea>
                           </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
