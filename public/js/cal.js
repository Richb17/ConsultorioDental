document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        navLinks: true,

        initialView: 'dayGridMonth',
        nowIndicator: true,
        eventLimit: true,
        eventColor: "#E0607E",

        locale: "es",

        headerToolbar: {
            left: "",
            center: "title",
            right: "prev,today,next"
        },

        dateClick: function(info) {
            $("#consulta").modal("show");
            $("#fecha").val(info.dateStr);
            //alert("Fecha " + info.date.getDate() + " " + (info.date.getMonth() + 1) + " " + info.date.getFullYear());
        }

    });

    calendar.render();
});