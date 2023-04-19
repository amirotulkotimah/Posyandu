<br>
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Upload File Excel</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('Import/excel')?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <label class="col-form-label text-md-left">Upload File</label> 
                                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                                            <div class="mt-1">
                                                <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                            </div>
                                            <?= form_error('file','<div class="text-danger">','</div>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <div class="form-group mb-0">
                                <button type="submit" name="import" class="btn btn-primary"><i class="fas fa-upload mr-1"></i>Upload</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
