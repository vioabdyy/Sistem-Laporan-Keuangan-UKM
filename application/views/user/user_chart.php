<?php
$this->db->select('nilai,tanggal');
$data = $this->db->get("pemasukan")->result();
foreach ($dataukm as $k => $v) {
  $arrmasuk[] = ['label' => $v->tanggal, 'y' => $v->nilai];
}
/*print_r(json_encode($arrmasuk, -JSON_NUMERIC_CHECK));die();*/
?>
<?php
$this->db->select('nilai,tanggal');
$data1 = $this->db->get("pengeluaran")->result();
foreach ($data1 as $a => $b) {
  $arrkeluar[] = ['label' => $b->tanggal, 'y' => $b->nilai];
}
/*print_r(json_encode($arrkeluar, -JSON_NUMERIC_CHECK));die();*/
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class=""><a href="<?= base_url('user_dashboard') ?>">Home</a> / Chart </div>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid"> 
      <!DOCTYPE HTML>
      <html>
      <head>
        <script type="text/javascript">
          window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
            {
              title:{
                text: "Pemasukan"
              },
              data: [

              {
                /*dataPoints: [
                { x: 1, y: 297571, label: "Venezuela"},
                { x: 2, y: 267017,  label: "Saudi" },
                { x: 3, y: 175200,  label: "Canada"},
                { x: 4, y: 154580,  label: "Iran"},
                { x: 5, y: 116000,  label: "Russia"},
                { x: 6, y: 97800, label: "UAE"},
                { x: 7, y: 20682,  label: "US"},
                { x: 8, y: 20350,  label: "China"}
                ]*/
                dataPoints: 
                <?=json_encode($arrmasuk, -JSON_NUMERIC_CHECK);?>
                
              }
              ]
            });

            chart.render();
          }
        </script>
        

        <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
        <body>
         <div id="chartContainer" style="height: 300px; width: 100%;">
         </div>
       </body>
       </html>
     </div>
   </section>
 </div>