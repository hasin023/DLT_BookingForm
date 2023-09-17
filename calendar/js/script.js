var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];

$(function () {

    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime });
        });
    }

    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear(),

        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                right: 'dayGridMonth,dayGridWeek,list',
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            events: events,
            eventClick: function (info) {
                var details = $('#event-details-modal');
                var id = info.event.id;

                if (!!scheds[id]) {
                    details.find('#title').text(scheds[id].title);
                    details.find('#description').text(scheds[id].description);
                    details.find('#start').text(scheds[id].sdate);
                    details.find('#end').text(scheds[id].edate);
                    details.find('#edit,#delete').attr('data-id', id);
                    details.modal('show');
                } else {
                    alert("Event is undefined");
                }
            },
            eventDidMount: function (info) {
                var id = info.event.id;
                if (!!scheds[id]) {
                    info.el.style.backgroundColor = scheds[id].color;
                }
            },
            editable: true
        });

    calendar.render();

    $('#schedule-form').on('reset', function () {
        $(this).find('input:hidden').val('');
        $(this).find('input:visible').first().focus();
    });

    $('#delete').click(function () {
        var id = $(this).attr('data-id');

        if (!!scheds[id]) {
            var _conf = confirm("Are you sure to delete this scheduled event?");
            if (_conf === true) {
                location.href = "./delete_schedule.php?id=" + id;
            }
        } else {
            alert("Event is undefined");
        }
    });
});