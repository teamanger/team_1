<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProvinciaPeer
 *
 * @author sergiok
 */
class ProvinciaPeer {

    static public function getAll(){
        $db = DB::getConnection();
        $sql = "SELECT * FROM provincias";
        return $db->query($sql)->fetchAll();
    }
}

?>
