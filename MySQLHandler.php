<?php
require_once "DatabaseHandler.php";
// make sure the Mysql object contains all methods so, I create and interface databaseHandler
class MySQLHandler implements DatabaseHandler
{
    public function connect(): void
    {
        echo "Connecting";
    }

    public function create(): void
    {
        echo "Creating mysql database \n";
    }

    public function insert()
    {
        //
    }

    public function delete()
    {
        //
    }

    public function update()
    {
        //
    }
}