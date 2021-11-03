<?php
     abstract class karyawan {
        public $no;
        public $nama;
        public $tempat_tanggal_lahir;
        public $jenis_kelamin;
        public $level_karyawan;
        public $status;
        public $gaji;
        abstract public function __construct($no,$nama,$tempat_tanggal_lahir,$jenis_kelamin,$level_karyawan);
    }

    class fulltime extends karyawan{
        public $status = "fulltime";
        public function __construct($no,$nama,$tempat_tanggal_lahir,$jenis_kelamin,$level_karyawan){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal_lahir = $tempat_tanggal_lahir;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level_karyawan = $level_karyawan;

            if($this->level_karyawan == "Senior"){
                $this->gaji = 5000000;
            }
            elseif($this->level_karyawan == "Amateur"){
                $this->gaji =  3500000;
            }
            else{
                $this->gaji = 2000000;
            }
        }  
    }
    class parttime extends karyawan{
        public $status = "parttime";
        public function __construct($no,$nama,$tempat_tanggal_lahir,$jenis_kelamin,$level_karyawan){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal_lahir = $tempat_tanggal_lahir;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level_karyawan = $level_karyawan;

            if($this->level_karyawan == "Senior"){
                $this->gaji = 5000000/2;
            }
            elseif($this->level_karyawan == "Amateur"){
                $this->gaji =  3500000/2;
            }
            else{
                $this->gaji = 2000000/2;
            }
        }
    }

    $karyawan = array();
    $karyawan[0] = new fulltime(1, "ANDI WIJAYA", "Pati, 2 November 1989 ", "Pria", "Senior");
    $karyawan[1] = new fulltime(2, "ALEX GRAHAMB", "Semarang, 13 Januari 1990 ", "Pria", "Amateur");
    $karyawan[2] = new parttime(3, "MARSINAH ALFI", "Kudus,31 oktober 2000 ", "Perempuan", "Amateur");
    $karyawan[3] = new parttime(4, "ABDUL GHOZALI", "Malang, 21 maret 1998 ", "Pria", "Senior");
    $karyawan[4] = new parttime(5, "MUHAMMAD AL FATIH", "Pacitan,5 mei 2002 ", "Pria", "Junior");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 
    <style>
        table{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<h1 style="text-align:center;">LIST KARYAWAN</h1>

<body>
    <table  border= '10px' style="border-radius:10px; ">
        <tr>
            <td bgcolor='#EE6868'>No</td>
            <td bgcolor='#EE6868'>Nama</td>
            <td bgcolor='#EE6868'>Tempat, tanggal lahir</td>
            <td bgcolor='#EE6868'>Jenis kelamin </td>
            <td bgcolor='#EE6868'>level karyawan </td>
            <td bgcolor='#EE6868'>status</td>
            <td bgcolor='#EE6868'>gaji</td>
        </tr>
    <?php for ($i=0; $i<5; $i++) {?>
        <tr>
            <td> <?php echo $karyawan[$i]->no; ?> </td>
            <td> <?php echo $karyawan[$i]->nama; ?> </td>
            <td> <?php echo $karyawan[$i]->tempat_tanggal_lahir; ?> </td>
            <td> <?php echo $karyawan[$i]->jenis_kelamin; ?> </td>
            <td bgcolor=#F0F8FF> <?php echo $karyawan[$i]->level_karyawan ?> </td>
            <td bgcolor=#FAEBD7> <?php echo $karyawan[$i]->status; ?> </td>
            <td bgcolor=#F0FFFF> <?php echo $karyawan[$i]->gaji; ?> </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>