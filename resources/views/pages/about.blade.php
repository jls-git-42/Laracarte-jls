@extends('layouts/default',['title'=>'Au Sujet de'])

@section('content')
    <div class="container">
    <h2>cos'è Laracarte ?</h2>
    <p>Laramap è un clone di <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <strong>Questa applicazione è stata creata da Gian Luigi per la formazione</strong>
            </p>
        </div>        
    </div>
    <p>Sentiti libero di aiutare a migliorare il <a href="https://github.com/jls-git-42/Laracarte-jls">codice sorgente</a></p>
    <hr style="border-top: 1px solid #8c8b8b">
    <h2>cos'è Laramap ?</h2>
    <p>laramap è il sito web al quale si ispira laracarte</p>
    <p>maggiori informazioni <a href="#">qui...</a></p>
    <hr style="border-top: 1px solid #8c8b8b">
    <h2>quali strumenti e servizi vengono utilizzati in Laracarte </h2>
    <p>fondamentalmente è costruito con laravel & bootstrap ma ci sono un sacco di servizi usati per le e-mail e altre sezioni</p>
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

@endsection