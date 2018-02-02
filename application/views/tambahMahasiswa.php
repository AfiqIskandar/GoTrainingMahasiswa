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
            <div class="content">  
                <center>
                    <form action="<?php echo base_url(); ?>main/inputMahasiswa" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" class="form-control" name="nama_mahasiswa">
                            </div>
                            <div class="form-group">
                                <label>Alamat :</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelas :</label>
                                <select name="kelas" class="form-control">
                                    <option value="">-- Pilih Kelas --</option>
                                    <?php
                                        foreach ($listKelas as $key) { ?>
                                            <option value="<?php echo $key->id_kelas; ?>"><?php echo $key->nama_kelas; ?></option>
                                        <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>