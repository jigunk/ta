<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Dosen;
use common\models\Mahasiswa;
use common\models\Ujian;
//use common\components\MyHelper;

$title = 'hehooo';
?>


<style type="text/css">
.center{
    text-align: center;

}
</style>
<div class="col-md-12">

  <div class="panel panel-default">
    <div class="panel-heading">
    <div class="center">
    <h5>LAPORAN BIMBINGAN TUGAS AKHIR DAN UJIAN AKHIR<br>
    PROGRAM SARJANA<br>
    FAKULTAS TEKNOLOGI INFORMASI <br> 
    SEMESTER GENAP / 2012-2013</h5></div></div>
    </br>
    <div class="panel-body">
      <table>
        <tr>
        <td> Nama Dosen </td>
        <td> &nbsp;&nbsp;&nbsp;: 
        </td>
        <td> &nbsp;&nbsp; Gareng, Ph. D
       
        </td>
        </tr>
       </br>
        <tr>
        <td> Program Studi </td>
        <td> &nbsp;&nbsp;&nbsp;: </td>
        <td> &nbsp;&nbsp;
            '.$data['nama'].'
        </td>
        </tr>
      </table>
        
    </div>
    </div>
       <h3> I Bimbingan Tugas Akhir </h3>
       <p>Daftar Mahasiswa yang telah di bimbing</p>
       <div class="panel panel-default">
        <div class="panel-heading">
       <table class="table table-bordered table-striped">
               <tr>
               <td>No</td>
               <td>NIM</td>
               <td>NAMA</td>
               <td>Program Studi</td>
               <td>  </td>
               </tr>
            <?php
            $sql =  "select m.nim,m.nama,p.nama_progdi 
                    from tb_mahasiswa m
                    join progdi p on p.kd_progdi = m.progdi
                    where pembimbing_1 = 67001 or pembimbing_2 = 67001;";
            $connection = \Yii::$app->db;
            $model = $connection->createCommand($sql);
            $users = $model->queryAll();
            // var_dump($users);

            $no = 1;
            foreach ($users as $v) {         
            ?> 
               <tr>
               <td><?=$no; ?></td>
               <td><?=$v['nim']; ?></td>
               <td><?=$v['nama']; ?></td>
               <td><?=$v['nama_progdi']; ?></td>
               <td>  </td>
               </tr>
           <?php $no++;} ?>
       </table>
       </div>
    </div>

     <h3> Ujian </h3>
       <p>Sebagai Penguji</p>

        <div class="panel panel-default">
        <div class="panel-heading">
       <table class="table table-bordered table-striped">
          <tr>
             <td>No</td>
             <td>Program Studi</td>
             <td>Tanggal Ujian</td>
             <td>Jumlah Mahasiswa</td>
             <td> Keterangan </td>
           </tr>
            <?php
            $sql =  "select penguji_1, substr(nim,1,2)  as 'kode_progdi',count(substr(nim,1,2)) as 'jumlah'
                        from tb_ujian 
                        where penguji_1 = 67506
                        group by substr(nim,1,2);";
            $connection = \Yii::$app->db;
            $model = $connection->createCommand($sql);
            $users = $model->queryAll();
            // var_dump($users);

            $no = 1;
            $total = 0;
            foreach ($users as $v) {   
            $total = $total + $v['jumlah'];      
            ?> 
               <tr>
               <td><?=$no; ?></td>
               <td><?=$v['kode_progdi']; ?></td>
               <td>-</td>
               <td><?=$v['jumlah']; ?></td>
               <td>  </td>
               </tr>
           <?php $no++;} ?>
           <tr>
             <td colspan="3">Total</td>
             <td><?= $total;</td>
           </tr>
           
       </table>
       </div>
    </div>

    
    <div class="row">
        <div class="col-sm-4">
         
        </div>
        <div class="col-sm-4">          

        </div>
        <div class="col-sm-4">
          Salatiga, 19 Maret 2013

        </div>
    </div>
<br>
<br>
    <div class="row">
        <div class="col-sm-4">
            Mengetahui
            
            <br>
            <br>

  
            Pembantu Rektor 1
        </div>
        <div class="col-sm-4">          
            Mengetahui
            <br>
            <br>
            Koordinator TA-FTI
        </div>
        <div class="col-sm-4">
          Yang Melaporkan
          <br>
          <br>
          Yani Rahardja, S.E., MM.
        </div>
    </div>


    </div>
  </div>
</div>