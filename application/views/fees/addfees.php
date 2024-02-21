<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Submit Remaining Fees</h4>
                            <?php echo form_open_multipart("Home/submitFee/".$this->uri->segment(3)); ?>
                            <div class="row">
                                
                           <input type="hidden" name="id" value="<?php echo $this->uri->segment(3);?>">
                            <div class="col-sm-4 mb-3">
                                <label for="enrollment">Enrollment No.</label>
                                    <input class="form-control" name="enrollment" type="text" required id="enrollment" value="<?php echo $enrollment; ?>" readonly>
                                    <?php echo form_error('enrollment', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="ipayment">Initial Payment</label>
                                    <input class="form-control" name="ipayment" type="text" required id="ipayment" value="<?php echo $initial_payment; ?>" readonly>
                                    <?php echo form_error('ipayment', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="remain">Remaining Amount</label>
                                    <input class="form-control" name="remain" type="text" required id="remain" value="<?php echo $remaining_fee; ?>" readonly>
                                    <?php echo form_error('remain', '<div class="error">', '</div>'); ?>
                            </div> 
                            <div class="col-sm-4 mb-3">
                                <label for="fees"> Fee Amount</label>
                                    <input class="form-control" name="fees" type="text" required id="fees" placeholder="Enter Amount">
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