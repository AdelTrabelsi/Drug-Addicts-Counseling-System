@csrf        
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Membre</span>
    </div>
    <div class="form-group">
    <label for="dateNaissance">Prénom</label>
    <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" value="{{ old('prenom') ?? $membre->prenom }}">
    </div>
    <div class="form-group">
    <label for="dateNaissance">Nom</label>
    <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de famille" value="{{ old('nom') ?? $membre->nom }}">    
</div>            
<div class="form-group">
    <label for="dateNaissance">Date de naissance</label>
    <input type="date" name="dateNais" id="dateNais" class="form-control form-control @error('dateNais') is-invalid @enderror" value="{{ old('dateNais') ?? $membre->dateNais }}" placeholder="Date de naissance" aria-describedby="helpIdDateNaissance">
    
</div>
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') ?? $membre->adresse }}" placeholder="Adresse" aria-describedby="helpIdAdresse">
   
</div>
<div class="form-group">
    <label for="tel">Téléphone</label>
    <input type="text" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror" value="{{ old('tel') ?? $membre->tel }}" placeholder="(+216)XXXXXXXX" aria-describedby="helpIdTel">
         
</div>
<div class="form-group">
    <label for="tel">Email</label>
    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $membre->email }}" placeholder="Entrer un email" >
     
    <div class="form-group">
    <label for="tel">Mot de passe</label>
    <input type="text" name="mdp" id="mdp" class="form-control @error('mdp') is-invalid @enderror" value="{{ old('mdp') ?? $membre->mdp }}" placeholder="Entrer un mot de passe" >
   
</div>
       

<div class="form-group">
    <input type="submit" value="Enregistrer" class="btn btn-success">
    <input type="reset" value="Annuler" class="btn btn-warning">
</div>