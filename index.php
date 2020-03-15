
<?php $pageIdName = 'home'; ?>

<?php include 'includes/header.php';?>

	<section class="hero" id="hero">

		<div class="hero__image">

			<video loop="" autoplay="" muted="">
				<source src="img/videos/hero.mp4" type="video/mp4">
				<source src="img/videos/hero.webm" type="video/webm">
			</video>
		</div>
		
		<div class="hero__wrapper">
			<span class="present">te presentamos</span>
			<h1><img src="img/hero/numai.png" alt=""></h1>
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
						<img src="img/proyectos/imagen1.jpg" alt="">
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
				<img src="img/ame/full.jpg" alt="">
			</div>
		</section>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 ame__item">
					
					<div class="ame__foto">
						<figure>
							<img src="img/ame/4-a.jpg" alt="">
						</figure>
					</div>
					<div class="ame__list">
						<h4>Comodidad</h4>
						<ul>
							<li>- 9 pisos distribuidos en Studios, 2 y 3 ambientes aptos profesional.</li>
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
							<img src="img/ame/4-b.jpg" alt="">
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
							<img src="img/ame/4-c.jpg" alt="">
						</figure>
					</div>
					<div class="ame__list">
						<h4>vanguardia</h4>
						<ul>
							<li>- Calefacción por radiador, con caldera individual (en unid. De 2 y 3 amb.)</li>
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
							<img src="img/ame/5.jpg" alt="">
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

						<div class="title__description col-lg-8"><b>Recorre el edificio.</b><br>Hacé click en cada piso de la imagen y conocé nuestras unidades y características</div>

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
									<li>Cub. <b>71.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>9.30 m<sup>2</sup></b></li>
									<li>Desc. <b>5.60 m<sup>2</sup></b></li>
									<li>Total. <b>85.90 m<sup>2</sup></b></li>
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
									<li>Cub. <b>70.00 m<sup>2</sup></b></li>
									<li>Desc. <b>9.60 m<sup>2</sup></b></li>
									<li>Total. <b>79.60 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.80 m<sup>2</sup></b></li>
									<li>Semicub. <b>4.00 m<sup>2</sup></b></li>
									<li>Total. <b>31.80 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.00 m<sup>2</sup></b></li>
								<li>Semicub. <b>5.32 m<sup>2</sup></b></li>
								<li>Total. <b>48.30 m<sup>2</sup></b></li>
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
									<li>Cub. <b>70.00 m<sup>2</sup></b></li>
									<li>Desc. <b>9.60 m<sup>2</sup></b></li>
									<li>Total. <b>79.60 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.80 m<sup>2</sup></b></li>
									<li>Semicub. <b>4.00 m<sup>2</sup></b></li>
									<li>Total. <b>31.80 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.00 m<sup>2</sup></b></li>
								<li>Semicub. <b>5.32 m<sup>2</sup></b></li>
								<li>Total. <b>48.30 m<sup>2</sup></b></li>
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
									<li>Cub. <b>70.00 m<sup>2</sup></b></li>
									<li>Desc. <b>9.60 m<sup>2</sup></b></li>
									<li>Total. <b>79.60 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>27.80 m<sup>2</sup></b></li>
									<li>Semicub. <b>4.00 m<sup>2</sup></b></li>
									<li>Total. <b>31.80 m<sup>2</sup></b></li>
								</ul>
							</div><div class="unidad">
							<h6>unidad c</h6>
							<ul>
								<li>Cub. <b>43.00 m<sup>2</sup></b></li>
								<li>Semicub. <b>5.32 m<sup>2</sup></b></li>
								<li>Total. <b>48.30 m<sup>2</sup></b></li>
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
									<li>Cub. <b>49.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>6.35 m<sup>2</sup></b></li>
									<li>Desc. <b>22.95 m<sup>2</sup></b></li>
									<li>Total. <b>78.30 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>38.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.70 m<sup>2</sup></b></li>
									<li>Desc. <b>35.28 m<sup>2</sup></b></li>
									<li>Total. <b>78.98 m<sup>2</sup></b></li>
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
									<li>Cub. <b>49.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>6.35 m<sup>2</sup></b></li>
									<li>Total. <b>55.35 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>38.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.70 m<sup>2</sup></b></li>
									<li>Total. <b>43.70 m<sup>2</sup></b></li>
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
									<li>Cub. <b>49.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>6.35 m<sup>2</sup></b></li>
									<li>Total. <b>55.35 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>38.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.70 m<sup>2</sup></b></li>
									<li>Total. <b>43.70 m<sup>2</sup></b></li>
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
								<h6>unidad a (duplex)</h6>
								<ul>
									<li>Cub. <b>57.20 m<sup>2</sup></b></li>
									<li>Desc. <b>29.80 m<sup>2</sup></b></li>
									<li>Total. <b>87.00 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>38.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.70 m<sup>2</sup></b></li>
									<li>Total. <b>43.70 m<sup>2</sup></b></li>
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
								<h6>unidad a (duplex)</h6>
								<ul>
									<li>Cub. <b>57.20 m<sup>2</sup></b></li>
									<li>Desc. <b>29.80 m<sup>2</sup></b></li>
									<li>Total. <b>87.00 m<sup>2</sup></b></li>
								</ul>
							</div>
							<div class="unidad">
								<h6>unidad b</h6>
								<ul>
									<li>Cub. <b>38.00 m<sup>2</sup></b></li>
									<li>Semicub. <b>5.70 m<sup>2</sup></b></li>
									<li>Total. <b>43.70 m<sup>2</sup></b></li>
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
									<li>Desc. <b>20.82 m<sup>2</sup></b></li>
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
					<p>Las medidas y superficies de la presente incluyen los muros perimetrales y son meramente indicativas, este documento es informativo y no tiene carácter contractual. Las medidas denitivas serán las que surjan del plano de subdivisión y/o de los contratos que se suscriban. Las imágenes son de carácter ilustrativo. Los valores, condiciones de venta y plazos de entrega podrán ser cambiados sin previo aviso.</p>
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
					<p>Las medidas y supercies de la presente incluyen los muros perimetrales y son meramente indicativas, este documento es informativo y no tiene carácter contractual. Las medidas denitivas serán las que surjan del plano de subdivisión y/o de los contratos que se suscriban. Las imágenes son de carácter ilustrativo. Los valores, condiciones de venta y plazos de entrega podrán ser cambiados sin previo aviso.</p>
					<a href="brochure.pdf" download class="contacto__bro"><b>DESCARGAR</b> brochure completo</a>
				</div>
			</div>
		
			<div class="build__img">
				<figure>
					<img src="img/planos/6nueva.jpg" usemap="#image-map">

					<map name="image-map">
						<area target="" alt="piso1" title="piso1" name="piso1" href="1" coords="586,1114,337,1168,338,1278,546,1256,567,1254,566,1155,587,1150" shape="poly">
						<area target="" alt="piso2" title="piso2" name="piso2" href="2" coords="587,1115,338,1167,307,1166,286,1167,287,1110,300,1082,319,1071,323,1059,332,1055,332,1054,586,962,588,971,566,981,567,1021,566,1046,574,1053,581,1053,587,1061" shape="poly">
						<area target="" alt="piso3" title="piso3" name="piso3" href="3" coords="585,962,332,1055,320,1048,299,1047,285,1051,286,990,321,972,322,942,588,808,585,866,571,871,564,873,571,886,593,895,591,961" shape="poly">
						<area target="" alt="piso4" title="piso4" name="piso4" href="4" coords="589,808,320,944,324,935,306,929,297,926,288,932,284,866,308,854,328,824,590,654,590,706,589,730,589,722" shape="poly">
						<area target="" alt="piso5" title="piso5" name="piso5" href="5" coords="589,653,330,821,324,815,291,804,288,810,285,751,321,721,329,707,471,594,481,595,546,546,590,572" shape="poly">
						<area target="" alt="piso6" title="piso6" name="piso6" href="6" coords="473,593,330,707,289,690,289,627,328,587,474,455,676,586,646,606,546,545,529,557,478,598" shape="poly">
						<area target="" alt="piso7" title="piso7" name="piso7" href="7" coords="474,455,327,587,288,568,288,504,321,463,427,350,436,355,474,314,761,531,677,586" shape="poly">
						<area target="" alt="piso8" title="piso8" name="piso8" href="8" coords="473,314,436,354,427,350,321,464,288,446,286,383,429,203,501,261,533,225,835,483,762,532" shape="poly">
						<area target="" alt="piso9" title="piso9" name="piso9" href="9" coords="529,222,498,258,476,240,507,205,427,136,425,62,425,50,602,214,643,172,909,433,834,484" shape="poly">
						<area target="" alt="piso10" title="piso10" name="piso10" href="10" coords="603,213,582,195,642,133,697,186,697,178,730,147,845,272,845,335,927,422,909,433,643,171" shape="poly">
					</map>

					<!-- <map name="image-map">
						<area target="" alt="" title="piso6" name="piso6" href="6" coords="473,593,330,707,289,690,289,627,328,587,474,455,676,586,646,606,546,545,529,557,478,598" shape="poly">
						<area target="" alt="" title="piso7" name="piso7" href="7" coords="474,455,327,587,288,568,288,504,321,466,429,351,436,355,474,314,761,531,677,586" shape="poly">
						<area target="" alt="" title="piso8" name="piso8" href="8" coords="473,314,436,354,427,350,321,464,288,446,286,383,429,203,501,261,536,225,835,483,762,531" shape="poly">
						<area target="" alt="" title="piso9" name="piso9" href="9" coords="529,222,498,256,476,240,507,205,427,136,425,62,425,50,602,214,643,172,909,433,835,481" shape="poly">
						<area target="" alt="" title="piso10" name="piso10" href="10" coords="603,213,582,195,642,133,697,186,697,178,730,147,845,272,845,335,927,422,909,433,643,171" shape="poly">
					</map> -->
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
					<div class="swiper-slide"> <span>Coronel-pagola 3932</span> <a href="img/galeria2/coronel.jpg" data-lightbox="image-1"> <img src="img/galeria2/coronel.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>chenaut 1707</span> <a href="img/galeria2/chenaut.jpg" data-lightbox="image-1"> <img src="img/galeria2/chenaut.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>Antezana 570</span> <a href="img/galeria2/antezana.jpg" data-lightbox="image-1"> <img src="img/galeria2/antezana.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>Holmberg 3470</span> <a href="img/galeria2/holmberg.jpg" data-lightbox="image-1"> <img src="img/galeria2/holmberg.jpg" alt=""></a></div>
					<div class="swiper-slide"> <span>El Salvador 4523</span> <a href="img/galeria2/salvador.jpg" data-lightbox="image-1"> <img src="img/galeria2/salvador.jpg" alt=""></a></div>
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
						<span>numai te espera</span>
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
							if(window.location.href == "https://numai.com.ar/#"){
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
						<a href="https://www.oscarfuentesarquitectos.com" target="_blank">
							<img src="img/footer/fuentes.jpg" alt="">
							</a>
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
						<span class="orwel__descri__mail">alfredo@orwel.com.ar - <b>113.121.1234</b></span>
						<span class="orwel__descri__mail">esteban@orwel.com.ar - <b>113.113.6668</b></span>
						<a href="www.orwel.com.ar" target="_blank" class="orwel__descri__site">www.orwel.com.ar</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="credits">
		<div class="container">
			<div class="row">
				<div class="credits__wrapper">
					<span>DISEÑO <a href="http://www.neladiaz.com.ar" target="_blank">NELA DIAZ</a> | DESARROLLO <a href="https://www.federicomartin.io" target="_blank">FEDERICO MARTIN</a></span>
				</div>
			</div>
		</div>
		
	</section>

<?php include 'includes/footer.php';?>
