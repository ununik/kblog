<?php
class Navigation
{
    public function getAllCategories()
    {
        $result = Connection::connect()->prepare(
                "SELECT * FROM `clanky_category` WHERE `active`=1 AND `hidden`=0;"
                );
        $result->execute();
        $entry = $result->fetchAll();
        
        return $entry;
    }
}