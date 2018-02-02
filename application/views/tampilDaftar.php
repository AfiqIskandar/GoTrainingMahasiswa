<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <center>
                <h3>Nama Kelas : <?php echo $kelas["nama_kelas"]; ?></h3>
                <h3>Dosen : <?php echo $dosen["nama_dosen"]; ?></h3>
                <h3>Matakuliah : <?php echo $matakuliah["nama_matkul"]; ?></h3>
            </center>
            <div class="content">
                <table class="table table-responsive table-bordered" style="border: 3px solid; border-color: #cccccc;">
                    <thead>
						<tr>
							<th>Nama Mahasiswa</th>
                            <th>Alamat</th>
						</tr>
					</thead>
                    <tbody>
                        <?php
                        
                        foreach ($mahasiswa as $key) { ?>
                            <tr>
                                <td><?php echo $key->nama_mahasiswa; ?></td>
                                <td><?php echo $key->alamat; ?></td>
                            </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>