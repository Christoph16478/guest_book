<?php
/**
* Test class
* 
* This class is used for operations on a database
* 
* @version 1.0
* @author Christoph Hartleb <christophhartleb@gmx.at>
* @project guestbook
*/
class Test extends DB
{
    /**
	* getRowsNumber function
    * 
    * count entries in database
	* 
	* @return Integer
	*/
    public function getRowsNumber()
    {
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $this->connect()->query($sql);
        $count = $stmt->fetchColumn();
        print $count;
    }
}
?>