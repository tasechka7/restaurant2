import "alpinejs";
import flatpickr from "flatpickr";
import "flatpickr/dist/themes/dark.css"; // Темная тема

flatpickr("#date", {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    minDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
        const selectedDate = selectedDates[0];
        const today = new Date();

        // Если выбрана сегодняшняя дата
        if (selectedDate.toDateString() === today.toDateString()) {
            updateTimepicker();
        } else {
            // Если любая другая дата, снимаем ограничения с времени
            flatpickr("#time", {
                enableTime: true,
                minTime: "10:00", // любое время
                maxTime: "23:59", // любое время
                time_24hr: true,
                noCalendar: true,
                defaultDate: new Date()  // Устанавливаем текущее время по умолчанию
            });
        }
    },
    onOpen: function() {
        const today = new Date();
        const selectedDate = new Date(this.input.value);

        if (selectedDate.toDateString() === today.toDateString()) {
            updateTimepicker();
        }
    }
});

// Функция для обновления ограничений времени на основе выбранной даты
function updateTimepicker() {
    flatpickr("#time", {
        enableTime: true,
        minTime: new Date().getHours() + 1 + ":00", // Следующий час
        maxTime: "23:59",
        time_24hr: true,
        noCalendar: true,
        defaultDate: new Date()  // Устанавливаем текущее время по умолчанию
    });
}

// Инициализация выбора времени с минимальным временем, если сегодня
flatpickr("#time", {
    enableTime: true,
    minTime: "10:00",
    maxTime: "00:00",
    time_24hr: true,
    noCalendar: true,
    defaultDate: new Date() // Устанавливаем текущее время по умолчанию
});
window.onload = function() {
    const form = document.getElementById('reservationForm');
    form.addEventListener('submit', function(event) {
        // Проверяем, есть ли ошибки
        const errors = document.querySelectorAll('.text-red-500');
        if (errors.length) {
            event.preventDefault(); // Предотвратить отправку формы

            // Прокручиваем страницу к концу формы
            const lastFormElement = form.querySelector('button[type="submit"]');
            
            if (lastFormElement) {
                window.scrollTo({
                    top: lastFormElement.offsetTop + lastFormElement.offsetHeight,
                    behavior: 'smooth'
                });
            }
        }
    });
};
