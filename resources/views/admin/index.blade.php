<?php
$dataPoints = array();
foreach ($bills as $bill) {
    $dataPoints[] = ["y" => $bill->total, "label" => $bill->monthNum];
    //echo json_encode($dataPoints);
}
?>
@extends('admin.home')
@section('title',"Báo cáo")
@push('css')
{!! Charts::assets() !!}
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endpush
@section('content')
    <div class="container-fluid" style="min-height: 1000px;">
        <h1>Biểu đồ thống kê số lượng đơn hàng hàng tháng</h1>
        {!! $chart->render() !!}
        <div id="chart1" style="width:50%;float: left;"></div>
        <div id="chart2" style="width:50%;float: right;"></div>
        <script type="text/javascript">
            $(function () {
                var chart = new CanvasJS.Chart("chart1", {
                    theme: "theme1",
                    animationEnabled: true,
                    data: [
                        {
                            type: "area",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }
                    ]
                });
                chart.render();
            });
            $(function () {
                var chart = new CanvasJS.Chart("chart2", {
                    theme: "theme1",
                    animationEnabled: true,
                    data: [
                        {
                            type: "column",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }
                    ]
                });
                chart.render();
            });
        </script>
    </div>
@endsection
