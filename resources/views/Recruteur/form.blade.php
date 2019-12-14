@csrf        
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text"> <strong> Nom et Prénom </strong></span>
    </div>
    <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" value="{{ old('prenom') ?? $recruteur->prenom }}">
    <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de famille" value="{{ old('nom') ?? $recruteur->nom }}">    
</div>    
<div class="form-group">
    <label for="login">Login</label>
    <input type="text" name="login" id="login" class="form-control form-control @error('login') is-invalid @enderror" value="{{ old('login') ?? $recruteur->login }}" placeholder="Login" aria-describedby="helpIdLogin">
    @error('login')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>   
<div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" id="mdp" class="form-control form-control @error('mdp') is-invalid @enderror" value="{{ old('mdp') ?? $recruteur->mdp }}" placeholder="Mot de passe" aria-describedby="helpIdMdp">
    @error('mdp')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>       
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') ?? $recruteur->adresse }}" placeholder="Adresse" aria-describedby="helpIdAdresse">
    @error('adresse')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>


<div class="form-group">
    <label for="secteuractivite">secteur activite</label>
    <input type="text" name="secteuractivite" id="secteuractivite" class="form-control form-control @error('secteuractivite') is-invalid @enderror" value="{{ old('secteuractivite') ?? $recruteur->secteuractivite }}" placeholder="Secteur Activite" aria-describedby="helpIdSecteuractivite">
    @error('secteuractivite')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>


<div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="tel" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') ?? $recruteur->mobile }}" placeholder="XXXXXXXX" aria-describedby="helpIdMobile">
    @error('mobile')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $recruteur->email }}" placeholder="Email" aria-describedby="helpEmail">
    @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<div class="form-group">
    <label for="siteweb">Site Web</label>
    <input type="text" name="siteweb" id="siteweb" class="form-control @error('siteweb') is-invalid @enderror" value="{{ old('siteweb') ?? $recruteur->siteweb }}" placeholder="Site web" aria-describedby="helpIdSiteweb">
    @error('siteweb')
        <p class="text-danger">{{ $message }}</p>
    @enderror        
</div>
<!--<div class="form-group">
    <label for="idadmin">L'id de l'admin</label>
    <div>
        <select name="idadmin" id="idadmin" class="form-control">
             {{-- @foreach($recruteur as $recruteur)  --}}
        <option value="{{ $recruteur->id }}">{{ $recruteur->id_admin }}</option>
        {{-- @endforeach  --}}
        </select>
    </div>      
</div>-->
<div class="form-group">
    <label for="id_admin">L'id de l'admin</label>
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