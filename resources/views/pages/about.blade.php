@extends('layouts/default',['title'=>'Au Sujet de'])

@section('content')
    <div class="container">
    <h2>Qu'Est ce que {{ config('app.name') }} ?</h2>
    <p>{{ config('app.name') }} est un clone de <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <strong>Cette Application a été crée par Moi même, aux fins de Formation</strong>
            </p>
        </div>        
    </div>
    <p>N'hésite pas à proposer une amélioration du <a href="https://github.com/jls-git-42/Laracarte-jls">code source</a></p>
    <hr style="border-top: 1px solid #8c8b8b">
    <h2>Qu'Est ce que Laramap ?</h2>
    <p>laramap est le site web duquel s'inspire {{ config('app.name') }}</p>
    <p>Plus d'informations <a href="#">ici...</a></p>
    <hr style="border-top: 1px solid #8c8b8b">
    <h2>Quels supports sont utilisés dans {{ config('app.name') }} ?</h2>
    <p>L'Application est construite avec laravel & bootstrap, mais de multiples outils sont utilisés pour la gestion des Email et autres services ..</p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Géolocalisation Package</li>
        <li>Michel Fortin's Markdown Parser</li>
        <li>Heroku</li>
    </ul>
    </div>
@endsection