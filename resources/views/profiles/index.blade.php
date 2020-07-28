@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://instagram.fnag1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fnag1-1.fna.fbcdn.net&_nc_ohc=R4RWsNsSv3wAX_2m0Bk&oh=d52ae2e211217b750d57cc725d3934b2&oe=5F3FDE1F" class="rounded-circle" height="200px" width="200px">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>

                <div class="d-flex">
                    <div class="pr-5">
                        <strong>153</strong> posts
                    </div>
                    <div class="pr-5">
                        <strong>23K</strong> followers
                    </div>
                    <div class="pr-5">
                        <strong>212</strong> following
                    </div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div> 
            </div>  
        </div>
        <div class="row pt-4">

            <div class="col-4">
                <img src="https://instagram.fnag1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fnag1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=ZMEVZ1vjbpsAX8WxCvW&oh=4ba005ca5a6acbe2e347f11f894ae372&oe=5F3ED3DC" class="w-100">
            </div>

            <div class="col-4">
                <img src="https://instagram.fnag1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fnag1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=ZMEVZ1vjbpsAX8WxCvW&oh=4ba005ca5a6acbe2e347f11f894ae372&oe=5F3ED3DC" class="w-100">
            </div>

            <div class="col-4">
                <img src="https://instagram.fnag1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fnag1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=ZMEVZ1vjbpsAX8WxCvW&oh=4ba005ca5a6acbe2e347f11f894ae372&oe=5F3ED3DC" class="w-100">
            </div>
            
        </div>    
    </div>
@endsection
