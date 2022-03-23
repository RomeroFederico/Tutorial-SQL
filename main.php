<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel = "stylesheet" type = "text/css" href = "./estilos/style.css">
		<link rel = "stylesheet" type = "text/css" href = "./estilos/colores.css">

		<title>Tutorial HTML</title>
	</head>
	<body>

		<div id = "divContenedorPrincipal" class =  "centrar miFuente">

			<div id = "divBody" class =  "">

				<h1 class = "colorImportante">SQL SINTAXIS:</h1>
				<b>DATABASE</b> -> <b>TABLES</b> -> <i>Identificado con Nombre</i> -> <i>Contiene filas y columnas con datos.</i>
				<br>
				<h3 class = "colorImportante">COMANDOS MAS IMPORTANTES:</h3>

				<div class = "centrar vertical tabla">
					<div class = "centrar fila">
						<b class = "colorComando">SELECT</b> - Extrae datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">UPDATE</b> - Actualiza los datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">DELETE</b> - Elimina datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">INSERT INTO</b> - Inserta nuevos datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">CREATE DATABASE</b> - Crea una nueva Base de Datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">ALTER DATABASE</b> - Modifica una Base de Datos.</div>
					<div class = "centrar fila">
						<b class = "colorComando">CREATE TABLE</b> - Crea una nueva tabla.</div>
					<div class = "centrar fila">
						<b class = "colorComando">ALTER TABLE</b> - Modifica una tabla.</div>
					<div class = "centrar fila">
						<b class = "colorComando">DROP TABLE</b> - Elimina una tabla.</div>
					<div class = "centrar fila">
						<b class = "colorComando">CREATE INDEX</b> - Crea un indice para busquedas.</div>
					<div class = "centrar fila">
						<b class = "colorComando">DROP INDEX</b> - Elimina un indice.</div>
				</div>
				<br><hr><br>
				<b class = "colorImportante">SELECT:</b><i> Selecciona datos de una DB y son alojados en una nueva tabla de resultados.</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column1, column2 <b class = "colorComentario"># Selecciona los campos a mostrar.</b><br>
				<b class = "colorComando">FROM</b> table_name;			 <b class = "colorComentario"># Indica de donde saca los datos.</b><br>
				<br>
				<b class = "colorComando">SELECT</b> * <b class = "colorComentario"># '*' indica todos los campos de la tabla.</b><br>
				<b class = "colorComando">FROM</b> table_name;<br>
				<br>
				<b class = "colorComando">SELECT DISTINCT</b> column <b class = "colorComentario"># quita los elementos repetidos.</b><br>
				<b class = "colorComando">FROM</b> table_name;<br>
				<br>
				<b class = "colorComando">SELECT COUNT</b>(<b class = "colorComando">DISTINCT</b> Country)<b class = "colorComentario"> # 'Count' retorna la cantidad de filas, produciendo una tabla con una fila.</b><br>
				<b class = "colorComando">FROM</b> Customers;<br>
				<br><hr><br>
				<b class = "colorImportante">WHERE:</b><i> Filtra los resultados que cumplan la condicion asociada.</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition;<br>
				<br>
				<div class = "centrar dosTablas">
					<div class = "centrar vertical tabla">
						<div class = "centrar fila">
							<b class = "colorImportante">OPERADORES CONDICIONALES</b><b class = "colorImportante">DESCRIPCION</b></div>
						<div class = "centrar fila">
							<b class = "colorComando">></b>Igualdad</div>
						<div class = "centrar fila">
							<b class = "colorComando">></b>Mayor a</div>
						<div class = "centrar fila">
							<b class = "colorComando"><</b>Menor a</div>
						<div class = "centrar fila">
							<b class = "colorComando">>=</b>Mayor o igual a</div>
						<div class = "centrar fila">
							<b class = "colorComando"><=</b>Menor o igual a</div>
						<div class = "centrar fila">
							<b class = "colorComando">!=</b>Distinto</div>
						<div class = "centrar fila">
							<b class = "colorComando">BETWEEN</b>Entre el rango descripto</div>
						<div class = "centrar fila">
							<b class = "colorComando">LIKE</b>Busca un patron</div>
						<div class = "centrar fila">
							<b class = "colorComando">IN</b>Especifica multiples valores posibles</div>
					</div>
					<div class = "centrar vertical tabla">
						<div class = "centrar fila">
							<b class = "colorImportante">OPERADORES LOGICOS</b><b class = "colorImportante">TRUE CUANDO...</b></div>
						<div class = "centrar fila">
							<b class = "colorComando">AND</b>Se cumplen todas las condiciones</div>
						<div class = "centrar fila">
							<b class = "colorComando">OR</b>Se cumple al menos una condicion</div>
						<div class = "centrar fila">
							<b class = "colorComando">NOT</b>No se cumple la o las condiciones</div>
					</div>
				</div>
				<br><hr><br>
				<b class = "colorImportante">ORDER BY:</b><i> Ordena los resultados de manera ascendente por defecto. (ASC)</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">ORDER BY</b> column1, column2 <b class = "colorComando">ASC|DESC</b>;<b class = "colorComentario"> # Si se especifican multiples columnas, si surge un 'empate' se evaluara la siguiente columna.</b><br>
				<br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">ORDER BY</b> column1 <b class = "colorComando">ASC</b>, column2 <b class = "colorComando">DESC</b>;<b class = "colorComentario"> # Se puede especificar el orden de cada columna que se evaluara.</b><br>
				</div>

			</div>
			
		</div>

	</body>
</html>