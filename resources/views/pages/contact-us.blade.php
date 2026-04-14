@extends('layouts.app')
@section('title', 'Contacto - Jotitasoft')
@section('description', 'Contáctanos para más información sobre nuestros servicios de desarrollo de software, SaaS, IA y soluciones tecnológicas.')

@section('content')

    <!-----START PAGE BANNER SECTION----->
    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Contáctanos</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----END PAGE BANNER SECTION----->

    <!-----START CONTACT INFO SECTION----->
    <div class="contact-info-section pt-80 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head pb-50">
                        <h5>Estamos para ayudarte</h5>
                        <h2>Información de Contacto</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-contact-info text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Dirección</h4>
                            <p>Jr. Jaén 612, San Ignacio<br>
                               Provincia: San Ignacio<br>
                               Cajamarca, Perú</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-contact-info text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Teléfonos</h4>
                            <p><a href="tel:+51951741427">+51 951 741 427</a><br>
                               <a href="tel:+51919614613">+51 919 614 613</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-contact-info text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Correo Electrónico</h4>
                            <p><a href="mailto:informes@jotitasoft.com">informes@jotitasoft.com</a><br>
                               <a href="https://jotitasoft.com" target="_blank">jotitasoft.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----END CONTACT INFO SECTION----->

    <!-----START CONTACT FORM SECTION----->
    <div class="contact-form-section pt-60 pb-80" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head pb-50">
                        <h5>Escríbenos</h5>
                        <h2>Envíanos un Mensaje</h2>
                        <div class="animated-bar"><span></span></div>
                        <p class="mt-20">Cuéntanos sobre tu proyecto y te responderemos a la brevedad posible.</p>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="row mb-30">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="alert alert-success" style="background:#e6f9f0; border:1px solid #28a745; color:#155724; padding:15px 20px; border-radius:6px;">
                            <i class="fas fa-check-circle mr-10"></i> {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="row mb-30">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="alert alert-danger" style="background:#fdecea; border:1px solid #dc3545; color:#721c24; padding:15px 20px; border-radius:6px;">
                            <i class="fas fa-exclamation-circle mr-10"></i>
                            <ul class="mb-0" style="padding-left:20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-25">
                                <div class="form-group">
                                    <label for="nombre">Nombre Completo <span style="color:red;">*</span></label>
                                    <input type="text"
                                           id="nombre"
                                           name="nombre"
                                           class="form-control"
                                           placeholder="Tu nombre completo"
                                           value="{{ old('nombre') }}"
                                           required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-25">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico <span style="color:red;">*</span></label>
                                    <input type="email"
                                           id="email"
                                           name="email"
                                           class="form-control"
                                           placeholder="tu@correo.com"
                                           value="{{ old('email') }}"
                                           required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-25">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel"
                                           id="telefono"
                                           name="telefono"
                                           class="form-control"
                                           placeholder="+51 999 999 999"
                                           value="{{ old('telefono') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-25">
                                <div class="form-group">
                                    <label for="asunto">Asunto <span style="color:red;">*</span></label>
                                    <select id="asunto" name="asunto" class="form-control" required>
                                        <option value="" disabled {{ old('asunto') ? '' : 'selected' }}>Selecciona un asunto</option>
                                        <option value="Desarrollo de Software" {{ old('asunto') == 'Desarrollo de Software' ? 'selected' : '' }}>Desarrollo de Software</option>
                                        <option value="Soluciones SaaS" {{ old('asunto') == 'Soluciones SaaS' ? 'selected' : '' }}>Soluciones SaaS</option>
                                        <option value="Inteligencia Artificial" {{ old('asunto') == 'Inteligencia Artificial' ? 'selected' : '' }}>Inteligencia Artificial</option>
                                        <option value="Cloud Computing" {{ old('asunto') == 'Cloud Computing' ? 'selected' : '' }}>Cloud Computing</option>
                                        <option value="Ciberseguridad" {{ old('asunto') == 'Ciberseguridad' ? 'selected' : '' }}>Ciberseguridad</option>
                                        <option value="ERP / CRM" {{ old('asunto') == 'ERP / CRM' ? 'selected' : '' }}>ERP / CRM</option>
                                        <option value="Soporte Técnico" {{ old('asunto') == 'Soporte Técnico' ? 'selected' : '' }}>Soporte Técnico</option>
                                        <option value="Otro" {{ old('asunto') == 'Otro' ? 'selected' : '' }}>Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-25">
                                <div class="form-group">
                                    <label for="mensaje">Mensaje <span style="color:red;">*</span></label>
                                    <textarea id="mensaje"
                                              name="mensaje"
                                              class="form-control"
                                              rows="6"
                                              placeholder="Cuéntanos sobre tu proyecto o consulta..."
                                              required>{{ old('mensaje') }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="btn-common">
                                    <button type="submit">
                                        <i class="fas fa-paper-plane mr-10"></i> Enviar Mensaje
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-----END CONTACT FORM SECTION----->

    <!-----START MAP SECTION----->
    <div class="contact-map-section">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.123456789!2d-78.9999!3d-5.1299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSan%20Ignacio%2C%20Cajamarca!5e0!3m2!1ses!2spe!4v1234567890"
                        width="100%"
                        height="400"
                        style="border:0; display:block;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Ubicación Jotitasoft - San Ignacio, Cajamarca">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-----END MAP SECTION----->

@endsection

@push('styles')
<style>
    /* Page Banner */
    .page-banner-section {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        padding: 80px 0 60px;
        position: relative;
    }
    .page-banner-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("{{ asset('cyber-it/assets/images/hero/hero1.svg') }}") no-repeat center right;
        background-size: contain;
        opacity: 0.05;
    }
    .page-banner-content h2 {
        color: #fff;
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    .page-banner-link {
        list-style: none;
        padding: 0;
        margin: 0;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .page-banner-link li a {
        color: #ccc;
        text-decoration: none;
        transition: color 0.3s;
    }
    .page-banner-link li a:hover { color: #fff; }
    .page-banner-link li span,
    .page-banner-link li:last-child { color: #fff; }

    /* Contact Info Cards */
    .single-contact-info {
        background: #fff;
        border-radius: 10px;
        padding: 40px 30px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border-top: 4px solid transparent;
    }
    .single-contact-info:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.13);
        border-top-color: #0066ff;
    }
    .contact-info-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #0066ff, #0044cc);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .contact-info-icon i {
        font-size: 28px;
        color: #fff;
    }
    .contact-info-content h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #1a1a2e;
    }
    .contact-info-content p,
    .contact-info-content a {
        color: #666;
        font-size: 15px;
        line-height: 1.8;
        text-decoration: none;
    }
    .contact-info-content a:hover { color: #0066ff; }

    /* Contact Form */
    .contact-form .form-group label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        display: block;
        font-size: 14px;
    }
    .contact-form .form-control {
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 12px 16px;
        font-size: 15px;
        color: #333;
        transition: border-color 0.3s, box-shadow 0.3s;
        background: #fff;
        width: 100%;
        height: auto;
    }
    .contact-form .form-control:focus {
        border-color: #0066ff;
        box-shadow: 0 0 0 3px rgba(0,102,255,0.1);
        outline: none;
    }
    .contact-form textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }
    .contact-form select.form-control {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23666' stroke-width='1.5' fill='none'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 40px;
    }
    .contact-form .btn-common button {
        background: linear-gradient(135deg, #0066ff, #0044cc);
        color: #fff;
        border: none;
        padding: 14px 45px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        letter-spacing: 0.5px;
    }
    .contact-form .btn-common button:hover {
        background: linear-gradient(135deg, #0044cc, #002fa3);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,102,255,0.35);
    }
    .mr-10 { margin-right: 8px; }
    .mb-25 { margin-bottom: 25px; }
    .mb-30 { margin-bottom: 30px; }
    .mt-20 { margin-top: 15px; }
</style>
@endpush
