<?php

class IModel {

    protected $dbConn ;

    function __construct() {

        $user = "rss";
        $pass = "t6UnUv7c";

        try {
            $this->dbConn = new PDO('mysql:host=http://studentwebserver.informatika.uni-mb.si/mysqladmin/index.php; dbname=rss_db;charset=utf8', $user, $pass);
           $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function FetchAllAsJSonFormat($QueryStr) {

        $Query = $this->dbConn->query($QueryStr);

        return $Query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ExecuteQuery($QueryStr) {

        $Query = $this->dbConn->prepare($QueryStr);
        $Query->execute();
        return $Query->queryString;
    }

}
