@extends('layouts.app')
@section('title', 'Documentación - Jotitasoft')
@section('description', 'Documentación técnica y guías de uso de los servicios y productos de JOTITASOFT S.A.C.')

@section('content')

    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Documentación</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Documentación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----INTRO----->
    <div class="doc-intro pt-80 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-40">
                    <div class="section-head pb-20">
                        <h5>Centro de Documentación</h5>
                        <h2>Guías, Manuales y Recursos Técnicos</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                    <p style="color:#555; line-height:1.9; margin-bottom:15px;">Encuentra aquí toda la documentación técnica, manuales de usuario y guías de integración de los productos y servicios desarrollados por JOTITASOFT.</p>
                    <p style="color:#555; line-height:1.9;">¿No encuentras lo que buscas? Contáctanos y nuestro equipo técnico te proporcionará la documentación específica que necesitas.</p>
                    <a href="{{ route('contact-us') }}" class="btn-common mt-20" style="display:inline-block;">Solicitar Documentación</a>
                </div>
                <div class="col-lg-5 mb-40">
                    <div class="doc-stats" style="background:#f4f8ff; border-radius:12px; padding:35px 30px;">
                        <div class="doc-stat-item">
                            <i class="fas fa-file-alt" style="color:#0066ff; font-size:22px; margin-right:12px;"></i>
                            <div>
                                <h4 style="margin:0; font-size:18px; font-weight:700; color:#1a1a2e;">Manuales de Usuario</h4>
                                <p style="margin:0; color:#666; font-size:13px;">Guías paso a paso para usuarios finales</p>
                            </div>
                        </div>
                        <div class="doc-stat-item">
                            <i class="fas fa-code" style="color:#0066ff; font-size:22px; margin-right:12px;"></i>
                            <div>
                                <h4 style="margin:0; font-size:18px; font-weight:700; color:#1a1a2e;">Documentación Técnica</h4>
                                <p style="margin:0; color:#666; font-size:13px;">APIs, arquitectura e integraciones</p>
                            </div>
                        </div>
                        <div class="doc-stat-item">
                            <i class="fas fa-video" style="color:#0066ff; font-size:22px; margin-right:12px;"></i>
                            <div>
                                <h4 style="margin:0; font-size:18px; font-weight:700; color:#1a1a2e;">Videotutoriales</h4>
                                <p style="margin:0; color:#666; font-size:13px;">Aprende visualmente con nuestros videos</p>
                            </div>
                        </div>
                        <div class="doc-stat-item" style="border-bottom:none; padding-bottom:0; margin-bottom:0;">
                            <i class="fas fa-question-circle" style="color:#0066ff; font-size:22px; margin-right:12px;"></i>
                            <div>
                                <h4 style="margin:0; font-size:18px; font-weight:700; color:#1a1a2e;">Preguntas Frecuentes</h4>
                                <p style="margin:0; color:#666; font-size:13px;"><a href="{{ route('faq') }}" style="color:#0066ff;">Ver todas las FAQs →</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----DOC CATEGORIES----->
    <div class="doc-categories pt-60 pb-70" style="background:#f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Categorías</h5>
                        <h2>Documentación por Área</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $docs = [
                    [
                        'icon'  => 'fas fa-laptop-code',
                        'color' => '#0066ff',
                        'titulo'=> 'Desarrollo a Medida',
                        'items' => ['Guía de onboarding del proyecto', 'Manual de entrega y revisión', 'Control de versiones con Git', 'Despliegue en producción'],
                    ],
                    [
                        'icon'  => 'fas fa-cloud',
                        'color' => '#00b4d8',
                        'titulo'=> 'Cloud & Hosting',
                        'items' => ['Configuración de servidor VPS', 'Gestión de dominios y DNS', 'Certificados SSL/TLS', 'Backups automáticos'],
                    ],
                    [
                        'icon'  => 'fas fa-cogs',
                        'color' => '#ff6b35',
                        'titulo'=> 'ERP / CRM',
                        'items' => ['Manual de administrador', 'Gestión de usuarios y roles', 'Módulos y configuración', 'Importación y exportación de datos'],
                    ],
                    [
                        'icon'  => 'fas fa-robot',
                        'color' => '#9c27b0',
                        'titulo'=> 'Inteligencia Artificial',
                        'items' => ['Integración de chatbots', 'API de análisis predictivo', 'Entrenamiento de modelos', 'Automatización de procesos'],
                    ],
                    [
                        'icon'  => 'fas fa-shield-alt',
                        'color' => '#e91e63',
                        'titulo'=> 'Ciberseguridad',
                        'items' => ['Guía de buenas prácticas', 'Gestión de contraseñas', 'Configuración de firewall', 'Respuesta a incidentes'],
                    ],
                    [
                        'icon'  => 'fas fa-plug',
                        'color' => '#00c853',
                        'titulo'=> 'APIs e Integraciones',
                        'items' => ['Referencia de API REST', 'Autenticación OAuth2 / JWT', 'Webhooks y eventos', 'SDKs disponibles'],
                    ],
                ];
                @endphp
                @foreach($docs as $doc)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                    <div class="doc-card">
                        <div class="doc-card-header" style="background:{{ $doc['color'] }}15; border-bottom:3px solid {{ $doc['color'] }};">
                            <i class="{{ $doc['icon'] }}" style="color:{{ $doc['color'] }}; font-size:26px; margin-right:12px;"></i>
                            <h4 style="color:#1a1a2e; margin:0; font-size:17px; font-weight:700;">{{ $doc['titulo'] }}</h4>
                        </div>
                        <div class="doc-card-body">
                            <ul>
                                @foreach($doc['items'] as $item)
                                <li>
                                    <i class="fas fa-file-alt" style="color:{{ $doc['color'] }}; margin-right:8px; font-size:12px;"></i>
                                    {{ $item }}
                                    <span class="doc-badge">PDF</span>
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('contact-us') }}" class="doc-request-link">
                                <i class="fas fa-download mr-5"></i> Solicitar documentos
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-----CTA----->
    <div class="cta-section pt-60 pb-60" style="background:linear-gradient(135deg,#1a1a2e,#0066ff);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 style="color:#fff; font-size:28px; font-weight:700; margin-bottom:8px;">¿Necesitas documentación personalizada?</h2>
                    <p style="color:#cce0ff; margin:0;">Nuestro equipo puede preparar la documentación técnica específica para tu proyecto.</p>
                </div>
                <div class="col-lg-4 text-lg-right mt-20 mt-lg-0">
                    <a href="{{ route('contact-us') }}" class="btn-common" style="display:inline-block;">Solicitar Ahora</a>
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
/* Doc Stats */
.doc-stat-item { display:flex; align-items:flex-start; padding:15px 0; border-bottom:1px solid #e0e8ff; margin-bottom:15px; }
/* Doc Cards */
.doc-card { background:#fff; border-radius:10px; box-shadow:0 5px 25px rgba(0,0,0,0.07); overflow:hidden; height:100%; transition:transform 0.3s,box-shadow 0.3s; }
.doc-card:hover { transform:translateY(-4px); box-shadow:0 12px 35px rgba(0,0,0,0.12); }
.doc-card-header { padding:18px 20px; display:flex; align-items:center; }
.doc-card-body { padding:20px; }
.doc-card-body ul { list-style:none; padding:0; margin:0 0 15px; }
.doc-card-body ul li { padding:8px 0; border-bottom:1px solid #f0f0f0; font-size:13px; color:#555; display:flex; align-items:center; justify-content:space-between; }
.doc-card-body ul li:last-child { border-bottom:none; }
.doc-badge { background:#f0f0f0; color:#888; font-size:10px; padding:2px 7px; border-radius:3px; font-weight:700; flex-shrink:0; }
.doc-request-link { display:block; text-align:center; background:#f4f8ff; color:#0066ff; padding:10px; border-radius:6px; font-size:13px; font-weight:600; text-decoration:none; transition:background 0.3s; }
.doc-request-link:hover { background:#0066ff; color:#fff; }
.mr-5 { margin-right:5px; }
.mb-40 { margin-bottom:40px; }
.mb-50 { margin-bottom:50px; }
.mb-30 { margin-bottom:30px; }
.mt-20 { margin-top:20px; }
.text-lg-right { text-align:right; }
@media(max-width:991px){ .text-lg-right { text-align:center; } }
</style>
@endpush
