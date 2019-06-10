@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Laravel 5.7 Ajax Request example</h1>
        <form>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="name" required="">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="password" required="">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="email" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>

        <form>
        <div class="form-group">
            <strong>Ajax text:</strong>
            <input type="text" name="sometext" class="form-control" placeholder="Enter text">
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-submit">Submit</button>
        </div>
        </form>
        <div class="col-3">
            <div class="alert alert-primary ajaxresponse" role="alert"></div>
        </div>
    </div>
@endsection
