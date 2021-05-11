<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tr>
                  </thead>
                   <tbody>
                          <?php
                          $count = 1;
                         if($user){
                            foreach($user as $userData) { 
                          ?>
                         <tr>
                           <td><?php echo $count++;?></td>
                           <td><?php echo ucfirst($userData->first_name);?></td>
                           <td><?php echo ucfirst($userData->email);?></td>
                           <td><?php echo ucfirst($userData->phone);?></td>
                           <td><img width="50" height="50" src="<?php echo base_url('assest/images/user/')?><?php echo $userData->profile_image_path;?>"></td>
                           <td><?php  if($userData->deleted == 0) { echo 'Active'; } else { echo "Inactive"; } ?></td>
                           <td>
                 <a href="<?php echo base_url('User/edit_user?user_id=')?><?php echo base64_encode($userData->userId);?>" class="btn-floating btn-sm blue-gradient" title="Edit">
                                  <i class="fa fa-edit"></i>            
                           </a>
                           <a href="<?php echo base_url('User/changeUserStatus?user_id=')?><?php echo base64_encode($userData->userId);?>" class="btn-floating btn-sm blue-gradient" onclick="return confirm('Do you want to change user status.')" title="Delete">
                                <i class="fa fa-times-circle" style="font-size:17px;color:red"></i>     
                           </a>
                           <a  class="btn-floating btn-sm blue-gradient" href="<?php echo base_url('User/userInfo?user_id=') ?><?php echo base64_encode($userData->userId);?>" >
                                <i class="fa fa-eye" style="font-size:17px;color:blue"></i>     
                           </a>
                        </td>
                  </tr>
                  <?php } } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
<!-- ./wrapper -->

