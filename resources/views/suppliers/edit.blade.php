@extends('layouts.app')

@section('content')
    <h1>Edit Supplier</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname', $supplier->firstname) }}">
        </div>
        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname', $supplier->lastname) }}">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="Male" {{ $supplier->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $supplier->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ $supplier->gender == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $supplier->date_of_birth) }}">
        </div>
        <div>
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" value="{{ old('street', $supplier->street) }}">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="{{ old('city', $supplier->city) }}">
        </div>
        <div>
            <label for="province_or_state">Province/State:</label>
            <input type="text" name="province_or_state" id="province_or_state" value="{{ old('province_or_state', $supplier->province_or_state) }}">
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" value="{{ old('country', $supplier->country) }}">
        </div>
        <div>
            <label for="zipcode">Zip Code:</label>
            <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $supplier->zipcode) }}">
        </div>
        <button type="submit">Update Supplier</button>
    </form>
@endsection
