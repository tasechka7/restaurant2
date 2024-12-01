<!-- resources/views/livewire/reservation-form.blade.php -->

<div class="form-reservation">
    <h1>Make A <span>Reservation</span></h1>

    <!-- Модальное окно -->
    @if (session('success'))
        <div id="popup-modal" tabindex="-1"
            class="fixed inset-0 flex justify-center items-center z-50 bg-gray-800 bg-opacity-70">
            <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover: bg-opacity-70 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5  text-center flex justify-center items-center w-[100%] flex-col gap-4">
                    <?xml version="1.0" encoding="utf-8"?><svg class="w-12 h-12 " version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88"
                        xml:space="preserve">
                        <style type="text/css">
                            <![CDATA[
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #3AAF3C;
                            }
                            ]]>
                        </style>
                        <g>
                            <path class="st0"
                                d="M61.44,0c33.93,0,61.44,27.51,61.44,61.44c0,33.93-27.51,61.44-61.44,61.44C27.51,122.88,0,95.37,0,61.44 C0,27.51,27.51,0,61.44,0L61.44,0L61.44,0z M39.48,56.79c4.6,2.65,7.59,4.85,11.16,8.78c9.24-14.88,19.28-23.12,32.32-34.83 l1.28-0.49h14.28C79.38,51.51,64.53,69.04,51.24,94.68c-6.92-14.79-13.09-25-26.88-34.47L39.48,56.79L39.48,56.79z" />
                        </g>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">{{ session('success') }}</h3>
                </div>
            </div>
        </div>
    @endif

    <!-- Форма -->
    <form id="reservationForm" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="text-form">
        <div class="top-form">
            <div>
                <input placeholder="Full Name*" type="text" name="name" id="name" value="{{ old('name') }}"
                    @error('name') autofocus @enderror>
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input placeholder="Phone Number*" type="text" name="phone" id="phone"
                    value="{{ old('phone') }}" @error('phone') autofocus @enderror>
                @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input placeholder="Number of People*" type="number" name="number_of_people" id="number_of_people"
                    value="{{ old('number_of_people') }}" @error('number_of_people') autofocus @enderror>
                @error('number_of_people')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="bottom-form">

            <div>
                <select id="reservation_type" name="reservation_type" @error('reservation_type') autofocus @enderror>
                    <option value="Business Lunch">Business Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Event">Event</option>
                    <option value="Private Event">Private Event</option>
                </select>
                @error('reservation_type')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input placeholder="Pick a Date" type="date" id="date" name="date"
                    value="{{ old('date') }}" @error('date') autofocus @enderror />
                @error('date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input placeholder="Pack Time" type="time" id="time" name="time" value="{{ old('time') }}"
                    @error('time') autofocus @enderror>
                @error('time')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
        <div>
            <textarea placeholder="Message" name="message" id="message" value="{{ old('message') }}"
                @error('message') autofocus @enderror></textarea>
            @error('message')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">BOOK A TABLE</button>
    </form>
</div>

<script>
    // Закрыть модальное окно
    function closeModal() {
        document.getElementById('popup-modal').style.display = 'none';
    }

    // Показать модальное окно при успешной отправке формы
    window.onload = function() {
        @if (session('success'))
            document.getElementById('popup-modal').style.display = 'flex';
        @endif
    };
</script>
