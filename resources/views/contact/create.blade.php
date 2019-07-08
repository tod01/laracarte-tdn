@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <h1>Get in Touch</h1>
            <p class="text-muted">If you having trouble with this service, please <a href="mailto:umartoddiallo@gmail.com">ask for help</a>.</p>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required id="name">
                </div>
                 <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" required id="email">
                </div>
                 <div class="form-group">
                    <label for="name" class="sr-only">Message</label>
                    <textarea name="message" id="message" cols="90" required rows="10"></textarea>
                </div>
                 <div class="form-group">
                    <button class="btn btn-default btn-block">Submit Enquiry &raquo;</button>
                </div>
            </form>
        </div>
    </div>

</div>

@stop