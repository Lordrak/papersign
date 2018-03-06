@extends('layouts.index')

@section('update')
<div class="popup">
    <h2 class="popup__title"> modifier vos infos</h2>
    <div class="popup__info">
        <!-- ACCOUNT SECTION -->
        <div class="form__section">
            <span class="form__section-icon--account fas fa-user"></span>
        </div>
        <div class="form__container-display">
        {!! Form::open(array('route'=>['apprenants.update', $apprenant->id],'method' => 'put', 'files' => 'true')) !!}
            <input class="form__input" name="nom" type="text" placeholder="{{$apprenant->nom}}" value="{{$apprenant->nom}}">  
        </div>
        <div>
            <input class="form__input" name="prenom" type="text" placeholder="{{$apprenant->prenom}}" value="{{$apprenant->prenom}}">
        </div>
        <div>
            <label for="file" class="label-file">Choisir une image</label>
            <input id="file" class="input-file" type="file" name="avatar">
        </div>
        <input class="form__input--submit" type="submit" value="ajouter">

        {!!Form::close()!!}
    </div>
    <!-- END ACCOUNT SECTION -->
</div>
@endsection
