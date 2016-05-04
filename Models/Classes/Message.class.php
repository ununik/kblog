<?php
class Message
{
    public function saveMessageToDB($mail, $subject, $message)
    {
        $result = Connection::connect()->prepare(
            "INSERT INTO `message`(`timestamp`, `mail`, `subject`, `message`) VALUES (:time, :mail, :subject, :message);"
        );
        $result->execute(array(
            ':time' => time(),
            ':mail' => $mail,
            ':subject' => $subject,
            ':message' => $message
        ));
    }
}