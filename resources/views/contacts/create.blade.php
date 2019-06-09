@extends('layouts.app')

@section('content')
        <h1>Add New Contact</h1>
    <hr>
    <form action="{{route('contacts.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Fullname">Fullname</label>
            <input type="text" class="form-control" id="fullname"  name="fullname">
        </div>
        <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="phone"  name="phone">
        </div>
        <div class="form-group">
            <label for="Facebook">Facebook</label>
            <input type="text" class="form-control" id="facebook"  name="facebook">
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
        <input type="file" class="form-control" id="image"  name="image">
        </div>
        <div class="form-group">
            <label for="From">From</label>
            <input type="text" class="form-control" id="from"  name="from">
        </div>
        <div class="form-group">
            <label for="City">City</label>
            <input type="text" class="form-control" id="city"  name="city">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="address"  name="address">
        </div>
        <div class="form-group">
            <label for="Set id">Set id</label>
            <input type="text" class="form-control" id="set_id"  name="set_id">
        </div>
        <div class="form-group">
            <label for="description">Information</label>
            <textarea class="form-control" id="Information" name="information"></textarea>
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
