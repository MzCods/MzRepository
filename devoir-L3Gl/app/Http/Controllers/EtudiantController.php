<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create()
    {
        return view('projet/ajouter');
    }

    public function store(Request $request)
    
    {
       
        $input = $request->all();
        etudiant::create($input);
        return redirect('projet/ajouter')->with('flash_message','etudiant inserer');
    }

    public function index()
    {
        $etudiant = etudiant::all();
        return view('projet.show', ['etudiant' => $etudiant]);
        
    }
 }
