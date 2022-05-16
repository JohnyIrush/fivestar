@extends('safaricomdaraja::layouts.app')

@section('content')
    <div class="card">
        <form id="account-balance-form">
            @csrf
            <button type="submit" class="btn btn-primary">Check Account Balance</button>
        </form>
    </div>
@endsection