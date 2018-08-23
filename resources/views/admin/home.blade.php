@extends('layout.admin-master',['page_title'=>'Chart'])
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Chartjs</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Moltran</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Chartjs</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Line Chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart" data-type="Line" width="520" height="250"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Bar chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="bar" data-type="Bar" height="250" width="800" ></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Pie chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="pie" data-type="Pie" height="300" width="800" ></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Radar chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="radar" data-type="Radar" width="300" height="300"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Donut chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="doughnut" data-type="Doughnut" height="250" width="800" ></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Polar area chart</h3>
                </div>
                <div class="panel-body">
                    <canvas id="polarArea" data-type="PolarArea" width="300" height="250"> </canvas>
                </div>
            </div>
        </div>
    </div>


@endsection