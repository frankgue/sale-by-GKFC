@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>C'est quoi <b>{{ config('app.name') }}</b> </h2>
        <p>{{ config('app.name') }} est une plate forme de vente d'objets.</p>
        <p>
            Vous avez un objet que vous n'utilisez plus est qui vous encombre,
            debarrassez vous en en la publiant sur cette plateforme, vous aurez beaucoup
            plus d'espaces chez vous, votre maison sera <b>propre</b> et vous ferez
            ainsi des <b>Economie</b> et tout le monde est content.
        </p>

        <div class="row">
            <div class="col-md-8">
                <p class="alert alert-warning">
                    <strong>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Veuillez S'il vous plait pour profiter pleinnement de cette plateforme
                        Bien vous comporter. Aucun egarement ne sera tolere
                    </strong>
                </p>
            </div>
        </div>
        <p>Pour pouvoir vous en inspirer accedez au <a href="https://github.com/frankgue/SaleBy" target="_blank">code source</a> sur gitup</p>


        <hr>

        <h2>Quels sont les differents services offert par <b>{{ config('app.name') }}</b>? </h2>
        <p>Bavarder bavader.</p>
        <ul>
            <li>Vendre</li>
            <li>Achetter</li>
            <li>Echanger</li>
            <li>Troquer</li>
        </ul>
    </div>
@stop
