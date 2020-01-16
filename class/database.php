<?php
/**
 * Include all Database Connection
 *
 * @author Vikram
 */

    /*$con = mysqli_connect("localhost","root","","iq");
       if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }



    define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
    define('DB_SERVER_USERNAME', 'root');
    define('DB_SERVER_PASSWORD', '');
	define('DB_DATABASE', 'iq');
	define('USE_PCONNECT', 'true'); // use persistent connections?
	define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'*/

    $con = mysqli_connect("10.12.175.10","vmrc_dbuser","D6Rz4axBzQ4Ny7SK!","iq");
       if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    define('DB_SERVER', '10.12.175.10'); // eg, localhost - should not be empty for productive servers
    define('DB_SERVER_USERNAME', 'vmrc_dbuser');
    define('DB_SERVER_PASSWORD', 'D6Rz4axBzQ4Ny7SK!');
    define('DB_DATABASE', 'iq');
    define('USE_PCONNECT', 'true'); // use persistent connections?
    define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'
    
/**
 * Include all Database Tables Definations here
 *
 * @author Vikram
 */
include_once(DIR_WS_CLASS_DATABASE_TABLES . "database_tables.php");
include_once(DIR_WS_CLASS_DATABASE_TABLES_SITE . "database_tables.php");
/**
 * Include all Extra Functions
 *
 * @author Vikram
 */
function replace_spl_chr($str){
    $str = str_replace("'", "`", $str);
    return $str;
}

function replace_spl_chrnew($str123){
    $str123 = str_replace123("&#34;", "&#39;", $str123);
    return $str;
}
/**
 * Include all Database Globle functions
 *
 * @author Vikram
 */
Class database{
    function db_connect($server = DB_SERVER, $username = DB_SERVER_USERNAME,$password = DB_SERVER_PASSWORD, $database = DB_DATABASE,$link = 'db_link'){
		global $$link;
        if (USE_PCONNECT == 'true'):
            $$link = mysql_pconnect($server, $username, $password);
        else:
            $$link = mysql_connect($server, $username, $password);
        endif;
        if ($$link)
            mysql_select_db($database);
        return $$link;
    }

    function db_close($link = 'db_link'){
        global $$link;
        return mysql_close($$link);
    }

    function db_query($query, $link = 'db_link'){
        global $$link;
        $result = mysql_query($query, $$link) or db_error($query, mysql_errno(),mysql_error());
        return $result;
    }

    function db_fetch_array($query, $link = 'db_link'){
        global $$link;
        $result = mysql_query($query, $$link) or db_error($query, mysql_errno(),mysql_error());
        return mysql_fetch_array($result, MYSQL_ASSOC);
    }

    function db_num_rows($db_query){
        return mysql_num_rows($db_query);
    }

    function db_data_seek($db_query, $row_number){
        return mysql_data_seek($db_query, $row_number);
    }

    function db_insert_id(){
        return mysql_insert_id();
    }

    function db_free_result($db_query)    {
        return mysql_free_result($db_query);
    }

}

//to display the error and stop execution
//can also log the error.

function db_error($query, $errno, $error){
    die('<font color="#000000"><b>' . $errno . ' - ' . $error . '<br><br>' . $query . '<br><br><small><font color="#ff0000">Error</font></small><br><br></b></font>');
}