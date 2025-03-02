<?php
class Connection {

private $host;
private $username;
private $password;
private $database;
private $connection;

public function __construct($host, $username, $password, $database) {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
   
}

private function connect() {
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, 3325);

    if ($this->connection->connect_error) {
        die("connection failed!! " . $this->connection->connect_error);
    } else {
                    echo "connection successful";
    }
}

public function getConnection(){

    return $this->connection;
}

public function runquery($query) {
    $stmt = $this->connection->query($query); // Fixed 'runquery' to 'query'

    if (!$stmt) {
        die("query error");
    } else {
        return $stmt;
    }
}

}
?>
