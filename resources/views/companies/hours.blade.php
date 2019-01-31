@extends('layouts.app')

@section('title', 'Hours')

@section('navbar')
    @include('companies.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hours</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($requests as $request)
                                @if ($request->pivot->hour)
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div class="requests">
                                            <h3>{{ $request->user->name }} as requested to accept his hours</h3>
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>Week numbers</td>
                                                    <td>{{ $request->pivot->hour->week_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Hours</td>
                                                    <td>{{ $request->pivot->hour->hours_worked }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>{{ $request->pivot->hour->description }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <div class="btn-toolbar">
                                                @if ($request->pivot->hour->state == 0)
                                                    <a href="{{ route('company.acceptHours', ['hour' => $request->pivot->hour->id]) }}" class="btn btn-primary" style="width: 100%;">Accept</a>
                                                @else
                                                    <button type="button" class="btn btn-success" style="width: 100%;" disabled>Accepted</button>
                                                @endif
                                            </div>
                                            @if (!$request->pivot->hour->state == 1)
                                                <div class="btn-toolbar mt-2">
                                                    <a href="{{ route('company.declineHours', ['hour' => $request->pivot->hour->id]) }}" class="btn btn-danger" style="width: 100%;">Decline</a>
                                                </div>
                                            @endif
                                        </div>
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
