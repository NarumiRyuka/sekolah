<?php
    require_once('koneksi.php');
    $sql = "SELECT * FROM daftar_sekolah";
    $result = $conn->query($sql);

    $daftar_sekolah = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* style untuk halaman dan header */
        body{
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        /* style untuk tabel */
        table{
            width: 100%;
            border collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        /* gaya header tabel dengan warna biru */
        th{
            color: lightskyblue; /* warna teks biru */
            font-weight: bold;
            text-transform: uppercase;
            background-color: #f4f4f4; /* warna latar header tetap abu-abu muda */
        }

        /* input filter dalam kolom header */
        th input[type="text"], th select{
            width: 90%;
            padding: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
            font-size: 14px;
            margin-top: 5px; /* jarak atas untuk input */
        }

        /* warna dan gaya untuk badge status */
        .badge{
            padding: 5px 10px;
            border-radius: 12px;
            color: #fff;
            font-size: 12px;
            display:inline-block;
            font-weight: bold;
        }

        .badge.neegeri{
            
        }

    </style>
</head>
<body>
    <h1>DAFTAR SEKOLAH</h1>
    <table>
        <tr>
            <th>#</th>
            <th>KODE</th>
            <th>NAMA SEKOLAH</th>
            <th>KELURAHAN</th>
            <th>KECAMATAN</th>
            <th>STATUS SEKOLAH</th>
            <th>IKUT PPDB</th>
        </tr>
        <?php
            foreach ($daftar_sekolah as $key => $row) {
        ?>
            <tr>
                <td><?php echo $key +1; ?></td>
                <td><?php echo $row['kode'] ?></td>
                <td><?php echo $row['nama_sekolah'] ?></td> 
                <td><?php echo $row['kelurahan'] ?></td> 
                <td><?php echo $row['kecamatan'] ?></td>
                <td><?php echo $row['status_sekolah'] ?></td>
                <td><?php echo $row['ikut_ppdb'] ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>