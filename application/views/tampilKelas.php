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
                <h1>Daftar Kelas</h1>
            </center>
            <div class="content">
                <table class="table table-responsive table-bordered" style="border: 3px solid; border-color: #cccccc;">
                    <thead>
						<tr>
							<th>No</th>
							<th>Nama Kelas</th>
							<th>Lihat Daftar</th>
						</tr>
					</thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($list as $key) { ?>
                            <tr>
                                <td><?php echo $no;; ?></td>
                                <td><?php echo $key->nama_kelas; ?></td>
                                <td><a href="<?php echo base_url(); ?>main/daftarKelas/<?php echo $key->id_kelas; ?>" class="btn btn-warning">Lihat</a></td>
                            </tr>
                        <?php
                        $no++;
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