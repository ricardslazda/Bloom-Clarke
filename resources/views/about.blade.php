@extends('base')
@section('title', 'Bloom & Clarke | Contact')
@section('page-id', 'contact')
@section('content')
    @include('components.linktree', ['links' => ['about'], 'url' => 'about.jpg'])
    <div class="about">
        <div class="about-box container">
            <div class="about__info">
                <h3>Buy or sell your house in few seconds with <span class="about__title">Bloom & Clarke</span>.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h4>Marketing Philosophy</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <h4>Administrative Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
    @endsection