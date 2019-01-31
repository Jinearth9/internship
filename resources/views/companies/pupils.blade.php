@extends('layouts.app')

@section('title', 'Pupils')

@section('navbar')
    @include('companies.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pupils</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pupils as $pupil)
{{--                                {{ $pupil->pivot->hour->state }}--}}
                                @if ($pupil->pivot->state == 1)
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        {{ $pupil->user->name }}
                                        <a href="{{ route('company.remove', ['companyPupil' => $pupil->pivot->id]) }}" class="btn btn-danger">Remove</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
