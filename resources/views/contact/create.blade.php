@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Nous contacter</h2>
                <p>
                    Si vous rencontrez des problèmes avec nos services,
                    Veuiller <a href="mailto:{{ config('saleby.admin_support_email') }}">demander de l'aide</a>.
                </p>

                <form class="" action="{{ route('contact_path') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required >
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required >
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="10" cols="10" required>{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" formnovalidate>Soumettre &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
