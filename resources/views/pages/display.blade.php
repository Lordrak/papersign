
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
                </THEAD>
                <tr>
                    <td><p align="center">
                            <canvas id="signature-canvas" style="width:125px;height:100px;max-width:100%;border:6px #CCC solid;background-color: white;"></canvas>
                            </p>

                            <div id="signature-message"></div>

                            
                            <input type="hidden" name="signature" id="signature-data" value="">

                            <br>
                           

                        <script src='https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js'></script>
                        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
                    </td>
                    <td>
                        <p align="center">
                            <canvas id="signature-canvas" style="width:125px;height:100px;max-width:100%;border:6px #CCC solid;background-color: white;"></canvas>
                            </p>

                            <div id="signature-message"></div>

                            
                            <input type="hidden" name="signature" id="signature-data" value="">

                            <br>
                           

                        <script src='https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js'></script>
                        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endforeach

    <button class="cards__btn-delete" onclick="window.location='{{ action("ApprenantsController@index") }}'"> Retour</button>
@endsection