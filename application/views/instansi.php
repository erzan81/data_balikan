<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Master Instansi</h4>
                    <p class="category">Pengolahan data master instansi</p>
                </div>
                <div class="card-content">

                    <div class="form-group">
                        <a href="#" class="btn btn-info btn_tambah"><span class="fa fa-plus"></span> Tambah</a>
                    </div>

                    <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_instansi">
                        <thead>
                            <tr>
                                <th width="7%">ID</th>
                                <th width="10%">NAMA INSTANSI</th>
                                <th width="20">ALAMAT</th>
                                <th width="13%">TELP</th>
                                <th width="20%">KETERANGAN</th>
                                <th width="10%">STATUS</th>
                                <th width="12%" class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>INS001</td>
                                <td>TELKOMSEL</td>
                                <td>Jl. Jend. Gatot Subroto Kav.52. Jakarta Selatan 12710.</td>
                                <td>-</td>
                                <td>KANTOR PUSAT TELKOMSEL</td>
                                <td>Aktif</td>
                                <td align="center"><a href="#" class="btn btn-success btn-xs btn_update" ><span class="fa fa-pencil"></span></a> <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="fa fa-trash-o"></span></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

    <input type="hidden" name="mode" id="mode" >
    <div class="modal fade" id="modal_insert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="judul_modal">Insert Data</h3>
                </div>

                <div class="modal-body" >

                    <div class="row" id="ins_upd">

                        <div class="col-lg-6">
                            <form role="form">

                                <div class="form-group">
                                    <label>ID INSTANSI</label>
                                    <input type="text" class="form-control" name="p_id_instansi" id="p_id_instansi" readonly="readonly" placeholder="Generated By System" />
                                </div>
                                <div class="form-group">
                                    <label>NAMA INSTANSI</label>
                                    <input type="text" class="form-control" name="p_nama_instansi" id="p_nama_instansi" />
                                </div>
                                <div class="form-group">
                                    <label>ALAMAT INSTANSI</label>
                                    <input type="text" class="form-control" name="p_alamat_instansi" id="p_alamat_instansi" />
                                </div>

                                
                                <div class="form-group" id="statusnya" >
                                    <label>STATUS : </label>
                                    
                                    <label class="radio-inline text-info">
                                        <input type="radio" name="p_status" id="p_status1" value="1" checked><i class="fa fa-check"></i> Aktif
                                    </label>
                                    <label class="radio-inline text-danger">
                                        <input type="radio" name="p_status" id="p_status0" value="0"><i class="fa fa-times"></i> Non Aktif
                                    </label>

                                </div>
                                
                                
                                
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form role="form">


                                <div class="form-group">
                                    <label>TELP INSTANSI</label>
                                    <input type="text" class="form-control" name="p_telp_instansi" id="p_telp_instansi" />
                                </div>
                                <div class="form-group">
                                    <label>KETERANGAN</label>
                                    <input type="text" class="form-control" name="p_ket_instansi" id="p_ket_instansi" />
                                </div>

                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" class="form-control" name="p_file" id="p_file" />
                                    <input type="hidden" class="form-control" name="file_path" id="file_path" />
                                </div>

                                

                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="instansi_form">
                                        <label>Kolom</label>
                                        <select class="form-control select" id="cmb_instansi" name="cmb_instansi" multiple="multiple" style='width:500px'>
                                          <option>NO_HP</option>
                                          <option>JENIS_LAYANAN</option>  
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>

              </div>

              <div class="modal-footer">
                <a href="#"  class="btn btn-success btn_submit_instansi" data-dismiss="modal" ><span class="fa fa-check"></span> Submit</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> Kembali</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h3 class="modal-title">Delete </h3></center>
    </div>

    <div class="modal-body" >
        <div id="del">  
            <center>
                <p>Apakah Anda Yakin Akan Menghapus <strong id="instansi_msg"></strong> ?</p>
            </center>
        </div>
    </div>

    <div class="modal-footer">
        <a href="#"  class="btn btn-success btn_delete_instansi" data-dismiss="modal" ><span class="fa fa-check"></span> Submit</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> Kembali</button>

    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="modalNotif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h3 class="modal-title">Informasi </h3></center>
    </div>

    <div class="modal-body" >
        <center><p id="pesan_notifikasi"></p></center>
    </div>

    <div class="modal-footer">

        <button type="button" class="btn btn-danger " data-dismiss="modal"><span class="fa fa-times"></span> Kembali</button>

    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $(document).ready(function() {

        $("#cmb_instansi").select2();

        $('.btn_tambah').on('click', function () {

            $('#modal_insert').modal('show');

        });



        
    });


</script>