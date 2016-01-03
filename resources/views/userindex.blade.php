﻿@extends('layouts.main')
@section('head.title')
    Evangels English
@endsection
@section('body.content')

<ul class="list-group">
    @foreach($Posts as $p)
        <li class="active" style="list-style-type:none; padding-top: 10px">
            <a style="text-decoration: none; font-size: 20px;" href="/post/{{$p['id']}}">
                <img class='img-responsive' src="/images/imagePost/{{$p['Photo']}}" />
                <p>
                    {{$p['Title']}}
                </p>
                <p>
                    {{$p['Description']}}
                </p>
            </a>
        </li>
        </br>
    @endforeach
</ul>
<div class="row">{!! $Posts->render() !!}</div>

@endsection