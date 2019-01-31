@extends('layouts.app')

@section('title', 'Search')

@section('navbar')
    @include('pupils.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form action="{{ route('pupil.searchView') }}" method="POST" class="form-inline my-2 justify-content-end">
                            @csrf

                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <ul class="list-group">
                            @foreach ($companies as $company)
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    {{ $company->name }}

                                    @if (count(Auth::user()->pupil->companies) > 0)
                                        @php
                                            $active = false;
                                        @endphp

                                        @foreach (Auth::user()->pupil->companies as $auth_company)
                                            @if ($auth_company->id == $company->company->id)
                                                @php
                                                    $active = true;
                                                @endphp

                                                @if ($auth_company->pivot->state == 0)
                                                    <button type="button" class="btn btn-warning" disabled>Applying...</button>
                                                @else
                                                    <button type="button" class="btn btn-success" disabled>Applied</button>
                                                @endif

                                                @break
                                            @endif
                                        @endforeach

                                        @if (!$active)
                                            <a href="{{ route('pupil.apply', ['company' => $company->company->id]) }}" class="btn btn-primary">Apply</a>
                                        @endif
                                    @else
                                        <a href="{{ route('pupil.apply', ['company' => $company->company->id]) }}" class="btn btn-primary">Apply</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="paginator mt-2 float-right">
                            {{ $companies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
