<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR DATOS</title>
    <?php 
	echo setCssAdmin('dist/css/mis css/estilos.css');
	echo setCssAdmin('dist/css/adminlte.css');	
	?>
</head>
<body>
<hr>
    <h1>DATOS A ACUALIZAR</h1>

        <h2>formulario de actualizacion</h2>

    <form action="http://[::1]/ies2021/index.php/Comentarios/enviarEdicion" method="post" accept-charset="utf-8" id="formulario">
        <input type="hidden" value="<?php echo $comentarios[0]->id_comentario?>" name="id_comentario">
        
        <!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="<?php echo $comentarios[0]->nombre?>" name="nombre" id="nombre" placeholder="ingrese nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras y espacios.</p>
			</div>


			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="<?php echo $comentarios[0]->apellido?>" name="apellido" id="apellido" placeholder="ingrese apellido">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener letras y espacios.</p>
			</div>

            
            <!-- Grupo: Comentario -->
			<div class="formulario__grupo" id="grupo__comentario">
				<label for="comentario" class="formulario__label">Comentario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="<?php echo $comentarios[0]->comentario?>" name="comentario" id="comentario" placeholder="ingrese comentario">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El comentario solo puede contener 500 dígitos y solo puede contener letras y espacios.</p>
			</div>
                
            <br>
            <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
				<br>
				<button type="submit" class="btn btn-block btn-primary btn-lg">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>            
        </form>
		<?php echo setJsAdmin('dist/js/validacionExequielMayorga/validacionComentarios.js'); ?>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>