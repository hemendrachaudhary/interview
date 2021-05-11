  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Use the below form to Register New User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New User Registration</h3>
              </div>
              <!-- form start -->
         <form method="post" action="<?php echo base_url('User/create_user');?>" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">First Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="first_name" class="form-control" placeholder="Name">
                     </div>
                    <?php echo form_error('first_name');?>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">Middle Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="middle_name" class="form-control" placeholder="Name">
                     </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">Last Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="last_name" class="form-control" placeholder="Name">
                     </div>
                    
                </div>
            </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Email<span style="color: red;"> *</span></label>
                    <div class="input-group mb-3">
                   <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                   <?php echo form_error('email');?>
                </div>
            </div>
              
            <div class="col-md-4">
               <div class="input-group">
                     <label for="inputEmail3">Password<span style="color: red;"> *</span></label>
                      <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                   <?php echo form_error('password');?>
                </div>
            </div>

             <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No<span style="color: red;"> *</span></label>
                   <div class="input-group mb-3">
                   <input type="number" name="phone" class="form-control" placeholder="Mobile No" maxlength="10">
                   </div>
                   <?php echo form_error('phone');?>
                   </div>
            </div>
            
              <div class="col-md-4">
                <div class="form-group">
                   <div class="form-group">
                    <label for="">Upload your image<span style="color: red;"> *</span></label>
                    <div class="input-group">
                      <div class="">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  
                        <input type="file" name="userImg" class="form-control" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- /.form-group -->
              </div>
               
                      <div class=""><br>
                  <input type="submit" class="btn btn-primary pull-right" value="Add">
                   </div>
                  </div>
                 </div>
                <!-- /.card-body -->
             </form>
            </div>
          </div>
         </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

