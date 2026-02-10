@extends('layouts.app')

@section('content')
    <div class="container py-12">
        <h1 class="text-4xl font-bold mb-8">Book Your Trek</h1>
        <form action="{{ route('trek.storeBooking') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Dates</label>
                <input type="text" name="dates" class="form-control" required placeholder="e.g. March 15-25">
            </div>
            <button type="submit" class="btn btn-primary">Submit Booking</button>
        </form>
    </div>
@endsection