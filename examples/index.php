<?php
    require_once("../includes/connect.php");
    $sql = "SELECT * FROM `charts`";
    $result = mysqli_query($conn, $sql);
    $j = 0;
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while($rows = mysqli_fetch_array($result)) {
                $datas[$j][] = $rows;
                $j ++;
            }
        }
    }
    // print_r($datas);exit();  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <style>
        .canvasjs-chart-credit {
            display :none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-panel" style="width: 100%;">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <p class="card-Companyegory">Search</p>
                                </div>
                                <div class="card-body ">
                                    <div class = "row">
                                        <div class="col-md-6 col-sm-12">
                                            <select>
                                                <option>2019</option>
                                                <option>2020</option>
                                            </select>
                                            <select>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="" value="" placeholder="City"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card ">
                                <!-- <div class="card-header ">
                                    <h4 class="card-title">2017 Sales</h4>
                                    <p class="card-Companyegory">All products including Taxes</p>
                                </div> -->
                                <div class="card-body ">
                                    <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                                </div>
                                <!-- <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Core JS Files -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Chartist Plugin  -->
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- Chartist Implementation -->
<script type="text/javascript">
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            zoomEnabled: true,
            panEnabled: true,
            title: {
                text: "Graph For A Website",
                fontWeight: "bolder",
                fontColor: "#008B8B",
                fontFamily: "tahoma",        
                fontSize: 25,
                padding: 10     
            },
            legend: {
                horizontalAlign: "right", // left, center ,right 
                verticalAlign: "center",  // top, center, bottom
                fontSize: 12,
                fontFamily: "tahoma",
            },
            axisX: {
                title: "Company Name",
                titleFontFamily: "arial",
                titleFontSize: 12,
                labelFontFamily: "tahoma",
                labelFontSize: 13

            },
            axisY:{
                title : "Amount Of Access",
                titleFontFamily: "arial",
                titleFontSize: 12,
                labelFontFamily: "tahoma",
                labelFontSize: 13
                // maximum: 300    
            },
            data: [
                {
                type: "column",
                showInLegend: true, 
                legendText: "2019",
                dataPoints: [
                    {
                        x: 10, y: 75, label: "Company 1"
                    },
                    {
                        x: 20, y: 58, label: "Company 2"
                    },
                    {
                        x: 30, y: 55, label: "Company 3"
                    },
                    {
                        x: 40, y: 69, label: "Company 4"
                    },
                    {
                        x: 50, y: 98, label: "Company 5"
                    },
                    {
                        x: 60, y: 69, label: "Company 6"
                    },
                    {
                        x: 70, y: 30, label: "Company 7"
                    },
                    {
                        x: 80, y: 37, label: "Company 8"
                    },
                    {
                        x: 90, y: 19, label: "Company 9"
                    }
                ]
                },
                {
                type: "column",
                showInLegend: true, 
                legendText: "2020",
                dataPoints: [
                    {
                        x: 10, y: 70, label: "Company 1",
                        // x: 10, y: 75, label: "Company 1", indexLabel: "75"
                    },
                    {
                        x: 20, y: 50, label: "Company 2"
                    },
                    {
                        x: 30, y: 50, label: "Company 3"
                    },
                    {
                        x: 40, y: 60, label: "Company 4"
                    },
                    {
                        x: 50, y: 90, label: "Company 5"
                    },
                    {
                        x: 60, y: 60, label: "Company 6"
                    },
                    {
                        x: 70, y: 35, label: "Company 7"
                    },
                    {
                        x: 80, y: 40, label: "Company 8"
                    },
                    {
                        x: 90, y: 45, label: "Company 9"
                    }
                ]
                },
            ],
        });

        chart.render();
    }
</script>

</html>