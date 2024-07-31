<?php

require_once "FileSystemHandler.php";
require_once "DatabaseHandler.php";

class SQLiteHandler implements DatabaseHandler
{
    protected FileSystemHandler $fileSystem;

    public function load($file): null
    {
        return $this->fileSystem->read($file);
    }

    public function create() :void
    {
        echo "Creating sqlite database\n";
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