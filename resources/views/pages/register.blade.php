
@extends('layouts.index')

@section('register')

<!-- HEADER BLOCK ////////////////////////////////////////////-->

<div class="header">
    <a href="https://simplon.co/" target="_blank"><img src="img/logo-simplon.png" alt="logo simplon" class="header__logo-simplon"></a>
    <img src="img/logo-paper-sign2.png" alt="logo paper sign" class="header__logo-brand">
</div>
<!-- END HEADER ////////////////////////////////////////////-->

<!-- FORM BLOCK ////////////////////////////////////////////-->
<div class="form effect1">
    <h1 class="form__title">Create Account</h1>

    <!-- STUDENT BLOCK ////////////////-->
    <h2 class="form__sub">Apprenants</h2>
 
    <!-- ACCOUNT SECTION -->
    <div class="form__section">
        <span class="form__section-icon--account fas fa-user"></span>
    </div>
 {!! Form::open(array('action' => 'ApprenantsController@store', 'files' => 'true')) !!}
    <div class="form__container-display">
        <div>
            <input class="form__input" name="nom" type="text" placeholder="Nom">  
        </div>
        <div>
            <input class="form__input" name="prenom" type="text" placeholder="Prénom">
        </div>
    </div>
        <div>
            <!-- <input class="form__input--file" name="avatar" type="file"> -->
            <label for="file" class="label-file">Choisir une image</label>
            <input id="file" class="input-file" type="file" name="avatar">
        </div>
<br/>

    <!-- END ACCOUNT SECTION -->

    <!-- LOCATION SECTION -->
    <div class="form__section">
        <span class="form__section-icon--location fas fa-map-marker-alt" ></span>
        
    </div>
    <div class="form__container-display">
        <div>
            <input class="form__input" name="lieu" type="text" placeholder="Ville">
        </div>
    </div>
    <!-- END LOCATION SECTION -->

     <!-- FORMATION SECTION -->
     <div class="form__section">
        <span class="form__section-icon fas fa-graduation-cap"></span>
    </div>
    <div class="form__container-display">
        <div>
            <input class="form__input" name="formation" type="text" placeholder="Formation">
        </div>
    </div>
    <!-- END FORMATION SECTION -->


    <!-- EMAIL SECTION -->
     <div class="form__section">
        <span class="form__section-icon fas fa-envelope"></span>
    </div>
    <div class="form__container-display">
        <div>
            <input class="form__input" name="email_user" type="mail" placeholder="Email">
        </div>
    </div>
    <!-- END EMAIL SECTION -->
    <!-- END STUDENT BLOCK ////////////////-->

    <!-- TEACHER BLOCK ////////////////-->
    
    <h2 class="form__sub">Formateur</h2>

    <!-- EMAIL SECTION -->
    <div class="form__section">
        <span class="form__section-icon far fa-envelope"></span>
    </div>
    <div class="form__container-display">
        <div>
            <input class="form__input" name="email_teacher" type="text" placeholder="Formateur">
        </div>
        <div>
            <input class="form__input" name="email_mdef" type="text" placeholder="MDEF">
        </div>
    </div>
    <input class="form__input--submit" type="submit" value="ajouter">
        {!!Form::close()!!}
</div>
    <!-- END EMAIL SECTION -->
    <!-- END TEACHER BLOCK ////////////////-->
    <!-- END FORM ////////////////////////////////////////////-->

    <!-- CARDS BLOCK -->
    @foreach($apprenants as $apprenant)
    <div class="cards">
        <div class="cards__avatar">
            <img src="{{asset('images/'.$apprenant->avatar)}}" alt="avatar" class="cards__avatar-content">
        </div> 
        <div class="cards__info">
            <div class="cards__text">
                <h2 class="cards__text-firstname">{{$apprenant->nom}}</h2>
                <h2 class="cards__text-lastname">{{$apprenant->prenom}}</h2>
                <p class="cards__text-mail">{{$apprenant->email_user}}</p>
            </div>
        </div>
        <div class="cards__btn">
            <div class="cards__btn-container">
            <button class="cards__btn-update" onclick="window.location='{{ route("apprenants.show", $apprenant->id) }}'">Modifier</button>
                {!! Form::open(array('route'=>['apprenants.delete', $apprenant->id],'method' => 'delete', 'files' => 'true')) !!}
               <button class="cards__btn-delete">Delete</button>
               {!! Form:: close() !!}
            </div>
        </div>
    </div>
    @endforeach
    <!-- END CARDS BLOCK -->
@endsection
