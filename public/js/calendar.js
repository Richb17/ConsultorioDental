//const { default: axios } = require("axios");

document.addEventListener('DOMContentLoaded', function() {
    let formulario = document.querySelector('form');

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        eventLimit: true,
        eventColor: "#E0607E",

        locale: "es",

        headerToolbar: {
            left: "dayGridMonth",
            center: "title",
            right: "prev,today,next"
        },

        events: "/calendar/mostrar",

        dateClick: function(info) {
            $("#consulta").modal("show");
            $("#fecha").val(info.dateStr);
            //alert("Fecha " + info.date.getDate() + " " + (info.date.getMonth() + 1) + " " + info.date.getFullYear());
        }

    });

    calendar.render();

    document.getElementById("guardarEvento").addEventListener("click", function() {
        const datos = new FormData(formulario);
        console.log(datos);
    });
});