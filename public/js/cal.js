document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        navLinks: true,

        initialView: 'dayGridMonth',
        nowIndicator: true,
        eventColor: "#E0607E",

        locale: "es",

        headerToolbar: {
            left: "prev,today,next",
            center: "title",
            right: "timeGridWeek,dayGridMonth"
        },

        dateClick: function(info) {
            $("#consulta").modal("show");
            //alert("Fecha " + info.date.getDate() + " " + (info.date.getMonth() + 1) + " " + info.date.getFullYear());
        }

    });

    calendar.render();
});