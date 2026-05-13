<?php 
namespace Core\Application;

use Core\Database\Scanner;
use Core\Configs\Configuration;

class Application {

    public function __construct() {
        $scanner = new Scanner(Configuration::$modelsPackages, Configuration::$namespace);
    }

}