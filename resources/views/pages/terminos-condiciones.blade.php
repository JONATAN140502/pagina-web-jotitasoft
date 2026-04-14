@extends('layouts.app')
@section('title', 'Términos y Condiciones - Jotitasoft')
@section('description', 'Lee los términos y condiciones de uso de los servicios de JOTITASOFT S.A.C.')

@section('content')

    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Términos y Condiciones</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>Términos y Condiciones</li>
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

                        <p class="lead-text">Al acceder y utilizar el sitio web y los servicios de <strong>JOTITASOFT S.A.C.</strong>, aceptas quedar vinculado por los siguientes Términos y Condiciones. Si no estás de acuerdo con alguna parte, te recomendamos no utilizar nuestros servicios.</p>

                        <div class="legal-block">
                            <h3><span class="num">1.</span> Identificación de las Partes</h3>
                            <p><strong>Proveedor:</strong> JOTITASOFT S.A.C., RUC 20615251195, con domicilio en Jr. Jaén 612, San Ignacio, Cajamarca, Perú.</p>
                            <p><strong>Cliente / Usuario:</strong> persona natural o jurídica que contrata o utiliza los servicios de JOTITASOFT.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">2.</span> Descripción de los Servicios</h3>
                            <p>JOTITASOFT ofrece:</p>
                            <ul>
                                <li>Desarrollo de software a medida (web, móvil, escritorio).</li>
                                <li>Plataformas SaaS y sistemas en la nube.</li>
                                <li>Sistemas ERP, CRM y soluciones empresariales.</li>
                                <li>Inteligencia artificial y automatización.</li>
                                <li>Cloud computing, hosting y administración de servidores.</li>
                                <li>Ciberseguridad y auditorías IT.</li>
                                <li>Consultoría y soporte técnico.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">3.</span> Contratación y Propuestas</h3>
                            <p>Todo servicio se formaliza mediante una <strong>propuesta comercial escrita</strong> y su aceptación expresa por parte del cliente. Los precios, alcance y plazos quedan definidos en dicho documento. Cualquier cambio al alcance acordado deberá ser formalizado mediante un adendum.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">4.</span> Condiciones de Pago</h3>
                            <ul>
                                <li>Los pagos se realizan según el cronograma acordado en la propuesta (generalmente 50% adelanto / 50% al entregar).</li>
                                <li>Los pagos se efectúan vía transferencia bancaria o yape/plin a los datos indicados en la factura.</li>
                                <li>El retraso en pagos puede suspender el servicio o el avance del proyecto.</li>
                                <li>Todos los precios se expresan en <strong>soles peruanos (PEN)</strong> salvo pacto en contrario.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">5.</span> Propiedad Intelectual</h3>
                            <p>Una vez efectuado el pago total, el cliente obtiene los derechos de uso del software desarrollado. JOTITASOFT conserva el derecho de utilizar el trabajo como referencia en su portafolio, salvo acuerdo de confidencialidad.</p>
                            <p>El código fuente, metodologías y herramientas propias de JOTITASOFT son propiedad exclusiva de la empresa.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">6.</span> Confidencialidad</h3>
                            <p>Ambas partes se comprometen a mantener la confidencialidad de la información sensible intercambiada durante la relación comercial. Esta obligación permanece vigente durante <strong>3 años</strong> tras la finalización del contrato.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">7.</span> Garantías y Soporte</h3>
                            <ul>
                                <li>Se ofrece un período de garantía de <strong>30 días</strong> tras la entrega del proyecto para corrección de errores funcionales.</li>
                                <li>Los errores causados por modificaciones del cliente no están cubiertos por la garantía.</li>
                                <li>El soporte técnico post-garantía se contrata por separado.</li>
                            </ul>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">8.</span> Limitación de Responsabilidad</h3>
                            <p>JOTITASOFT no será responsable por daños indirectos, pérdida de datos, lucro cesante o interrupción del negocio del cliente, salvo dolo o negligencia grave imputable directamente a JOTITASOFT. La responsabilidad máxima se limita al monto pagado por el servicio específico.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">9.</span> Cancelaciones</h3>
                            <p>El cliente puede cancelar el proyecto notificando con al menos <strong>5 días hábiles</strong> de anticipación. Los montos ya abonados por trabajo ejecutado no son reembolsables. JOTITASOFT puede cancelar el contrato por incumplimiento de pago o conducta indebida del cliente.</p>
                        </div>

                        <div class="legal-block">
                            <h3><span class="num">10.</span> Ley Aplicable y Jurisdicción</h3>
                            <p>Estos términos se rigen por las leyes de la <strong>República del Perú</strong>. Cualquier controversia se someterá a los juzgados de la ciudad de <strong>San Ignacio, Cajamarca</strong>, o a un proceso de conciliación extrajudicial previo.</p>
                        </div>

                        <div class="legal-contact mt-40" style="background:#1a1a2e; color:#fff; border-radius:10px; padding:30px 35px; text-align:center;">
                            <h4 style="color:#fff; margin-bottom:10px;">¿Tienes dudas sobre nuestros términos?</h4>
                            <p style="color:#ccc; margin-bottom:20px;">Escríbenos y nuestro equipo te aclarará cualquier consulta.</p>
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
.legal-block p, .legal-block ul { color:#555; line-height:1.9; }
.legal-block ul { padding-left:20px; }
.legal-block ul li { margin-bottom:6px; }
.mr-5 { margin-right:5px; }
.ml-15 { margin-left:15px; }
.mb-40 { margin-bottom:40px; }
.mt-40 { margin-top:40px; }
</style>
@endpush
