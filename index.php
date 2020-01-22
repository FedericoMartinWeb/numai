
<?php $pageIdName = 'home'; ?>

<?php include 'includes/header.php';?>

	<!--main_content-->
	<div id="main_content" class="container">

		<!--example-->
		<div class="container example-basic">
			<header class="row center">
				<div class="col-12-8">
					<h2>Básico - creando una grilla:</h2>
					<p>Las clases de las columnas son de acuerdo la grilla, actualmente solo existe la de 12, el nombre de la columan sigue este sistema: col-TipoGrilla-NColumna. Para tener una columna de 6 (50% del espacio del contenedor) se escribe col-12-6.</p>
				</div>
			</header>
			<div class="row" style="margin: 20px auto;">
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>
			<div class="row">
				<div class="col-12-4" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
				<div class="col-12-4" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
				<div class="col-12-4" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
			</div>
		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Básico - columna sin datos:</h2>
					<p>Cuando la columna tenga definida su grilla pero no su cantidad de columnas ocupara el 100% del contenedo, ejemp: col-12 ocupa todo el ancho</p>
				</div>
			</header>

			<div class="row" style="margin: 20px auto;">
				<div class="col-12" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL Sin valor pero con grilla
				</div>
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Mientras tanto col- ocupa todo el espacio que pueda condicionado por otras columnas.</p>
				</div>
			</article>

			<div class="row" style="margin: 20px auto;">
				<div class="col-" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL Sin valor ni grilla
				</div>
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>
			<div class="row" style="margin: 20px auto;">
				<div class="col-" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL Sin valor ni grilla
				</div>
				<div class="col-12-4" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
				<div class="col-12-4" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Y col-auto permite que la columna ocupe el espacio que le de el contenido.</p>
				</div>
			</article>
			<div class="row" style="margin: 20px auto;">
				<div class="col-auto" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL AUTO
				</div>
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>
			<div class="row">
				<div class="col-auto" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL AUTO
				</div>
				<div class="col-12-4" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
				<div class="col-12-4" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
			</div>
		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Offset:</h2>
					<p>Offset de Izquierda y derecha; nombres de clase offset-direccion-TipoGrilla-Ncolumna. Ejemplo: offset-left-12-5.</p>
				</div>
			</header>

			<div class="row" style="margin: 20px auto;">
				<div class="col-12-1 offset-left-12-11" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 1
				</div>
				<div class="col-12-2 offset-left-12-10" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 2
				</div>
				<div class="col-12-3 offset-left-12-9" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
				<div class="col-12-4 offset-left-12-8" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 4
				</div>
				<div class="col-12-5 offset-left-12-7" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 5
				</div>
				<div class="col-12-6 offset-left-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-7 offset-left-12-5" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 7
				</div>
				<div class="col-12-8 offset-left-12-4" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 8
				</div>
				<div class="col-12-9 offset-left-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 9
				</div>
				<div class="col-12-10 offset-left-12-2" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 10
				</div>
				<div class="col-12-11 offset-left-12-1" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 11
				</div>
			</div>

		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Alineación - Horizontal:</h2>
					<p>Izquierda explicito, aunque por default debe acomodarse de izquierda a derecha</p>
				</div>
			</header>
			<div class="row left" style="margin: 20px auto;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Centrado</p>
				</div>
			</article>
			<div class="row center" style="margin: 20px auto;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Derecha</p>
				</div>
			</article>
			<div class="row right" style="margin: 20px auto;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Alineación - Vertical:</h2>
					<p>Top - Row entera</p>
				</div>
			</header>

			<div class="row top" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Middle - Row entera</p>
				</div>
			</article>
			<div class="row middle" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Bottom - Row entera</p>
				</div>
			</article>
			<div class="row bottom" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Top - Columna Individual</p>
				</div>
			</article>
			<div class="row bottom" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6 top" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Middle - Columna Individual</p>
				</div>
			</article>
			<div class="row bottom" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6 middle" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Bottom - Columna Individual</p>
				</div>
			</article>
			<div class="row" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6 bottom" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>Stretch, se puede forzar a las columnas que ocupen toda la altura de la fila, por default las columnas ocupan solo la altura que tienen.</p>
				</div>
			</article>
			<div class="row stretch" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>También se puede evitar individualmente que alguna de las columnas crezca, o se puede forzar a crecer.</p>
				</div>
			</article>
			<div class="row stretch" style="margin: 20px auto; height: 300px; background-color: antiquewhite;">
				<div class="col-12-6 baseline" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
				<div class="col-12-6" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 6
				</div>
			</div>

		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Distribución:</h2>
					<p>Se puede cambiar el tipo distribución de la fila, sea por around (Los items tienen el mismo espacio a su alrededor)</p>
				</div>
			</header>

			<div class="row around" style="margin: 20px auto;">
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
				<div class="col-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>O por between (El primer item al inicio, el último al final).</p>
				</div>
			</article>

			<div class="row between" style="margin: 20px auto;">
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
				<div class="col-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					COL 3
				</div>
			</div>

		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Cambiar Orden:</h2>
					<p>Se puede alterar el orden de las columnas usando las clases: order-first (la columna se convertira en la primera de la fila), order-last(la columna se vuelve la ultima de la fila)</p>
				</div>
			</header>

			<div class="row" style="margin: 20px auto;">
				<div class="col-12-3 order-last" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					1 pero se muestra ultima
				</div>
				<div class="col-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					2
				</div>
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					3
				</div>
				<div class="col-12-3 order-first" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					4 pero se muestra primera
				</div>
			</div>

			<article class="row center">
				<div class="col-12-8">
					<p>y order-TipoGrilla-NColumna que altera la posición, hay que tomar en cuenta que por default todos las columnas tienen el order con valor como 0, asi que es necesario darle un valor de orden a todos:</p>
				</div>
			</article>

			<div class="row" style="margin: 20px auto;">
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					1
				</div>
				<div class="col-12-3 order-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					2 pero se muestra cuarta
				</div>
				<div class="col-12-3 order-12-1" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					3 pero se muestra segunda
				</div>
				<div class="col-12-3 order-12-2" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					4 pero se muestra tercera
				</div>
			</div>

		</div>
		<!--/example-->

		<!--example-->
		<div class="container example-auto">
			<header class="row center">
				<div class="col-12-8">
					<h2>Reverse:</h2>
					<p>Usando la clase reverse en el row puede cambiar el orden entero de todas las columnas.</p>
				</div>
			</header>

			<div class="row reverse" style="margin: 20px auto;">
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					1
				</div>
				<div class="col-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					2
				</div>
				<div class="col-12-3" style="background-color: brown; padding: 20px 15px; font-size: 20px;">
					3
				</div>
				<div class="col-12-3" style="background-color: orange; padding: 20px 15px; font-size: 20px;">
					4
				</div>
			</div>

		</div>
		<!--/example-->

	</div>
	<!--/main_content-->

<?php include 'includes/footer.php';?>
