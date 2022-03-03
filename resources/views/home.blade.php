@extends('layouts.default')

@section('pageTitle', 'Homepage')

@section('content')

    <div class="jumbo"></div>

    <main>
        <button class="button">CURRENT SERIES</button>

        <div class="container-card">
            @foreach($data as $value)

                <div class="card-dc">
                    <img src="{{ $value['thumb'] }}" alt="">
                    <p>{{ $value['series'] }}</p>
                </div>

            @endforeach
            
            <button class="button-load">LOAD MORE</button>
        </div>  
        
    </main>
    
@endsection