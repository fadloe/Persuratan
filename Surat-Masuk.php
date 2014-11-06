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
                        <a href="Index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="Surat-Masuk.html"><i class="fa fa-fw fa-upload"></i> Surat Masuk</a>
                    </li>
                    <li>
                        <a href="Surat-Keluar.html"><i class="fa fa-fw fa-download"></i> Surat Keluar</a>
                    </li>
                    <li>
                        <a href="Logout.html"><i class="fa fa-fw fa-remove"></i> Keluar</a>
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
                    <label for="InputTujuan">Tujuan</label>
                    <select class="form-control">
                          <option>Rektor</option>
                          <option>Wakil Rektor Bidang Akademik</option>
                          <option>Wakil Rektor Bidang Keuangan dan Kepegawaian</option>
                          <option>Wakil Rektor Bidang Kemahasiswaan</option>
                          <option>Wakil Rektor Bidang Kerjasama dan Humas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal</label>
                        <input type="date" class="form-control" id="InputTanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Nomor Surat</label>
                        <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                    <label for="InputLampian">Lampiran</label>
                    <select class="form-control">
                          <option>1 Lampiran</option>
                          <option>2 Lampiran</option>
                          <option>3 Lampiran</option>
                          <option>4 Lampiran</option>
                          <option>5 Lampiran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Perihal</label>
                        <input type="text" class="form-control" id="InputPerihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                    <label for="InputStatusSurat">Status Surat</label>
                    <select class="form-control">
                          <option>1 Penting</option>
                          <option>2 Rahasia</option>
                          <option>3 Segera</option>
                          <option>4 Biasa</option>
                    </select>
                </div>

                <div style="position:relative;">
                    <a class='btn btn-primary' href='javascript:;'>
                        Unggah Data.
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                   <span class='label label-info' id="upload-file-info"></span>
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
