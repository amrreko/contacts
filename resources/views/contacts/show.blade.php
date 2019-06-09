@extends('layouts.app')

@section('content')
    <h1> {{ $contact->fullname }}</h1>

        <table class="table table-bordered" style="width: 50%;">
            <tr><td>set_id:</td><td> {{ $contact->set_id }}</td></tr>
            <td>phone:</td><td> {{ $contact->phone }}</td></tr>
            <td>facebook:</td><td> {{ $contact->facebook }}</td></tr>
            <td>image:</td><td> {{ $contact->image }}</td></tr>
            <td>from:</td><td> {{ $contact->from }}</td></tr>
            <td>city:</td><td> {{ $contact->city }}</td></tr>
            <td>address:</td><td> {{ $contact->address }}</td></tr>
            <td>danger:</td><td> {{ $contact->danger }}</td></tr>
            <td>information:</td><td> {{ $contact->information }}</td></tr>
            <td>facebook2:</td><td> {{ $contact->facebook2 }}</td></tr>
            <td>image2:</td><td> {{ $contact->image2 }}</td></tr>
            <td>phone2:</td><td> {{ $contact->phone2 }}</td></tr>

            <td>user_id:</td></tr><td> {{ $contact->user_id }}</td></tr>
        </table>
@endsection
