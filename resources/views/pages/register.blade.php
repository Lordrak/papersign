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

    <div class="form__container-display">
    {!! Form::open(array('action' => 'ApprenantsController@store', 'files' => 'true')) !!}        <div>
            <input class="form__input" name="nom" type="text" placeholder="Nom">  
        </div>
        <div>
            <input class="form__input" name="prenom" type="text" placeholder="Prénom">
        </div>
        <div>
            <!-- <input class="form__input--file" name="avatar" type="file"> -->
            <label for="file" class="label-file">Choisir une image</label>
            <input id="file" class="input-file" type="file" name="avatar">
        </div>
    </div>
    <!-- END ACCOUNT SECTION -->

    <!-- LOCATION SECTION -->
    <div class="form__section">
        <span class="form__section-icon--location fas fa-map-marker-alt"></span>
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
        <input class="form__input--submit" type="submit" value="ajouter">
        {!!Form::close()!!}
    </div>
</div>
    <!-- END EMAIL SECTION -->
    <!-- END TEACHER BLOCK ////////////////-->
    <!-- END FORM ////////////////////////////////////////////-->

    <!-- CARDS BLOCK -->
    @foreach($apprenants as $apprenant)
    <div class="cards">
        <div class="cards__avatar">
            <img src="images/{{$apprenant->email_user}}.png" alt="avatar" class="cards__avatar-content">
        </div> 
        <div class="cards__info">
            <div class="cards__text">
                <h2 class="cards__text-lastname">{{$apprenant->prenom}}</h2>
                <h2 class="cards__text-firstname">{{$apprenant->nom}}</h2>
                <p class="cards__text-mail">{{$apprenant->email_user}}</p>
            </div>
        </div>
        <div class="cards__btn">
            <div class="cards__btn-container">
                <button class="cards__btn-update">Modifier</button>
                <button class="cards__btn-delete">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
    <!-- END CARDS BLOCK -->



    <!-- exemple de code de cards-->
    <!-- <div class="wrapper">
    <div class="product-img">
      <img src="http://bit.ly/2tMBBTd" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Harvest Vase</h1>
        <h2>by studio and friends</h2>
        <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
      </div>
      <div class="product-price-btn">
        <p><span>78</span>$</p>
        <button type="button">buy now</button>
      </div>
    </div>
  </div>
</div> -->
    <!-- fin exemple de code de cards-->


<!-- @foreach($apprenants as $apprenant)
    {{$apprenant->nom}}
    {{$apprenant->prenom}}
    {{$apprenant->formation}}
    {{$apprenant->lieu}}
    {{$apprenant->email_user}}
    {{$apprenant->email_teacher}}
    {{$apprenant->email_mdef}}<br>
@endforeach -->

@endsection