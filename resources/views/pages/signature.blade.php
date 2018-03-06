
@extends('layouts.index')

@section('display')

<p align="center">
        <canvas id="signature-canvas" style="width:180px;height:80px;max-width:100%;border:6px #CCC solid;background-color: white;"></canvas>
        </p>

        <div id="signature-message"></div>

        <div id="signature-buttons">
            <input type="button" id="clear-signature-btn" value="Clear">
        </div>

        <input type="hidden" name="signature" id="signature-data" value="">

        <br>
        <div class="signature_pad_save">
                <button type="submit" class="btn btn-primary" id="save-signature-btn">Save</button>
        </div>

<script src='https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js'></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

@endsection