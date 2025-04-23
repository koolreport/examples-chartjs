<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <title>KoolReport Examples &amp; Demonstration</title>

    <link href="./assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">

    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .fa-plus-square-o,
    .fa-minus-square-o {
        cursor: pointer;
    }
</style>
<script>
    function toggleExpandCollapse(i) {
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }

    function toggleExpandCollapseAll(i) {
        let div = i.parentElement.parentElement;
        let expandCollapseButtons = div.querySelectorAll('.expand-collapse');
        expandCollapseButtons.forEach(function(btn) {
            if (i.classList.contains('fa-plus-square-o')) {
                if (btn.classList.contains('fa-plus-square-o')) {
                    btn.click();
                }
            } else if (i.classList.contains('fa-minus-square-o')) {
                if (btn.classList.contains('fa-minus-square-o')) {
                    btn.click();
                }
            }
        })
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }
</script>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a id="baseUrl" class="navbar-brand" href="https://www.koolreport.com/examples">KoolReport Examples</a>
        <a id="repoUrl" class="navbar-brand" href="https://github.com/koolreport/examples-datasources">GitHub</a>
        <ul id="topMenu" class="navbar-nav mr-auto">

        </ul>
        <div class="my-2 my-lg-0">
            <a href="https://www.koolreport.com/get-koolreport-pro" class="btn-get-koolreort-pro btn btn-outline-success my-2 my-sm-0">Get KoolReport Pro</a>
        </div>
    </nav>
    <main class="container">
        <?php
        $root_url = ".";
        $reportJson = <<<EOD
            {
                "EXTENDED PACKAGES": {
                    "<i class='fa fa-line-chart'></i>ChartJs": {
                        "Collection": "/reports/chartjs/collection/",
                        "Types" : {
                            "Column": "/reports/chartjs/column_chart/",
                            "Bar": "/reports/chartjs/bar_chart/",
                            "Area": "/reports/chartjs/area_chart/",
                            "Line": "/reports/chartjs/line_chart/",
                            "Pie": "/reports/chartjs/pie_chart/",
                            "Donut": "/reports/chartjs/donut_chart/",
                            "Polar": "/reports/chartjs/polar_chart/",
                            "Radar": "/reports/chartjs/radar_chart/",
                            "Scatter": "/reports/chartjs/scatter_chart/",
                            "Bubble": "/reports/chartjs/bubble_chart/",
                            "Combo": "/reports/chartjs/combo_chart/",
                            "Multi-axis": "/reports/chartjs/multi_axes/",
                            "Timeline": "/reports/chartjs/timeline/",
                            "Overlap Bar": "/reports/chartjs/overlap_barchart/",
                            "Color Scheme": "/reports/chartjs/color_scheme/"
                        },
                        "Bar": {
                            "Vertical": "/reports/chartjs/Bar_Chart_Vertical/",
                            "Horizontal": "/reports/chartjs/Bar_Chart_Horizontal/",
                            "Multi axis": "/reports/chartjs/Bar_Chart_Multi_Axis/",
                            "Stacked": "/reports/chartjs/Bar_Chart_Stacked/",
                            "Stacked groups": "/reports/chartjs/Bar_Chart_Stacked_Groups/"                
                        },
                        "Line": {
                            "Basic": "/reports/chartjs/line_chart_basic/",
                            "Mutli axis": "/reports/chartjs/Line_Chart_Multi_Axis/",
                            "Stepped": "/reports/chartjs/Line_Chart_Stepped/",
                            "Interpolation": "/reports/chartjs/Line_Chart_Interpolation/",
                            "Line styles": "/reports/chartjs/Line_Chart_Line_Styles/",
                            "Point styles": "/reports/chartjs/Line_Chart_Point_Styles/",
                            "Point sizes": "/reports/chartjs/Line_Chart_Point_Sizes/"
                        },
                        "Area": {
                            "Boundaries": "/reports/chartjs/Area_Chart_Boundaries(line)/",
                            "Datasets": "/reports/chartjs/Area_Chart_Datasets(line)/",
                            "Stacked": "/reports/chartjs/Area_Chart_Stacked(line)/",
                            "Radar": "/reports/chartjs/Area_Chart_Radar/"
                        },
                        "Others": {
                            "Scatter": "/reports/chartjs/Other_Chart_Scatter/",
                            "Scatter - Multi axis": "/reports/chartjs/Other_Chart_Scatter_Multi_Axis/",
                            "Doughnut": "/reports/chartjs/Other_Chart_Doughnut/",
                            "Pie": "/reports/chartjs/Other_Chart_Pie/",
                            "Polar area": "/reports/chartjs/Other_Chart_Polar_Area/",
                            "Radar": "/reports/chartjs/Other_Chart_Radar/",
                            "Combo bar/line": "/reports/chartjs/Other_Chart_Combo_Bar_Line/"
                        },
                        "Linear Scale": {
                            "Step size": "/reports/chartjs/Linear_Scale_Step_Size/",
                            "Min & max": "/reports/chartjs/Linear_Scale_Min&Max/",
                            "Min & max (suggested)": "/reports/chartjs/Linear_Scale_Min&Max(suggested)/"
                        },
                        "Logarithmic Scale": {
                            "Line": "/reports/chartjs/Logarithmic_Scale_Line/",
                            "Scatter": "/reports/chartjs/Logarithmic_Scale_Scatter/"
                        },
                        "Time Scale": {
                            "Line": "/reports/chartjs/Time_Scale_Line/",
                            "Line (point data)": "/reports/chartjs/Time_Scale_Line(point_data)/",
                            "Time Series": "/reports/chartjs/Time_Scale_Time_Series/",
                            "Combo": "/reports/chartjs/Time_Scale_Combo/"
                        },
                        "Scale Options": {
                            "Grid lines display": "/reports/chartjs/Scale_Options_Grid_Lines_Display/",
                            "Grid lines style": "/reports/chartjs/Scale_Options_Grid_Lines_Style/",
                            "Multiline labels": "/reports/chartjs/Scale_Options_Multiline_Labels/",
                            "Filtering Labels": "/reports/chartjs/Scale_Options_Filtering_Labels/",
                            "Non numeric Y Axis": "/reports/chartjs/Scale_Options_Non_Numeric_Y_Axis/",
                            "Toggle Scale Type": "/reports/chartjs/Scale_Options_Toggle_Scale_Type/"
                        },
                        "Legend": {
                            "Positioning": "/reports/chartjs/Legend_Positioning/",
                            "Point style": "/reports/chartjs/Legend_Point_Style/",
                            "Callbacks": "/reports/chartjs/Legend_Callbacks/"
                        },
                        "Tooltip": {
                            "Positioning": "/reports/chartjs/Tooltip_Positioning/",
                            "Interactions": "/reports/chartjs/Tooltip_Interactions/",
                            "Callbacks": "/reports/chartjs/Tooltip_Callbacks/",
                            "Border": "/reports/chartjs/Tooltip_Border/",
                            "HTML tooltips (line)": "/reports/chartjs/Tooltip_HTML_Tooltips(line)/",
                            "HTML tooltips (pie)": "/reports/chartjs/Tooltip_HTML_Tooltips(pie)/",
                            "HTML tooltips (points)": "/reports/chartjs/Tooltip_HTML_Tooltips(points)/"
                        },
                        "Scriptable": {
                            "Bar Chart": "/reports/chartjs/Scriptable_Bar_Chart/",
                            "Bubble Chart": "/reports/chartjs/Scriptable_Bubble_Chart/",
                            "Pie Chart": "/reports/chartjs/Scriptable_Pie_Chart/",
                            "Line Chart": "/reports/chartjs/Scriptable_Line_Chart/",
                            "Polar Area Chart": "/reports/chartjs/Scriptable_Polar_Area_Chart/",
                            "Radar Chart": "/reports/chartjs/Scriptable_Radar_Chart/"
                        },
                        "Advanced": {
                            "Progress bar": "/reports/chartjs/Advanced_Progress_Bar/",
                            "Content Security Policy": "/reports/chartjs/Advanced_Content_Security_Policy/"
                        }
                    }
                }
            }        
        EOD;

        $menu = json_decode($reportJson, true);
        foreach ($menu as $section_name => $section) {
        ?>
            <h4 class="section-header"><?php echo $section_name; ?></h4>
            <div class="row">
                <?php
                foreach ($section as $group_name => $group) {
                    $hasChildArray = false;
                    foreach($group as $sname=>$surl) {
                        if(is_array($surl)) {
                            $hasChildArray = true;
                            break;
                        }
                    }
                ?>
                    <div class="col-md-3 example-group col-sm-6">
                        <h5>
                            <?php if ($hasChildArray) { ?>
                                <i class='fa fa-minus-square-o' data-toggle="collapse" onclick="toggleExpandCollapseAll(this);"></i>
                            <?php } ?>
                            <?php echo (strpos($group_name, "</i>") > 0) ? $group_name : "<i class='icon-layers'></i>$group_name"; ?></h5>
                        <ul class="list-unstyled">
                            <?php
                            foreach ($group as $sname => $surl) {
                                if (is_string($surl)) {
                            ?>
                                    <li><a href="<?php echo $root_url . $surl; ?>"><?php echo $sname; ?></a></li>
                                <?php
                                } else {
                                    $idName = $sname;
                                    $idName = str_replace(" ", "", $idName);
                                    $idName = str_replace("/", "", $idName);
                                    $idName = str_replace("&", "", $idName);
                                ?>
                                    <li>
                                        <strong><i class='fa fa-minus-square-o expand-collapse' data-toggle="collapse" data-target="#<?php echo $idName; ?>" onclick="toggleExpandCollapse(this);"></i> <?php echo $sname; ?></strong>
                                        <ul class="list-unstyled collapse show" id="<?php echo $idName; ?>">
                                            <?php
                                            foreach ($surl as $tname => $turl) {
                                            ?>
                                                <li><a href="<?php echo $root_url . $turl; ?>"><?php echo $tname; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </main>
</body>

</html>