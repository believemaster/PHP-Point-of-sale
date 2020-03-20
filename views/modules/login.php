<div id="back"></div>

<div class="login-box">
  <div class="login-logo">
    <!-- <a href="../../index2.html"><b>BelieveMaster</b>IS</a> -->
    <img src="views/img/template/logo-blanco-bloque.png" class="img-responsive" style="padding: 30px 100px 0px 100px">
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Login In To Your Inventory</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User" name="loginUser" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="loginPass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>

      <?php
        $login = new ControllerUsers();
        $login -> ctrUserLogin();
      ?>
      
    </form>
  </div>
</div>
