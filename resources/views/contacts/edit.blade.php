@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    <hr>
        <form method="post" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="Fullname">Fullname</label>
                <input type="text" class="form-control" value="{{$contact->fullname}}"  name="fullname">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" value="{{$contact->phone}}"  name="phone">
            </div>
            <div class="form-group">
                <label for="Facebook">Facebook</label>
                <input type="text" class="form-control" value="{{$contact->facebook}}"  name="facebook">
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <input type="file" class="form-control" value="{{$contact->image}}"  name="image">
            </div>
            <div class="form-group">
                <label for="From">From</label>
                <input type="text" class="form-control" value="{{$contact->from}}"  name="from">
            </div>
            <div class="form-group">
                <label for="City">City</label>
                <input type="text" class="form-control" value="{{$contact->city}}"  name="city">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" value="{{$contact->address}}"  name="address">
            </div>
            <div class="form-group">
                <label for="Set id">Set id</label>
                <input type="text" class="form-control" value="{{$contact->set_id}}"  name="set_id">
            </div>
            <div class="form-group">
                <label for="description">Information</label>
                <textarea class="form-control" name="information">{{$contact->information}}</textarea>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endsection