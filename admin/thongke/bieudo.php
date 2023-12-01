<div class="row">
<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php 
    $tongdm=count($listthongke);
    $i=1;
    foreach ($listthongke as $thongke) {
        extract($thongke);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
        $i+=1;
    }
  ?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1100, 'height':800};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</div>


<!-- 
<div class="row2 form_content ">
    <h1>Biểu đồ thống kê</h1>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="row">
        <div class="col-6">
            <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
            </div>
        </div>
    </div>




    <script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            // ['Italy',54.8],
            // ['France',48.6],
            // ['Spain',44.4],
            // ['USA',23.9],
            // ['Argentina',14.5]
            <?php 
            // print_r($listthongke);
            //     $tongdm=count($listthongke);
            //     $i=1;
            //     foreach ($listthongke as $thongke) {
            //         extract($thongke);
            //         if($i==$tongdm) $dauphay=""; else $dauphay=",";
            //         echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
            //         $i+=1;
            //     }
            ?>
        ]);

        // Set Options
        const options = {
            title: 'Thống kê sản phẩm theo loại',
            is3D: true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

    }

    </script>

</div> -->