@extends('layout.admin-restaurant',['page_title'=>'Chart','active'=>''])
@section('content')
    <div class="container">
        <canvas id="canvas" width="200px" height="100px"></canvas>
    </div>
    <div class="container">
        <canvas id="canvas1" width="200px" height="100px"></canvas>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <script>
        //Doanh thu nhà hàng theo ngày
        var url = "{{url('admin/chart-restaurant')}}";
        var Years = new Array();
        var Labels = new Array();
        var Prices = new Array();
        var TotalPrice = new Array();
        $(document).ready(function () {
            $.get(url, function (response) {
                response.forEach(function (data) {
                    Years.push(data.updated_at);
                    Labels.push(data.name);
                    Prices.push(data.totalPrice);
                });
                var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: Years,
                        datasets: [{
                            label: 'Doanh thu nhà hàng theo ngày : ' + Labels[0],
                            data: Prices,
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

        //Doanh thu nhà hàng theo tháng
        var url1 = "{{url('admin/chart-restaurantmonth')}}";
        var Years1 = new Array();
        var Labels1 = new Array();
        var Prices1 = new Array();
        var TotalPrice = new Array();
        $(document).ready(function () {
            $.get(url1, function (response) {
                response.forEach(function (data) {
                    Years1.push(data.month);
                    Labels1.push(data.name);
                    Prices1.push(data.totalPrice);
                    // TotalPrice.push(data.totalPrice);
                });
                var ctx = document.getElementById("canvas1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: Years1,
                        datasets: [{
                            label: 'Doanh thu nhà hàng theo tháng :' + Labels1[0],
                            data: Prices1,
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
    </script>
@endsection