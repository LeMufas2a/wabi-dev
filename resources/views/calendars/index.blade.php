
@extends('layouts.app', ['title' => __('Services Calendar')])
@section('admin_title')
    {{__('Menu')}}
@endsection
@section('content')
    

    <div class="header bg-gradient-primary pb-7 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            <div class="row align-items-center py-4">
              
                <div class="col-lg-12 col-12 text-right">
                    
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">{{ __('Service Calendar') }} </h3>
                                    </div>
                                    <div class="col-auto">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="col-12">
                        
                    </div>
                    
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    /* 
      Title -> Service Name 
      Start -> Each day of the month (instant booking)
      Start -> Service Arrival Date (Long booking)
      End -> Service Departure Date (Long booking)
    */

    var events_data = <?php echo $services_data;?>;
    

    console.log("events data",events_data);

    var today = new Date();

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
  
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
        //   right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        timeZone: 'local',
        initialDate: '2022-05-06',
        navLinks: false, // can click day/week names to navigate views
        businessHours: false, // display business hours
        editable: false,
        selectable: false,
        height: 650,
        events:events_data,
        eventClick: function(info) {
            // console.log('Event: ',info);
            // console.log('Event: ',info.event.extendedProps.service_description);
            // console.log('Event: ',info.event.extendedProps.service_available_days);
            // console.log('Event: ',info.event.extendedProps.service_image);
            $.confirm({
                title: info.event.title,
                // content: info.event.extendedProps.service_description,
                content: '' +
                        '<div class="form-group">' +
                          '<label>Description</label>' +
                          '<p class="h3">'+info.event.extendedProps.service_description+'</p>' +
                        '</div>'+
                        '<div class="form-group">' +
                          '<label>Service Days</label>' +
                          '<p class="h3">'+info.event.extendedProps.service_available_days+'</p>' +
                        '</div>'+
                        '<div class="form-group">' +
                          '<label>Service Image</label>' +
                          '<img src="uploads/service_items/'+info.event.extendedProps.service_image+'_thumbnail.jpg" alt="'+info.event.title+'" class="img-thumbnail">' +
                        '</div>',
                theme:'light',
                draggable: true,
            });        
        }
        // events: [
        //   {
        //     title: 'Business Lunch',
        //     start: today,
        //     constraint: 'businessHours'
        //   },
        //   {
        //     // title: 'Meeting',
        //     start: '2022-04-22T11:00:00',
        //     title: 'text of my choice', // defined below
        //     color: '#257e4a',
        //   },
        //   {
        //     // title: 'Conference',
        //     start: '2022-04-24',
        //     end: '2022-04-25',
        //     title: 'text of my choice another', // defined below
        //   },
        //   {
        //     title: 'Party',
        //     start: '2022-04-15T20:00:00',
        //     title: 'something of my', // defined below
        //   },
  
        //   // areas where "Meeting" must be dropped
        //   {
        //     groupId: 'availableForMeeting',
        //     start: '2022-04-12T10:00:00',
        //     end: '2022-04-13T16:00:00',
        //     display: 'background',
        //     title: 'off course', // defined below
        //   },
        //   {
        //     groupId: 'availableForMeeting',
        //     start: '2020-09-13T10:00:00',
        //     end: '2020-09-13T16:00:00',
        //     display: 'background'
        //   },
  
        //   // red areas where no events can be dropped
        //   {
        //     start: '2020-09-24',
        //     end: '2020-09-28',
        //     overlap: false,
        //     display: 'background',
        //     color: '#ff9f89'
        //   },
        //   {
        //     start: '2020-09-06',
        //     end: '2020-09-08',
        //     overlap: false,
        //     display: 'background',
        //     color: '#ff9f89'
        //   }
        // ]
      });
  
      calendar.render();
    });
  
  </script>
@endsection