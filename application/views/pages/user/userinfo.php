  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Info</li>
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
                <h3 class="card-title">Info User</h3>
              </div>
            
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">First Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="first_name" class="form-control" readonly="" value="<?php echo $user_info->first_name;?>">
                     </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">Middle Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="middle_name" readonly="" class="form-control" placeholder="Name" value="<?php echo $user_info->middle_name;?>">
                     </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">Last Name<span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="last_name" readonly="" class="form-control" placeholder="Name" value="<?php echo $user_info->last_name;?>">
                     </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                 <div class="input-group">
                     <label for="inputEmail3">Phone <span style="color: red;"> *</span></label>
                     <div class="input-group mb-3">
                     <input type="text" name="last_name" readonly="" class="form-control" placeholder="Name" 
                     value="<?php echo $user_info->phone;?>">
                     </div>
                    
                </div>
            </div>
            
          
              </div>
                  </div>
                 </div>
                <!-- /.card-body -->
           
            </div>
          </div>
         </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

