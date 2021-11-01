<?php
/**
* Database class
*
* This class class holds functions that operates on the database itself
*
* @version 1.0
* @author Christoph Hartleb <christophhartleb@gmx.at>
* @project guestbook
*/
class Database
{
	/**
	* host class variable
	* @access private
	* @var string
	*/
    private $host; # hostname
    /**
	* db class variable
	* @access private
	* @var string
	*/
    private $db; # name of database
	/**
	* user class variable
	* @access private
	* @var string
	*/
    private $user; # name of user
    /**
	* pwd class variable
	* @access private
	* @var string
	*/
    private $pwd; # password of user. Can be set via XAMMP
    /**
	* con class variable
	* @access private
	* @var string
	*/
    private $con; # Connection
    /**
	* A sample class variable
	* @access private
	* @var integer
	*/
    private $port = 3306; # default port for MySQL (XAMPP control panel)
  
	/**
	* The class constructor
	*
	* This sets up the class
    * @param string $host
    * @param string $db
    * @param string $user
    * @param string $pwd
    * @param string $port
	*/
    function __construct($host, $db, $user, $pwd, $port = 3306, $autoconnect = true)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->port = $port;
        if($autoconnect)
        {
            $this->open();
        } 
    }

	/**
	* open function
	*
	* This function connects to database
	*/
    function open()
    {
        $this->con = new mysqli($this->host, $this->db, $this->user, $this->pwd, $this->port);
    }

	/**
	* insert function
	*
	* This function inserts guest book entry
	*/
    function insert()
    {
        if ( empty( $table ) || empty( $data ) )
        {
            return false;
        }
        // Connect to the database
	    $db = $this->open();

		// Cast $data and $format to arrays
		$data = (array) $data;
		$format = (array) $format;

        // Build format string
        $format = implode('', $format); 
        $format = str_replace('%', '', $format);
        
        list( $fields, $placeholders, $values ) = $this->prep_query($data);

        // Prepend $format onto $values
        array_unshift($values, $format); 

        // Prepary our query for binding
        $stmt = $db->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})");

        // Dynamically bind values
        call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($values));
        
        // Execute the query
        $stmt->execute();
        
        // Check for successful insertion
        if ( $stmt->affected_rows ) {
            return true;
        }
        
        return false;
    }

	/**
	* query function
	*
	* This function returns fixed query
	*
	* @return string
	*/
    function query( $query )
    {
        return $this->con->query( $query ); # &query is the sql statement
    }

	/**
	* close function
	*
	* This function closes connection to database
	*/
    function close()
    {
        $this->con->close();
    }

    /**
	* prep_query function
	*
	* This function returns array of entries
	*/
    private function prep_query($data, $type='insert')
    {
        // Instantiate $fields and $placeholders for looping
        $fields = '';
        $placeholders = '';
        $values = array();
        
        // Loop through $data and build $fields, $placeholders, and $values			
        foreach ( $data as $field => $value )
        {
            $fields .= "{$field},";
            $values[] = $value;
            
            if ( $type == 'update')
            {
                $placeholders .= $field . '=?,';
            }
            else
            {
                $placeholders .= '?,';
            }
        }
        // Normalize $fields and $placeholders for inserting
        $fields = substr($fields, 0, -1);
        $placeholders = substr($placeholders, 0, -1);
        
        return array( $fields, $placeholders, $values );
	}
}
?>