<?php
    use \koolreport\chartjs\PieChart;

    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );
?>
<div class="container report-content">
    <div class="text-center">
        <h1>PieChart</h1>
        <p class="lead">
            This example shows how to draw beautiful PieChart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    PieChart::create(array(
        "title"=>"Sale Of Category",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "cost"=>array(
                "type"=>"number",
                "prefix"=>"$",
            )
        )
    ));
    ?>
    </div>

</div>
