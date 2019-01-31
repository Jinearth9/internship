@extends('layouts.app')

@section('title', 'Pupils')

@section('navbar')
    @include('teachers.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pupils</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pupils as $name => $total)
                                <li class="list-group-item list-group-item-action">
                                    {{ $name }} has worked {{ $total }} hours in total
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
