<div class="modal fade" id="modal-delete-{{$per->id}}" tabindex="-1" arialabelledby="
ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\DocenteController@destroy',$per->id),'method'=>'delete'))}}
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Eliminar Docente</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="
Close"></button>
</div>
<div class="modal-body">
<p>Confirme si desea Eliminar El docente</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bsdismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Confirmar</button>
</div>
</div>
</div>
</div>
{{Form::Close()}}