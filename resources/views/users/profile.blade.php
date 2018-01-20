@extends('layouts.app')

@section('content')
    {{--<div class="container bg-black">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<h3><b>{{ $user->username }}</b>  <small>{{ $user->email }}</small></h3>--}}

                {{--@if (Auth::user()->isNotMe($user))--}}
                    {{--@if (Auth::user()->isFollowing($user))--}}
                        {{--<a href="{{ route('user.unfollow', $user) }}">UnFollow</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('user.follow', $user) }}">Follow</a>--}}
                    {{--@endif--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection