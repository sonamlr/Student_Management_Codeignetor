<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Class</h4>
                            <?php echo form_open_multipart("Home/updateClass/".$this->uri->segment(3)); ?>
                            <div class="row">
                            <div class="col-sm-4 mb-3">
                                <input type="hidden" name="id" value="<?php echo md5($id);?>">
                                <label for="classname">Class Name</label>
                                    <input class="form-control" name="classname" type="text" required id="classname" value="<?php echo $classname;?>">
                                    <?php echo form_error('classname', '<div class="error">', '</div>'); ?>
                            </div>
                           
                            <div class="col-sm-4 mb-3">
                                <label for="fees">Fee</label>
                                    <input class="form-control" name="fees" type="text" required id="fees" value="<?php echo $fees;?>">
                                    <?php echo form_error('fees', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button" onclick="history.back()" class="btn btn-danger waves-effect waves-light">Cancle</button>
                            </div>
                            <!-- end row -->
                           
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>