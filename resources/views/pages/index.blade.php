@extends('layouts.app')
@section('title', 'Jotitasoft - Desarrollo de Software y SaaS')
@section('content')
	<!-----START HERO SECTION------->
	<div class="hero-section style-two align-items-center d-flex">
		<div class="circles">
			<div class="point animated-point-1"></div>
			<div class="point animated-point-2"></div>
			<div class="point animated-point-3"></div>
			<div class="point animated-point-4"></div>
			<div class="point animated-point-5"></div>
			<div class="point animated-point-6"></div>
			<div class="point animated-point-7"></div>
			<div class="point animated-point-8"></div>
			<div class="point animated-point-9"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="hero-content-area">
						<h5>Moderno. Profesional. Confiable</h5>
						<h1>Creando Mejores </h1>
						<h2>Soluciones Tecnológicas</h2>
						<div class="hero-content-txt">
							<p>Jotitasoft es una empresa especializada en desarrollo de software a medida, aplicaciones web, SaaS, sistemas empresariales y soluciones tecnológicas integrales. Transformamos ideas en soluciones digitales innovadoras.</p>
						</div>
						<div class="btn-common btn-hero">
							<a href="#services">Ver Todos los Servicios</a>
						</div>
						<div class="video hero-video">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play-circle"></i></a>	
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="hero-thumb-section">
						<div class="thumb-one">
						 	<img src="{{ asset('cyber-it/assets/images/hero/hero1.svg') }}" alt="thumb-1">
						</div>
						<div class="thumb-two ">
						 	<img src="{{ asset('cyber-it/assets/images/hero/hero2.svg') }}" alt="thumb-1">
						</div>
						<div class="thumb-three">
						 	<img src="{{ asset('cyber-it/assets/images/hero/hero3.svg') }}" alt="thumb-1">
						</div>
						<div class="thumb-four">
						 	<img src="{{ asset('cyber-it/assets/images/hero/hero4.svg') }}" alt="thumb-1">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START FEATURE SECTION----->
	<div class="feature-section style-two pb-45">
		<div class="container">
			<div class="row feature-margin-top pt-30">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-feature style-twoo">
						<div class="feature-icon"><i class="fas fa-code-branch"></i></div>
						<div class="feature-title">
							<h4>Control de Acceso</h4>
						</div>
						<div class="feature-content-txt">
							<p>Sistemas seguros con control de acceso avanzado para proteger tu información.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-feature style-twoo">
						<div class="feature-icon"><i class="fas fa-users"></i></div>
						<div class="feature-title">
							<h4>Gestión de Equipos</h4>
						</div>
						<div class="feature-content-txt">
							<p>Herramientas colaborativas para gestionar eficientemente tu equipo de trabajo.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-feature style-three">
						<div class="feature-icon"><i class="fas fa-code"></i></div>
						<div class="feature-title">
							<h4>Seguridad de Código</h4>
						</div>
						<div class="feature-content-txt">
							<p>Desarrollo seguro con las mejores prácticas de seguridad en el código.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-feature style-four">
						<div class="feature-icon"><i class="fas fa-tasks"></i></div>
						<div class="feature-title">
							<h4>Configuración Cero</h4>
						</div>
						<div class="feature-content-txt">
							<p>Soluciones listas para usar sin necesidad de configuración compleja.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START SERVICE SECTION----->
	<div class="service-section style-eight pt-70 pb-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="section-head pb-35">
						<h5>Servicios en la Nube</h5>
						<h2>Mejores Servicios Cloud</h2>
						<div class="animated-bar"><span></span></div>
						<div class="section-head-txt mt-50">
							<p>Ofrecemos soluciones cloud completas: IaaS, PaaS y SaaS. Servidores virtuales, almacenamiento en la nube, bases de datos gestionadas y aplicaciones SaaS escalables.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-database"></i></div>
								<div class="service-title">
									<h5>Bases de Datos Cloud</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-globe"></i></div>
								<div class="service-title">
									<h5>Hosting Web</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-file-code"></i></div>
								<div class="service-title">
									<h5>Almacenamiento Cloud</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-chart-line"></i></div>
								<div class="service-title">
									<h5>Analytics y Big Data</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-cloud-download-alt"></i></div>
								<div class="service-title">
									<h5>Backup Automático</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-desktop"></i></div>
								<div class="service-title">
									<h5>Escritorio Remoto</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-envelope"></i></div>
								<div class="service-title">
									<h5>Servidores de Email</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fab fa-mixcloud"></i></div>
								<div class="service-title">
									<h5>Cloud Híbrido</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="service-thumb-section">
						<div class="section-thumb pl-60">
							 <img src="{{ asset('cyber-it/assets/images/services/sv-bg-1.png') }}" alt="thumb">
						</div>
						<div class="rotate-thumb rotateme">
							 <img src="{{ asset('cyber-it/assets/images/services/rotate-img1.png') }}" alt="img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START SERVICE SECTION----->
	<div class="service-section style-nine pt-70 pb-90">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="service-thumb-section">
						<div class="section-thumb">
							 <img src="{{ asset('cyber-it/assets/images/services/sv-bg-2.png') }}" alt="thumb">
						</div>
						<div class="rotate-thumb rotateme">
							 <img src="{{ asset('cyber-it/assets/images/services/rotate-img1.png') }}" alt="img">
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="section-head pb-35">
						<h5>Servicios Web</h5>
						<h2>Desarrollo Web & UX/UI</h2>
						<div class="animated-bar"><span></span></div>
						<div class="section-head-txt mt-50">
							<p>Desarrollamos sitios web modernos, aplicaciones web responsivas, diseño UX/UI profesional y soluciones web escalables para tu negocio.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-desktop"></i></div>
								<div class="service-title">
									<h5>Diseño Responsive</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-arrows-alt"></i></div>
								<div class="service-title">
									<h5>Desarrollo React</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fab fa-android"></i></div>
								<div class="service-title">
									<h5>Desarrollo Android</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fab fa-codepen"></i></div>
								<div class="service-title">
									<h5>Desarrollo Web</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-sitemap"></i></div>
								<div class="service-title">
									<h5>Escritorio Remoto</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-pencil-alt"></i></div>
								<div class="service-title">
									<h5>UX/UI Design</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-american-sign-language-interpreting"></i></div>
								<div class="service-title">
									<h5>Solution Project</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="services-single-feature">
								<div class="feature-icon"><i class="fas fa-check"></i></div>
								<div class="service-title">
									<h5>Print ready design</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START FEATURE SECTION----->
	<div class="feature-section style-three pt-70 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-40">
						<h5>Features</h5>
						<h2>Our Best Features</h2>
						<div class="animated-bar"> <span></span></div>
						<div class="section-head-txt mt-20">
							<p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="icon-settings"></i></div>
						<div class="service-title">
							<h5>Incredible Infrastructure</h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="icon-envelope-open"></i></div>
						<div class="service-title">
							<h5>Email Notifications </h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="fas fa-chart-line"></i></div>
						<div class="service-title">
							<h5>Best Analytics Audits </h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="fas fa-th"></i></div>
						<div class="service-title">
							<h5>Simple Dashboard </h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="fas fa-at"></i></div>
						<div class="service-title">
							<h5>Information Retrieval</h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="services-single-feature">
						<div class="service-icon"><i class="fas fa-bell-slash"></i></div>
						<div class="service-title">
							<h5>Deadline Reminders</h5>
							<div class="service-content-txt">
								<p>Donec vulputate urna sed rutrum and venenatis. Cras consequat magna as arcu elementum quis congue.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START COUNTER SECTION----->
	<div class="counter-section style-six">
		<div class="container">
			<div class="row counter-content-container white">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">15</span></h1>
								</div>
								<div class="counter-txt">
									<h3>K</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Happy Clients</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">1.5</span></h1>
								</div>
								<div class="counter-txt">
									<h3>K</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Account Number </h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">10</span></h1>
								</div>
								<div class="counter-txt">
									<h3>K</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Finished Project</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">100</span></h1>
								</div>
								<div class="counter-txt">
									<h3>+</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Win Awards</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START TEAM SECTION----->
	<div class="team-section style-three pt-70 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-40">
						<h5>Miembros del Equipo</h5>
						<h2>Nuestro Equipo Experto</h2>
						<div class="animated-bar"> <span></span></div>
						<div class="section-head-txt mt-30">
							<p>Conoce a los profesionales que hacen posible las mejores soluciones tecnológicas para tu negocio.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="team-single-member">
						<div class="member-thumb">
							<img src="{{ asset('cyber-it/assets/images/team/tm-4.jpg') }}" alt="thumb">
							<div class="about-team-member">
								<div class="member-name">
									<h4>Jhanmichael Garcia</h4>
								</div>
								<div class="designation">
									<p>Socio Fundador</p>
								</div>
							</div>
							<div class="member-social-link">
								<ul>
									<li><a href="mailto:gcjhan2001@gmail.com"><i class="far fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="member-about-txt">
								<p>Especialista en desarrollo de software y tecnologías de la información. DNI: 75618866</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="team-single-member">
						<div class="member-thumb">
							<img src="{{ asset('cyber-it/assets/images/team/tm-5.jpg') }}" alt="thumb">
							<div class="about-team-member">
								<div class="member-name">
									<h4>Jonatan Mayanga</h4>
								</div>
								<div class="designation">
									<p>Socio Fundador</p>
								</div>
							</div>
							<div class="member-social-link">
								<ul>
									<li><a href="mailto:jonatanmayanga@gmail.com"><i class="far fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="member-about-txt">
								<p>Experto en desarrollo web, SaaS y soluciones tecnológicas empresariales. DNI: 74864514</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="team-single-member">
						<div class="member-thumb">
							<img src="{{ asset('cyber-it/assets/images/team/tm-6.jpg') }}" alt="thumb">
							<div class="about-team-member">
								<div class="member-name">
									<h4>Equipo de Desarrollo</h4>
								</div>
								<div class="designation">
									<p>Desarrolladores</p>
								</div>
							</div>
							<div class="member-social-link">
								<ul>
									<li><a href="mailto:informes@jotitasoft.com"><i class="far fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="member-about-txt">
								<p>Equipo especializado en desarrollo de software, aplicaciones web y soluciones SaaS.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="team-single-member">
						<div class="member-thumb">
							<img src="{{ asset('cyber-it/assets/images/team/tm-7.jpg') }}" alt="thumb">
							<div class="about-team-member">
								<div class="member-name">
									<h4>Equipo de Soporte</h4>
								</div>
								<div class="designation">
									<p>Soporte Técnico</p>
								</div>
							</div>
							<div class="member-social-link">
								<ul>
									<li><a href="mailto:informes@jotitasoft.com"><i class="far fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="member-about-txt">
								<p>Equipo de soporte técnico especializado en resolver tus necesidades tecnológicas.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START PORTFOLIO SECTION----->
	<div class="portfolio_area pt-70 pb-50" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-35">
						<h5>Project Gallery</h5>
						<h2>We’ve done lot’s of work, let’s </h2>
						<h2>check some from here</h2>
						<div class="animated-bar"> <span></span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portfolio_nav">
						<div class="portfolio_menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter="*">All </li>
								<li data-filter=".brand" >Branding</li>
								<li data-filter=".prototype" >Prototype</li>
								<li data-filter=".ux" > UX Research</li>
								<li data-filter=".web-design">Web Design </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item prototype cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-1.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-1.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">Digital Marketing Analysis</a>
							</h5>
							<p>Prototype</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item ux cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-2.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-2.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">Awesome Creative Project</a>
							</h5>
							<p>UX Research</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item prototype web-design cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-3.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-3.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">Business Solution</a>
							</h5>
							<p>Prototype Web Design </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item web-design cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-4.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-4.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">Web Development</a>
							</h5>
							<p>Web Design </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item prototype cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-5.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-5.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">Apps Developments</a>
							</h5>
							<p>Prototype</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item brand ux cemes">
					<div class="portfolio-thumb">
						<img src="{{ asset('cyber-it/assets/images/portfolio/pf-6.jpg') }}" alt="Portfolio">
						<div class="portfolio-content">
							<div class="portfolio-icon d-flex">
								<div uk-lightbox><a class="port-icon venobox vbox-item" data-gall="myportfolio" href="{{ asset('cyber-it/assets/images/portfolio/pf-6.jpg') }}" ><i class="fas fa-image"></i></a></div>
								<div><a href="portfolio-details.html"><i class="fas fa-link"></i></a></div>
							</div>
							<h5>
								<a href="portfolio-details.html">UI/UX Design</a>
							</h5>
							<p>Branding, UX Research</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START CALL DO ACTION SECTION----->
	<div class="call-do-action style-three pt-70 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="call-do-content white">
						<div class="section-video">
							<div class="video call-do-video">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play-circle"></i></a>	
							</div>
						</div>
						<div class="section-title">
							<h2>We provide outsourced IT services for
								<span class="sub-title">small &mid-sized business</span>
							</h2>
						</div>
						<div class="section-txt">
							<p>Appropriate for your specific business, making it easy for you to have quality IT services. What We.</p>
						</div>
						<div class="btn-call-do">
							<a href="index-seven.html#">Call: +880 542 124 587</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START PRICING SECTION----->
	<div class="pricing-section pt-70 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-40">
						<h5>Planes SaaS</h5>
						<h2>Planes de Suscripción</h2>
						<div class="animated-bar"> <span></span></div>
						<div class="section-head-txt mt-20">
							<p>Elige el plan SaaS que mejor se adapte a las necesidades de tu negocio. Todos los planes incluyen soporte técnico y actualizaciones.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="pricing-single-item">
						<div class="pricing-content">
							<div class="section-title">
							    <h4>Plan Básico</h4>
							</div>
							<div class="pricing-feature">
								<ul>
									<li>30 días de prueba gratuita</li>
									<li>Sincronización en la nube</li>
									<li>10 horas de soporte mensual</li>
									<li>Integración con redes sociales</li>
									<li>Funciones básicas ilimitadas</li>
								</ul>
							</div>
							<div class="item-price">
								<span class="courency">S/</span>
								<span class="tk">199</span>
								<span class="month">/Mes</span>
							</div>
							<div class="pricing-btn">
								<a href="{{ route('contact-us') }}">Seleccionar Plan</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="pricing-single-item style-two">
						<div class="pricing-content">
							<div class="section-title">
							    <h4>Plan Avanzado</h4>
							</div>
							<div class="pricing-feature">
								<ul>
									<li>30 días de prueba gratuita</li>
									<li>Base de datos cloud avanzada</li>
									<li>20 horas de soporte mensual</li>
									<li>Integraciones API ilimitadas</li>
									<li>Funciones premium incluidas</li>
								</ul>
							</div>
							<div class="item-price">
								<span class="courency">S/</span>
								<span class="tk">399</span>
								<span class="month">/Mes</span>
							</div>
							<div class="pricing-btn">
								<a href="{{ route('contact-us') }}">Seleccionar Plan</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="pricing-single-item">
						<div class="pricing-content">
							<div class="section-title">
							    <h4>Plan Empresarial</h4>
							</div>
							<div class="pricing-feature">
								<ul>
									<li>30 días de prueba gratuita</li>
									<li>Infraestructura cloud dedicada</li>
									<li>Soporte 24/7 prioritario</li>
									<li>Personalización completa</li>
									<li>Todas las funciones ilimitadas</li>
								</ul>
							</div>
							<div class="item-price">
								<span class="courency">S/</span>
								<span class="tk">799</span>
								<span class="month">/Mes</span>
							</div>
							<div class="pricing-btn">
								<a href="{{ route('contact-us') }}">Seleccionar Plan</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!----START TESTIMONIAL SECTION----->
	<div class="testimonial-section background-three pt-70 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-70">
						<h5>Testimonial</h5>
						<h2>What Say Our Client's</h2>
						<div class="animated-bar"><span></span></div>
						<div class="section-head-txt mt-30">
							<p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testimonial-carousel owl-carousel">
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm1.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>John Abraham</h4>
							<p class="testimonial-designation">Web developer</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Ellen Erye </h4>
							<p class="testimonial-designation">Project Manager</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm3.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Shene Watsan </h4>
							<p class="testimonial-designation">Founder</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Monalysha</h4>
							<p class="testimonial-designation">CEO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!----START BLOG SECTION----->
	<div class="blog-section style-three pt-70 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-30">
						<h5>Articles</h5>
						<h2>Latest Blog Posts </h2>
						<div class="animated-bar"><span></span></div>
						<p class="pt-25">Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog-carousel owl-carousel">
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t1.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Tiktok Illegally collecting data sharing</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t2.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t3.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Convincing reasons you need to learn</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t4.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">The five devices you need to work anytime</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t1.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t2.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">The five devices you need to work anytime </a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index-seven.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t3.jpg') }}" alt="thumb"></a>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index-seven.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Where and how to watch live stream today</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index-seven.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

