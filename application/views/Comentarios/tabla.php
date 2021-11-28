<h1> datos de la base de datos de COMENTARIOS</h1>
<hr>
<table class="default">
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Comentario</th>
    </tr>
        <?php 
            foreach($comentarios as $comentario){ 
        ?>
    <tr>
        <td><?php echo $comentario->id_comentario; ?></td>
        <td><?php echo $comentario->nombre; ?></td>
        <td><?php echo $comentario->apellido;?></td>
        <td><?php echo $comentario->comentario;?></td>
        <td><a href="editar/<?php echo $comentario->id_comentario;?>" class="btn btn-primary">editar</a></td>
        <td><a href="eliminar/<?php echo $comentario->id_comentario;?>" class="btn btn-danger">eliminar</a></td>

    </tr>
        <?php } ?>

</table>