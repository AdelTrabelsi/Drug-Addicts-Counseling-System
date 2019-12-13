<?php

namespace App\Http\Controllers;

use App\Psychologue;       
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class PsychologuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $psychologues = Psychologue::orderBy('prenom')->paginate(5);
        return view('psychologue.index', ['psychologues' => $psychologues]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        $psychologue = new Psychologue();
        // ['psychologue',$psychologue ]
        return view('psychologue.create', compact('psychologue'));
  
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validatedData = $this->validate($request, $this->validationRules());
        //$psychologue = Psychologue::create($validatedData);
        $psychologue = Psychologue::create($request->all());
        return redirect()->route('psychologues.show',[$psychologue])->with('successNewPsychologue','Psychologue ajouté avec succés');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Psychologue  $psychologue
     * @return \Illuminate\Http\Response
     */
    public function show(Psychologue $psychologue)
    {
        return view('psychologue.show') -> with('psychologue',$psychologue);

    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Psychologue  $psychologue
     * @return \Illuminate\Http\Response
     */
    public function edit(Psychologue $psychologue)
    {
        
        return view('psychologue.edit', compact('psychologue'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psychologue  psychologue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psychologue $psychologue)
    {
        //
        $validatedData = $this->validate($request, $this->validationRules(), $this->customMessages());
        $psychologue->update($validatedData);
        //$this->uploadImage($psychologue);
        return redirect()->route('psychologues.show', [$psychologue])
                        ->with('successUpdatePsychologue', 'Psychologue mis à jour avec succés');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psychologue  psychologue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psychologue $psychologue)
    {
        //
        $psychologue->delete();
        return redirect()->route('psychologues.index')->with('successDelete','Psychologue supprimé');
    
    }

    private function validationRules()
    {
       
        return [
            'nom' => 'required|max:50|min:2',
            'prenom' => 'required|max:50|min:2',
            'email' => 'required|email|unique:users',
            //'dateNaissance' => 'required|date',
            'adresseCabinet' => 'required|max:70|min:5',
            'tel' => 'required|max:8|min:8',
            'mdp' => 'required|max:20|min:8'
            //'cinImage' => 'sometimes|file|image'
        ];
    }

    /**
     * Defines custom error messages when validating new/updating a customer entry
     *
     * @return array
     */
    private function customMessages()
    {
        return [
            'nom.required' => 'Le nom du client est obligatoire',
            'nom.max' => 'Le nom ne doit pas dépasser les 50 caractères',
            'nom.min' => 'Le nom doit être au minimum 2 caractères',
            'prenom.required'  => 'Le prénom du client est obligatoire',
            'prenom.max' => 'Le prénom ne doit pas dépasser les 50 caractères',
            'prenom.min' => 'Le prénom doit être au minimum 2 caractères',
            'dateNaissance.required' => 'La date de naissance du client est obligatoire',
            'dateNaissance.date' => 'La date de naissance du client doit être au format date valide',
            'adresseCabinet.required' => 'L\'adresse du client est obligatoire',
            'adresseCabinet.max' => 'L\'adresse ne doit pas dépasser les 70 caractères',
            'adresseCabinet.min' => 'L\'adresse doit être au minimum 5 caractères',
            'tel.required' => 'Le numéro de téléphone du client est obligatoire',
            'tel.max' => 'Le numéro de téléphone doit être exactement 8 caractères',
            'tel.min' => 'Le numéro de téléphone doit être exactement 8 caractères',
            'mdp.max' => 'Le numéro de téléphone doit être exactement 8 caractères',
            'mdp.min' => 'Le numéro de téléphone doit être exactement 20 caractères',
            'cinImage.file' => 'L\'image de de la CIN du client doit être un fichier',
            'cinImage.image' => 'L\'image de de la CIN du client doit être de type image',
        ];
    }
}
