<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function index()
    {
        return view('pages.index2');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function privacyPolicy()
    {
        return view('pages.politica-privacidad');
    }

    public function termsConditions()
    {
        return view('pages.terminos-condiciones');
    }

    public function support()
    {
        return view('pages.soporte');
    }

    public function documentation()
    {
        return view('pages.documentacion');
    }

    public function faq()
    {
        return view('pages.preguntas-frecuentes');
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'nombre'   => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'telefono' => 'nullable|string|max:20',
            'asunto'   => 'required|string|max:100',
            'mensaje'  => 'required|string|max:2000',
        ], [
            'nombre.required'  => 'El nombre es obligatorio.',
            'email.required'   => 'El correo electrónico es obligatorio.',
            'email.email'      => 'Ingresa un correo electrónico válido.',
            'asunto.required'  => 'El asunto es obligatorio.',
            'mensaje.required' => 'El mensaje es obligatorio.',
        ]);

        $nombre   = $validated['nombre'];
        $email    = $validated['email'];
        $telefono = $validated['telefono'] ?? 'No proporcionado';
        $asunto   = $validated['asunto'];
        $mensaje  = $validated['mensaje'];
        $fecha    = now()->setTimezone('America/Lima')->format('d/m/Y H:i') . ' (hora Perú)';

        // Destinatarios
        $destinatarios = ['gcjhan2001@gmail.com', 'jonatanmayanga@gmail.com'];

        // Cuerpo del correo en HTML
        $cuerpo = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0; }
                .container { max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; }
                .header { background: linear-gradient(135deg, #1a1a2e, #0066ff); padding: 30px 25px; text-align: center; }
                .header h2 { color: #fff; margin: 0; font-size: 22px; }
                .header p { color: #cce0ff; margin: 5px 0 0; font-size: 13px; }
                .body { padding: 30px 25px; background: #fff; }
                .field { margin-bottom: 18px; }
                .field label { display: block; font-size: 12px; font-weight: bold; color: #0066ff; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
                .field span { display: block; font-size: 15px; color: #333; }
                .mensaje-box { background: #f4f8ff; border-left: 4px solid #0066ff; padding: 15px; border-radius: 0 6px 6px 0; font-size: 15px; line-height: 1.7; color: #444; }
                .footer { background: #f9f9f9; padding: 15px 25px; text-align: center; font-size: 12px; color: #999; border-top: 1px solid #eee; }
                .badge { display: inline-block; background: #0066ff; color: #fff; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>&#128232; Nuevo Mensaje de Contacto</h2>
                    <p>Jotitasoft.com &mdash; {$fecha}</p>
                </div>
                <div class='body'>
                    <div class='field'>
                        <label>Nombre</label>
                        <span>{$nombre}</span>
                    </div>
                    <div class='field'>
                        <label>Correo Electrónico</label>
                        <span><a href='mailto:{$email}' style='color:#0066ff;'>{$email}</a></span>
                    </div>
                    <div class='field'>
                        <label>Teléfono</label>
                        <span>{$telefono}</span>
                    </div>
                    <div class='field'>
                        <label>Asunto</label>
                        <span><span class='badge'>{$asunto}</span></span>
                    </div>
                    <div class='field'>
                        <label>Mensaje</label>
                        <div class='mensaje-box'>" . nl2br(htmlspecialchars($mensaje)) . "</div>
                    </div>
                </div>
                <div class='footer'>
                    Este correo fue generado automáticamente desde el formulario de contacto de <strong>jotitasoft.com</strong>
                </div>
            </div>
        </body>
        </html>";

        // Cabeceras para correo HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Jotitasoft Web <informes@jotitasoft.com>\r\n";
        $headers .= "Reply-To: {$nombre} <{$email}>\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $asuntoCorreo = "=?UTF-8?B?" . base64_encode("[Jotitasoft] Nuevo contacto: {$asunto}") . "?=";

        // Enviar a cada destinatario
        foreach ($destinatarios as $dest) {
            mail($dest, $asuntoCorreo, $cuerpo, $headers);
        }

        \Log::info('Formulario de contacto enviado', ['nombre' => $nombre, 'email' => $email, 'asunto' => $asunto]);

        return redirect()->route('contact-us')
            ->with('success', "¡Gracias {$nombre}! Tu mensaje fue enviado correctamente. Te responderemos a la brevedad.");
    }
}
