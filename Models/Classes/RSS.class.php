<?php
class RSS
{
    public function addNewMailToMailingList($mail)
    {
        $result = Connection::connect()->prepare(
                "INSERT INTO `rss_mailing`(`mail`, `timestamp`) VALUES (:mail, :time);"
                );
        $result->execute(array(
                ':time' => time(),
                ':mail' => $mail
        ));
    }
    
    public function checkIfMailExists($mail)
    {
        $result = Connection::connect()->prepare(
                "SELECT `id` FROM `rss_mailing` WHERE `mail`=:mail AND `active`=1;"
                );
        $result->execute(array(
                ':mail' => $mail
        ));
        $m = $result->fetch();
        
        if (isset($m['id'])) {
            return false;
        }
        return true;
    }
}