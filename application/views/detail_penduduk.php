<style type="text/css">
    
    /*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 0px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}

</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="<?php echo base_url()?>/assets/material/img/faces/marc.jpg" />
                        </a>
                    </div>
                    <div class="content">
                        
                        <h4 class="card-title">Alex Thompson</h4>
                        <h6 class="category text-gray">Karyawan Swasta</h6>
                        
                        
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Detail Data</h4>
                        <p class="category">Detail Data Alex Thompson </p>
                    </div>
                    <div class="card-content">
                        <form>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NIK</label>
                                        <input type="text" name="nik" id="nik" value="31710112121123456" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No KK</label>
                                        <input type="text" name="no_kk" id="no_kk" value="31710112121123456" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="Bogor" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="12/12/1972" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Status Hubungan Keluarga</label>
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="KEPALA KELUARGA" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Status Kawin</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="KAWIN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tanggal Kawin</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="19/10/2005" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No Akta Lahir</label>
                                        <input type="text" name="no_akta_lahir" id="no_akta_lahir" value="1471-LT-11011973-0001" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Status KTP Elektronik</label>
                                        <input type="text" name="status_ktp_el" id="status_ktp_el" value="TUNGGAL" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" value="Jl. Pahlawan No. 3" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kel" id="desa_kel" value="CIDENG" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" id="kecamatan" value="GAMBIR" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota" id="kab_kota" value="JAKARTA PUSAT" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Provinsi</label>
                                        <input type="text" name="provinsi" id="provinsi" value="DKI JAKARTA" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No Telepon / HP</label>
                                        <input type="text" name="no_telepon" id="no_telepon" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No Akta Tanah</label>
                                        <input type="text" name="no_akta_tanah" id="no_akta_tanah" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NPWP</label>
                                        <input type="text" name="no_telepon" id="no_telepon" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jumlah Pajak Terhutang</label>
                                        <input type="text" name="no_akta_tanah" id="no_akta_tanah" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No BPJS Kesehatan</label>
                                        <input type="text" name="desa_kel" id="desa_kel" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No BPJS TK</label>
                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NO SKCK</label>
                                        <input type="text" name="kab_kota" id="kab_kota" class="form-control">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No SIM</label>
                                        <input type="text" name="desa_kel" id="desa_kel" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No Polisi Kendaraan</label>
                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jenis Kendaraan</label>
                                        <input type="text" name="kab_kota" id="kab_kota" class="form-control">
                                    </div>
                                </div>
                                
                            </div> -->
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                                  <div class="list-group">
                                    <a href="#" class="list-group-item active text-center">
                                      <h4 class="fa fa-dashboard"></h4><br/>TELKOMSEL
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="fa fa-dashboard"></h4><br/>PAJAK
                                    </a>
                                    <!-- <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-home"></h4><br/>Hotel
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Restaurant
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                                    </a> -->
                                  </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                                    <!-- flight section -->
                                    <div class="bhoechie-tab-content active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">NO HP</label>
                                                    <input type="text" name="no_telepon" id="no_telepon" value="081321577080" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">JENIS LAYANAN</label>
                                                    <input type="text" name="no_akta_tanah" id="no_akta_tanah" value="PASCA" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- train section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">NPWP</label>
                                                    <input type="text" name="no_telepon" id="no_telepon" value="12.345.678.910.100" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Jumlah Pajak Terhutang</label>
                                                    <input type="text" name="no_akta_tanah" id="no_akta_tanah" value="Rp. 5.000.000" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- hotel search -->
                                    <!-- <div class="bhoechie-tab-content">
                                        <center>
                                          <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                                          <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                          <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                                        </center>
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <center>
                                          <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                                          <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                          <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                                        </center>
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <center>
                                          <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                          <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                          <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                                        </center>
                                    </div> -->
                                </div>
                            </div>
                      </div>
                    </div>

            
        </div>
    </div>
</div>


            <script type="text/javascript">
                
                $(document).ready(function() {
                    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                        e.preventDefault();
                        $(this).siblings('a.active').removeClass("active");
                        $(this).addClass("active");
                        var index = $(this).index();
                        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                    });
                });

            </script>