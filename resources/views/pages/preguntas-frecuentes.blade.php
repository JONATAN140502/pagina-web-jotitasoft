@extends('layouts.app')
@section('title', 'Preguntas Frecuentes - Jotitasoft')
@section('description', 'Resolvemos tus dudas sobre los servicios de desarrollo de software, SaaS y tecnología de JOTITASOFT S.A.C.')

@section('content')

    <div class="page-banner-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h2>Preguntas Frecuentes</h2>
                        <ul class="page-banner-link">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><span>/</span></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="section-head">
                        <h5>Resolvemos tus dudas</h5>
                        <h2>Preguntas Frecuentes</h2>
                        <div class="animated-bar"><span></span></div>
                        <p style="color:#666; margin-top:15px; max-width:600px; margin-left:auto; margin-right:auto;">Si no encuentras la respuesta que buscas, <a href="{{ route('contact-us') }}" style="color:#0066ff;">contáctanos</a> y te ayudamos personalmente.</p>
                    </div>
                </div>
            </div>

            {{-- Tabs de categorías --}}
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="faq-tabs text-center">
                        <button class="faq-tab-btn active" onclick="filterFaq('todos')">Todos</button>
                        <button class="faq-tab-btn" onclick="filterFaq('servicios')">Servicios</button>
                        <button class="faq-tab-btn" onclick="filterFaq('precios')">Precios</button>
                        <button class="faq-tab-btn" onclick="filterFaq('proceso')">Proceso</button>
                        <button class="faq-tab-btn" onclick="filterFaq('tecnologia')">Tecnología</button>
                        <button class="faq-tab-btn" onclick="filterFaq('soporte')">Soporte</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @php
                    $faqs = [
                        ['cat'=>'servicios', 'p'=>'¿Qué tipos de software desarrollan?',
                         'r'=>'Desarrollamos todo tipo de software: aplicaciones web, sistemas ERP y CRM empresariales, plataformas SaaS, aplicaciones móviles (Android/iOS), sistemas de gestión, e-commerce, portales web y más. Cada proyecto es desarrollado a medida según las necesidades específicas del cliente.'],

                        ['cat'=>'servicios', 'p'=>'¿Trabajan con empresas fuera de Cajamarca?',
                         'r'=>'Sí, atendemos clientes en todo el Perú y Latinoamérica. Al ser un servicio digital, trabajamos 100% de forma remota con clientes de Lima, Arequipa, Trujillo, y otros países. La comunicación se realiza por videollamada, email y WhatsApp.'],

                        ['cat'=>'precios', 'p'=>'¿Cuánto cuesta desarrollar un software?',
                         'r'=>'El costo varía según la complejidad, funciones y tecnologías requeridas. Un sistema básico puede partir desde S/. 1,500, mientras que proyectos complejos tienen presupuestos personalizados. Contáctanos con los detalles de tu proyecto para una cotización sin costo.'],

                        ['cat'=>'precios', 'p'=>'¿Cómo son las condiciones de pago?',
                         'r'=>'Generalmente trabajamos con el esquema 50% de adelanto para comenzar y 50% al entregar el proyecto. Para proyectos grandes podemos acordar un cronograma de pagos por hitos. Aceptamos transferencia bancaria, yape, plin y depósito en cuenta.'],

                        ['cat'=>'precios', 'p'=>'¿Emiten factura o boleta?',
                         'r'=>'Sí. JOTITASOFT S.A.C. es una empresa formalmente constituida (RUC: 20615251195). Emitimos comprobantes de pago electrónicos: factura electrónica para empresas y boleta electrónica para personas naturales.'],

                        ['cat'=>'proceso', 'p'=>'¿Cuánto tiempo tarda en desarrollarse un proyecto?',
                         'r'=>'Depende de la complejidad. Una landing page puede estar lista en 3-5 días. Un sistema web básico toma 2-4 semanas. Un ERP o plataforma SaaS compleja puede tomar 2-6 meses. Al inicio del proyecto definimos un cronograma con fechas de entrega claras.'],

                        ['cat'=>'proceso', 'p'=>'¿Cómo es el proceso de trabajo?',
                         'r'=>'1. Reunión inicial para entender tus necesidades. 2. Propuesta técnica y comercial. 3. Aprobación y adelanto. 4. Diseño y maquetas. 5. Desarrollo iterativo con revisiones. 6. Pruebas y control de calidad. 7. Entrega y despliegue. 8. Capacitación y soporte.'],

                        ['cat'=>'proceso', 'p'=>'¿Puedo ver avances durante el desarrollo?',
                         'r'=>'Absolutamente. Usamos metodología ágil con entregas parciales (sprints). Tendrás acceso a un entorno de pruebas para revisar el avance del proyecto y dar tu retroalimentación antes de la entrega final.'],

                        ['cat'=>'tecnologia', 'p'=>'¿Qué tecnologías utilizan?',
                         'r'=>'Usamos tecnologías modernas según el proyecto: PHP/Laravel, Python/Django, Node.js, React, Vue.js, Flutter para móvil, MySQL, PostgreSQL, MongoDB, Redis, Docker, AWS, Google Cloud, entre otras. Elegimos la stack más adecuada para cada caso.'],

                        ['cat'=>'tecnologia', 'p'=>'¿El código fuente me lo entregan?',
                         'r'=>'Sí. Una vez completado el pago total, te entregamos el código fuente completo, la documentación técnica y acceso a todos los repositorios. El código es tuyo.'],

                        ['cat'=>'soporte', 'p'=>'¿Ofrecen soporte después de la entrega?',
                         'r'=>'Sí. Incluimos 30 días de garantía para corrección de errores sin costo adicional. Después del período de garantía, ofrecemos planes de mantenimiento mensual o soporte por horas según tus necesidades.'],

                        ['cat'=>'soporte', 'p'=>'¿Qué pasa si quiero agregar funciones después?',
                         'r'=>'Podemos agregar nuevas funcionalidades en cualquier momento. Se evalúa el alcance, se hace una nueva propuesta y se trabaja como un módulo adicional al proyecto existente. El sistema está diseñado para ser escalable.'],
                    ];
                    @endphp

                    <div class="accordion faq-accordion" id="faqAccordion">
                        @foreach($faqs as $i => $faq)
                        <div class="faq-item" data-cat="{{ $faq['cat'] }}">
                            <div class="faq-question" onclick="toggleFaq({{ $i }})">
                                <span>{{ $faq['p'] }}</span>
                                <i class="fas fa-plus faq-icon" id="icon-{{ $i }}"></i>
                            </div>
                            <div class="faq-answer" id="answer-{{ $i }}">
                                <p>{{ $faq['r'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ¿No encontraste? --}}
            <div class="row mt-60">
                <div class="col-lg-8 offset-lg-2">
                    <div class="faq-no-answer text-center" style="background:#f4f8ff; border-radius:12px; padding:40px 35px;">
                        <div style="width:60px;height:60px;background:linear-gradient(135deg,#0066ff,#0044cc);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
                            <i class="fas fa-comments" style="color:#fff; font-size:24px;"></i>
                        </div>
                        <h3 style="font-size:22px; font-weight:700; color:#1a1a2e; margin-bottom:10px;">¿No encontraste lo que buscabas?</h3>
                        <p style="color:#666; margin-bottom:25px;">Nuestro equipo está disponible para resolver cualquier duda que tengas sobre nuestros servicios.</p>
                        <a href="{{ route('contact-us') }}" class="btn-common" style="display:inline-block;">Hacer una Pregunta</a>
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
/* FAQ Tabs */
.faq-tabs { display:flex; flex-wrap:wrap; justify-content:center; gap:10px; }
.faq-tab-btn { background:#f4f4f4; border:none; padding:8px 20px; border-radius:25px; font-size:14px; font-weight:600; color:#666; cursor:pointer; transition:all 0.3s; }
.faq-tab-btn:hover, .faq-tab-btn.active { background:#0066ff; color:#fff; }
/* FAQ Items */
.faq-item { border:1px solid #e8e8e8; border-radius:8px; margin-bottom:12px; overflow:hidden; transition:box-shadow 0.3s; }
.faq-item:hover { box-shadow:0 4px 20px rgba(0,102,255,0.1); }
.faq-item.hidden { display:none; }
.faq-question { display:flex; justify-content:space-between; align-items:center; padding:18px 22px; cursor:pointer; background:#fff; font-size:15px; font-weight:600; color:#1a1a2e; gap:15px; }
.faq-question:hover { background:#f8fbff; }
.faq-icon { flex-shrink:0; color:#0066ff; transition:transform 0.3s; font-size:14px; }
.faq-icon.open { transform:rotate(45deg); }
.faq-answer { display:none; padding:0 22px 18px; background:#fff; border-top:1px solid #f0f0f0; }
.faq-answer p { color:#555; line-height:1.9; margin:12px 0 0; font-size:15px; }
.mb-40 { margin-bottom:40px; }
.mb-50 { margin-bottom:50px; }
.mt-60 { margin-top:60px; }
</style>
@endpush

@push('scripts')
<script>
function toggleFaq(index) {
    var answer = document.getElementById('answer-' + index);
    var icon   = document.getElementById('icon-' + index);
    var isOpen = answer.style.display === 'block';
    // Cerrar todos
    document.querySelectorAll('.faq-answer').forEach(function(el){ el.style.display='none'; });
    document.querySelectorAll('.faq-icon').forEach(function(el){ el.classList.remove('open'); });
    // Abrir el clickeado si estaba cerrado
    if (!isOpen) {
        answer.style.display = 'block';
        icon.classList.add('open');
    }
}
function filterFaq(cat) {
    document.querySelectorAll('.faq-tab-btn').forEach(function(btn){ btn.classList.remove('active'); });
    event.target.classList.add('active');
    document.querySelectorAll('.faq-item').forEach(function(item){
        if (cat === 'todos' || item.dataset.cat === cat) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
}
</script>
@endpush
