@extends('base')
@section('page-id', 'listing')
@section('title', 'Bloom & Clarke | ' . $property['name'])
@section('active-page', 'Properties')
@section('content')
    @include('components.linktree', ['links' => ['listings', $propertyType['type']], 'url' => '/properties/' . $property['image_path'] . '.jpg'])
    <div class="loader-box">
    <span class="loader loader-quart-9"></span>
    </div>
<div class="container property stop-scroll">
    <div class="property__info">
        <h3 class="property__title">{{$property['name']}}</h3>
        <span class="property__address-small">
            <i class="fas fa-map-marker-alt"></i>
            {{$property['address']}}
        </span>
        <span class="property__price">${{number_format($property['price'], '0', '', "'")}}</span>
        <span class="property__sub-price">{{$property['size']}} square feet</span>
        <div class="property__agent-box">
            <div class="property__agent">
                <div class="property__agent-image-box">
                    <img src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/agents/'.$agent['image_path'].'.jpg'}}" alt="Agent Image" class="property__agent-image">
                </div>
                <div class="property__agent-info-box">
                    <h6 class="property__agent-name">{{$agent['name'].' '.$agent['surname']}}</h6>
                    <p class="property__agent-title">{{$agent['job_title']}}</p>
                    <span class="property__agent-number">
                        <i class="fas fa-phone-volume pr-2 mt-2"></i>
                        (123) {{$agent['phone_number']}}
                    </span>
                </div>
            </div>
            <div class="property__agent-buttons">
                <a class="property__agent-button">View listings</a>
                <a class="property__agent-button">Request info</a>
            </div>
        </div>
    </div>
    <div class="property__data">
        <div class="property__image-box">
            <img src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.$property['image_path'].'.jpg'}}" alt="Listing image" class="property__image">
        </div>
        <div class="property__details">
            <div class="property__details-title">
                Property Details
            </div>
            <div class="property__details-info">
                <div class="property__details-first">
                    <ul>
                        <li><b>Property ID:</b> {{$property['id']}}</li>
                        <li><b>Price:</b> ${{number_format($property['price'], '0', '', "'")}}</li>
                        <li><b>Property Size:</b> {{$property['size']}} Sq Ft</li>
                        <li><b>Bedrooms:</b> {{$property['bedrooms']}}</li>
                        <li><b>Bathrooms:</b> {{$property['bathrooms']}}</li>
                    </ul>
                </div>
                <div class="property__details-second">
                    <ul>
                        <li><b>Garage:</b> 1</li>
                        <li><b>Garage Size:</b> 458 SqFt</li>
                        <li><b>Year Built:</b> 2019-01-09</li>
                        <li><b>Property Type:</b> Full  Family Home</li>
                        <li><b>Property Status:</b> For rent</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="property__description">
            <div class="property__description-title">Description</div>
            <div class="property__description-description">
                {{$property['description']}}
            </div>
        </div>
        <div class="property__address">
            <div class="property__address-title">
                Address
            </div>
            <div class="property__address-info">
                <div class="property__address-first">
                    <ul>
                        <li><b>Address:</b> {{$property['address']}}</li>
                        <li><b>State/County:</b> San francisco</li>
                        <li><b>Area:</b> Embarcadero</li>
                    </ul>
                </div>
                <div class="property__address-second">
                    <ul>
                        <li><b>City:</b> {{$property['address']}}</li>
                        <li><b>Zip:</b> 4848494</li>
                        <li><b>Country:</b> United States</li>
                    </ul>
                </div>
            </div>
        </div>
        @include('components.map', ['lat' => $property['lat'], 'lng' => $property['lng'], 'title' => $property['name'], 'address' => $property['address']])
    </div>
</div>
    @endsection