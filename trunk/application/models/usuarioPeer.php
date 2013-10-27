<?php

class usuarioPeer {

    static public function login($email, $password){
        $db = DB::getConnection();
        $sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND password = '".$password."' ";
        $data = $db->query($sql)->fetchAll();
        if(empty($data)){
           return false; 
        }else{
            $_SESSION["user"] = $data;
            return true;
        }
    }
}
?>
