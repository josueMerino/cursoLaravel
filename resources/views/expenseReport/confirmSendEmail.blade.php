@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Send Email</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{$report->id}}/sendEmail" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type an email" value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-primary">Send e-mail</button>
            </form>
        </div>
    </div>

@endsection
