<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Préparation des données pour l'email
        $data = [
            'nom' => $validated['nom'],
            'email' => $validated['email'],
            'tel' => $validated['tel'] ?? 'Non renseigné',
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        try {
            // Envoi de l'email
            Mail::to('Ass.tidaf07@gmail.com')
                ->cc('Ass.tidaf07@gmail.com') // Ajoute cette adresse en copie
                ->send(new Email($data));
            
            // Redirection avec message de succès
            return back()->with('success', 'تم إرسال رسالتك بنجاح');
        } catch (\Exception $e) {
            // Log l'erreur
            \Log::error('Erreur lors de l\'envoi de l\'email: ' . $e->getMessage());
            
            // En développement, on peut afficher l'erreur
            if (config('app.debug')) {
                return back()->with('error', 'Erreur lors de l\'envoi: ' . $e->getMessage());
            }
            
            // En production, on affiche un message plus générique
            return back()->with('error', 'عذرًا، حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى لاحقًا.');
        }
    }
}
