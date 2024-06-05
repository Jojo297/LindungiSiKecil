<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LindungiSiKecil || Jadwal Imunisasi</title>
    <link rel="icon" href="{{ asset('image/logoLindungiSiKecil-removebg-preview2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
    <script src='fullcalendar/core/index.global.js'></script>
    <script src='fullcalendar/core/locales-all.global.js'></script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         initialView: 'dayGridMonth',
        //         events: '/user/events'
        //     });
        //     calendar.render();

        //     // Fetch data events from server
        //     fetch('/user/events')
        //         .then(response => response.json())
        //         .then(data => {
        //             // Add events to calendar
        //             data.forEach(event => {
        //                 calendar.addEvent({
        //                     title: event.title,
        //                     start: event.start,
        //                     allDay: event.allDay
        //                 });
        //             });
        //         });
        // });


        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         locale: 'id',
        //         initialView: 'dayGridMonth',
        //         events: '/user/events', // Menggunakan opsi events langsung
        //         eventClick: function(mouseEnterInfo) {
        //             alert('Event: nfkdsl');


        //             // change the border color just for fun
        //             info.el.style.borderColor = 'red';
        //         }
        //     });


        //     calendar.render();
        // });

        // calendar.setOption('locale', 'id');

        //     document.addEventListener('DOMContentLoaded', function() {
        //         var calendarEl = document.getElementById('calendar');
        //         var calendar = new FullCalendar.Calendar(calendarEl, {
        //             locale: 'id',
        //             initialView: 'dayGridMonth',
        //             eventClick: function(info) {
        //                 // alert('Status: ' + info.event.extendedProps.id);
        //                 const vaccinList = document.createElement('div');
        //                 // vaccinList.id = 'vaccine-' + newVaccineId;
        //                 vaccinList.innerHTML = `
    //                         <!-- modal lihat vaksin -->
    // <div id="modal-" tabindex="-2"
    //     class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    //     <div class="relative p-4 w-full max-w-md max-h-full">
    //         <!-- Modal content -->
    //         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    //             <!-- Modal header -->
    //             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
    //                 <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
    //                     Vaksin
    //                 </h3>
    //                 <button type="button"
    //                     class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
    //                     data-modal-toggle="modal-">
    //                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
    //                         viewBox="0 0 14 14">
    //                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
    //                             d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
    //                     </svg>
    //                     <span class="sr-only">Close modal</span>
    //                 </button>
    //             </div>
    //             <!-- Modal body -->
    //             <div class="p-4 md:p-5">
    //                 <p class="text-gray-500 dark:text-gray-400 mb-4">Umur
    //                     tahun bulan:</p>

    //                 <ul class="space-y-4 mb-4">
    //                     {{-- @foreach ($vaccines->where('id_schedule', $schedule->id_schedule) as $vaccine) --}}
    //                     <li>
    //                         <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer"
    //                             required />
    //                         <label for="job-1"
    //                             class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg">
    //                             <div class="block">
    //                                 <div class="w-full text-lg font-semibold">
    //                                     {{-- {{ $vaccine->type_vaccine }} --}}
    //                                 </div>

    //                             </div>

    //                             </form>

    //                         </label>
    //                     </li>
    //                     {{-- @endforeach --}}
    //                 </ul>
    //                 <button data-modal-target="modal-edit-" data-modal-toggle="modal-edit-"
    //                     class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    //                     Ubah / Tambah data
    //                 </button>
    //             </div>
    //         </div>
    //     </div>
    // </div>
    // {{-- modal lihat vaksin selesai --}}
    //                 `;
        //                 vaccinList1.appendChild(vaccinListItem1);

        //             }
        //         });
        //         calendar.render();

        //         // Fetch data events from server
        //         fetch('/user/events2')
        //             .then(response => response.json())
        //             .then(data => {
        //                 // Add events to calendar
        //                 data.forEach(event => {
        //                     calendar.addEvent({
        //                         title: event.title,
        //                         start: event.start,
        //                         allDay: event.allDay,
        //                         extendedProps: {
        //                             status: event.status,
        //                             id: event.id
        //                         }
        //                     });
        //                 });
        //             });
        //     });

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                initialView: 'dayGridMonth',
                eventClick: function(info) {
                    const vaccines = info.event.extendedProps.vaccines;
                    console.log(vaccines);
                    const vaccinList = document.createElement('div');
                    vaccinList.id = 'modal-' + info.event.extendedProps.id;
                    vaccinList.className =
                        'fixed top-0 left-0 w-full h-full z-50 overflow-y-auto flex items-center justify-center bg-black bg-opacity-50';
                    vaccinList.innerHTML = `
                    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
              ` + info.event.title + `
            </h3>
            <button type="button" class="close-modal text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <div class="p-4 md:p-5">
            <p class="text-gray-500 dark:text-gray-400 mb-4">Jenis vaksin:</p>
            <ul class="space-y-4 overflow-y-auto mb-4">
               
            ${vaccines.map(vaccine => `
                        <li>
                        <label for="vaccine-${vaccine}" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">${vaccine}</div>
                            </div>
                        </label>
                        </li>
                    `).join('')}
            </ul>
            <div class="py-2 text-gray-600 text-center">
              <p>Apakah anak anda sudah imunisasi?</p>
            </div>
            <div class="flex justify-center space-x-4">
              <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ya, sudah
              </button>
                                    <button type="button" id="modal-close" class="close-modal text-white inline-flex w-full justify-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Belum
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                    document.body.appendChild(vaccinList);

                    // Menambahkan event listener untuk menutup modal
                    vaccinList.querySelector('.close-modal').addEventListener('click',
                        function() {
                            document.body.removeChild(vaccinList);
                        });
                    document.getElementById('modal-close').addEventListener('click', function() {
                        document.body.removeChild(vaccinList);
                    });
                }
            });
            calendar.render();

            // Fetch data events from server
            fetch('/user/events2')
                .then(response => response.json())
                .then(data => {
                    // Add events to calendar
                    data.forEach(event => {
                        calendar.addEvent({
                            title: event.title,
                            start: event.start,
                            allDay: event.allDay,
                            className: 'cursor-pointer my-1 bg-red-500 hover:bg-red-600',
                            borderColor: '#E02424',
                            extendedProps: {
                                status: event.status,
                                id_child: event.id_child,
                                id_schedule: event.id_schedule,
                                title: event.title,
                                vaccines: event.vaccines
                            }
                        });
                    });
                });
        });
    </script>

</head>

<body class="bg-red-300">
    @extends('layout.navbar')
    <div class="p-4 pt-[90px]">
        <div class="p-4 border-2 border-gray-200 border-dashed bg-neutral-50 rounded-lg dark:border-gray-700">
            <div class="container px-4 pt-3">
                {{-- breadcrumb --}}
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="/user/dashboard"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-red-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Jadwal
                                    Imunisasi</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="container mx-auto px-2 pt-8">
                <h1 class="text-2xl font-sans font-bold text-gray-600 mb-6 lg:text-3xl">
                    <span class="underline underline-offset-3 decoration-8 decoration-red-400 dark:decoration-blue-600">

                        Jadwal Imunisasi
                    </span>
                </h1>
            </div> {{-- table --}}
            <div class="relative bg-white p-4 overflow-x-auto mt-10 shadow-md rounded-lg ">
                <div id='calendar'></div>
            </div>
        </div>



    </div>
    </div>
    </div>




    @vite('resources/js/app.js')
</body>

</html>
