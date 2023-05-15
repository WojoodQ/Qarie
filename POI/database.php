<?php
class Createdb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "books",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }
        mysqli_select_db($this->con, $dbname);
    //     if (mysqli_select_db($this->con, $dbname)) {

    //         // print "<p>Data Base has been selected</p>";
    //     } else {
    //         // print "<p> could not select the data base</p>";
    //     }
    }

    // get product from the database
    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
