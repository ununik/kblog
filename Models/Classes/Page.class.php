<?php
class Page
{
    public function getHomePage()
    {
        $result = Connection::connect()->prepare(
            "SELECT * FROM `home_page` ORDER BY `id` DESC LIMIT 1;"
        );
        $result->execute();
        $page = $result->fetch();
        
        return $page;
    }
}