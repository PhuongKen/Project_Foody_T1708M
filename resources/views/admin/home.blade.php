@extends('layout.admin-master',['page_title'=>'Chart'])
@section('content')
    <div class="container">
        <canvas id="canvas" width="200px" height="100px"></canvas>
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

        var url = "{{url('admin/chart')}}";
        var Years = new Array();
        var Labels = new Array();
        var Prices = new Array();
        var TotalPrice = new Array();
        $(document).ready(function () {
            $.get(url, function (response) {
                response.forEach(function (data) {
                    Years.push(data.created_at);
                    Labels.push(data.userID);
                    Prices.push(data.totalPrice);
                    $(document).ready(function () {
                        $.get(url, function (response) {
                            response.forEach(function (data) {
                                Years.push(data.updated_at);
                                Labels.push(data.name);
                                Prices.push(data.price);
                                // TotalPrice.push(data.totalPrice);
                            });
                            var ctx = document.getElementById("canvas").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: Years,
                                    datasets: [{
                                        label: 'Doanh thu các đơn đặt hàng online theo ngày',
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
                });
            });
        });
    </script>

@endsection