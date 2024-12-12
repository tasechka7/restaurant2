<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Reservation</title>
</head>
<body>
    <h1>New Reservation Created</h1>
    <p><strong>Name:</strong> {{ $reservation->name }}</p>
    <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
    <p><strong>Number of People:</strong> {{ $reservation->number_of_people }}</p>
    <p><strong>Reservation Type:</strong> {{ $reservation->reservation_type }}</p>
    <p><strong>Date:</strong> {{ $reservation->date }}</p>
    <p><strong>Time:</strong> {{ $reservation->time }}</p>
    <p><strong>Message:</strong> {{ $reservation->message }}</p>
</body>
</html>
