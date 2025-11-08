<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Events</h1>
        <div id="calendar"></div>
    </div>
</main>

<!-- Modal Structure -->
<div id="addEventModal" class="modal">
    <div class="modal-content">
        <h4>Add Event</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="event_title" type="text" class="validate">
                        <label for="event_title">Event Title</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" id="addEventButton" class="modal-close waves-effect waves-green btn-flat">Add</a>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var modal = document.getElementById('addEventModal');
        var modalInstance = M.Modal.init(modal, {});
        var eventTitleInput = document.getElementById('event_title');
        var addEventButton = document.getElementById('addEventButton');
        var selectedDate = null;

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            dateClick: function(info) {
                selectedDate = info.dateStr;
                modalInstance.open();
            }
        });

        addEventButton.addEventListener('click', function() {
            var title = eventTitleInput.value;
            if (title && selectedDate) {
                calendar.addEvent({
                    title: title,
                    start: selectedDate,
                    allDay: true
                });
                eventTitleInput.value = '';
            }
        });

        calendar.render();
    });
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
