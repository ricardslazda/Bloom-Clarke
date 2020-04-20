@extends('base')
@section('title', 'Bloom & Clarke')
@section('page-id', 'home')
@section('active-page', 'Home')
@section('content')
    @if(\App\classes\Session::has('landed'))

    @else
        <div class="house__loader">
            <div>
                <div class="house__text">
                    Bloom & Clarke
                </div>
            </div>
        </div>
        <?php \App\classes\Session::add('landed', true); ?>
    @endif
    <div class="landing__overlay"></div>
    <section class="landing__container">
        <div class="landing__listings">
            <div class="landing__listing" ><img class="landing__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.'1'.'.jpg'}}" alt=""></div>
            <div class="landing__listing"><img class="landing__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.'2'.'.jpg'}}" alt=""></div>
            <div class="landing__listing"><img class="landing__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.'3'.'.jpg'}}" alt=""></div>
            <div class="landing__listing"><img class="landing__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.'4'.'.jpg'}}" alt=""></div>
        </div>
    </section>
    <div class="landing__stats">
        <div class="landing__stats-box container">
            <div class="landing__active">
                <h3>138</h3>
                <p>Active Listings</p>
            </div>
            <div class="landing__sales">
                <div class="landing__active">
                    <h3>$640</h3>
                    <p>Million in sales</p>
                </div>
            </div>
            <div class="landing__happy">
                <div class="landing__active">
                    <h3>500+</h3>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
    <div class="landing__properties-box container">
    <div class="landing__properties">
        <div class="landing__property-big">
            <a href="listings/{{$listings[0]['propertyType']['type'].'/'.$listings[0]['property']['id']}}">
            <img class="landing__property-big-image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.$listings[0]['property']['image_path'].'.jpg'}}" alt="">
            <h4 class="landing__property-big-address">
                {{$listings[0]['property']['address']}}
            </h4>
            </a>
        </div>
        <div class="landing__properties-small">
            <div class="landing__row">
                @for($i=1;$i<3;$i++)
                <div class="landing__property-small">
                    <a href="listings/{{$listings[$i]['propertyType']['type'].'/'.$listings[$i]['property']['id']}}">
                    <img class="landing__property-small-image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.$listings[$i]['property']['image_path'].'.jpg'}}" alt="">
                    <h4 class="landing__property-small-address">
                        {{$listings[$i]['property']['address']}}
                    </h4>
                    </a>
                </div>
                @endfor
            </div>
            <div class="landing__row">
                @for($i=3;$i<5;$i++)
                    <div class="landing__property-small">
                        <a href="listings/{{$listings[$i]['propertyType']['type'].'/'.$listings[$i]['property']['id']}}">
                        <img class="landing__property-small-image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.$listings[$i]['property']['image_path'].'.jpg'}}" alt="">
                        <h4 class="landing__property-small-address">
                            {{$listings[$i]['property']['address']}}
                        </h4>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        </div>
    </div>
    @endsection