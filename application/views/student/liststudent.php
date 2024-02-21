  <div class="main-content">
      <div class="page-content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="row mb-2">
                                  <div class="col-md-6">
                                      <div class="form-inline float-md-start mb-3">
                                          <div class="search-box me-2">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control border" placeholder="Search...">
                                                  <i class="ri-search-line search-icon"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="mb-3 float-end">
                                          <?php echo anchor("Home/addStudent", ' <i class="mdi mdi-plus me-1"></i> Create Student', 'class="btn btn-primary"'); ?>

                                      </div>
                                  </div>
                              </div>
                              <!-- <?php echo $this->session->flashdata('message'); ?> -->
                              <div class="table-responsive mb-4">
                                  <table class="table table-hover table-nowrap align-middle mb-0">

                                      <thead class="bg-light">
                                          <tr>
                                              <th>S.N.</th>
                                              <th>First Name</th>
                                              <th>Last Name</th>
                                              <th>Father Name</th>
                                              <th>Mother Name</th>
                                              <th>Date of Birth</th>
                                              <th>Adhar Id</th>
                                              <th>Mobile</th>
                                              <th>Session Start From</th>
                                              <th>Admission Class</th>
                                              <!-- <th>Initial Payment</th>
                                              <th>Enrollment No.</th> -->
                                              <th>Vehical</th>
                                              <th>Delete</th>
                                              <th>Edit</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php echo $list; ?>
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>