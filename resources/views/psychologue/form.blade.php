@csrf        
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Psychologue</span>
    </div>
    <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" >
    <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de famille" >    
</div>     

<div class="form-group">
    <label for="adresseCabinet">Adresse Cabinet</label>
    <input type="text" name="adresseCabinet" id="adresseCabinet" class="form-control @error('adresseCabinet') is-invalid @enderror"  placeholder="Adresse Cabinet" aria-describedby="helpIdAdresseCabinet">
   
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  placeholder="you@example.com" aria-describedby="helpIdEmail">
    
</div>

<div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" id="mdp" class="form-control @error('mdp') is-invalid @enderror"  placeholder="*******" aria-describedby="helpIdMdp">
            
</div>

<div class="form-group">
    <label for="tel">Téléphone</label>
    <input type="text" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror"  placeholder="(+216)XXXXXXXX" aria-describedby="helpIdTel">
           
</div>

<div class="form-group">
    <input type="submit" value="Enregistrer" class="btn btn-success">
    <input type="reset" value="Annuler" class="btn btn-warning">
</div>