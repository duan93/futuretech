<?php
class connect {
    var $db = null;
    function __construct() {
        $dsn = "mysql:host=localhost;dbname=futuretech";
        $user = 'root';
        $pass ='';
        $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    function getList($select){
        $results = $this ->db-> query($select);
        return $results;
    }

    function getInstance($select){
        $results = $this ->db-> query($select);
        $result = $results -> fetch();
        return $result;
    }

    function exec($query){
        $result = $this ->db-> exec($query);
        return $result;
    }

}
?>
