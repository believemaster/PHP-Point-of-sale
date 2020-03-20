<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Management
        <small>Control Pannel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#addUser">
            Add user
          </button>

        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tables" width="100%">
            <thead>
              <tr>
                <th style="width:10px">#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Image</th>
                <th>Profile</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Admin User</td>
                <td>Admin</td>
                <td><img src="views/img/users/default/anonymous.png" width="40px"></td>
                <td>Administrator</td>
                <td><button class="btn btn-success btn-xs">Activated</button></td>
                <td>2020-03-12 12:05:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Moderator User</td>
                <td>Mode</td>
                <td><img src="views/img/users/default/anonymous.png" width="40px"></td>
                <td>Moderator</td>
                <td><button class="btn btn-danger btn-xs">Deactivated</button></td>
                <td>2020-03-12 12:05:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!--===============================
*       Modal User               *
================================-->
<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background: #3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">

          <div class="box-body">

            <!--Input name -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input class="form-control input-lg" type="text" id="EditName" name="EditName" placeholder="Edit name" required>

              </div>

            </div>

            <!-- input username -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input class="form-control input-lg" type="text" id="EditUser" name="EditUser" placeholder="Edit username" readonly>

              </div>

            </div>

            <!-- input password -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input class="form-control input-lg" type="password" name="EditPasswd" placeholder="Add new password">

                <input type="hidden" name="currentPasswd" id="currentPasswd">

              </div>

            </div>

            <!-- input profile -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="EditProfile">

                  <option value="" id="EditProfile">Select option</option>
                  <option value="administrator">Administrator</option>
                  <option value="special">Special</option>
                  <option value="seller">Seller</option>

                </select>

              </div>

            </div>

            <!-- Uploading image -->
            <div class="form-group">

              <div class="panel">Upload image</div>

              <input class="newPics" type="file" name="editPhoto">

              <p class="help-block">Maximum size 2Mb</p>

              <img class="thumbnail preview" src="views/img/users/default/anonymous.png" alt="" width="100px">

              <input type="hidden" name="currentPicture" id="currentPicture">

            </div>

          </div>

        </div>

      <!--=====================================
      FOOTER
      ======================================-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit User</button>
      </div>

      <?php
        $createUser = new ControllerUsers();
        $createUser -> ctrCreateUser();
      ?>

      </form>

    </div>

  </div>
</div>
