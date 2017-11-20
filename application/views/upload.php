<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="green">
                        <h4 class="title">Upload </h4>
                        <p class="category">Upload Data Sumber Dari Excel / CSV</p>
                    </div>
                    <div class="card-content">


                        <form role="form">

                                    <div class="form-group">
                                        <label>Tipe Data :  </label>
                                        <label class="radio-inline text-danger">
                                            <input type="radio" name="tipe_data" id="tipe_data1" value="1" checked><i class="fa fa-file-o"></i> Upload From Excel / CSV
                                        </label>
                                        <label class="radio-inline text-danger">
                                            <input type="radio" name="tipe_data" id="tipe_data2" value="2"><i class="fa fa-database"></i> Upload From DMP
                                        </label>

                                    </div>

                                   
                                    <div class="form-group" id="instansi_form">
                                        <label>Instansi</label>
                                        <select class="form-control select" data-live-search="true" id="cmb_instansi" name="cmb_instansi" width="100%">
                                            
                                        </select>
                                    </div>

                                    <div class="form-group" id="keterangan_form">
                                        <label>Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control">
                                    </div>

                                    <div class="form-group" id="nama_tabel" style="display: none">
                                        <label>Nama Tabel</label>
                                       <select class="form-control select" data-live-search="true" id="p_nama_file" name="p_nama_file" width="100%">
                            
                                        </select>
                                    </div>


                                    <div class="" id="upload_file_form">
                                        <label>File input</label>
                                        <input type="file" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, text/csv">

                                        
                                        <br>
                                        <div class="progress" id="bar_upload" style="display: none">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped active myprogress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">0%</div>
                                        </div>

                                       

                                    </div>

                                     
                                        
                                    


                                    <div class="pull-right">
                                        <label style="color:red">*Note : Upload file excel dengan extensi (.xlsx) / (.csv)</label>
                                    </div>


                                    <div class="form-group" style="display:none" id="upload_id_combo">

                                        <label>Get Kolom</label>
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="table_temp_upload" >
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="5%">#</th>
                                                    <th class="text-center" width="20%">NAMA INSTANSI</th>
                                                    <th class="text-center" width="12%">ID INSTANSI</th>
                                                    <th class="text-center" width="20%">ID UPLOAD</th>
                                                    <th class="text-center" width="35%">KEGIATAN</th>
                                                    <th class="text-center" width="8%">PILIH</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                    </div>



                                    <div class="form-group" id="init_kolom">
                                        <label>Inisialisasi Kolom</label>
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="table_kolom">
                                            <thead>
                                                <tr>
                                                    <th style="display: none">NO KOLOM</th>
                                                    <th>NAMA KOLOM</th>
                                                    <th>TIPE KOLOM</th>
                                                    <th>SIZE KOLOM</th>
                                                    <th width="10%" class="text-center">PILIH</th>
                                                    <th width="10%" class="text-center">PRIMARY KEY</th>
                                                    <th width="10%" class="text-center">IS SCORE</th>
                                                    <th width="10%" class="text-center">IS SELECT</th>
                                                    <th width="10%" class="text-center">IS CLEANSING</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                        </tbody>
                                    </table>
                                </div>


                        <!-- <a class="btn btn-info" onclick="get_kolom_check()"><i class="fa fa-check" ></i> Cek</a> -->
                   

                    <a class="btn btn-info" id="upload"><i class="fa fa-upload" ></i> Upload Excel / CSV</a>

                    

                </form>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select').select2();
    });
</script>