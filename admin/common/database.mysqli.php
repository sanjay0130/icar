<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include("encrypt_file.php");
class common extends encrypt_class
{
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "";
	private $db_name = "icar";

	private $con = false;
	private $result = array();
	private $myQuery = "";
	public $numResults = "";
	private $status = "";
	function __construct()
	{
		$this->
con = $this->connectDB();
    }
    
    
    //function to execute mysql_query by Mrutunjay date 19-01-2019
    //below function is for  executing the query
    function get_query($query)
    {
    $this->con = $this->connectDB();
    $mysqlQuery = mysqli_query($this->con, $query);
    return $mysqlQuery;
    }
    
    //function to find no of rows when executing the query by Mrutunjay date 19-01-2019
    function find_no_rows($sel_query)
    {
    $no_rows = mysqli_num_rows($sel_query);
    return $no_rows;
    }
    
    
    //function to find the array data by Mrutunjay date 19-01-2019
    function fetch_array($sel_query)
    {
    $data = mysqli_fetch_array($sel_query);
    return $data;
    }
    
    //function to find the array data by Mrutunjay date 19-01-2019
    function fetch_assoc_array($sel_query)
    {
    $assocData = mysqli_fetch_assoc($sel_query);
    return $assocData;
    }
    
    // Private function to check if table exists 
    private function tableExists($table)
    {
    $tablesInDb = $this->get_query('SHOW TABLES FROM ' . $this->db_name . ' LIKE "' . $table . '"');
    if ($tablesInDb) {
    if ($this->find_no_rows($tablesInDb) == 1) {
    return true;
    } else {
    array_push($this->result, $table . " does not exist in this database");
    return false;
    }
    }
    }
    
    public function getResult()
    {
    $val = $this->result;
    $this->result = array();
    return $val;
    }
    
    //Pass the SQL back for debugging
    public function getSql()
    {
    $val = $this->myQuery;
    $this->myQuery = array();
    return $val;
    }
    
    //Pass the number of rows back
    public function numRows()
    {
    $val = $this->numResults;
    $this->numResults = array();
    return $val;
    }
    
    // Escape your string
    public function escapeString($data)
    {
    $this->con = $this->connectDB();
    return mysqli_real_escape_string($this->con, $data);
    }
    
    
    
    //close database connection by Mrutunjay date 21-01-2019	
    //Below member function is used to close the database connection
    //It needs to be closed after every connection opened , execution.
    function closeConnection()
    {
    $this->con = $this->connectDB();
    $close = mysqli_close($this->con);
    if (!$close) {
    echo "Connection close failed";
    }
    return true;
    }
    
    //connect db function to connect to database by Mrutunjay date 21-01-2019
    function connectDB()
    {
    
    $this->con = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    if (!$this->con) {
    echo "Connection attempt failed";
    } else {
    return $this->con;
    }
    }
    
    
    
    //operation
    
    // Function to insert into the database
    public function insert($table, $params = array())
    {
    // $this->con = $this->connectDB();
    // if($this->tableExists($table)){
    $sql = "INSERT INTO " . $table . " (" . implode(", ", array_keys($params)) . ") VALUES ('" . implode("', '", $params) . "')";
    
    $this->myQuery = $sql;
    
    if ($ins = @$this->get_query($sql)) {
    //array_push($this->result,mysqli_insert_id($this->con));
    return 'success';
    } else {
    //array_push($this->result,mysqli_error($this->con));
    return 'fail';
    }
    
    // }else{
    // 	return false; 
    // }
    }
    
    // Function to update row in database
    public function update($table, $params = array(), $where)
    {
    
    // update('data1',array('name'=>"Name 4",'dob'=>"17-06-1990",'qual'=>"MBA"),"id='2' AND status='1'")
    
    // Create Array to hold all the columns to update
    $args = array();
    foreach ($params as $field => $value) {
    // Seperate each column out with it's corresponding value
    $args[] = $field . "='" . $value . "'";
    }
    // Create the query
    $sql = "UPDATE " . $table . " SET " . implode(",", $args) . " WHERE " . $where;
    // return $sql;
    // Make query to database
    $this->myQuery = $sql; // Pass back the SQL
    if ($query = @$this->get_query($sql)) {
    
    return 'success'; // Update has been successful
    } else {
    
    return 'fail'; // Update has not been successful
    }
    }
    
    //Function to delete table or row(s) from database
    public function delete($table, $where = null)
    {
    
    // delete("data1","id='2' AND status='1'");
    
    if ($where == null) {
    $delete = 'DROP TABLE ' . $table;
    } else {
    $delete = "DELETE FROM " . $table . " WHERE " . $where;
    }
    
    if ($del = @$this->get_query($delete)) {
    
    $this->myQuery = $delete;
    return 'success';
    } else {
    
    return 'fail';
    }
    }
    
    
    // Function to SELECT from the database
    public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null)
    {
    // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
    // select('data1','*',NULL,"status='1'","id DESC"); 
    
    // select('CRUDClass','CRUDClass.id,CRUDClass.name,CRUDClassChild.name','CRUDClassChild ON CRUDClass.id = parentId','CRUDClass.name="Name 1"','id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
    
    // Create query from the variables passed to the function
    $q = "SELECT " . $rows . " FROM " . $table;
    if ($join != null) {
    $q .= " JOIN " . $join;
    }
    if ($where != null) {
    $q .= " WHERE " . $where;
    }
    if ($order != null) {
    $q .= " ORDER BY " . $order;
    }
    if ($limit != null) {
    $q .= " LIMIT " . $limit;
    }
    // return $q;
    $this->myQuery = $q; // Pass back the SQL
    // Check to see if the table exists
    
    $query = $this->get_query($q);
    if ($query) {
    
    $this->numResults = $this->find_no_rows($query);
    // return 'sdf';
    for ($i = 0; $i < $this->numResults; $i++) {
    $r = $this->fetch_array($query);
    $key = array_keys($r);
    for ($x = 0; $x < count($key); $x++) {
    
    if (!is_int($key[$x])) {
    if ($this->find_no_rows($query) >= 1) {
    $this->result[$i][$key[$x]] = $r[$key[$x]];
    } else {
    $this->result = null;
    }
    }
    }
    }
    return true;
    } else {
    
    return false;
    }
    }
    //operation
    
    function __destruct()
    {
    $this->closeConnection();
    }
    }//end of class
    // $con = new common();
    // print_r($con); 