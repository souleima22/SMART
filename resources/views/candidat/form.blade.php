@csrf        
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text"> <strong> Nom et Prénom </strong></span>
    </div>
    <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" value="{{ old('prenom') ?? $candidat->prenom }}">
    <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de famille" value="{{ old('nom') ?? $candidat->nom }}">    
</div>    
<div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" class="form-control form-control @error('titre') is-invalid @enderror" value="{{ old('titre') ?? $candidat->titre }}" placeholder="titre" aria-describedby="helpIdTitre">
    @error('titre')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div> 
<div class="form-group">
    <label for="login">Login</label>
    <input type="text" name="login" id="login" class="form-control form-control @error('login') is-invalid @enderror" value="{{ old('login') ?? $candidat->login }}" placeholder="Login" aria-describedby="helpIdLogin">
    @error('login')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>   
<div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" id="mdp" class="form-control form-control @error('mdp') is-invalid @enderror" value="{{ old('mdp') ?? $candidat->mdp }}" placeholder="Mot de passe" aria-describedby="helpIdMdp">
    @error('mdp')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>       
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') ?? $candidat->adresse }}" placeholder="Adresse" aria-describedby="helpIdAdresse">
    @error('adresse')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="datedenaissance"> Date de naissance</label>
    <input type="date" name="datedenaissance" id="datedenaissance" class="form-control form-control @error('datedenaissance') is-invalid @enderror" value="{{ old('datedenaissance') ?? $candidat->datedenaissance }}" placeholder="Date de naissance" aria-describedby="helpIdDateDeNaissance">
    @error('datedenaissance')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="etatCivil">Etat Civil</label>
    <input type="text" name="etatCivil" id="etatCivil" class="form-control form-control @error('etatCivil') is-invalid @enderror" value="{{ old('etatCivil') ?? $candidat->etatCivil }}" placeholder="Etat Civil" aria-describedby="helpIdEtatCivil">
    @error('etatCivil')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville" class="form-control form-control @error('ville') is-invalid @enderror" value="{{ old('ville') ?? $candidat->ville }}" placeholder="Ville" aria-describedby="helpIdVille">
    @error('ville')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="tel" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') ?? $candidat->mobile }}" placeholder="(+216)XXXXXXXX" aria-describedby="helpIdMobile">
    @error('mobile')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $candidat->email }}" placeholder="Email" aria-describedby="helpEmail">
    @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<div class="form-group">
    <label for="niveauExperience">Niveau d'experience</label>
    <input type="text" name="niveauExperience" id="niveauExperience" class="form-control @error('niveauExperience') is-invalid @enderror" value="{{ old('niveauExperience') ?? $candidat->niveauExperience }}" placeholder="Niveau d'experience" aria-describedby="helpIdNiveauExperience">
    @error('niveauExperience')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<div class="form-group">
    <label for="id_admin">Le login  de l'administrateur</label>
    <div>
        <select name="id_admin" id="id_admin" class="form-control">
         @foreach($admins as $item)
        <option value="{{ $item->id }}">{{ $item->login }}</option>
        @endforeach
        </select>
    </div>      
</div>

<div class="form-group">
    <input type="submit" value="Enregistrer" class="btn btn-success">
    <input type="reset" value="Annuler" class="btn btn-warning">
</div>



