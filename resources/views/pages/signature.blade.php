
@extends('layouts.index')

@section('display')
<div class="form effect1">
    <h1 class="form__title">Signature</h1>
<p align="center">
        <canvas id="signature-canvas" style="width:500px;height:250px;max-width:100%;border:6px #CCC solid;background-color: white;"></canvas>
        </p>

        <div id="signature-message"></div>

        <div id="signature-buttons">
            <input class="cards__btn-delete" type="button" id="clear-signature-btn" value="Clear">
        </div>

        <input type="hidden" name="signature" id="signature-data" value="">

        <br>
        <div class="signature_pad_save">
                <button type="submit" class="cards__btn-update" id="save-signature-btn">Save</button>
        </div>

        <button style="position: absolute; right: 0;" class="cards__btn-delete" onclick="window.location='{{ action("ApprenantsController@display") }}'"> Retour</button>

</div>
<script src='https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js'></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

@endsection
