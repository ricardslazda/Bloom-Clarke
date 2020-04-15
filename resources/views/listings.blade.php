@extends('base')
@section('content')
@section('active-page', 'Properties')
@section('page-id', 'listings')
@section('title', 'Bloom & Clarke | Property Listings')
    @if($filter)l
        @include('components.linktree', ['links' => ['listings', $propertyType['type']],'url' => '/backgrounds/house.jpg'])
    @else
        @include('components.linktree', ['links' => ['listings'], 'url' => '/backgrounds/house.jpg'])
    @endif
    <div class="listings-box container">
        <div class="listings__info">
            <h2><span class="listings__count">{{count($properties)}}</span>
                @if($filter)
                    {{ucfirst($propertyType['type'])}} Listings
                @else
                    Listings
                @endif</h2>
        </div>
        <div class="listings">
            @if(!$filter)
            <div class="listings__sidebar">
                <div class="listings__type">
                    <div class="listings__title-box">
                        <h6 class="listings__title">Type Of Property</h6>
                    </div>
                    <div class="listings__types">
                        <ul>
                            @foreach($propertyTypes as $propertyType)
                            <li><a href="{{getenv('APP_ROOT').'/listings/'.$propertyType["type"]}}">{{ucfirst($propertyType['type'])}} ({{count($propertyType->properties)}})</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <div class="listings__properties">
                @foreach($properties as $property)
                    @include('components.listing', ['property' => $property, 'propertyType' => $property->propertyType])
                    @endforeach
            </div>
        </div>
    </div>
    @endsection