<?php

namespace App\Http\Controllers;
use App\Membre;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::orderBy('prenom')->paginate(5);
        return view('membre.index', ['membres' => $membres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $membre = new Membre();
        return view('membre.create', compact('membre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $membre=Membre::create ($request->all ());
        return redirect()->route('membres.show', [$membre])
                        ->with('successNewMembre', 'Membre ajouté avec succés');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membre $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        return view('membre.show')->with('membre', $membre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        return view('membre.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membre $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
        $validatedData = $this->validate($request, $this->validationRules(), $this->customMessages());
        $membre->update($validatedData);
       
        return redirect()->route('membres.show', [$membre])
                        ->with('successUpdateMembre', 'Membre mis à jour avec succés');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membre $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect()->route('membres.index')->with('successDelete','Membre supprimé');

    }
    private function validationRules()
    {
        return [
            'nom' => 'required|max:50|min:2',
            'prenom' => 'required|max:50|min:2',
            'dateNais' => 'required|date',
            'adresse' => 'required|max:70|min:5',
            'tel' => 'required|max:8|min:8',
            'email' => 'required',
            'mdp' => 'required'
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
            'nom.required' => 'Le nom du membre est obligatoire',
            'nom.max' => 'Le nom ne doit pas dépasser les 50 caractères',
            'nom.min' => 'Le nom doit être au minimum 2 caractères',
            'prenom.required'  => 'Le prénom du membre est obligatoire',
            'prenom.max' => 'Le prénom ne doit pas dépasser les 50 caractères',
            'prenom.min' => 'Le prénom doit être au minimum 2 caractères',
            'dateNaissance.required' => 'La date de naissance du membre est obligatoire',
            'dateNaissance.date' => 'La date de naissance du membre doit être au format date valide',
            'adresse.required' => 'L\'adresse du membre est obligatoire',
            'adresse.max' => 'L\'adresse ne doit pas dépasser les 70 caractères',
            'adresse.min' => 'L\'adresse doit être au minimum 5 caractères',
            'tel.required' => 'Le numéro de téléphone du membre est obligatoire',
            'tel.max' => 'Le numéro de téléphone doit être exactement 8 caractères',
            'tel.min' => 'Le numéro de téléphone doit être exactement 8 caractères',
            'email.required' => 'Le mail est obligatoire',
            'mdp.required' => 'Le mot de passe est obligatoire',
            
        ];
    }

   
}
