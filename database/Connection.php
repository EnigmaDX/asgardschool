<?php

require_once 'credentials.php';

/**
 * Description of Connection
 *
 * @author Joseph Mills
 * @version 2.0
 */
class Connection {

    private $link;
    private $result;

    
    /**
     * Connects to the database
     * @return boolean TRUE upon successful connection and FALSE if otherwise
     */
    function connect() {
        $connected = FALSE;

        $this->link = new mysqli(SERVER, USERNAME, PASSWORD, FINAL_PROJECT_DB);
        //check for errors
        if (!mysqli_connect_errno()) {
            $connected = TRUE;
        }
        //return success
        return $connected;
    }

    /**
     * Executes a given SQL statement
     * This method makes use of prepared statements and 
     * binds the parameters dynamically.
     * @param string $query SQL statement to execute.
     * @param mixed $values The parameters to be bound to the prepared statement
     * @return boolean
     */
    function query(string $query, ...$values) {
        $success = FALSE;
        
        //check for a valid connection
        if ($this->connect()) {
            //prepare statement
            $prepStmt = mysqli_prepare($this->link, $query);
        }
        if ($prepStmt) {
            if($values != NULL){
                $types = Connection::getTypes($values);
                //bind the values dynamically
                mysqli_stmt_bind_param($prepStmt, $types, ...$values);
            }
            //execute prepared statement
            mysqli_stmt_execute($prepStmt);
            //keep result in class property
            $this->result = mysqli_stmt_get_result($prepStmt);
            $success = TRUE;
        }
        return $success;
    }

    public function query1($sql) 
    {
        if($this->connect())
        {
            //run query
            $this->result = mysqli_query($this->link, $sql);

            //confirm if record returns
            return !($this->result == false);
        }
    }

    /**
     * Gets the string representation of the data types 
     * of the values to bind dynamically to a prepared statement
     * @param Array $valueArray An array of values to insert into a database
     * @return reference The string representation of the data types of the values to insert
     */
    private static function getTypes(Array $valueArray) {
        $typeString = '';
        //get type for each element of array
        foreach ($valueArray as $value) {
            if (is_double($value)) {
                $typeString .= 'd';
            } else if (is_int($value)) {
                $typeString .= 'i';
            } else if (is_string($value)) {
                $typeString .= 's';
            }
        }
        return $typeString;
    }

    /**
     * Fetches the MySQL result
     * @return mysqli_result The result from query()
     */
    public function fetch() {
       {
        //check if result has content
        if($this->result == false){
            return false;
        }
        else
        {
            //return one record
            return mysqli_fetch_assoc($this->result);
        }
    }
}

    /**
     * Fetches an associative array of the SQL result
     * @return Array An associative array of the result from query()
     */
    public function fetch_assoc() {
        return mysqli_fetch_assoc($this->result);
    }
}
