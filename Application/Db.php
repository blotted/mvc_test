<?php

namespace Application;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=mvc_test', 'root', 'root');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        return $result;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        if ($result !== false) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}




















