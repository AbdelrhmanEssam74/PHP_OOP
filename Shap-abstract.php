<?php

/**
 *Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
 * An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
 * The child class method must be defined with the same name and it redeclare the parent abstract method
 * The number of required arguments must be the same. However, the child class may have optional arguments in addition
 */
abstract class Logger
{
    protected string $content;

    abstract protected function setContent(string $content);

    abstract protected function log();
}

class LogToFile extends Logger
{

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function log(): void
    {
        FileManager::create("test.txt", $this->content);
    }


}

class FileManager
{
    public static function create($filename, $content): void
    {
        if (!file_exists($filename)) {
            $handle = fopen($filename, "x");
        }else{
            $handle = fopen($filename, "a");
        }
        fwrite($handle, $content . PHP_EOL);
        fclose($handle);
    }
}

$logFile = new LogToFile();
$logFile->setContent("hi this is a test content9");
$logFile->log();
$logFile->setContent("hi this is a test content8");
$logFile->log();
