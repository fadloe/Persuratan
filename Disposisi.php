<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Persuratan Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Persuratan Universitas Lambung Mangkurat</a>
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="Surat-Masuk.html"><i class="fa fa-fw fa-upload"></i> Surat Masuk</a>
                    </li>
                    <li>
                        <a href="Disposisi.html"><i class="fa fa-fw fa-pencil"></i> Disposisi</a>
                    </li>
                    <li>
                        <a href="Surat-Keluar.html"><i class="fa fa-fw fa-download"></i> Surat Keluar</a>
                    </li>
                    <li>
                        <a href="logout.html"><i class="fa fa-fw fa-remove"></i> Keluar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputDari">Dari</label>
                    <select class="form-control">
                          <option>Rektor</option>
                          <option>Wakil Rektor Bidang Akademik</option>
                          <option>Wakil Rektor Bidang Keuangan dan Kepegawaian</option>
                          <option>Wakil Rektor Bidang Kemahasiswaan</option>
                          <option>Wakil Rektor Bidang Kerjasama dan Humas</option>
                          <option>Kepala Bidang Akademik dan Kemahasiswaan</option>
                          <option>Kepala Bidang Keuangan dan Kepegawaian</option>
                          <option>Kepala Bidang Perencanaan dan Hubungan Masyarakat</option>
                          <option>..........</option>
                          <option>..........</option>
                          <option>..........</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal</label>
                        <input type="date" class="form-control" id="InputTanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="InputTujuan">Kepada</label>
                    <select class="form-control">
                          <option>Rektor</option>
                          <option>Wakil Rektor Bidang Akademik</option>
                          <option>Wakil Rektor Bidang Keuangan dan Kepegawaian</option>
                          <option>Wakil Rektor Bidang Kemahasiswaan</option>
                          <option>Wakil Rektor Bidang Kerjasama dan Humas</option>
                          <option>Kepala Bidang Akademik dan Kemahasiswaan</option>
                          <option>Kepala Bidang Keuangan dan Kepegawaian</option>
                          <option>Kepala Bidang Perencanaan dan Hubungan Masyarakat</option>
                          <option>..........</option>
                          <option>..........</option>
                          <option>..........</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputDisposisi">Disposisi</label>
                    <select class="form-control">
                          <option>1 Mohon Pertimbangan</option>
                          <option>2 Mohon Pendapat</option>
                          <option>3 Mohon Keputusan</option>
                          <option>4 Mohon Petunjuk</option>
                          <option>5 Mohon Saran</option>
                          <option>6 Bicarakan</option>
                          <option>7 Teliti/Ikuti Perkembangan</option>
                          <option>8 Untuk Perhatian</option>
                          <option>9 Siapkan Konsep</option>
                          <option>10 Siapkan Laporan</option>
                          <option>11 Untuk Diproses</option>
                          <option>12 Selesaikan sesuai pembicaraan</option>
                          <option>13 Edarkan</option>
                          <option>14 Tik/ Gandakan</option>
                          <option>15 A r s i p</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputDisposisi16">Disposisi 16</label>
                        <input type="text" class="form-control" id="InputDisposisi16" placeholder="Disposisi 16">
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div> 
        
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
