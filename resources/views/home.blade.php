@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LeadList</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Action</th>
                        </tr>

                        @foreach ($users as $indexKey=>$user)
                        <tr>
                            <td>  {{ $user->firstname }} </td>
                            <td>  {{ $user->phonenumber }} </td>
                            <td>
                                <a href="{{ url("home/view/$user->id") }}" class="btn btn-xs btn-info pull-right">Detail Info</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
