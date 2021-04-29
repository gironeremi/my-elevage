<?php
namespace App\Controller;
use App\Model\AnimalsManager;
class Controller
{
    public function cleanVar($str)
    {
        if (isset($str)) {
            return trim(htmlspecialchars(($str)));
        } else {
            return "";
        }
    }
    public function home()
    {
        $animalsManager = new AnimalsManager();
        $animals = $animalsManager->listAnimals();
        $animalsNames = array_column($animals,"nom");
        require('View/homeView.php');
    }
}