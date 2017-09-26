@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <th>name</th>
                            <th>city</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>contact</th>
                        </thead>
                        <tbody>
                        @foreach($interests as $interest)
                            <tr>
                                <td>{{$interest->name}}</td>
                                <td>{{$interest->city}}</td>
                                <td>{{$interest->mobile}}</td>
                                <td>{{$interest->email}}</td>
                                <td>{{$interest->contact}}</td>
                            </tr>

                        @endforeach
                        <tr>
                            <td colspan="5">
                                {{ $interests->links() }}
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
