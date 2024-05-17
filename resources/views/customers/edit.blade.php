@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Customer</h1>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" value="{{$customer->firstname}}">
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" name="middlename" class="form-control" value="{{$customer->middlename}}">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" value="{{$customer->lastname}}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" value="{{$customer->gender}}">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{$customer->date_of_birth}}">
            </div>
            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" class="form-control" value="{{$customer->street}}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{$customer->city}}">
            </div>
            <div class="form-group">
                <label for="province_or_state">Province/State</label>
                <input type="text" name="province_or_state" class="form-control" value="{{$customer->province_or_state}}">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" value="{{$customer->country}}">
            </div>
            <div class="form-group">
                <label for="zipcode">Zip Code</label>
                <input type="text" name="zipcode" class="form-control" value="{{$customer->zipcode}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
@endsection
