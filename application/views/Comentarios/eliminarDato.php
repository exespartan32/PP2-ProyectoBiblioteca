<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRA DATOS</title>
    <?php 
	echo setCssAdmin('dist/css/mis css/estilos.css');
	echo setCssAdmin('dist/css/adminlte.css');	
	?>
</head>
<body>
<hr>
    <h1>DATOS A BORRAR</h1>

    <form action="http://[::1]/ies2021/index.php/Comentarios/enviarEliminacion" method="post" accept-charset="utf-8" id="formulario">
        <input type="hidden" value="<?php echo $comentarios[0]->id_comentario?>" name="id_comentario">
        
        <!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" disabled class="formulario__input" value="<?php echo $comentarios[0]->nombre?>" name="nombre" id="nombre" placeholder="ingrese nombre">
				</div>
			</div>


			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" disabled class="formulario__input" value="<?php echo $comentarios[0]->apellido?>" name="apellido" id="apellido" placeholder="ingrese apellido">
				</div>
			</div>

            
            <!-- Grupo: Comentario -->
			<div class="formulario__grupo" id="grupo__comentario">
				<label for="comentario" class="formulario__label">Comentario</label>
				<div class="formulario__grupo-input">
					<input type="text" disabled class="formulario__input" value="<?php echo $comentarios[0]->comentario?>" name="comentario" id="comentario" placeholder="ingrese comentario">
				</div>
			</div>
                
            <br>
				<br>
				<button type="submit" class="btn btn-block btn-primary btn-lg">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>            
        </form>

</body>
</html>