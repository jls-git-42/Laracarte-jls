@extends('layouts/default',['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Pour nous Contacter ... </h2>
                <p class="text-muted"> En cas de problèmes avec ce service, 
                <a href="mailto:{{config('laracarte.admin_support_email')}}">demander de l'aide ...</a>
                </p>

                <form action="{{ route('contact_path') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                        <label  for="nom" class="control-label">Nom</label>
                        <input  type="text" name="nom" id="name" class="form-control" 
                                required minlength="3" placeholder="Ton Nom ..." value="{{old('nom')}}"/>                        
                        {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label  for="email" class="control-label">Email</label>
                        <input  type="email" name="email" id="email" class="form-control" 
                                required="required" placeholder="Ton Email ..." value="{{old('email')}}"/>
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                        <label  for="message" class="control-label sr-only">Message</label>
                        <textarea class="form-control" rows="10" cols="10" name="message" id="message"
                                  required minlength="10">{{old('message')}}</textarea>
                        {!! $errors->first('message','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Envoyer votre Message &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection