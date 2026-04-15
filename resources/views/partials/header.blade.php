<!-----START HEADER TOP SECTION----->
<div class="header-top-area d-sm-none d-md-none d-lg-block">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-8">
				<div class="header-top-left-items">
					<div class="header-top-left-single-item">
						<a href="mailto:informes@jotitasoft.com">
							<div class="header-top-left-icon">
								<span>
									<i class="far fa-envelope"></i>
									informes@jotitasoft.com
								</span>
							</div>
						</a>
					</div>
					<div class="header-top-left-single-item">
						<a href="https://jotitasoft.com" target="_blank">
							<div class="header-top-left-icon">
								<span>
									<i class="fa fa-map-marker-alt"></i>
									 San Ignacio-Cajamarca
								</span>
							</div>
						</a>
					</div>
					<div class="header-top-left-single-item">
						<a href="tel:+51951741427">
							<div class="header-top-left-icon">
								<span>
									<i class="fas fa-phone"></i>
									+51951741427/+51919614613/+51907533256
								</span>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="header-top-right-items text-right">
					<div class="header-top-right-icon-area">
						<ul>
							<li>
								<a href="https://www.facebook.com/profile.php?id=61583780135610" target="_blank" rel="noopener">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" rel="noopener">
									<i class="fa-brands fa-x-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank" rel="noopener">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="https://wa.me/51951741427" target="_blank" rel="noopener">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-----START NAV SECTION----->
<header id="sticky-header">
	<div class="container">
		<div class="menu-wrapper align-items-center">
			<div class="mobile-logo">
				<a href="{{ route('home') }}"><span class="logo-txt"></span></a>
			</div>
			<div class="logo">
				<a href="{{ route('home') }}">
					<img src="{{ asset('cyber-it/assets/images/logo-sinfondo.png') }}" alt="logo">
					<img src="{{ asset('cyber-it/assets/images/logo-2.png') }}" alt="logo">
				</a>
			</div>
			<nav>
				<ul>
					{{-- INICIO --}}
					<li>
						<a href="{{ route('home') }}">Inicio</a>
					</li>

					{{-- NOSOTROS --}}
					<li>
						<a href="{{ route('about-us') }}">Nosotros<i class="fas fa-angle-down"></i></a>
						<ul class="sub-menu">
							<li><a href="{{ route('about-us') }}">Quiénes Somos</a></li>
							<li><a href="{{ route('about-us') }}#mision">Misión y Visión</a></li>
							<li><a href="{{ route('about-us') }}#valores">Valores</a></li>
						</ul>
					</li>

					{{-- SERVICIOS --}}
					<li>
						<a href="{{ route('home') }}#services">Servicios<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
						<ul class="sub-menu">
							<li><a href="{{ route('home') }}#services">Desarrollo de Software</a></li>
							<li><a href="{{ route('home') }}#services">Soluciones SaaS</a></li>
							<li><a href="{{ route('home') }}#services">Inteligencia Artificial</a></li>
							<li><a href="{{ route('home') }}#services">Cloud Computing</a></li>
							<li><a href="{{ route('home') }}#services">Ciberseguridad</a></li>
							<li><a href="{{ route('home') }}#services">ERP / CRM</a></li>
							<li><a href="{{ route('home') }}#pricing">Planes y Precios</a></li>
						</ul>
					</li>

					{{-- PROYECTOS --}}
					<li>
						<a href="{{ route('home') }}#portfolio">Proyectos</a>
					</li>

					{{-- SOPORTE --}}
					<li>
						<a href="{{ route('support') }}">Soporte<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
						<ul class="sub-menu">
							<li><a href="{{ route('support') }}">Centro de Soporte</a></li>
							<li><a href="{{ route('documentation') }}">Documentación</a></li>
							<li><a href="{{ route('faq') }}">Preguntas Frecuentes</a></li>
							<li><a href="{{ route('privacy-policy') }}">Política de Privacidad</a></li>
							<li><a href="{{ route('terms-conditions') }}">Términos y Condiciones</a></li>
						</ul>
					</li>

					{{-- CONTACTO --}}
					<li><a href="{{ route('contact-us') }}">Contacto</a></li>
				</ul>

				<div class="nav-btn d-sm-none d-md-none d-lg-inline-block">
					<a href="{{ route('contact-us') }}">Cotizar Proyecto</a>
				</div>

				<div class="mm-social-icon d-lg-none mt-40">
					<span><a href="https://www.facebook.com/profile.php?id=61583780135610" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></span>
					<span><a href="#"><i class="fa-brands fa-x-twitter"></i></a></span>
					<span><a href="https://wa.me/51951741427" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a></span>
					<span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
				</div>
			</nav>
		</div>
	</div>
</header>

<!-- ============================================================== -->
<!-- Start - Mobile-Menu- Section -->
<!-- ============================================================= -->
<div class="mobile-menu">
	<div class="conainer">
		<div class="row">
		<div class="col-lg-3">
			<div class="logo-container">
				<div class="header-logo">
					<a class="mobile-logo" href="{{ route('home') }}"><img src="{{ asset('cyber-it/assets/images/logo-2.png') }}" alt=""></a>
				</div>
				<div class="menu-toggle">
					<div class="mobile-icon">
						<i class="fas fa-bars"></i>
						<i class="fas fa-times"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-12">
			<div class="header-menu2">
				<ul>
					{{-- INICIO --}}
					<li><a href="{{ route('home') }}">Inicio</a></li>

					{{-- NOSOTROS --}}
					<li class="expand"><a class="menu_hide7" href="{{ route('about-us') }}">Nosotros
						<div class="menu-toggle2">
							<div class="icon2">
								<span class="plus">+</span>
								<span class="minus">-</span>
							</div>
						</div>
						</a>
						<ul class="menu_open7 sub-menu2">
							<li><a href="{{ route('about-us') }}">Quiénes Somos</a></li>
							<li><a href="{{ route('about-us') }}">Misión y Visión</a></li>
							<li><a href="{{ route('about-us') }}">Valores</a></li>
						</ul>
					</li>

					{{-- SERVICIOS --}}
					<li class="expand"><a class="menu_hide8" href="{{ route('home') }}#services">Servicios
						<div class="menu-toggle2">
							<div class="icon2">
								<span class="plus">+</span>
								<span class="minus">-</span>
							</div>
						</div>
						</a>
						<ul class="menu_open8 sub-menu2">
							<li><a href="{{ route('home') }}#services">Desarrollo de Software</a></li>
							<li><a href="{{ route('home') }}#services">Soluciones SaaS</a></li>
							<li><a href="{{ route('home') }}#services">Inteligencia Artificial</a></li>
							<li><a href="{{ route('home') }}#services">Cloud Computing</a></li>
							<li><a href="{{ route('home') }}#services">Ciberseguridad</a></li>
							<li><a href="{{ route('home') }}#services">ERP / CRM</a></li>
							<li><a href="{{ route('home') }}#pricing">Planes y Precios</a></li>
						</ul>
					</li>

					{{-- PROYECTOS --}}
					<li><a href="{{ route('home') }}#portfolio">Proyectos</a></li>

					{{-- SOPORTE --}}
					<li class="expand"><a class="menu_hide9" href="{{ route('support') }}">Soporte
						<div class="menu-toggle2">
							<div class="icon2">
								<span class="plus">+</span>
								<span class="minus">-</span>
							</div>
						</div>
						</a>
						<ul class="menu_open9 sub-menu2">
							<li><a href="{{ route('support') }}">Centro de Soporte</a></li>
							<li><a href="{{ route('documentation') }}">Documentación</a></li>
							<li><a href="{{ route('faq') }}">Preguntas Frecuentes</a></li>
							<li><a href="{{ route('privacy-policy') }}">Política de Privacidad</a></li>
							<li><a href="{{ route('terms-conditions') }}">Términos y Condiciones</a></li>
						</ul>
					</li>

					{{-- CONTACTO --}}
					<li><a href="{{ route('contact-us') }}">Contacto</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
