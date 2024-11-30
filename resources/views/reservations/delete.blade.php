@extends("layouts.guest")

@section('title', "Delete Reservation")

@section("main")
    <form  method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
        @csrf
        <h1>Delete Reservation</h1>
        <p>Are you sure you want to delete this reservation?</p>
        @method("DELETE")
        <button class="delete">Delete Reservation</button>
    </form>
@endsection