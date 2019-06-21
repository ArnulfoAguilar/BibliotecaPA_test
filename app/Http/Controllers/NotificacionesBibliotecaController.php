<?php

namespace App\Http\Controllers;

use App\Mail\NotificacionBiblioteca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificacionesBibliotecaController extends Controller
{
    public function vencimientoPrestamo(){
        Mail::to("arnulfo.aguilar9405@gmail.com","valladares.3309@gmail.com","stephanie.alejandrahc@gmail.com","kposada1771@gmail.com")->send(new NotificacionBiblioteca());
        return "Email enviado ";
    }
}
