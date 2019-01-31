@extends('layouts.app')

@section('title', 'Companies')

@section('navbar')
    @include('pupils.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($companies as $company)
                    @if ($company->pivot->state == 1)
                        <div class="card">
                            <div class="card-header">
                                You are now working at {{ $company->user->name }}<br>
                                Send in your hours
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pupil.sendHours', ['companyPupil' => $company->pivot->id]) }}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="week" class="col-md-4 col-form-label text-md-right">Week number</label>
                                        <div class="col-md-6">
                                            <input type="text" id="week" class="form-control{{ $errors->has('week') ? ' is-invalid' : '' }}" name="week" value="{{ isset($company->pivot->hour) ? $company->pivot->hour->week_number : '' }}" autofocus>

                                            @if ($errors->has('week'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('week') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="hours" class="col-md-4 col-form-label text-md-right">Hours worked this week</label>
                                        <div class="col-md-6">
                                            <input type="text" id="hours" class="form-control{{ $errors->has('hours') ? ' is-invalid' : '' }}" name="hours" value="{{ isset($company->pivot->hour) ? $company->pivot->hour->hours_worked : '' }}">

                                            @if ($errors->has('hours'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hours') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">Description of your work this week</label>
                                        <div class="col-md-6">
                                            <textarea name="description" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ isset($company->pivot->hour) ? $company->pivot->hour->description : '' }}</textarea>

                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            @if ($company->pivot->hour)
                                                @if ($company->pivot->hour->state == 0)
                                                    <button type="submit" class="btn btn-warning" disabled>
                                                        Sending...
                                                    </button>
                                                @else
                                                    <button type="submit" class="btn btn-success" disabled>
                                                        Sended
                                                    </button>
                                                @endif
                                            @else
                                                <button type="submit" class="btn btn-primary">
                                                    Send in hours
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
