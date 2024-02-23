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
                                      <?php echo form_open('Home/fessList'); ?>
                                          <div class="search-box me-2">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control border" id="searchQuery" name="search_query" placeholder="Search...">
                                                  <i class="ri-search-line search-icon"></i>
                                              </div>
                                          </div>
                                          <?php echo form_close(); ?>

                                      </div>
                                  </div>
                        

                              <div class="table-responsive mb-4">
                                  <table class="table table-hover table-nowrap align-middle mb-0" id="searchResultsTable">

                                      <thead class="bg-light">
                                          <tr>
                                              <th>S.N.</th>
                                              <th>Enrollment No</th>
                                              <th>Class</th>
                                              <th>Total Submitted Fees</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                       <?php if($list)
                                        {
                                            $listinfo =  $list;
                                       }else{
                                        $listinfo =  $feelist;
                                       }
                                         ?>
                                         <?php echo $listinfo; ?>
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