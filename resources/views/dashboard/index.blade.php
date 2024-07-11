@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex align-items-center mb-3 mx-2">
                    <div class="mb-md-0 mb-3">
                        <h3 class="font-weight-bold mb-0">Selamat Datang {{ auth()->user()->name }}</h3>

                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="row mt-4">
            {{-- pegawai jumlah --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah User</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $user }}</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pegawai hadir --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M210.6 5.9L62 169.4c-3.9 4.2-6 9.8-6 15.5C56 197.7 66.3 208 79.1 208H104L30.6 281.4c-4.2 4.2-6.6 10-6.6 16C24 309.9 34.1 320 46.6 320H80L5.4 409.5C1.9 413.7 0 419 0 424.5c0 13 10.5 23.5 23.5 23.5H192v32c0 17.7 14.3 32 32 32s32-14.3 32-32V448H424.5c13 0 23.5-10.5 23.5-23.5c0-5.5-1.9-10.8-5.4-15L368 320h33.4c12.5 0 22.6-10.1 22.6-22.6c0-6-2.4-11.8-6.6-16L344 208h24.9c12.7 0 23.1-10.3 23.1-23.1c0-5.7-2.1-11.3-6-15.5L237.4 5.9C234 2.1 229.1 0 224 0s-10 2.1-13.4 5.9z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah Tanaman</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $tanaman }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pegawai terlambat --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">

                            <svg xmlns="http://www.w3.org/2000/svg" height="17" width="17"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M512 32c0 113.6-84.6 207.5-194.2 222c-7.1-53.4-30.6-101.6-65.3-139.3C290.8 46.3 364 0 448 0h32c17.7 0 32 14.3 32 32zM0 96C0 78.3 14.3 64 32 64H64c123.7 0 224 100.3 224 224v32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V320C100.3 320 0 219.7 0 96z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah Pupuk</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $pupuk }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card shadow-lg border">

                    <div class="card-body">
                        <div class="align-self-center">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap5',
                timeZone: 'local',
                locale: 'id',
                headerToolbar: {
                    end: 'prevYear,prev,today,next,nextYear'
                },
                buttonText: {
                    today: 'Hari Ini',
                },

                dayCellDidMount: function(info) {
                    var today = new Date();
                    var cellDate = info.date.getDate();
                    var cellMonth = info.date.getMonth();
                    var cellYear = info.date.getFullYear();

                    if (cellDate === today.getDate() && cellMonth === today.getMonth() && cellYear ===
                        today.getFullYear()) {
                        var cell = info.el;
                        cell.style.backgroundColor =
                            'rgba(0, 0, 0, 0.5)'; // Ubah warna latar belakang menjadi kuning untuk hari ini
                    }
                },

            });
            calendar.render();

        });
    </script>
@endsection
