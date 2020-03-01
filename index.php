
<?php $pageIdName = 'home'; ?>

<?php include 'includes/header.php';?>

	<section class="hero" id="hero">

		<div class="hero__image">
			<img src="img/hero/hero.png" alt="">
		</div>
		
		<div class="hero__wrapper">
			<span class="present">te presentamos</span>
			<h1>numai I</h1>
			<h3><span>numai</span> significa único</h3>
			<span class="origi">único significa <b>original</b></span>
		</div>

		<div class="wasap__mobile">
			<a href="https://api.whatsapp.com/send?phone=+5491131211234"><i class="icon-whatsapp"></i></a>
		</div>

		<div class="entrega">
			<span>entrega prevista</span>
			<span>mayo 2021</span>
		</div>

	</section>

	

	<section class="box separador" id="box">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>Ubicación</h2>
						</div>

						<div class="title__description col-lg-8">NUMAI I te espera para que explores el ritmo de un barrio que te permitirá crear una experiencia única, cerca de todo lo que necesitas.</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="box__item col-lg-4">
					<div class="box__internal">
						<div class="box__title">
							<h3>Parques</h3>
							<span>comercios - espacios recreativos</span>
						</div>

						<div class="box__description">
							<p>La ubicación de Numai se destaca por el acceso a diferentes ofertas culturales, artísticas y recreativas.</p>
						</div>
					</div>
				</div>

				<div class="box__item col-lg-4">
					<div class="box__internal">
						<div class="box__title">
							<h3>Ofertas Culturales</h3>
							<span>teatros</span>
						</div>

						<div class="box__description">
							<p>Podes combinar paseos con visitas a museos, parques o salidas a distintos bares y teatros.</p>
						</div>
					</div>
				</div>

				<div class="box__item col-lg-4">
					<div class="box__internal">
						<div class="box__title">
							<h3>Accesibilidad</h3>
							<span>centros médicos - educativos</span>
						</div>

						<div class="box__description">
							<p>El edificio está estratégicamente situado a una cuadra de la línea de subte B y a pocas cuadras de diversos centros médicos, educativos y comerciales.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="map" id="map">
		
	</section>

	<script>
	// Initialize and add the map
	function initMap() {
	// The location of Uluru
	var uluru = {lat: -34.600065, lng: -58.429722};
	// The map, centered at Uluru
	var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 14, center: uluru});
	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({position: uluru, map: map});
	}
		</script>
		<!--Load the API from the specified URL
		* The async attribute allows the browser to render the page while the API loads
		* The key parameter will contain your own API key (which is not needed for this tutorial)
		* The callback parameter executes the initMap() function
		-->
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPK9hiFigksADUMV76aiQK1swczDyyohM&callback=initMap">
		</script>

	<section class="proyecto separador numai" id="proyecto">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>proyecto</h2>
						</div>

						<div class="title__description col-lg-8">Queremos ofrecerte una experiencia urbana diferente, en la que puedas sentir tu casa o tu oficina cómo ese lugar único en el mundo.</div>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			
			<div class="proyecto__item row odd">
				<div class="proyecto__foto col-lg-6">
					<figure>
						<img src="img/proyectos/imagen1.png" alt="">
					</figure>
				</div>
				<div class="proyecto__texto col-lg-4">
					<div class="proyecto__texto__wrapper">
						<h4>Donde Comienza Todo</h4>
						<p>Numai te ofrece una combinación única: vivir, trabajar y entretenerse en un mismo lugar.</p>
					</div>
				</div>
			</div>
			
			<div class="proyecto__item row even">
				<div class="proyecto__texto col-lg-4">
					<div class="proyecto__texto__wrapper">
						<div class="box__title">
							<h3>calidez</h3>
							<span>diseñada para disfrutar</span>
						</div>
						<p>Cada unidad está diseñada para que disfrutes de la calidez y luminosidad de sus espacios. Aquí podrás vivir o trabajar en un lugar pensado para vos, con todos los detalles que lo hacen único.</p>
					</div>
				</div>

				<div class="proyecto__foto col-lg-8">
					<figure>
						<img src="img/proyectos/imagen2.jpg" alt="">
					</figure>
				</div>
			</div>

		</div>
	</section>

	<section class="ame separador" id="amenities">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>Amenities</h2>
						</div>

						<div class="title__description col-lg-8">Queremos ofrecerte una experiencia urbana diferente, en la que puedas sentir tu casa o tu oficina cómo ese lugar único en el mundo.</div>

					</div>
				</div>
			</div>
		</div>

		<section class="ame__full">
			<div class="ame__full__wrapper">
				<img src="img/ame/full.png" alt="">
			</div>
		</section>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 ame__item">
					
					<div class="ame__foto">
						<figure>
							<img src="img/proyectos/imagen2.jpg" alt="">
						</figure>
					</div>
					<div class="ame__list">
						<h4>Comodidad</h4>
						<ul>
							<li>- 9 pisos distribuidos en Studios, 2, 3 y 4 ambientes aptos profesional.</li>
							<li>- Cocheras fijas opcionales.</li>
							<li>- SUM con parrilla.</li>
							<li>- Solárium.</li>
							<li>- Terrazas exclusivas.</li>
						</ul>
					</div>
					
				</div>
				<div class="col-lg-4 ame__item">
					
					<div class="ame__foto">
						<figure>
							<img src="img/proyectos/imagen2.jpg" alt="">
						</figure>
					</div>
					<div class="ame__list">
						<h4>terminaciones</h4>
						<ul>
							<li>- Baños, cocina y pisos revestidos con porcelanatos.</li>
							<li>- Griferías de primera calidad y diseño.</li>
							<li>- Interiores con placards completos.</li>
							<li>- Horno y anafe en todas las unidades.</li>
							<li>- Se incluirá provisión y colocación de cortinas roller.</li>
							<li>- Carpintería de Aluminio DVH (doble vidrio hermético).</li>
						</ul>
					</div>
					
				</div>
				<div class="col-lg-4 ame__item">
					
					<div class="ame__foto">
						<figure>
							<img src="img/proyectos/imagen2.jpg" alt="">
						</figure>
					</div>
					<div class="ame__list">
						<h4>vanguardia</h4>
						<ul>
							<li>- Calefacción por radiador, con caldera individual (en unid. De 2, 3 y 4 amb.)</li>
							<li>- Multi Split Frio Calor para los Studios.</li>
							<li>- Cocina con muebles bajomesada y alacenas de diseño.</li>
							<li>- Cerraduras biométricas con huella digital en la puerta de las unidades.</li>
						</ul>
					</div>
					
				</div>
			</div>

			<div class="ame__banner">
				<div class="row">
					<div class="ame__banner__foto col-lg-8">
						<figure>
							<img src="img/ame/banner.png" alt="">
						</figure>
					</div>
					<div class="ame__banner__texto col-lg-4">
						<div class="ame__banner__texto__wrapper">
							<div class="box__title">
								<span>unidades con</span>
								<h3>terrazas exclusivas</h3>
							</div>
							<p>Cada una de ellas con parrilla incluida. Un amplio espacio para disfrutar al aire libre con quienes más queres.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mapping separador" id="mapping">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>Unidades</h2>
						</div>

						<div class="title__description col-lg-8"><b>Recorre el edificio.</b><br>Conocé nuestras unidades y características</div>

					</div>
				</div>
			</div>
		</div>

		<div class="tabs__map mobile container">
			<div class="tabs__links">
				<a href="#seccion-1" class="active">1</a>
				<a href="#seccion-2">2</a>
				<a href="#seccion-3">3</a>
				<a href="#seccion-4">4</a>
				<a href="#seccion-5">5</a>
				<a href="#seccion-6">6</a>
				<a href="#seccion-7">7</a>
				<a href="#seccion-8">8</a>
				<a href="#seccion-9">9</a>
				<a href="#seccion-10">SUM</a>
			</div>

			<div class="tabs__content">
				<div class="tabs__content__item active" id="seccion-1">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>69.70 m<sup>2</sup></b></li>
									<li>Desc. <b>5.50 m<sup>2</sup></b></li>
									<li>Total. <b>75.20 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>71.20 m<sup>2</sup></b></li>
									<li>Semicub. <b>9.40 m<sup>2</sup></b></li>
									<li>Desc. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>86.90 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<a href="img/planos/planos-1.jpg" data-lightbox="planm">
							<img src="img/planos/planos-1.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-2">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>69.70 m<sup>2</sup></b></li>
									<li>Desc. <b>8.83 m<sup>2</sup></b></li>
									<li>Total. <b>75.20 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.50 m<sup>2</sup></b></li>
									<li>Semicub. <b>3.93 m<sup>2</sup></b></li>
									<li>Total. <b>31.43 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.75 m<sup>2</sup></b></li>
								<li>Semicub. <b>4.99 m<sup>2</sup></b></li>
								<li>Total. <b>48.74 m<sup>2</sup></b></li>
							</ul>
							</div>
						</div>

						<a href="img/planos/planos-2.jpg" data-lightbox="planm">
							<img src="img/planos/planos-2.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-3">
					<div class="changing">
					<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>69.70 m<sup>2</sup></b></li>
									<li>Desc. <b>8.83 m<sup>2</sup></b></li>
									<li>Total. <b>75.20 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.50 m<sup>2</sup></b></li>
									<li>Semicub. <b>3.93 m<sup>2</sup></b></li>
									<li>Total. <b>31.43 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.75 m<sup>2</sup></b></li>
								<li>Semicub. <b>4.99 m<sup>2</sup></b></li>
								<li>Total. <b>48.74 m<sup>2</sup></b></li>
							</ul>
							</div>
						</div>

						<a href="img/planos/planos-3.jpg" data-lightbox="planm">
							<img src="img/planos/planos-3.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-4">
					<div class="changing">
					<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>69.70 m<sup>2</sup></b></li>
									<li>Desc. <b>8.83 m<sup>2</sup></b></li>
									<li>Total. <b>75.20 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.50 m<sup>2</sup></b></li>
									<li>Semicub. <b>3.93 m<sup>2</sup></b></li>
									<li>Total. <b>31.43 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.75 m<sup>2</sup></b></li>
								<li>Semicub. <b>4.99 m<sup>2</sup></b></li>
								<li>Total. <b>48.74 m<sup>2</sup></b></li>
							</ul>
							</div>
						</div>

						<a href="img/planos/planos-4.jpg" data-lightbox="planm">
							<img src="img/planos/planos-4.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-5">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>49.35 m<sup>2</sup></b></li>
									<li>Semicub. <b>8.04 m<sup>2</sup></b></li>
									<li>Desc. <b>22.93 m<sup>2</sup></b></li>
									<li>Total. <b>80.32 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>40.25 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.89 m<sup>2</sup></b></li>
									<li>Desc. <b>35.28 m<sup>2</sup></b></li>
									<li>Total. <b>81.42 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<a href="img/planos/planos-5.jpg" data-lightbox="planm">
							<img src="img/planos/planos-5.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-6">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>49.35 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.46 m<sup>2</sup></b></li>
									<li>Total. <b>54.81 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>40.25 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>45.85 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<a href="img/planos/planos-6.jpg" data-lightbox="planm">
							<img src="img/planos/planos-6.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-7">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>49.35 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.46 m<sup>2</sup></b></li>
									<li>Total. <b>54.81 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>40.25 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>45.15 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<div class="map__img">
							<a href="img/planos/planos-7.jpg" data-lightbox="planm">
								<img src="img/planos/planos-7.jpg" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-8">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>51.48 m<sup>2</sup></b></li>
									<li>Desc. <b>29.80 m<sup>2</sup></b></li>
									<li>Total. <b>81.28 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>40.25 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>45.85 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<div class="map__img">
							<a href="img/planos/planos-8.jpg" data-lightbox="planm">
								<img src="img/planos/planos-8.jpg" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-9">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>unidad a</h6>
								<ul>
									<li>Cub. <b>51.48 m<sup>2</sup></b></li>
									<li>Desc. <b>29.80 m<sup>2</sup></b></li>
									<li>Total. <b>81.28 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>40.25 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>45.85 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
								
							</div>
						</div>

						<div class="map__img">
							<a href="img/planos/planos-9.jpg" data-lightbox="planm">
								<img src="img/planos/planos-9.jpg" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="tabs__content__item" id="seccion-10">
					<div class="changing">
						<div class="map__info__detail">
							<div class="unidad">
								<h6>SUM</h6>
								<ul>
									<li>Cub. <b>20.18 m<sup>2</sup></b></li>
									<li>Desc. <b>20.83 m<sup>2</sup></b></li>
									<li>Total. <b>41 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								
							</div><div class="unidad">
								
							</div>
						</div>

						<div class="map__img">
							<a href="img/planos/planos-SUM.jpg" data-lightbox="planm">
								<img src="img/planos/planos-SUM.jpg" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="footer__info contacto__img">
					<span>Poryecto adaptado a mensura</span>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolorum voluptates aliquam, atque id commodi tenetur nihil incidunt unde modi dolorem distinctio quidem voluptas accusantium cupiditate qui necessitatibus quod. Tenetur?</p>
					<a href="brochure.pdf" download class="contacto__bro"><b>DESCARGAR</b> brochure completo</a>
				</div>				
			</div>
		</div>

		<div class="map__info desktop">
			
			<div class="map__info__container">
				<div class="changing">
					<div class="map__info__detail">
						<div class="piso">piso 1</div>
						<div class="unidad">
							<h6>unidad a</h6>
							<ul>
								<li>Cub. <b>69.70 m<sup>2</sup></b></li>
								<li>Desc. <b>5.50 m<sup>2</sup></b></li>
								<li>Total. <b>75.20 m<sup>2</sup></b></li>
							</ul>
						</div>
						<div class="unidad">
							<h6>unidad b</h6>
							<ul>
								<li>Cub. <b>71.20 m<sup>2</sup></b></li>
								<li>Semicub. <b>9.40 m<sup>2</sup></b></li>
								<li>Desc. <b>5.60 m<sup>2</sup></b></li>
								<li>Total. <b>86.90 m<sup>2</sup></b></li>
							</ul>
						</div><div class="unidad">
							
						</div>
					</div>

					<div class="map__img">
					<a href="img/planos/planos-1.jpg" data-lightbox="pland">
						<img src="img/planos/planos-1.jpg" alt="">
					</a>
					</div>
				</div>

				<div class="footer__info contacto__img">
					<span>1.75</span>
					<span>Poryecto adaptado a mensura</span>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolorum voluptates aliquam, atque id commodi tenetur nihil incidunt unde modi dolorem distinctio quidem voluptas accusantium cupiditate qui necessitatibus quod. Tenetur?</p>
					<a href="" class="contacto__bro"><b>DESCARGAR</b> brochure completo</a>
				</div>
			</div>
		
			<div class="build__img">
				<figure>
					<img src="img/planos/6.jpg" usemap="#image-map">

					<map name="image-map">
						<area target="" alt="piso1" title="piso1" name="piso1" href="1" coords="586,1114,337,1168,338,1278,546,1256,567,1254,566,1155,587,1150" shape="poly">
						<area target="" alt="piso2" title="piso2" name="piso2" href="2" coords="587,1115,338,1167,307,1166,286,1167,287,1110,300,1082,319,1071,323,1059,332,1055,332,1054,586,962,588,971,566,981,567,1021,566,1046,574,1053,581,1053,587,1061" shape="poly">
						<area target="" alt="piso3" title="piso3" name="piso3" href="3" coords="585,962,332,1055,320,1048,299,1047,285,1051,286,990,321,972,322,942,588,808,585,866,571,871,564,873,571,886,593,895,591,961" shape="poly">
						<area target="" alt="piso4" title="piso4" name="piso4" href="4" coords="589,808,320,944,324,935,306,929,297,926,288,932,284,866,308,854,328,824,590,654,590,706,589,730,589,722" shape="poly">
						<area target="" alt="piso5" title="piso5" name="piso5" href="5" coords="589,653,330,821,324,815,291,804,288,810,285,751,321,721,329,707,471,594,481,595,546,546,590,572" shape="poly">
						<area target="" alt="piso6" title="piso6" name="piso6" href="6" coords="530,557,479,595,470,593,328,707,289,689,288,625,321,596,328,587,429,495,473,455,797,665,766,680,597,575,547,547" shape="poly">
						<area target="" alt="piso7" title="piso7" name="piso7" href="7" coords="472,455,326,587,289,570,285,506,321,468,392,390,429,351,439,354,472,315,881,623,800,668" shape="poly">
						<area target="" alt="piso8" title="piso8" name="piso8" href="8" coords="472,315,436,353,429,351,322,466,286,447,286,384,429,205,493,255,531,286,499,260,533,227,927,563,917,607,882,625" shape="poly">
						<area target="" alt="piso9" title="piso9" name="piso9" href="9" coords="530,222,497,258,477,241,510,206,425,136,427,55,601,215,642,173,980,505,956,585" shape="poly">
						<area target="" alt="piso10" title="piso10" name="piso10" href="10" coords="601,213,581,198,644,131,723,212,695,183,730,146,846,271,844,337,985,480,981,506,841,368,643,174,845,274,642,174" shape="poly">
					</map>
				</figure>
			</div>
			
		</div>
	</section>

	<section class="galeria separador" id="galeria">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>galeria</h2>
						</div>

						<div class="title__description col-lg-8"><b>Recorre el edificio.</b><br>Conocé nuestras unidades y características</div>

					</div>
				</div>
			</div>
		</div>

		<div class="galeria__wrapper container">
			<!-- Swiper -->
			<div class="swiper-container swiper-gallery swiper-gallery1">
				<div class="swiper-wrapper">
					<div class="swiper-slide"> <a href="img/galeria/1.jpg" data-lightbox="image-1"> <img src="img/galeria/1.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/2.jpg" data-lightbox="image-1"> <img src="img/galeria/2.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/3.jpg" data-lightbox="image-1"> <img src="img/galeria/3.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/4.jpg" data-lightbox="image-1"> <img src="img/galeria/4.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/5.jpg" data-lightbox="image-1"> <img src="img/galeria/5.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/6.jpg" data-lightbox="image-1"> <img src="img/galeria/6.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/7.jpg" data-lightbox="image-1"> <img src="img/galeria/7.jpg" alt=""></a></div>
					<div class="swiper-slide"> <a href="img/galeria/8.jpg" data-lightbox="image-1"> <img src="img/galeria/8.jpg" alt=""></a></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
    			<div class="swiper-button-prev"></div>
			</div>

		</div>
	</section>

	<section class="otros separador estudio" id="otros">
		<div class="title">
			<div class="title__line"></div>
			<div class="container">
				<div class="title__wrapper">
					<div class="row">

						<div class="title__main col-lg-4">
							<h2>Otros proyectos</h2>
						</div>

						<div class="title__description col-lg-8"></div>

					</div>
				</div>
			</div>
		</div>

		<div class="galeria__wrapper container">
			<!-- Swiper -->
			<div class="swiper-container otros-gallery">
				<div class="swiper-wrapper">
				<div class="swiper-slide"> <span>bartolome mitre 1444</span> <a href="img/galeria2/bartolomemitre.jpg" data-lightbox="image-1"> <img src="img/galeria2/bartolomemitre.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>balcarce 373</span> <a href="img/galeria2/balcarce.jpg" data-lightbox="image-1"> <img src="img/galeria2/balcarce.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>chenaut 1707</span> <a href="img/galeria2/chenaut.jpg" data-lightbox="image-1"> <img src="img/galeria2/chenaut.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>rivadavia 1182</span> <a href="img/galeria2/rivadavia.jpg" data-lightbox="image-1"> <img src="img/galeria2/rivadavia.jpg" alt=""></a></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
    			<div class="swiper-button-prev"></div>
			</div>

		</div>
	</section>

	<section class="contacto separador" id="contacto">
		<div class="container">
			<div class="row contacto__wrapper">
				<div class="col-lg-6 contacto__img">
					<figure>
						<img src="img/contacto/logo.png" alt="">
					</figure>

					<a href="brochure.pdf" download class="contacto__bro"><b>DESCARGAR</b> brochure completo</a>
				</div>
				<div class="col-lg-6 contacto__form">
					<div class="contacto__form__in">
						<span>numai i te espera</span>
						<span class="write">Escribinos</span>

						<form method="post" action="formulario.php">
							<div class="contacto__form__row">
								<input type="text" name="name" placeholder="Nombre">
								<input type="email" name="email" placeholder="Email">
							</div>
							<textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
							<input type="submit" value="Enviar">
						</form>
						<span id="success_message" class="mensajes"></span>
						<script>
							if(window.location.href == "http://numai.com.ar/dryrun/#"){
								document.getElementById("success_message").style.display = "block";
								document.getElementById("success_message").innerHTML = "Mensaje enviado con exito!";
								setTimeout(() => {
									document.getElementById("success_message").style.display = "none";
								}, 3000);
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer separador">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer__item footer__item__constru">
					<span class="footer__descri">proyecto</span>
					<figure>
						<img src="img/footer/fuentes.png" alt="">
					</figure>
				</div>
				<div class="col-lg-4 footer__item footer__item__constru">
					<span class="footer__descri">desarrolla</span>
					<figure>
						<img src="img/footer/constru.png" alt="">
					</figure>
				</div>
				<div class="col-lg-4 footer__item footer__item__orwel">
					<span class="footer__descri">comercializa</span>
					<figure>
						<img src="img/footer/orwel.png" alt="">
					</figure>

					<div class="orwel__descri">
						<span class="orwel__descri__mail">alfredo@orwel.com.ar - <b>153.121.1234</b></span>
						<span class="orwel__descri__mail">esteban@orwel.com.ar - <b>153.113.6668</b></span>
						<a href="www.orwel.com.ar" target="_blank" class="orwel__descri__site">www.orwel.com.ar</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'includes/footer.php';?>
