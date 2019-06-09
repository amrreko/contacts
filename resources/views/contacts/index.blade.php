@extends('layouts.app')

@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">SID</th>
            <th scope="col">Image</th>
            <th scope="col">Phone</th>
            <th scope="col">Facebook</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td><a href="{{URL::to('/contacts/'.$contact->id)}}">{{$contact->fullname}}</a></td>
                <th scope="row">{{$contact->set_id}}</th>
                <td>
                    @if($contact->image)
                  <a href="{{$contact->image}}">
                      <img src="{{$contact->image}}" style="height: 50px;width: 50px;">
                  </a>
                    @else
                    {{'no image'}}
                    @endif
                </td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->facebook}}</td>
                <td>{{$contact->created_at->toFormattedDateString()}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ URL::to('contacts/' . $contact->id . '/edit') }}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>&nbsp;
                        <form action="{{url('contacts', [$contact->id])}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
