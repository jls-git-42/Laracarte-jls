@extends('layouts/default',['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-10 mx-auto">
                <h2>Pour nous Contacter ... </h2>
                <p class="text-muted"> En cas de problèmes avec ce service, 
                <a href="mailto:{{config('laracarte.admin_support_email')}}">demander de l'aide ...</a>
                </p>

                <form action="{{ route('contact_store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label  for="nom" class="control-label">Nom</label>
                        <input  type="text" name="nom" id="name" class="form-control {{$errors->has('nom') ? 'is-invalid' : ''}}" 
                                required minlength="3" placeholder="Ton Nom ..." value="{{old('nom')}}"/>                        
                        {!! $errors->first('nom','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label  for="email" class="control-label">Email</label>
                        <input  type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                                required="required" placeholder="Ton Email ..." value="{{old('email')}}"/>
                        {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label  for="message" class="control-label sr-only">Message</label>
                        <textarea class="form-control" rows="10" cols="10" name="message" id="message" {{$errors->has('message') ? 'is-invalid' : ''}}
                                  required minlength="10">{{old('message')}}</textarea>
                        {!! $errors->first('message','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Envoyer votre Message &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection