<h1 class="page-header">L1bre</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Transporte&a=Crud">Nuevo Folio</a>
</div>

<table>
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th style="width:120px;">Area</th>
            <th>Cliente</th>
            <th>Marca</th>

            <th style="width:120px;">Destino</th>
            <th style="width:120px;">Servicio</th>
            <th style="width:120px;">FH Carga</th>
            <th style="width:120px;">Estatus</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->rojoL1b() as $r): ?>
        <tr style="background-color: tomato;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio == 1 ? 'Carga' : 'Devolucion' ; ?></td>
            <td><?php echo $r->FH_Carga; ?></td>
            <td><?php
            if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus;
            }
            elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus2;
            }
            elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus3;
            }
            elseif ($r->Estatus5==null) {
                echo $r->Estatus4;
            }
            else{
                echo $r->Estatus5;
            }
             ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach($this->model->amarilloL1b() as $r): ?>
        <tr style="background-color: yellow;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio; ?></td>
            <td><?php echo $r->FH_Carga; ?></td>
            <td><?php
            if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus;
            }
            elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus2;
            }
            elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus3;
            }
            elseif ($r->Estatus5==null) {
                echo $r->Estatus4;
            }
            else{
                echo $r->Estatus5;
            }
             ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach($this->model->verdeL1b() as $r): ?>
        <tr style="background-color: green;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio; ?></td>
            <td><?php echo $r->FH_Carga; ?></td>
            <td><?php
            if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus;
            }
            elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus2;
            }
            elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                echo $r->Estatus3;
            }
            elseif ($r->Estatus5==null) {
                echo $r->Estatus4;
            }
            else{
                echo $r->Estatus5;
            }
             ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
