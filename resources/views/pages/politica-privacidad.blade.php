@extends('layouts.app')
@section('title', 'Política de Privacidad - Jotitasoft')
@section('description', 'Conoce cómo JOTITASOFT S.A.C. protege y maneja tu información personal.')

@section('content')

    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Política de Privacidad</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Política de Privacidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="legal-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="legal-content">

                        <div class="legal-meta mb-40" style="background:#f4f8ff; border-left:4px solid #0066ff; padding:15px 20px; border-radius:0 8px 8px 0;">
                            <p style="margin:0; color:#555; font-size:14px;">
                                <i class="fas fa-calendar-alt mr-5"></i> Última actualización: {{ date('d/m/Y') }} &nbsp;&nbsp;
                                <i class="fas fa-building ml-15 mr-5"></i> JOTITASOFT S.A.C. — RUC: 20615251195
                            </p>
                        </div>

                        <p class="lead-text">En <strong>JOTITASOFT S.A.C.</strong> nos comprometemos a proteger tu privacidad. Esta política describe cómo recopilamos, usamos y protegemos tu información personal cuando utilizas nuestros servicios o visitas nuestro sitio web.</p>

                        <div class="legal-block">
                            <h3><span class="num">1.</span> Responsable del Tratamiento</h3>
                            <p>El responsable del tratamiento de tus datos personales es:</p>
                            <ul>
                                <li><strong>Razón Social:</strong> JOTITASOFT S.A.C.</li>
                                <li><strong>RUC:</strong> 20615251195</li>
                                <li><strong>Dirección:</strong> Jr. Jaén 612, San Ignacio, Cajamarca, Perú</li>
                                <li><strong>Correo:</strong> <a href="mailto:informes@jotitasoft.com">informes@jotitasoft.com</a></li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">2.</span> Datos que Recopilamos</h3>
                            <p>Recopilamos los siguientes tipos de información:</p>
                            <ul>
                                <li><strong>Datos de contacto:</strong> nombre, correo electrónico, teléfono, empresa.</li>
                                <li><strong>Datos de uso:</strong> páginas visitadas, tiempo en el sitio, dispositivo y navegador.</li>
                                <li><strong>Datos de formularios:</strong> consultas, solicitudes de cotización y mensajes enviados.</li>
                                <li><strong>Datos de contratación:</strong> información necesaria para la prestación de servicios.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">3.</span> Finalidad del Tratamiento</h3>
                            <p>Usamos tu información para:</p>
                            <ul>
                                <li>Responder tus consultas y solicitudes de servicio.</li>
                                <li>Enviar información sobre nuestros servicios y propuestas comerciales.</li>
                                <li>Mejorar la experiencia de usuario en nuestra plataforma web.</li>
                                <li>Cumplir obligaciones legales y contractuales.</li>
                                <li>Enviar comunicaciones de soporte técnico relacionadas con servicios contratados.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">4.</span> Base Legal</h3>
                            <p>El tratamiento de tus datos se basa en:</p>
                            <ul>
                                <li>Tu consentimiento explícito al completar formularios de contacto.</li>
                                <li>La ejecución de un contrato cuando adquieres nuestros servicios.</li>
                                <li>Nuestro interés legítimo en mejorar nuestros servicios.</li>
                                <li>El cumplimiento de obligaciones legales conforme a la <strong>Ley N° 29733</strong> — Ley de Protección de Datos Personales del Perú.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">5.</span> Conservación de Datos</h3>
                            <p>Conservamos tus datos personales durante el tiempo necesario para cumplir las finalidades para las que fueron recopilados, y en todo caso durante los plazos exigidos por la legislación aplicable. Los datos de contacto se conservan por un máximo de <strong>3 años</strong> desde el último contacto.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">6.</span> Compartición de Datos</h3>
                            <p>No vendemos ni cedemos tus datos personales a terceros. Podemos compartirlos únicamente con:</p>
                            <ul>
                                <li>Proveedores de servicios tecnológicos que nos asisten (hosting, email, analytics), bajo acuerdos de confidencialidad.</li>
                                <li>Autoridades competentes cuando así lo exija la ley.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">7.</span> Tus Derechos</h3>
                            <p>Conforme a la Ley N° 29733, tienes derecho a:</p>
                            <ul>
                                <li><strong>Acceso:</strong> conocer qué datos tenemos sobre ti.</li>
                                <li><strong>Rectificación:</strong> corregir datos inexactos o incompletos.</li>
                                <li><strong>Cancelación:</strong> solicitar la eliminación de tus datos.</li>
                                <li><strong>Oposición:</strong> oponerte al tratamiento de tus datos.</li>
                            </ul>
                            <p>Para ejercer estos derechos, escríbenos a <a href="mailto:informes@jotitasoft.com">informes@jotitasoft.com</a> indicando tu solicitud.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">8.</span> Seguridad</h3>
                            <p>Implementamos medidas técnicas y organizativas para proteger tu información contra accesos no autorizados, pérdida o alteración: cifrado SSL/TLS, control de accesos, copias de seguridad y revisiones periódicas de seguridad.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">9.</span> Cambios en esta Política</h3>
                            <p>Nos reservamos el derecho a actualizar esta política. Te notificaremos cambios significativos a través de nuestro sitio web o por correo electrónico si eres cliente activo.</p>
                        </div>

                        <div class="legal-contact mt-40" style="background:#1a1a2e; color:#fff; border-radius:10px; padding:30px 35px; text-align:center;">
                            <h4 style="color:#fff; margin-bottom:10px;">¿Tienes preguntas sobre tu privacidad?</h4>
                            <p style="color:#ccc; margin-bottom:20px;">Contáctanos y te responderemos a la brevedad.</p>
                            <a href="{{ route('contact-us') }}" class="btn-common" style="display:inline-block;">Contáctanos</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<style>
.page-banner-section { background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%); padding:80px 0 60px; }
.page-banner-content h2 { color:#fff; font-size:42px; font-weight:700; margin-bottom:15px; }
.page-banner-link { list-style:none; padding:0; margin:0; display:inline-flex; align-items:center; gap:8px; }
.page-banner-link li a { color:#ccc; text-decoration:none; }
.page-banner-link li a:hover { color:#fff; }
.page-banner-link li span, .page-banner-link li:last-child { color:#fff; }
.lead-text { font-size:16px; color:#555; line-height:1.9; margin-bottom:35px; }
.legal-block { margin-bottom:35px; }
.legal-block h3 { font-size:20px; font-weight:700; color:#1a1a2e; margin-bottom:12px; display:flex; align-items:center; gap:10px; }
.legal-block .num { display:inline-flex; width:32px; height:32px; background:#0066ff; color:#fff; border-radius:50%; align-items:center; justify-content:center; font-size:14px; font-weight:700; flex-shrink:0; }
.legal-block p { color:#555; line-height:1.9; margin-bottom:10px; }
.legal-block ul { color:#555; line-height:1.9; padding-left:20px; }
.legal-block ul li { margin-bottom:6px; }
.legal-block a { color:#0066ff; text-decoration:none; }
.legal-block a:hover { text-decoration:underline; }
.mr-5 { margin-right:5px; }
.ml-15 { margin-left:15px; }
.mb-40 { margin-bottom:40px; }
.mt-40 { margin-top:40px; }
</style>
@endpush
