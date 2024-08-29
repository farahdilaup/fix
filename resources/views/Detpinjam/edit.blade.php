<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpus-Ku</title>
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}">
    <link href="{{asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('asset/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap-progressbar -->
    <link href="{{asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('asset/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('asset/css/custom.min.css') }}" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/home" class="site_title"><i class="fa fa-soccer-ball-o"></i> <span>PerPus-Ku</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info" text-center>
                <h3>Admin</h3>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/peminjaman/tambah">Peminjaman</a></li>
                      <li><a href="/penerimaan/tambah">Penerimaan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/buku">Tabel Buku</a></li>
                      <li><a href="/eksemplar">Tabel Eksemplar</a></li>
                      <li><a href="penerbit">Tabel Penerbit</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/detpinjam">Tabel Peminjaman</a></li>
                      <li><a href="/detterima">Tabel Penerimaan</a></li>
                      <li><a href="/penggantian">Tabel Penggantian</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Formulir</h3>
            </div>
            <br/>
            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Formulir edit Peminjaman buku</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                   @foreach($detail_peminjaman as $p)
                  <form action="/detpinjam/update" method="get" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    {{csrf_field()}}
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">No ISBN</label>
        <div class="col-sm-10">
        <select name="Kode_buku" id="Kode_buku" class="form-control">
          <option value="" disabled selected>Ubah No ISBN</option>
          @foreach ($eksemplar_buku as $a)
          <option value="{{ $a->Kode_buku }}" {{$detail_peminjaman[0]->Kode_buku == $a->Kode_buku ? 'selected' :""}} >{{ $a->No_ISBN }}</option>
          @endforeach
        </select>
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Id peminjaman</label>
        <div class="col-sm-10">
        <select name="Id_peminjaman" id="Id_peminjaman" class="form-control">
          <option value="" disabled selected>Ubah Id peminjaman</option>
          @foreach ($peminjaman as $a)
          <option value="{{ $a->Id_peminjaman }}" {{$detail_peminjaman[0]->Id_peminjaman == $a->Id_peminjaman ? 'selected' :""}} >{{ $a->Id_peminjaman }}</option>
          @endforeach
        </select>
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Status peminjaman</label>
        <div class="col-sm-10">
        <input type="text" name="Status_peminjaman" required="required" class="form-control" value="{{ $p->Status_peminjaman }}">
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Denda</label>
        <div class="col-sm-10">
        <input type="text" name="Denda_perbuku" required="required" class="form-control" value="{{ $p->Denda_perbuku }}">
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Tanggal harus kembali</label>
        <div class="col-sm-10">
        <input type="date" name="Tanggal_haruskembali" required="required" class="form-control" value="{{ $p->Tanggal_kembali }}" readonly="readonly">
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Tanggal kembali</label>
        <div class="col-sm-10">
        <input type="date" name="Tanggal_kembali" required="required" class="form-control" value="{{ $p->Tanggal_kembali }}">
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Perpanjangan</label>
        <div class="col-sm-10">
        <input type="text" name="Perpanjangan" required="required" class="form-control" value="{{ $p->Perpanjangan }}">
    </div></div>
    <br/>
    <div class="item form-group">
        <label class="col-sm-2 control-label text-left">Status verifikasi</label>
        <div class="col-sm-10">
        <input type="text" name="Status_verifikasi" required="required" class="form-control" value="{{ $p->Status_verifikasi }}">
    </div></div>
    <br/>
          <div class="modal-footer">
      <div class="col-sm-12">
        <a href="/buku" class="btn btn-white">Kembali</a>
        <input type="submit" class="btn btn-success" value="Simpan">
        </div></div>

                  </form>
                  @endforeach
                </div>
                        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Created by farahdila©2020</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
            </div>
          </div>

        <!-- /page content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('asset/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{asset('asset/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{asset('asset/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{asset('asset/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{asset('asset/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{asset('asset/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{asset('asset/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('asset/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('asset/js/custom.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('datatable-responsive').DataTable();
  });
</script>
  </body>
</html>

