@csrf       
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Offre</span>
    </div>  
    <input type="text" name="reference" id="reference" class="form-control @error('reference') is-invalid @enderror" value="{{ old('reference') }}" placeholder="reference" aria-describedby="helpIdReference">
    <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('desription') }}" placeholder="description" aria-describedby="helpIdDescription">
</div>            

<div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" class="form-control form-control @error('titre') is-invalid @enderror" value="{{ old('titre') }}" placeholder="titre" aria-describedby="helpIdTitre">
    @error('titre')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="lieu">Lieu</label>
    <input type="text" name="lieu" id="lieu" class="form-control form-control @error('lieu') is-invalid @enderror" value="{{ old('lieu') }}" placeholder="lieu" aria-describedby="helpIdLieu">
    @error('lieu')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="typeContrat">Type Contrat</label>
    <input type="text" name="typeContrat" id="typeContrat" class="form-control form-control @error('typeContrat') is-invalid @enderror" value="{{ old('typeContrat') }}" placeholder="lieu" aria-describedby="helpIdTypeContrat">
    @error('typeContrat')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="salaire">Salaire</label>
    <input type="text" name="salaire" id="salaire" class="form-control form-control @error('salaire') is-invalid @enderror" value="{{ old('salaire') }}" placeholder="salaire" aria-describedby="helpIdSalaire">
    @error('salaire')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="duree">Duree</label>
    <input type="date" name="duree" id="duree" class="form-control form-control @error('duree') is-invalid @enderror" value="{{ old('duree') }}" placeholder="duree" aria-describedby="helpIdDuree">
    @error('duree')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="niveauPoste">Niveau Poste</label>
    <input type="text" name="niveauPoste" id="niveauPoste" class="form-control form-control @error('niveauPoste') is-invalid @enderror" value="{{ old('niveauPoste') }}" placeholder="niveauPoste" aria-describedby="helpIdNiveauPoste">
    @error('niveauPoste')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>


<div class="form-group">
    <label for="niveauEtude">Niveau Etude</label>
    <input type="text" name="niveauEtude" id="niveauEtude" class="form-control form-control @error('niveauEtude') is-invalid @enderror" value="{{ old('niveauEtude') }}" placeholder="niveauEtude" aria-describedby="helpIdNiveauEtude">
    @error('niveauEtude')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="id_recr">L'identifiant de recruteur</label>
    <div>
        <select name="id_recr" id="id_recr" class="form-control">
         @foreach($recru as $item)
        <option value="{{ $item->id }}">{{ $item->login }}</option>
        @endforeach
        </select>
    </div>      
</div>




    
<div class="form-group">
    <input type="submit" value="Enregistrer" class="btn btn-success">
    <input type="reset" value="Annuler" class="btn btn-warning">
</div>