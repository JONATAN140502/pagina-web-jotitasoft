<!-----START FOOTER SECTION----->
<div class="footer pt-60 pb-70">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-3">
				<div class="widget">
					<div class="about-company">
						<div class="footer-logo mb-10">
							<img src="{{ asset('images-web/logo.png') }}" alt="Jotitasoft Logo">
						</div>
						<p><strong>JOTITASOFT S.A.C.</strong> - RUC: 20615251195<br>
						Empresa especializada en desarrollo de software a medida, aplicaciones web, SaaS, sistemas empresariales y soluciones tecnológicas integrales. Transformamos ideas en soluciones digitales innovadoras.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="widget">
					<div class="footer-quick-link">
						<div class="footer-widget-title">
							<h5>Enlaces Útiles</h5>
						</div>
						<div class="footer-helpful-links">
							<ul>
								<li><a href="{{ route('home') }}">Inicio</a></li>
								<li><a href="{{ route('about-us') }}">Nosotros</a></li>
								<li><a href="#services">Servicios</a></li>
								<li><a href="#portfolio">Proyectos</a></li>
								<li><a href="#pricing">Planes SaaS</a></li>
								<li><a href="{{ route('contact-us') }}">Contacto</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="widget">
					<div class="footer-quick-link">
						<div class="footer-widget-title">
							<h5>Soporte</h5>
						</div>
						<div class="footer-helpful-links">
							<ul>
								<li><a href="#">Política de Privacidad</a></li>
								<li><a href="#">Términos y Condiciones</a></li>
								<li><a href="#">Centro de Soporte</a></li>
								<li><a href="#">Documentación</a></li>
								<li><a href="#">Preguntas Frecuentes</a></li>
								<li><a href="{{ route('contact-us') }}">Contáctanos</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="widget">
					<div class="footer-contact">
						<div class="footer-widget-title">
							<h5>Información de Contacto</h5>
						</div>
						<p><b>Dirección: </b>Jr. Jaén 612, San Ignacio<br>Provincia: San Ignacio, Cajamarca</p>
						<p><b>Teléfonos: </b><br>+51 951 741 427<br>+51 919 614 613</p>
						<p><b>Email: </b>informes@jotitasoft.com</p>
						<p><b>Web: </b><a href="https://jotitasoft.com" target="_blank">jotitasoft.com</a></p>
						<p><b>RUC: </b>20615251195</p>
						<div class="footer-social-icon d-flex">
							<a href="#"><span>Follow Us:</span></a>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-----START FOOTER COPYRIGNT SECTION----->
<div class="footer-copyright-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="footer-copyright-text">
					<p>Copyright &copy; {{ date('Y') }} JOTITASOFT S.A.C. - RUC: 20615251195. Todos los derechos reservados.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="footer-copyright-link">
					<ul>
						<li><a href="#">Términos y Condiciones</a></li>
						<li><a href="#">Política de Privacidad</a></li>
						<li><a href="{{ route('contact-us') }}">Contáctanos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


