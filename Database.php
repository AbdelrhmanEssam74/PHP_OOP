<?php
class Database
{
    protected  $handler;
    public function handle(DatabaseHandler $handler): void
    {
        $this->handler = $handler;
    }
    public function create(){
        return $this->handler->create();
    }
}