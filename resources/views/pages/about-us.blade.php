@extends('layouts.app')
@section('title', 'Nosotros - Jotitasoft')
@section('description', 'Conoce a JOTITASOFT S.A.C., empresa peruana especializada en desarrollo de software, SaaS, IA y soluciones tecnológicas empresariales.')

@section('content')

    <!-----PAGE BANNER----->
    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Nosotros</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Nosotros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----ABOUT SECTION----->
    <div class="about-section pt-80 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-40">
                    <div class="about-thumb">
                        <img src="{{ asset('cyber-it/assets/images/services/sv-bg-1.png') }}" alt="Sobre Jotitasoft" class="img-fluid" style="border-radius:12px;">
                    </div>
                </div>
                <div class="col-lg-6 mb-40">
                    <div class="section-head pb-20">
                        <h5>Quiénes Somos</h5>
                        <h2>Empresa Peruana de Tecnología Integral</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                    <p style="color:#555; line-height:1.9; margin-bottom:15px;">
                        <strong>JOTITASOFT S.A.C.</strong> (RUC: 20615251195) es una empresa de tecnología con sede en San Ignacio, Cajamarca, Perú. Nacimos con la misión de democratizar el acceso a la tecnología empresarial para organizaciones de todos los tamaños.
                    </p>
                    <p style="color:#555; line-height:1.9; margin-bottom:25px;">
                        Nos especializamos en desarrollo de software a medida, aplicaciones web y móviles, plataformas SaaS, sistemas ERP/CRM, inteligencia artificial, cloud computing y ciberseguridad. Transformamos ideas en soluciones digitales innovadoras que impulsan el crecimiento de tu negocio.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="about-stat">
                                <h3 style="color:#0066ff; font-size:36px; font-weight:700;">50+</h3>
                                <p style="color:#666; margin:0;">Proyectos Entregados</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-stat">
                                <h3 style="color:#0066ff; font-size:36px; font-weight:700;">30+</h3>
                                <p style="color:#666; margin:0;">Clientes Satisfechos</p>
                            </div>
                        </div>
                        <div class="col-6 mt-20">
                            <div class="about-stat">
                                <h3 style="color:#0066ff; font-size:36px; font-weight:700;">5+</h3>
                                <p style="color:#666; margin:0;">Años de Experiencia</p>
                            </div>
                        </div>
                        <div class="col-6 mt-20">
                            <div class="about-stat">
                                <h3 style="color:#0066ff; font-size:36px; font-weight:700;">10+</h3>
                                <p style="color:#666; margin:0;">Tecnologías Dominadas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----MISSION & VISION----->
    <div id="mision" class="mission-section pt-70 pb-70" style="background:#f4f8ff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Lo que nos mueve</h5>
                        <h2>Misión y Visión</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="mission-card" style="background:#fff; border-radius:12px; padding:40px 35px; height:100%; box-shadow:0 5px 30px rgba(0,0,0,0.07); border-top:4px solid #0066ff;">
                        <div style="width:60px;height:60px;background:linear-gradient(135deg,#0066ff,#0044cc);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                            <i class="fas fa-bullseye" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <h3 style="font-size:22px; font-weight:700; color:#1a1a2e; margin-bottom:15px;">Nuestra Misión</h3>
                        <p style="color:#666; line-height:1.9;">
                            Brindar soluciones tecnológicas innovadoras, accesibles y de alta calidad que permitan a las empresas peruanas y latinoamericanas crecer, digitalizarse y competir en el mercado global. Nos comprometemos con la excelencia técnica y el éxito de cada cliente.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-30">
                    <div class="mission-card" style="background:#fff; border-radius:12px; padding:40px 35px; height:100%; box-shadow:0 5px 30px rgba(0,0,0,0.07); border-top:4px solid #00c853;">
                        <div style="width:60px;height:60px;background:linear-gradient(135deg,#00c853,#009624);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                            <i class="fas fa-eye" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <h3 style="font-size:22px; font-weight:700; color:#1a1a2e; margin-bottom:15px;">Nuestra Visión</h3>
                        <p style="color:#666; line-height:1.9;">
                            Ser la empresa de tecnología líder del norte del Perú y referente regional en desarrollo de software, inteligencia artificial y transformación digital, reconocida por la calidad de sus soluciones, la confianza de sus clientes y el impacto positivo en la economía digital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----VALUES SECTION----->
    <div id="valores" class="values-section pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Nuestros Pilares</h5>
                        <h2>Valores que nos Definen</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $valores = [
                    ['icon'=>'fas fa-gem',        'color'=>'#0066ff', 'titulo'=>'Calidad',       'texto'=>'Cada línea de código y cada solución entregada cumple los más altos estándares de calidad y rendimiento.'],
                    ['icon'=>'fas fa-handshake',   'color'=>'#ff6b35', 'titulo'=>'Compromiso',    'texto'=>'Nos involucramos al 100% con cada proyecto, tratando el negocio del cliente como si fuera el nuestro.'],
                    ['icon'=>'fas fa-lightbulb',   'color'=>'#ffc107', 'titulo'=>'Innovación',    'texto'=>'Adoptamos las últimas tecnologías para ofrecer soluciones modernas, escalables y preparadas para el futuro.'],
                    ['icon'=>'fas fa-shield-alt',  'color'=>'#00c853', 'titulo'=>'Confianza',     'texto'=>'Construimos relaciones de largo plazo basadas en transparencia, honestidad y resultados medibles.'],
                    ['icon'=>'fas fa-users',       'color'=>'#9c27b0', 'titulo'=>'Trabajo en Equipo','texto'=>'Colaboramos estrechamente con nuestros clientes, entendiendo sus necesidades para entregar la solución ideal.'],
                    ['icon'=>'fas fa-rocket',      'color'=>'#e91e63', 'titulo'=>'Agilidad',      'texto'=>'Metodologías ágiles que garantizan entregas rápidas, adaptación al cambio y valor continuo al negocio.'],
                ];
                @endphp
                @foreach($valores as $v)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                    <div class="single-feature style-twoo" style="text-align:center;">
                        <div class="feature-icon" style="background:{{ $v['color'] }}1a; color:{{ $v['color'] }};">
                            <i class="{{ $v['icon'] }}"></i>
                        </div>
                        <div class="feature-title"><h4>{{ $v['titulo'] }}</h4></div>
                        <div class="feature-content-txt"><p>{{ $v['texto'] }}</p></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-----CTA SECTION----->
    <div class="cta-section pt-60 pb-60" style="background:linear-gradient(135deg,#1a1a2e,#0066ff);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 style="color:#fff; font-size:30px; font-weight:700; margin-bottom:10px;">¿Listo para digitalizar tu empresa?</h2>
                    <p style="color:#cce0ff; margin:0;">Hablemos de tu proyecto. Nuestro equipo está listo para ayudarte.</p>
                </div>
                <div class="col-lg-4 text-lg-right mt-20 mt-lg-0">
                    <a href="{{ route('contact-us') }}" class="btn-common" style="display:inline-block;">Contáctanos Ahora</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<style>
.page-banner-section { background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%); padding:80px 0 60px; position:relative; }
.page-banner-content h2 { color:#fff; font-size:42px; font-weight:700; margin-bottom:15px; }
.page-banner-link { list-style:none; padding:0; margin:0; display:inline-flex; align-items:center; gap:8px; }
.page-banner-link li a { color:#ccc; text-decoration:none; }
.page-banner-link li a:hover { color:#fff; }
.page-banner-link li span, .page-banner-link li:last-child { color:#fff; }
.mt-20 { margin-top:20px; }
.mb-40 { margin-bottom:40px; }
.mb-50 { margin-bottom:50px; }
.mb-30 { margin-bottom:30px; }
.text-lg-right { text-align:right; }
@media(max-width:991px){ .text-lg-right { text-align:center; } }
</style>
@endpush
