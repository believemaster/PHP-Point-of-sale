<?php

/**
 * Login Controller
 */
class ControllerUsers
{
  /*=============================================
  	USER LOGIN
  	=============================================*/

  	static public function ctrUserLogin(){
      if(isset($_POST["loginUser"])) {
        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) &&
				    preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPass"])) {

            $table = "users";

            $item = "user";
            $value = $_POST["loginUser"];

            $answer = UsersModel::MdlShowUsers($table, $item, $value);

            // var_dump($answer);

            if($answer["user"] == $_POST["loginUser"] && $answer["password"] == $_POST["loginPass"]) {

              $_SESSION["loggedIn"] = "ok";

              echo '<script>

          						window.location = "home";

          					</script>';

            } else {
    					echo '<br><div class="alert alert-danger">User or password incorrect</div>';
    				}
        }
      }
    }

    /*=============================================
    	CREATE USER
    	=============================================*/

    static public function ctrCreateUser() {
      if(isset($_POST["newUser"])) {
        if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newName"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["newUser"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["newPasswd"])){

          $table = "users";

          $data = array('name' => $_POST["newName"],
							  'user' => $_POST["newUser"],
								'password' => $encryptpass,
								'profile' => $_POST["newProfile"],
								'photo' => $photo);

				  $answer = UsersModel::mdlAddUser($table, $data);
          
          if ($answer == 'ok') {

						echo '<script>

						swal({
							type: "success",
							title: "¡User added succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"

						}).then(function(result){

							if(result.value){

								window.location = "users";
							}

						});

						</script>';

				}

      } else {
        echo '<script>

      					swal({
      						type: "error",
      						title: "No special characters or blank fields",
      						showConfirmButton: true,
      						confirmButtonText: "Close"

      						}).then(function(result){

      							if(result.value){

      								window.location = "users";
      							}

      						});

      				</script>';
      }
    }
}
}
