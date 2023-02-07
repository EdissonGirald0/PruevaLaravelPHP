import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    let formulario= document.querySelector("form");
    const calendarEl = document.getElementById('citas')
    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      timeZone: 'UTC',
      initialDate: new Date(Date.UTC(2023, 1, 1)),
      locale:"es",
      selectable: true,
      headerToolbar: {
        left: 'prev, prevYear, nextYear, next',
        center:'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'

      },
      dateClick: function(info) {
        //alert('Date: ' + info.dateStr);
        //alert('Resource ID: ' + info.resource.id);
        document.getElementById("#evento").Modal("show");
        console.log('Date: ' + info.dateStr)

      }
    });
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function () {
        const datos = new FormData(formulario);
        console.log(datos);

    });
  })
