<!-- Auto call all files in "Design" folder  -->
<?php
$includesPath = 'includes/';
$files = glob($includesPath . '*.php');

foreach ($files as $file) {
    include $file;
}
?>
<!-- End -->


<div class="content">
    <div class="animated fadeIn">

        <div class="row">
          <div class="col-lg-5">
              <div class="card">
                  <div class="card-body">
                      <!-- Credit Card -->
                      <div id="pay-invoice">
                          <div class="card-body">
                              <div class="card-title">
                                  <h3 class="text-center">Create New User Now.</h3>
                              </div>
                              <hr>
                              <form action="#" method="post" novalidate="novalidate">
                                  <div class="row form-group">
                                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" class="form-control"><small class="help-block form-text">Please enter full name</small></div>
                                  </div>
                                  <div class="row form-group">
                                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Username</label></div>
                                      <div class="col-12 col-md-9"><input type="email" id="username" name="username" class="form-control"><small class="help-block form-text">Please enter the username</small></div>
                                  </div>
                                  <div class="row form-group">
                                      <div class="col col-md-3"><label for="password-input" class=" form-control-label">Address</label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="address" name="address" class="form-control"><small class="help-block form-text">Please enter the password</small></div>
                                  </div>
                                  <div>
                                      <button id="payment-button" type="submit" name="adduser" class="btn btn-lg btn-info btn-block">
                                          <i class="fa fa-user-plus fa-lg"></i>&nbsp;
                                          <span id="payment-button-amount">Register this user</span>
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>

                  </div>
              </div> <!-- .card -->

          </div><!--/.col-->
            <div class="col-xs-7 col-sm-7">

            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Users List</strong>
                </div>
                <div class="card-body">
                  <div style="height: 600px; overflow-y: scroll;">
                     <table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user){?>
                            <tr>
                                <td><?= $user['name']; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['address']; ?></td>
                             </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>



</div>


</div><!-- .animated -->
</div>
