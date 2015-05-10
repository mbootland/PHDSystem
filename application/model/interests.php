<?php

class Interests
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }



public function getAllInterests($searchInterest){
    $sql = "SELECT submissionID, supervisorID FROM interest WHERE submissionID LIKE :searchInterest";
    $query = $this->db->prepare($sql);
    $parameters = array(':searchInterest' => $searchInterest);
    $query->execute($parameters);
    //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    return $query->fetchAll();
}

}
