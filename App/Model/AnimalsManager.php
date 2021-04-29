<?php
namespace App\Model;
class AnimalsManager extends Manager
{
    public function listAnimals()
    {
        $db = $this->getDbConnect();
        $req = $db->prepare('SELECT * FROM animal LIMIT 25');
        $req->execute();
        return $req->fetchAll();
    }
}