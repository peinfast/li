<h1 class="page-header">Nota de Credito
</h1>

<form id="frm-transporte" action="?c=Transporte&a=GActua" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Factura</label>
      <input type="text" name="Factura" value="<?php echo $alm->Factura; ?>" required class="form-control"/>
  </div>

  <div class="form-group">
      <label>Fecha de Solocitud de Nota de Credito</label>
      <input type="text" name="FSoliNC" value="<?php echo $alm->FSoliNC; ?>" required class="form-control"/>
  </div>

    <div class="form-group">
        <label>Folio de Solocitud de Nota de Credito</label>
        <input type="text" name="FolioNC" value="<?php echo $alm->FolioNC; ?>" required class="form-control"/>
    </div>

    <input type="hidden" name="Usuario" value="<?php echo $user; ?>" class="form-control">

    <div class="form-group">
        <label>Estatus Nota de Credito</label>
        <input type="text" name="EstatusNC" value="<?php echo $alm->EstatusNC; ?>" required class="form-control" />
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
