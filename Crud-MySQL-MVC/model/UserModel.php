<?php 

class UserModel {

    private $id, $name, $cpf, $birth;

    public function __construct($name, $cpf, $birth) {

        $this -> name = $name;
        $this -> cpf = $cpf;
        $this -> birth = $birth;
    }

    public function save() {

        include "repository/UserRepository.php";

        $repository = new UserReposiory();

        $repository -> insert();
    }
}
?>