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

			<div id = "divMenu" class = "">
				<h3 class = "btn iluminar" id = "btn_intro">INTRO</h3>
				<h3 class = "btn" id = "btn_select">SELECT</h3>
				<h3 class = "btn" id = "btn_where">WHERE</h3>
				<h3 class = "btn" id = "btn_operadores">OPERADORES</h3>
				<h3 class = "btn" id = "btn_order_by">ORDER BY</h3>
				<h3 class = "btn" id = "btn_insert_into">INSERT INTO</h3>
				<h3 class = "btn" id = "btn_is_null">IS NULL</h3>
				<h3 class = "btn" id = "btn_update">UPDATE</h3>
				<h3 class = "btn" id = "btn_delete">DELETE</h3>
				<h3 class = "btn" id = "btn_limit">LIMIT</h3>
				<h3 class = "btn" id = "btn_min-max">MIN-MAX</h3>
				<h3 class = "btn" id = "btn_count-sum-avg">COUNT-SUM-AVG</h3>
				<h3 class = "btn" id = "btn_like">LIKE</h3>
				<h3 class = "btn" id = "btn_in">IN</h3>
				<h3 class = "btn" id = "btn_between">BETWEEN</h3>
				<h3 class = "btn" id = "btn_as">AS</h3>
				<h3 class = "btn" id = "btn_join">JOIN</h3>
				<h3 class = "btn" id = "btn_union">UNION</h3>
			</div>

			<div id = "divBody" class =  "">

				<h1 class = "colorImportante indice" id = "info_intro">SQL SINTAXIS:</h1>
				<b>DATABASE</b> -> <b>TABLES</b> -> <i>Identificado con Nombre</i> -> <i>Contiene filas y columnas con datos.</i>
				<br>
				<h2 class = "colorImportante">COMANDOS MAS IMPORTANTES:</h2>

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
				<b class = "colorImportante indice" id = "info_select">SELECT:</b><i> Selecciona datos de una DB y son alojados en una nueva tabla de resultados.</i>
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
				<b class = "colorImportante indice" id = "info_where">WHERE:</b><i> Filtra los resultados que cumplan la condicion asociada.</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition;<br>
				<br>
				<div class = "centrar dosTablas indice" id = "info_operadores">
					<div class = "centrar vertical tabla">
						<div class = "centrar fila">
							<b class = "colorImportante">OPERADORES CONDICIONALES</b><b class = "colorImportante">DESCRIPCION</b></div>
						<div class = "centrar fila">
							<b class = "colorComando">=</b>Igualdad</div>
						<div class = "centrar fila">
							<b class = "colorComando">></b>Mayor a</div>
						<div class = "centrar fila">
							<b class = "colorComando"><</b>Menor a</div>
						<div class = "centrar fila">
							<b class = "colorComando">>=</b>Mayor o igual a</div>
						<div class = "centrar fila">
							<b class = "colorComando"><=</b>Menor o igual a</div>
						<div class = "centrar fila">
							<b class = "colorComando">!=</b>Distinto (<>)</div>
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
				<b class = "colorImportante indice" id = "info_order_by">ORDER BY:</b><i> Ordena los resultados de manera ascendente por defecto. (ASC)</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">ORDER BY</b> column1, column2 <b class = "colorComando">ASC|DESC</b>;<b class = "colorComentario"> # Si se especifican multiples columnas, si surge un 'empate' se evaluara la siguiente columna.</b><br>
				<br>
				<b class = "colorComando">SELECT</b> column1, column2<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">ORDER BY</b> column1 <b class = "colorComando">ASC</b>, column2 <b class = "colorComando">DESC</b>;<b class = "colorComentario"> # Se puede especificar el orden de cada columna que se evaluara.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_insert_into">INSERT INTO:</b><i> Inserta nueva informacion a la tabla.</i>
				<br><br>
				<b class = "colorComando">INSERT INTO</b> table_name (column1, column2)<br>
				<b class = "colorComando">VALUES</b> (value_1, value_2);<b class = "colorComentario"> # Se indica la/s columna/s a insertar y el/los valor/es insertado/s.</b>
				<br><br>
				<b class = "colorComando">INSERT INTO</b> table_name<br>
				<b class = "colorComando">VALUES</b> (value_1, value_2);<b class = "colorComentario"> # Puede no especificarse la columna a insertar, pero debe respetarse el orden de las columnas.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_is_null">IS NULL:</b><i> Un campo con valor 'NULL' es aquel que no se le ha ingresado valores debido a que es opcional. Es distino al valor 0 y a ' '. 'IS NULL' e 'IS NOT NULL' permite identificar si un campo es nulo o no.</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column_name<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name <b class = "colorComando">IS NULL</b><b class = "colorComentario"> # Selecciona las filas con valor nulo en la o las columnas especificada.</b>
				<br><br>
				<b class = "colorComando">SELECT</b> column_name<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name <b class = "colorComando">IS NOT NULL</b><b class = "colorComentario"> # Selecciona las filas sin valor nulo en la o las columnas especificada.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_update">UPDATE:</b><i> Modifica registros de la tabla ya existentes.</i>
				<br><br>
				<b class = "colorComando">UPDATE</b> table_name<br>
				<b class = "colorComando">SET</b> colum_name = valor_1, column_2 = valor_2<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Modifica los campos especificados donde se cumpla la condicion, por ejemplo ID = valor. Si es omitida la clausula 'WHERE', se modificaran todos los registros.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_delete">DELETE:</b><i> Elimina registros de la tabla ya existentes.</i>
				<br><br>
				<b class = "colorComando">DELETE FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Elimina todos los registros (fila) que cumplan la condicion. Si es omitida la clausula 'WHERE', se modificaran todos los registros.</b>
				<br><br>
				<b class = "colorComando">DELETE FROM</b> table_name;<b class = "colorComentario"> # Si se elimina toda la tabla, solo lo haran sus datos, no la estructura.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_limit">LIMIT:</b><i> Especifica el numero de registro a mostrar.</i>
				<br><br>
				<b class = "colorComando">SELECT</b> column_name<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition<br>
				<b class = "colorComando">LIMIT</b> number;
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_min-max">MIN:</b><i> Retorna el valor minimo de la columna especificada.</i><br>
				<b class = "colorImportante" id = "">MAX:</b><i> Retorna el valor maximo de la columna especificada.</i>
				<br><br>
				<b class = "colorComando">SELECT MIN</b> (column_name1) <b class = "colorComentario"> # Muestra el valor minimo de la columna indicada.</b><br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Se puede especificar una condicion.</b>
				<br><br>
				<b class = "colorComando">SELECT MAX</b> (column_name1) <b class = "colorComentario"> # Muestra el valor maximo de la columna indicada.</b><br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Se puede especificar una condicion.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_count-sum-avg">COUNT:</b><i> Retorna el numero de filas de la columna especificada.</i><br>
				<b class = "colorImportante" id = "">SUM:</b><i> Retorna el valor de la suma total de todos los elementos de una columna numerica.</i><br>
				<b class = "colorImportante" id = "">AVG:</b><i> Retorna el valor del promedio de todos los elementos de una columna numerica.</i>
				<br><br>
				<b class = "colorComando">SELECT COUNT</b>(column_name1) <b class = "colorComentario"> # Muestra la cantidad de filas.</b><br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Puede especificarse una condicion. Ademas, los valores nulos no cuentan.</b>
				<br><br>
				<b class = "colorComando">SELECT SUM</b>(column_name1) <b class = "colorComentario"> # Muestra el valor sumado de todas las filas.</b><br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Puede especificarse una condicion.</b>
				<br><br>
				<b class = "colorComando">SELECT AVG</b>(column_name1) <b class = "colorComentario"> # Muestra el valor promedio de todas las filas.</b><br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> condition; <b class = "colorComentario"> # Puede especificarse una condicion. Ademas, los valores nulos no cuentan.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_like">LIKE:</b><i> Se utiliza en la clausula 'WHERE' para buscar un patron especifico en una columna.<br>
				<br>
				Existen varios comodines para las busquedas:
				<br>
				<b class = "colorImportante">%</b> &nbsp;&nbsp;: Representa cero, uno, o multiples caracteres.<br>
				<b class = "colorImportante">_</b> &nbsp;&nbsp;: Representa un unico caracter.<br>
				<b class = "colorImportante">[]</b> &nbsp;: Representa un unico caracter de entre los especificados entre '[]'.<br>
				<b class = "colorImportante">[^]</b> : Representa un unico caracter.<br>
				<b class = "colorImportante">[-]</b> : Representa cero, uno, o multiples caracteres.</i><br>
				<br><br>
				<div class = "centrar vertical tabla-larga">
					<div class = "centrar fila">
						<b class = "colorImportante">EJEMPLO</b> <b class = "colorImportante">DESCRIPCION</b>
					</div>

					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'a%'</i></i>
						<i class = "descripcion"> - Cualquier valor que comienze con 'a'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'%a'</i></i>
						<i class = "descripcion"> - Cualquier valor que termine con 'a'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'%a%'</i></i>
						<i class = "descripcion"> - Cualquier valor que contenga 'a' en cualquier posicion.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'_a%'</i></i>
						<i class = "descripcion"> - Cualquier valor que contenga 'a' en la segunda posicion.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'a_%'</i></i>
						<i class = "descripcion"> - Que comienze con 'a' y tenga al menos dos caracteres de largo.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'a__%'</i></i>
						<i class = "descripcion"> - Que comienze con 'a' y tenga al menos tres caracteres de largo.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'a%o'</i></i>
						<i class = "descripcion"> - Cualquier valor que comienze con 'a' y termine con 'o'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'[abc]%'</i></i>
						<i class = "descripcion"> - Cualquier valor que comienze con 'a', 'b' o 'c'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'%[^abc]'</i></i>
						<i class = "descripcion"> - Cualquier valor que no termine con 'a', 'b' o 'c'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'%[d-f]'</i></i>
						<i class = "descripcion"> - Cualquier valor que termine con 'd', 'e' o 'f'.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">WHERE</b> column_name <b class = "colorComando">LIKE</b> <i class = "colorString">'%[^d-f]'</i></i>
						<i class = "descripcion"> - Cualquier valor que no termine con 'd', 'e' o 'f'.</i>
					</div>
					
				</div>
				<br>
				<b class = "colorComando">SELECT</b> column_name<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name LIKE <b class = "colorString">'%a'</b>; <b class = "colorComentario"> # Filtra los resultados que terminen en 'a'.</b>
				<br><br>
				<b class = "colorComando">SELECT</b> column_name<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name NOT LIKE <b class = "colorString">'%a'</b>; <b class = "colorComentario"> # Filtra los resultados que no terminen en 'a'.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_in">IN:</b><i> Utilizado en la clausula 'WHERE', permite especificar multiples valores. Es una abreviacion de multiples condiciones 'OR'.</i><br>
				<br>
				<b class = "colorComando">SELECT </b> column_name1<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name1 <b class = "colorComando">IN</b> (value1, value2); <b class = "colorComentario"> # Filtra si coincide con alguno de los valores especificados.</b>
				<br><br>
				<b class = "colorComando">SELECT </b> column_name1<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name1 <b class = "colorComando">NOT IN</b> (value1, value2); <b class = "colorComentario"> # Filtra si no coincide con alguno de los valores especificados.</b>
				<br><br>
				<b class = "colorComando">SELECT </b> column_name1<b class = "colorComentario"> # Tambien se puede utilizar otro 'SELECT' para filtrar.</b><br>
				<b class = "colorComando">FROM</b> table_name1<br>
				<b class = "colorComando">WHERE</b> column_name1 <b class = "colorComando">IN</b> <b class = "colorComentario"> # Filtra si coincide con algunos de los valores obtenidos del 'select' indicado.</b>
				(<b class = "colorComando">SELECT </b> column_name2 <b class = "colorComando">FROM</b> table_name2);
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_between">BETWEEN:</b><i> Utilizado en la clausula 'WHERE', filtra los valores que se encuentren entre los valores (numericos, cadenas y fechas) especificados. Es inclusivo en ambos extremos.</i><br>
				<br>
				<b class = "colorComando">SELECT </b> column_name1<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name1 <b class = "colorComando">BETWEEN</b> value1 <b class = "colorComando">AND</b> value2; <b class = "colorComentario"> # Filtra si el valor esta incluido en el rango.</b>
				<br><br>
				<b class = "colorComando">SELECT </b> column_name1<br>
				<b class = "colorComando">FROM</b> table_name<br>
				<b class = "colorComando">WHERE</b> column_name1 <b class = "colorComando">NOT BETWEEN</b> value1 <b class = "colorComando">AND</b> value2; <b class = "colorComentario"> # Filtra si el valor no esta incluido en el rango.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_as">AS:</b><i> Es un alias que se puede utilizar para otorgarle un nombre temporal a la columna, fila o tabla indicada. El mismo solo dura hasta que termine la consulta. Es util para facilitar la lecura y trabajar mas comodo con multiples tablas.</i><br>
				<br>
				<b class = "colorComando">SELECT </b> column_name1 <b class = "colorComando">AS</b> C1, column_name2 <b class = "colorComando">AS</b> (C_2)<br>
				<b class = "colorComando">FROM</b> table_name; <b class = "colorComentario"> # Cambio el nombre temporal de varias columnas. Si el mismo contiene espacios, se requiere el uso de parentesis.</b>
				<br><br>
				<b class = "colorComando">SELECT </b> column_name1<br>
				<b class = "colorComando">FROM</b> table_name <b class = "colorComando">AS</b> TB1;<b class = "colorComentario"> # Cambio el nombre temporal de la tabla.</b>
				<br><br>
				<b class = "colorComando">SELECT CONCAT</b>(column_name1, <i class = "colorString">" "</i>, column_name2) <b class = "colorComando">AS</b> SUMA<br>
				<b class = "colorComando">FROM</b> table_name; <b class = "colorComentario"> # 'CONCAT' permite concatenar los valores de las columnas indicadas, y a su vez cadenas que permiten separar los valores. Se puede indicar un alias para el resultado.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_join">JOIN:</b><i> La clausula 'JOIN' permite combinar filas de dos o mas tablas, basadose la combinacion en una columna relacionada entre las mismas. El campo no necesariamente debe tener el mismo nombre en ambas tablas, solo el valor.<br>
				En los casos de 'OUTER JOIN', si el campo no es coincidente, se rellena con nulo.</i><br>
				<br>
				<div class = "centrar vertical tabla-larga">
					<div class = "centrar fila">
						<b class = "colorImportante">TIPO DE 'JOIN' () ES OPCIONAL</b> <b class = "colorImportante">MUESTRA...</b>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">(INNER) JOIN</b></i>
						<i class = "descripcion">solo las filas que contengan el mismo valor relacionado.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">LEFT (OUTER) JOIN</b></i>
						<i class = "descripcion">todas las filas de la tabla de la IZQ, y solo los coincidientes de la DER.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">RIGHT (OUTER) JOIN</b></i>
						<i class = "descripcion">todas las filas de la tabla de la DER, y solo los coincidientes de la IZQ.</i>
					</div>
					<div class = "centrar fila">
						<i><b class = "colorComando">FULL (OUTER) JOIN</b></i>
						<i class = "descripcion">muestra todas las filas haya valores coincidentes o no.</i>
					</div>
				</div>
				<br>
				<b class = "colorComando">SELECT </b> table1.id, table1.name, table2.total<b class = "colorComentario"> # La columna relacionada, es decir que su valor es compartido entre ambas tablas, es el 'id'. En este caso, muestro las columnas 'id' y 'name' de la 'table1'; y 'total' de la 'table2'.</b><br>
				<b class = "colorComando">FROM</b> table1<b class = "colorComentario"> # La tabla original, en la que se muestra el campo relacionado.</b><br>
				<b class = "colorComando">INNER JOIN</b> table2 <b class = "colorComando">ON</b> table1.id = table2.id;<b class = "colorComentario"> # Combino la tabla 2 con la tabla 1 relacionando las columnas id de ambas. Utilizo la clausula 'INNER JOIN'.</b><br>
				<br>
				<b class = "colorComando">SELECT </b> table1.id, table1.name, table2.total, table3.regionName<br>
				<b class = "colorComando">FROM</b> ((table1<br>
				<b class = "colorComando">INNER JOIN</b> table2 <b class = "colorComando">ON</b> table1.id = table2.id)<br>
				<b class = "colorComando">INNER JOIN</b> table3 <b class = "colorComando">ON</b> table1.idRegion = table3.id);<b class = "colorComentario"> # Relaciono tres tablas, no necesariamente comparten las 3 el mismo campo relacionado. En este caso la tabla 1 esta relacionada con la 2 y la 3, pero estas no tiene ninguna relacion entre si.</b>
				<br><br>
				<hr>
				<br>
				<b class = "colorImportante indice" id = "info_union">UNION:</b><i> Une los resultados de dos o mas 'SELECT', siempre y cuando:<br>
				<ul>
					<li>Cada 'SELECT' debe tener el mismo numero de columnas.</li>
					<li>Estas columnas deben tener el mismo tipo o similar.</li>
					<li>El orden de las columnas debe ser identico.</li>
				</ul>
				</i>
				<b class = "colorComando">SELECT </b> column_name1, column_name2<br>
				<b class = "colorComando">FROM</b> table_name1<br>
				<b class = "colorComando">UNION</b><b class = "colorComentario"> # Si existen duplicados no se mostraran.</b><br>
				<b class = "colorComando">SELECT </b> column_name_a, column_name_b<b class = "colorComentario"> # El nombre de las columnas no importa, si no su contenido.</b><br>
				<b class = "colorComando">FROM</b> table_name2;<b class = "colorComentario"> # El nombre de las columnas de la tabla resultado sera el del primer 'SELECT'.</b><br>
				<br><br>
				<b class = "colorComando">SELECT </b><b class = "colorString">'tabla 1'</b> <b class = "colorComando">AS</b> TIPO, column_name1, column_name2<b class = "colorComentario"> # La columna 'TIPO' no pertenece a ninguna de las dos tablas, sino que es una temporal que tendra dos valores posibles: un string ('tabla 1') que se mostrara en las filas de la tabla 1 y otro ('tabla 2') para las de la tabla 2.</b><br>
				<b class = "colorComando">FROM</b> table_name1<br>
				<b class = "colorComando">WHERE</b> condicion<br>
				<b class = "colorComando">UNION ALL</b><b class = "colorComentario"> # Si existen duplicados ahora los muestra.</b><br>
				<b class = "colorComando">SELECT </b><b class = "colorString">'tabla 2'</b> <b class = "colorComando">AS</b> TIPO, column_name_a, column_name_b<br>
				<b class = "colorComando">FROM</b> table_name2<br>
				<b class = "colorComando">WHERE</b> condicion<br>
				<b class = "colorComando">ORDER BY</b> column_name1;<br>
				





				</div>

			</div>
			
		</div>

	</body>

	<script type="text/javascript">

		var seleccion = "";
		var array_infos = undefined;

		function inicializar_botones() {
			var botones = obtener_botones();

			for (var i = 0; i < botones.length; i++) {
				botones[i].addEventListener("click", seleccionar_del_menu);
			}
		}

		function obtener_botones() {
			var botones = document.getElementsByTagName("h3");
			return botones;
		}

		function clear_botones() {

			var botones = obtener_botones();

			for (var i = 0; i < botones.length; i++) {
				botones[i].classList.remove("iluminar");
			}
		}

		function obtener_info() {
			if (array_infos === undefined)
				array_infos = document.getElementsByClassName("indice");
			return array_infos;
		}

		function mostrar(id) {
			var info = document.getElementById(id);
			info.scrollIntoView();
		}
		
		function seleccionar_del_menu(event) {
			var id = event.currentTarget.id;
			var boton = document.getElementById(id);
			var seleccion = id.replace("btn", "info");

			clear_botones();

			boton.classList.add("iluminar");

			mostrar(seleccion);
		}

		inicializar_botones();

	</script>
</html>