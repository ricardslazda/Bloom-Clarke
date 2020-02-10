@extends('base')
@section('page-id', 'listing')
@section('active-page', 'Agents')
@section('title', 'Bloom & Clarke | Company Agents')
@section('content')
    @include('components.linktree', ['links' => ['agents'], 'url' => 'businessman.jpg'])
    <div class="agents-box container">
        <div class="agents__info">
        <h2><span class="agents__count">{{count($agents)}} </span>Agents</h2>
        </div>
        <div class="agents">
            <div class="agents__properties">
                @foreach($agents as $agent)
                <div class="agents__object">
                    <div class="agents__image-box">
                        <a><img class="agents__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/agents/'.$agent['image_path'].'.jpg'}}" alt="Agent"></a>
                    </div>
                    <div class="agents__content">
                        <div class="agents__details">
                            <h5 class="agents__title">
                                <a class="agents__name">{{$agent['name'].' '.$agent['surname']}}</a>
                            </h5>
                            <span class="agents__email"><i class="fa fa-envelope-o"></i> {{ucfirst($agent['email'])}}</span>
                        </div>
                        <h5>
                            <div class="agents__job-title">{{$agent['job_title']}}</div>
                            <p class="agents__phone"><i class="fa fa-phone"></i> {{$agent['phone_number']}}</p>
                        </h5>
                    </div>
                </div>
                    @endforeach
        </div>
    </div>
    </div>

@endsection