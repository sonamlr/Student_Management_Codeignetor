<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Student</h4>
                            <?php echo form_open_multipart("Home/addStudent/"); ?>
                            <div class="row">

                            <div class="col-sm-4 mb-3">
                                <label for="aclass">Admission Class</label>
                                <select class="form-select" name="aclass" id="aclass" onchange='GetFees(this.value)'>
                                    <option selected="">Choose...</option>
                                    <?php echo $classname;?>
                                </select>
                            </div>
                            <script>
                                    function GetFees(a) {
                                        var url = '<?php echo base_url('Home/addStudent/'); ?>' + a;
                                        window.location.replace(url);
                                    }
                                </script>
                                
                            <div class="col-sm-4 mb-3">
                                <label for="name">First Name</label>
                                    <input class="form-control" name="name" type="text" required id="name">
                                    <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                            </div>
                           
                            <div class="col-sm-4 mb-3">
                                <label for="lname">Last Name</label>
                                
                                    <input class="form-control" name="lname" type="text" required id="lname">
                                    <?php echo form_error('lname', '<div class="error">', '</div>'); ?>
                                
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="fname">Father Name</label>
                                    <input class="form-control" name="fname" type="text" required id="fname">
                                    <?php echo form_error('fname', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="mname">Mother Name</label>
                                    <input class="form-control" name="mname" type="text" required id="mname">
                                    <?php echo form_error('mname', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="dob" >Date of Birth</label>
                                    <input class="form-control" name="dob" type="date" required id="dob">
                                    <?php echo form_error('dob', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="col-sm-4 mb-3">
                                <label for="aid">Adhar Id</label>
                                    <input class="form-control" name="aid" type="text" required id="aid">
                                    <?php echo form_error('aid', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="mobile">Mobile</label>
                                    <input class="form-control" name="mobile" type="number" required id="mobile">
                                    <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="ssfrom">Session Start From</label>
                                    <input class="form-control" name="ssfrom" type="date" required id="ssfrom">
                                    <?php echo form_error('ssfrom', '<div class="error">', '</div>'); ?>
                            </div>
                           
                            <div class="col-sm-4 mb-3">
                                <label for="ipayment">Initial Payment</label>
                                <select class="form-select" id="ipayment" name="ipayment">
                                    <option selected="">Choose...</option>
                                    <?php echo $first;?> 
                                    <?php echo $second;?> 
                                    <?php echo $total;?> 
                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="enrollment">Enrollment Number</label>
                                    <input class="form-control" name="enrollment" type="text" required id="enrollment">
                                    <?php echo form_error('enrollment', '<div class="error">', '</div>'); ?>
                            </div>
                         
                            <div class="col-sm-4 mb-3">
                                <h5 class="font-size-14 mb-4">Vehical</h5>
                                <div class="form-check mb-3 form-check-inline">
                                    <input class="form-check-input" type="radio" value="Y" name="vehical" id="vehical1">
                                    <label class="form-check-label" for="formRadios1"> Yes </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="N" name="vehical" id="vehical2">
                                    <label class="form-check-label" for="formRadios2">No</label>
                                </div>
                            </div>
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