
@extends('layouts.index')

@section('display')

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
        <div>
            <table>
                <THEAD>
                    <th> Matin </th>
                    <th> Après-midi </th>
                    <th> Signature </th>
                </THEAD>
                <tr>
                    <td>
                        <input type="checkbox" name="matin">
                    </td>
                    <td>
                        <input type="checkbox" name="am">
                    </td>
                    <td>
                        <button onclick="window.open('{{ url("signature") }}')">
                            Signature
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endforeach

    <button class="cards__btn-delete" onclick="window.location='{{ action("ApprenantsController@index") }}'"> Retour</button>

@endsection