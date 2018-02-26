<!DOCTYPE html>
<html>
<head>
	<title>PaperSign</title>
</head>

<body>
{!!Form::open(['action' =>'ApprenantsController@store'])!!}
Nom<input name="nom" type="text"><br>
Prénom<input name="prenom" type="text"><br>
Formation<input name="formation" type="text"><br>
Lieu<input name="lieu" type="text"><br>
Email_user<input name="email_user" type="text"><br>
Email_teacher<input name="email_teacher" type="text"><br>
Email_mdef<input name="email_mdef" type="text">
<input type="submit" value="ajouter">
{!!Form::close()!!}

@foreach($apprenants as $apprenant)
    {{$apprenant->nom}}
    {{$apprenant->prenom}}
    {{$apprenant->formation}}
    {{$apprenant->lieu}}
    {{$apprenant->email_user}}
    {{$apprenant->email_teacher}}
    {{$apprenant->email_mdef}}<br>
@endforeach
</body>
</html>