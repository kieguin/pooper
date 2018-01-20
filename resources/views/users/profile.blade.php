@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><b>{{ $user->username }}</b>  <small>{{ $user->email }}</small></h3>
            </div>
        </div>
    </div>
@endsection