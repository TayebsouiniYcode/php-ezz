<?php 

namespace Core\Database;


final class Scanner {
    private string $directory;
    private string $namespace;

    public function __construct($directory, $namespace)
    {
        $this->directory = $directory;
        $this->namespace = $namespace;
    }

    public function runScanner() {

    }

    public function getAllModels() {

    }
}