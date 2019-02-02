@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard<small class="float-right"><a href="{{ url('home') }}">Back to list</a></small></div>

                <div class="card-body">
                    <table class="table">
                        @foreach ($users as $user)
                        <tr> <td><strong>Name</strong></td><td>	{{ $user->firstname }}  {{ $user->lastname }} </td>  </tr>
                        <tr> <td><strong>Phonenumber</strong></td><td> {{ $user->phonenumber }} </td>  </tr>
                        <tr> <td><strong>Email</strong></td><td> {{ $user->email }} </td>  </tr>
                        <tr> <td><strong>Address</strong></td><td> {{ $user->address }} </td>  </tr>
                        <tr> <td><strong>Home Sqft</strong></td><td> {{ $user->squarefeet }} </td>  </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
