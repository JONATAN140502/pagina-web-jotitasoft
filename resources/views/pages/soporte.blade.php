@extends('layouts.app')
@section('title', 'Centro de Soporte - Jotitasoft')
@section('description', 'Centro de soporte técnico de JOTITASOFT S.A.C. Encuentra ayuda, reporta problemas y contacta a nuestro equipo.')

@section('content')

    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Centro de Soporte</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Soporte</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----SUPPORT CHANNELS----->
    <div class="support-section pt-80 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Estamos aquí para ti</h5>
                        <h2>¿Cómo podemos ayudarte?</h2>
                        <div class="animated-bar"><span></span></div>
                        <p style="color:#666; margin-top:15px;">Elige el canal de soporte que mejor se adapte a tu necesidad.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 mb-30">
                    <div class="support-card text-center">
                        <div class="support-icon" style="background:linear-gradient(135deg,#0066ff,#0044cc);">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Correo Electrónico</h4>
                        <p>Envíanos tu consulta y te responderemos en menos de 24 horas hábiles.</p>
                        <a href="mailto:informes@jotitasoft.com" class="support-link">informes@jotitasoft.com</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-30">
                    <div class="support-card text-center">
                        <div class="support-icon" style="background:linear-gradient(135deg,#25D366,#128C7E);">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4>WhatsApp</h4>
                        <p>Chatea con nuestro equipo en tiempo real para soporte inmediato.</p>
                        <a href="https://wa.me/51951741427" target="_blank" class="support-link">+51 951 741 427</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-30">
                    <div class="support-card text-center">
                        <div class="support-icon" style="background:linear-gradient(135deg,#ff6b35,#e64a00);">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Llamada Telefónica</h4>
                        <p>Lun-Vie 8am - 6pm. Atención directa con nuestros técnicos.</p>
                        <a href="tel:+51919614613" class="support-link">+51 919 614 613</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-30">
                    <div class="support-card text-center">
                        <div class="support-icon" style="background:linear-gradient(135deg,#9c27b0,#6a0080);">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h4>Formulario Web</h4>
                        <p>Completa el formulario con los detalles de tu problema o consulta.</p>
                        <a href="{{ route('contact-us') }}" class="support-link">Ir al formulario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----SUPPORT CATEGORIES----->
    <div class="support-categories pt-60 pb-70" style="background:#f4f8ff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Áreas de Soporte</h5>
                        <h2>Tipos de Soporte que Ofrecemos</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $categorias = [
                    ['icon'=>'fas fa-bug',           'titulo'=>'Reporte de Errores',        'texto'=>'¿Tu software presenta un comportamiento inesperado? Repórtanos el error con capturas de pantalla y los pasos para reproducirlo.'],
                    ['icon'=>'fas fa-tools',          'titulo'=>'Mantenimiento',             'texto'=>'Actualizaciones, optimizaciones y mantenimiento preventivo de tus sistemas para garantizar su correcto funcionamiento.'],
                    ['icon'=>'fas fa-cloud-upload-alt','titulo'=>'Hosting & Servidores',     'texto'=>'Soporte para caídas del servidor, configuración de dominios, certificados SSL y gestión de recursos cloud.'],
                    ['icon'=>'fas fa-shield-alt',     'titulo'=>'Seguridad',                 'texto'=>'Reporte de vulnerabilidades, incidentes de seguridad, accesos no autorizados o comportamientos sospechosos.'],
                    ['icon'=>'fas fa-graduation-cap', 'titulo'=>'Capacitación',              'texto'=>'Sesiones de formación para que tu equipo aproveche al máximo las herramientas y sistemas que hemos desarrollado.'],
                    ['icon'=>'fas fa-file-contract',  'titulo'=>'Consultoría',               'texto'=>'Asesoría técnica para decisiones de arquitectura, migración de sistemas, integraciones y planificación tecnológica.'],
                ];
                @endphp
                @foreach($categorias as $cat)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                    <div class="single-feature style-twoo">
                        <div class="feature-icon"><i class="{{ $cat['icon'] }}"></i></div>
                        <div class="feature-title"><h4>{{ $cat['titulo'] }}</h4></div>
                        <div class="feature-content-txt"><p>{{ $cat['texto'] }}</p></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-----SLA SECTION----->
    <div class="sla-section pt-70 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-40">
                    <div class="section-head pb-20">
                        <h5>Nuestros Tiempos de Respuesta</h5>
                        <h2>Compromiso de Servicio</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                    <p style="color:#555; line-height:1.9;">Clasificamos los tickets de soporte por prioridad para garantizar una atención eficiente y oportuna a cada cliente.</p>
                    <a href="{{ route('contact-us') }}" class="btn-common mt-20" style="display:inline-block;">Reportar un Problema</a>
                </div>
                <div class="col-lg-7 mb-40">
                    <div class="sla-table">
                        <div class="sla-row header-row">
                            <div class="sla-col">Prioridad</div>
                            <div class="sla-col">Descripción</div>
                            <div class="sla-col">Tiempo de Respuesta</div>
                        </div>
                        <div class="sla-row">
                            <div class="sla-col"><span class="badge-priority critical">Crítica</span></div>
                            <div class="sla-col">Sistema completamente caído o pérdida de datos</div>
                            <div class="sla-col"><strong>2 horas</strong></div>
                        </div>
                        <div class="sla-row">
                            <div class="sla-col"><span class="badge-priority high">Alta</span></div>
                            <div class="sla-col">Función principal afectada, sin alternativa</div>
                            <div class="sla-col"><strong>4-8 horas</strong></div>
                        </div>
                        <div class="sla-row">
                            <div class="sla-col"><span class="badge-priority medium">Media</span></div>
                            <div class="sla-col">Función afectada con alternativa disponible</div>
                            <div class="sla-col"><strong>24 horas</strong></div>
                        </div>
                        <div class="sla-row">
                            <div class="sla-col"><span class="badge-priority low">Baja</span></div>
                            <div class="sla-col">Consultas, mejoras o problemas menores</div>
                            <div class="sla-col"><strong>48-72 horas</strong></div>
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
/* Support Cards */
.support-card { background:#fff; border-radius:12px; padding:35px 25px; box-shadow:0 5px 30px rgba(0,0,0,0.07); height:100%; transition:transform 0.3s,box-shadow 0.3s; }
.support-card:hover { transform:translateY(-5px); box-shadow:0 12px 40px rgba(0,0,0,0.12); }
.support-icon { width:70px; height:70px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; }
.support-icon i { font-size:28px; color:#fff; }
.support-card h4 { font-size:18px; font-weight:700; color:#1a1a2e; margin-bottom:10px; }
.support-card p { color:#666; font-size:14px; line-height:1.7; margin-bottom:15px; }
.support-link { color:#0066ff; font-weight:600; text-decoration:none; font-size:14px; }
.support-link:hover { text-decoration:underline; }
/* SLA Table */
.sla-table { border-radius:10px; overflow:hidden; box-shadow:0 5px 30px rgba(0,0,0,0.08); }
.sla-row { display:grid; grid-template-columns:130px 1fr 160px; gap:0; border-bottom:1px solid #eee; }
.sla-row:last-child { border-bottom:none; }
.sla-row.header-row { background:#1a1a2e; }
.sla-row.header-row .sla-col { color:#fff; font-weight:700; font-size:13px; text-transform:uppercase; letter-spacing:0.5px; }
.sla-col { padding:14px 16px; font-size:14px; color:#555; background:#fff; display:flex; align-items:center; }
.sla-row:nth-child(odd) .sla-col { background:#fafafa; }
.badge-priority { padding:4px 12px; border-radius:20px; font-size:12px; font-weight:700; }
.badge-priority.critical { background:#fde8e8; color:#c0392b; }
.badge-priority.high { background:#fef0e0; color:#e67e22; }
.badge-priority.medium { background:#e8f4fd; color:#2980b9; }
.badge-priority.low { background:#e8f8e8; color:#27ae60; }
.mb-40 { margin-bottom:40px; }
.mb-50 { margin-bottom:50px; }
.mb-30 { margin-bottom:30px; }
.mt-20 { margin-top:20px; }
</style>
@endpush
