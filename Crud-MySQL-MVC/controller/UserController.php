<?php 

    class UserController {

        public static function index() {

            include "view/modules/user/UserList.php";
        }

        public static function form() {
            
            include "view/modules/user/UserForm.php";
        }

        public static function save() {
            
            include "model/UserModel.php";

            $model = new UserModel($_REQUEST["name"], $_REQUEST["cpf"], $_REQUEST["birth"]);
            
        }
    }
?>