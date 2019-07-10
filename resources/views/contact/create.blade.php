@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <h1>Get in Touch</h1>
            <p class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help</a>.</p>
            <form action="{{route('contact_path')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required id="name">
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>
                 <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" required id="email">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                 <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea name="message" id="message" cols="90" required rows="10">{{old('message')}}</textarea>
                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                </div>
                 <div class="form-group">
                    <button class="btn btn-default btn-block">Submit Enquiry &raquo;</button>
                </div>
            </form>
        </div>
    </div>

</div>

@stop