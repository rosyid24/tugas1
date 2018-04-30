
    <!doctype html public "-//W3C//DTD HTML 4.0 //EN">
    <html>
    <head>
           <title>Data Mahasiswa</title>
           <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <h1><strong>DATA MAHASISWA</strong><br></h1>
        
        <div class="input">
        <?php
        $nim=$_POST['txtnim'];
        $nama=$_POST['txtnama'];
        $jurusan=$_POST['cjurusan'];
        $Email=$_POST['email'];
        $jenis=$_POST['jenis'];
        $tgl=$_POST['tgl'];
        $bakat = $_POST["bakat"];
        $latar=$_POST["ltr"];

        if($jurusan=="SI") { 
        	$jrs="Sistem Informasi"; 
        }
        elseif($jurusan=="TIF") {
        	$jrs="Teknik Informatika"; 
        }
        else { 
        	$jrs="Teknik Komputer"; 
        }

        echo"<pre>";
        echo" NIM            : $nim <br>";
        echo" Nama           : $nama <br>";
        echo" Tanggal Lahir  : $tgl <br>";
        echo" Jurusan        : $jrs <br>";
        echo" Email          : $Email <br>";
        echo" Jenis Kelamin  : $jenis <br>";
        echo" Hobi           : ";
        foreach ($bakat as $nilai){
        	echo "$nilai ";
        } echo"<br>";
        echo " Foto           :<br>";
        $sumber = $_FILES['userfile']['tmp_name'];
        $target = $_FILES['userfile']['name'];

        if(move_uploaded_file($sumber, $target))
        {
         echo "                    <img src='$target' height=500 width=500> ";
         }
        else {        
            echo"Can't Upload Selected File ";
         }         
        echo "<br>";
        echo "Latar Belakang Keluarga : $latar <br>";
        echo"<br><td text-align='center'><a href='inputmahasiswa.html'>Kembali ke form pengisian</td>";
        echo"</pre>";

        ?>
        


        </div>
        
    </body>
    </html>
