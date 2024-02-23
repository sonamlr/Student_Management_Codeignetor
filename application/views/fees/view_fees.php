<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Student  Details</h4>
                            <div class="row">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                           
                            <div class="col-sm-4 mb-3">
                                <label for="fname">First Name</label>
                                <input class="form-control" name="fname" type="text" required id="fname" value="<?php echo $first_name; ?>"  readonly>
                                    <?php echo form_error('fname', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class=" col-sm-4 mb-3">
                                <label for="lname">Last Name</label>
                                <input class="form-control" name="lname" type="text" required id="lname" value="<?php echo $last_name; ?>"  readonly>
                                    <?php echo form_error('lname', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class=" col-sm-4 mb-3">
                                <label for="father">Father Name</label>
                                <input class="form-control" name="father" type="text" required id="father" value="<?php echo $father_name; ?>" readonly>
                                <?php echo form_error('father', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class=" col-sm-4 mb-3">
                                <label for="mname">Mother Name</label>
                                <input class="form-control" name="mname" type="text" required id="mname" value="<?php echo $mother_name; ?>"  readonly>
                                <?php echo form_error('mname', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="dob" >Date of Birth</label>
                                    <input class="form-control" name="dob" type="date" required id="dob" value="<?php echo $dob; ?>"  readonly>
                                    <?php echo form_error('dob', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="col-sm-4 mb-3">
                                <label for="aid">Adhar Id</label>
                                    <input class="form-control" name="aid" type="text" required id="aid" value="<?php echo $adhar_id; ?>"  readonly>
                                    <?php echo form_error('aid', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="mobile">Mobile</label>
                                    <input class="form-control" name="mobile" type="number" required id="mobile" value="<?php echo $mobile_no; ?>"  readonly>
                                    <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                            </div>
                            </div>
                           
                           


                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Fees Details</h4>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">

                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Class</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $feeslist; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                                <button type="button" onclick="history.back()" class="btn btn-info waves-effect waves-light">Back</button>
                                <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print" title="Print Invoice"></i></a>        
                            </div>
            </div>
        </div>
    </div>
</div>