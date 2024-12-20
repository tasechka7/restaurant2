<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateReservationRequest;
use App\Http\Requests\ReservationRequest; // Подключаем кастомный Request для валидации

class ReservationController extends Controller
{    public function index() {
    $reservations = Reservations::all();
    return view("reservations.index", compact("reservations"));
}

// В MenuController
public function create() {

return view("reservations.create", compact("reservation"));
}


public function store(ReservationRequest $request)
{
    // Валидация данных через ReservationRequest
    $validatedData = $request->validated();

    // Сохранение данных в базу
    $reservation = new Reservations();
    $reservation->fill($validatedData);
    $reservation->save();

    // Отправка email
    Mail::to('julianeckal@gmail.com')->send(new \App\Mail\ReservationCreated($reservation));

    // Редирект с сообщением об успехе
    return redirect('/')
        ->with('success', 'Reservation created successfully! An email notification has been sent.'); // Flash-сообщение
}


public function updateStatus(UpdateReservationRequest $request, $id)
{
    $reservation = Reservations::findOrFail($id);
    $request->validate([
        'status' => 'required|in:in_processing,confirmed',
    ]);

    $reservation->status = $request->status;
    $reservation->save();

    return back()->with('success', 'Reservation status updated successfully!');
}


public function edit($id)
{
    $reservation = Reservations::findOrFail($id);
    $reservationTypes = Reservations::getReservationTypes();

    return view('reservations.edit', compact('reservation', 'reservationTypes'));
}

public function update($id, UpdateReservationRequest $request)
{
$reservation = Reservations::findOrFail($id);
$data = $request->validated();

$reservation->update($data);

return redirect()->route("reservations.index")->with("success", "Menu item updated successfully.");
}


public function delete($id) {
    $reservation = Reservations::findOrFail($id);
    return view("reservations.delete", compact("reservation"));
}

public function destroy($id) {
    $reservation = Reservations::findOrFail($id);
    $reservation->delete();
    return redirect()->route("reservations.index")->with("success", "Menu item deleted successfully.");
}
}
