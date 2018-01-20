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

    <div class="hero h-64 bg-cover"></div>

    <div class="bg-white shadow">
        <div class="container mx-auto flex items-center relative">
            <div class="w-1/4">
                <img src="https://api.adorable.io/avatars/285/hello@kieran.pro.png" alt="Avatar" class="rounded-full h-48 w-48 absolute pin-l pin-t -mt-24 border-4 border-solid border-white cursor-pointer">
            </div>
            <div class="w-1/2">
                <ul class="list-reset flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-indigo">
                        <a href="#">
                            <div class="text-sm font-bold tracking-tight mb-1">Poops</div>
                            <div class="text-lg tracking-right font-bold text-indigo">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-solid border-transparent">
                        <a href="#" class="text-grey-darker hover:n-underline hover:text-indigo">
                            <div class="text-sm font-bold tracking-tight mb-1 hover:text-indigo">Following</div>
                            <div class="text-lg tracking-right font-bold hover:text-indigo">120</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent">
                        <a href="#" class="text-grey-darker hover:n-underline hover:text-indigo">
                            <div class="text-sm font-bold tracking-tight mb-1 hover:text-indigo">Followers</div>
                            <div class="text-lg tracking-right font-bold hover:text-indigo">12,098</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-solid border-transparent hover:border-indigo">
                        <a href="#" class="text-grey-darker hover:n-underline hover:text-indigo">
                            <div class="text-sm font-bold tracking-tight mb-1 hover:text-indigo">Likes</div>
                            <div class="text-lg tracking-right font-bold hover:text-indigo">9</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-solid border-transparent">
                        <a href="#" class="text-grey-darker hover:n-underline hover:text-indigo">
                            <div class="text-sm font-bold tracking-tight mb-1 hover:text-indigo">Moments</div>
                            <div class="text-lg tracking-right font-bold hover:text-indigo">1</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div class="mr-6" class="text-grey-darker hover:n-underline">
                    <button class="bg-indigo hover:bg-indigo-dark text-white text-sm py-2 px-4 rounded-full">Following</button>
                </div>
                <div>
                    <a href="#"><i class="fal fa-ellipsis-v-alt fa-lg text-grey-dark"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex mt-3 text-sm leading-normal">
        <div class="w-1/4 pr-6 mt-8 mb-4">
            <h1><a href="" class="text-black">Kieran ☕</a></h1>
            <div class="mb-4"><a href="" class="text-grey-darker">{{ '@' . Auth::user()->username }}</a></div>
            <div class="mb-4">
                PHP Developer <a href="">@senshidigital</a> | Geein it heel toe here we go
            </div>

            <div class="mb-2">
                <i class="fal fa-location-arrow text-grey-darker mr-2 mb-2"></i><a href="#" class="text-grey-darker ">Glasgow, Scotland</a> <br>
                <i class="fal fa-link text-grey-darker mr-2 mb-2"></i><a href="#">kieran.pro</a> <br>
                <i class="fal fa-calendar-alt text-grey-darker mr-2 mb-2"></i><a href="#" class="text-grey-darker">Joined August 2017</a> <br>
                <i class="fal fa-birthday-cake text-grey-darker mr-2 mb-2"></i><a href="#" class="text-grey-darker">Born on February 13, 1997</a>
            </div>
        </div>
        <div class="w-1/2"></div>
        <div class="w-1/4"></div>
    </div>



@endsection