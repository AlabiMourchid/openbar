<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    //
    public function save(Request $request){
        try{
            $email = $request->input('email');
            $nom = $request->input('nom');
            $prenom = $request->input('prenom');
            $nbr_ticket = $request->input('nbr_ticket');
            

            Session::put('nom',$nom);
            Session::put('prenom',$prenom);
            Session::put('email',$email);
            Session::put('nbr_ticket',$nbr_ticket);

            return response()->json([
                'data' => '',
                'message' => "Session crée avec succès",
                "success" => 'success',
                'status' => 200
            ], 200);

        }catch (QueryException $exception) {
            Log::error($exception->getMessage());
            abort(500);
        }
    }
}
