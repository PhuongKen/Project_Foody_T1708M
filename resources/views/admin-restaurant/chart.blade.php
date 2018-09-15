@extends('layout.admin-restaurant',['page_title'=>'Admin Restaurant','active'=>''])
@section('content')
    <div class="row mb-5">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
    <h3 style="text-align: center ; color: #1b8a4d">Doanh thu nhà hàng</h3>
    <canvas id="canvas" style="width: 200px; height: 100px;"></canvas>
    <h3 style="text-align: center ; color: #1b8a4d">Những món ăn bán chạy</h3>
    <canvas id="canvas1" width="200px" height="100px"></canvas>
@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                var listOfDate = new Array();
                var revenueByDate = new Array();
                $.get('/admin/chart-demo?startDate='+ startDate + '&endDate=' + endDate, function (response) {
                    for (var i = 0; i < response.length; i++) {
                        listOfDate.push(response[i].day);
                        revenueByDate.push(response[i].revenue);
                    }
                    var ctx = document.getElementById("canvas").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: listOfDate,
                            datasets: [{
                                label: 'Doanh thu từ ' + startDate + ' đến ' + endDate,
                                data: revenueByDate,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                });
            });

            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                var listOfDate1 = new Array();
                var revenueByDate1 = new Array();
                var name1 = new Array();
                $.get('/admin/chart-restaurant?startDate='+ startDate + '&endDate=' + endDate, function (response) {
                    for (var i = 0; i < response.length; i++) {
                        listOfDate1.push(response[i].day);
                        revenueByDate1.push(response[i].revenue);
                        name1.push(response[i].nameFood);
                    }
                    var ctx = document.getElementById("canvas1").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: name1,
                            datasets: [{
                                data: revenueByDate1,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                });
            });

        })


    </script>
@endsection