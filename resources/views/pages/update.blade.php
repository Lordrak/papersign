@extends('layouts.index')

@section('update')
<div class="form effect1">
    <h1 class="form__title">Modifier vos infos</h1>
    <div class="form__section">
            <span class="form__section-icon--account fas fa-user"></span>
    </div>
    <div class="form__container-display">
        {!! Form::open(array('route'=>['apprenants.update', $apprenant->id],'method' => 'put', 'files' => 'true')) !!}
        <div class="form__container-display">
            <div>
               <input class="form__input" name="nom" type="text" placeholder="{{$apprenant->nom}}" value="{{$apprenant->nom}}">  
            </div>
            <div>
               <input class="form__input" name="prenom" type="text" placeholder="{{$apprenant->prenom}}" value="{{$apprenant->prenom}}">
            </div>
        </div>
        <div>
            <label for="file" class="label-file">Choisir une image</label>
            <input id="file" class="input-file" type="file" name="avatar" value="{{$apprenant->avatar}}">
        </div>
        <br/>
        <input class="form__input--submit" type="submit" value="ajouter">

        {!!Form::close()!!}
    </div>

    <button class="cards__btn-delete" onclick="window.location='{{ action("ApprenantsController@index") }}'"> Retour</button>
</div>
@endsection
