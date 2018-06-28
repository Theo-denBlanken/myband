$(function() {

    var todayDate = moment().startOf('day');
    var YM = todayDate.format('YYYY-MM');
    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
    var TODAY = todayDate.format('YYYY-MM-DD');
    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

    $('#calendar').fullCalendar({
        lazyFetching: true,
        nowIndicator: true,
        titleFormat: 'DD MMMM YYYY',
        buttonText: {
            today:    'Today',
            month:    'month',
            week:     'week',
            day:      'day',
            list:     'list',
            allday:  'All Day'
        },
        header: {
            left: '',
            center: 'title',
            right: ''
        },
        footer: {
            center: 'prev,today,next'
        },
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        navLinks: false,
        defaultView: 'listWeek',
        events: 'index.php?data=calendar',
        // events: [
        //     {
        //         title: 'All Day Event',
        //         start: YM + '-01'
        //     },
        //     {
        //         title: 'Long Event',
        //         start: '2018-06-27T05:00:00',
        //         end: '2018-06-28T14:00:00'
        //     },
        //     {
        //         id: 999,
        //         title: 'Repeating Event',
        //         start: YM + '-09T16:00:00'
        //     },
        //     {
        //         id: 999,
        //         title: 'Repeating Event',
        //         start: YM + '-16T16:00:00'
        //     },
        //     {
        //         title: 'Conference',
        //         start: YESTERDAY,
        //         end: TOMORROW
        //     },
        //     {
        //         title: 'Meeting',
        //         start: TODAY + 'T10:30:00',
        //         end: TODAY + 'T12:30:00',
        //         color: 'red'
        //     },
        //     {
        //         title: 'Lunch',
        //         start: TODAY + 'T12:00:00'
        //     },
        //     {
        //         title: 'Meeting',
        //         start: TODAY + 'T14:30:00'
        //     },
        //     {
        //         title: 'Happy Hour',
        //         start: TODAY + 'T17:30:00'
        //     },
        //     {
        //         title: 'Dinner',
        //         start: TODAY + 'T20:00:00'
        //     },
        //     {
        //         title: 'Birthday Party',
        //         start: TOMORROW + 'T07:00:00'
        //     },
        //     {
        //         title: 'Click for Google',
        //         url: 'http://google.com/',
        //         start: YM + '-28'
        //     }
        // ]
    });
});
