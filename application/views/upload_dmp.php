<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="red">
                        <h4 class="title">Upload </h4>
                        <p class="category">Upload Data Sumber Dari DMP</p>
                    </div>
                    <div class="card-content">


                        <form role="form">

                    <div class="">
                        <label>File DMP</label>
                        <input type="file" id="file" name="file" accept="application/octet-stream, .dmp">

                        <div class="progress" id="bar_upload" style="display: none">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active myprogress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">0%</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <a class="btn btn-info" id="upload"><i class="fa fa-upload" ></i> Upload DMP</a>
                    </div>
    
                    <div class="form-group">
                    
                        <label>List Tabel DMP</label>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_dmp" >
                            <thead>
                                <tr>
                                    <th class="text-center" width="7%">#</th>
                                    <th class="text-center" width="20%">NAMA FILE</th>
                                    <th class="text-center" width="20%">CREATED DATE</th>
                                    <th class="text-center" width="10%">UPLOAD ULANG</th>
                                    <th class="text-center" width="10%">LOG</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>


                    </div>

                    <div class="form-group">
                        <label><u>Log Import DMP</u></label>


                        <div class="tasks" id="tasks_completed">

                            <div class="task-item task-danger task-complete" style="height: 300px; overflow: scroll;">    
                                                            
                                <div class="task-text ui-sortable-handle">
                                    <pre>
                                        <p id="text_log"></p>
                                    </pre>

                                </div>                                 
                            </div>

                        </div>
                    </div>

                    

                    

                    

                </form>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>