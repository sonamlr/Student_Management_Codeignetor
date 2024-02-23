<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="invoice-title">
                                <h4 class="float-end font-size-15">Invoice #DS0204 <span class="badge bg-success font-size-12 ms-2"></span></h4>
                                <div class="mb-4">
                                    <img src="assets/images/logo-light.png" alt="logo" height="28">
                                </div>
                                <div class="text-muted">
                                    <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>
                                    <p class="mb-1"><i class="mdi mdi-email-outline me-1"></i> xyz@987.com</p>
                                    <p><i class="mdi mdi-phone-outline me-1"></i> 012-345-6789</p>
                                </div>
                            </div> -->

                            <hr class="my-4">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <h5 class="font-size-16 mb-3">Student Details</h5>
                                        <h5 class="font-size-15 mb-1">Name : <?php echo $first_name;?> <?php echo $last_name;?></h5>
                                        <p class="mb-0">Enrollment No. : <?php echo $enrollment;?></p>
                                        <p class="mb-0">Father : <?php echo $father_name;?></p>
                                        <p class="mb-0">Mother : <?php echo $mother_name;?></p>
                                        <p class="mb-0">Adhar No. : <?php echo $adhar_id;?></p>
                                        <p class="mb-0">Mobile : <?php echo $mobile_no;?> </p>
                                        <!-- <p class="mb-0">Address :  <?php echo $enrollment;?></p> -->
                                        <br>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                            <p class="mb-0"><?php echo $invoiceNumber;?></p>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                            <p class="mb-0"><?php echo date('d M, Y'); ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h5 class="font-size-15 mb-3">Payment Details</h5>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th style="width: 70px;">No.</th>
                                                <th>Class</th>
                                                <th>Date</th>
                                                <th></th>
                                                <th class="text-end" style="width: 120px;">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $list;?>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total Amount</th>
                                                <td class="text-end"><?php echo $totalFee;?> <i class='fa fa-inr' aria-hidden='true'></i>-/</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none mt-4">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print" title="Print Invoice"></i></a>
                                        <!-- <a href="#" class="btn btn-primary w-md">Send</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  

   