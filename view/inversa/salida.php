<h1 class="page-header">Salida
</h1>

<form id="frm-transporte" action="?c=Transporte&a=GSalida" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Fecha de entrega de produto</label>
      <input type="text" name="FEntreProd" value="<?php echo $alm->FEntreProd; ?>" required class="form-control"/>
  </div>

  <div class="form-group">
      <label>Area de entrega del produto</label>
      <input type="text" name="AreaEntre" value="<?php echo $alm->AreaEntre; ?>" required class="form-control" />
  </div>

  <div class="form-group">
      <label>Estatus Final</label>
      <input type="text" name="EstatusFinal" value="<?php echo $alm->EstatusFinal; ?>" required class="form-control" />
  </div>

    <input type="hidden" name="Usuario" value="<?php echo $user; ?>" class="form-control">



    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones" value="<?php echo $alm->Observaciones; ?>" required class="form-control" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-transporte").submit(function(){
            return $(this).validate();
        });
    })
</script>
