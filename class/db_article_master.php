<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_article_master{
	var $_article_id;
	var $_article_random_id;
	var $_article_headline;
	var $_article_homepage_headline;
	var $_article_page_url;
	var $_article_short_description;
	var $_article_description;
	var $_category_id;
	var $_sub_ca1tegory_id;
	var $_sub_sub_category_id;
	var $_article_tags;
	var $_article_type;
	var $_admin_name;
    var $_admin_name1;
	var $_article_byline;
	var $_article_date;
    var $_article_date1;
	var $_article_time;
	var $_article_location;
	var $_article_page_title;
	var $_article_meta_description;
	var $_article_keywords;
	var $_article_image;
	var $_article_image1;
	var $_article_image2;
	var $_article_image_caption;
	var $_active;  
// Class constructor
function db_article_master($id    	  = NULL){
	$this->_article_id  			  = NULL;
	$this->_article_random_id    	  = NULL;
	$this->_article_headline  		  = NULL;
	$this->_article_homepage_headline = NULL;
	$this->_article_page_url  		  = NULL;
	$this->_article_short_description = NULL;
	$this->_article_description  	  = NULL;
	$this->_category_id  			  = NULL;
	$this->_sub_category_id  		  = NULL;
	$this->_sub_sub_category_id  	  = NULL;
	$this->_article_tags  		      = NULL;
	$this->_article_type  			  = NULL;
	$this->_admin_name  			  = NULL;
    $this->_admin_name1               = NULL;
	$this->_article_byline  		  = NULL;
	$this->_article_date  			  = NULL;
    $this->_article_date1              = NULL;
	$this->_article_time  			  = NULL;
	$this->_article_location  		  = NULL;
	$this->_article_page_title  	  = NULL;
	$this->_article_meta_description  = NULL;
	$this->_article_keywords  		  = NULL;
	$this->_article_image  			  = NULL;
	$this->_article_image1  		  = NULL;
	$this->_article_image2  		  = NULL;
	$this->_article_image_caption  	  = NULL;
	$this->_active  				  = NULL;
  $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query                            = sprintf("Select * from " . TABLE_ARTICLE_MASTER. " where article_id = %d",$id);
        $objDB                            = new database;
        $objDB                            ->db_connect();
        $o_result                         = $objDB->db_fetch_array($Query);
        $this->_article_id                = $o_result["article_id"];
        $this->_article_random_id         = $o_result["article_random_id"];
        $this->_article_headline          = $o_result["article_headline"];
        $this->_article_homepage_headline = $o_result["article_homepage_headline"];
        $this->_article_page_url          = $o_result["article_page_url"];
        $this->_article_short_description = $o_result["article_short_description"];
        $this->_article_description       = $o_result["article_description"];
        $this->_category_id               = $o_result["category_id"];
        $this->_sub_category_id           = $o_result["sub_category_id"];
        $this->_sub_sub_category_id       = $o_result["sub_sub_category_id"];
        $this->_article_tags              = $o_result["article_tags"];
        $this->_article_type              = $o_result["article_type"];
        $this->_admin_name                = $o_result["admin_name"];
        $this->_admin_name1                = $o_result["admin_name1"];
        $this->_article_byline            = $o_result["article_byline"];
        $this->_article_date              = $o_result["article_date"];
        $this->_article_date1              = $o_result["article_date1"];
        $this->_article_time              = $o_result["article_time"];
        $this->_article_location          = $o_result["article_location"];
        $this->_article_page_title        = $o_result["article_page_title"];
        $this->_article_meta_description  = $o_result["article_meta_description"];
        $this->_article_keywords          = $o_result["article_keywords"];
        $this->_article_image             = $o_result["article_image"];
        $this->_article_image1            = $o_result["article_image1"];
        $this->_article_image2            = $o_result["article_image2"];
        $this->_article_image_caption     = $o_result["article_image_caption"];
        $this->_active              	  = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_article_master';}
    function save(){
        if ($this->_article_id):
            $article_id             	= preg_replace('#[^0-9]#i', '', $this->_article_id);
            //update
            $Query               		= sprintf("UPDATE " . TABLE_ARTICLE_MASTER . " SET " .
        	"article_random_id          =" . replace_spl_chr($this->_article_random_id) . "," .
            "article_headline           ='" . replace_spl_chr($this->_article_headline) . "'," .
            "article_homepage_headline  ='" . replace_spl_chr($this->_article_homepage_headline) . "'," .
            "article_page_url           ='" . replace_spl_chr($this->_article_page_url) . "'," .
            "article_short_description  ='" . replace_spl_chr($this->_article_short_description) . "'," .
            "article_description        ='" . replace_spl_chr($this->_article_description) . "'," .
            "category_id          		=" . replace_spl_chr($this->_category_id) . "," .
            "sub_category_id          	=" . replace_spl_chr($this->_sub_category_id) . "," .
            "sub_sub_category_id        =" . replace_spl_chr($this->_sub_sub_category_id) . "," .
            "article_tags          		='" . replace_spl_chr($this->_article_tags) . "'," .
            "article_type          		='" . replace_spl_chr($this->_article_type) . "'," .
            "admin_name          		='" . replace_spl_chr($this->_admin_name) . "'," .
            "admin_name1                 ='" . replace_spl_chr($this->_admin_name1) . "'," .
            "article_byline          	='" . replace_spl_chr($this->_article_byline) . "'," .
            "article_date          		='" . replace_spl_chr($this->_article_date) . "'," .
            "article_date1               ='" . replace_spl_chr($this->_article_date1) . "'," .
            "article_time          		='" . replace_spl_chr($this->_article_time) . "'," .
            "article_location          	='" . replace_spl_chr($this->_article_location) . "'," .
            "article_page_title         ='" . replace_spl_chr($this->_article_page_title) . "'," .
            "article_meta_description   ='" . replace_spl_chr($this->_article_meta_description) . "'," .
            "article_keywords          	='" . replace_spl_chr($this->_article_keywords) . "'," .
            "article_image              ='" . replace_spl_chr($this->_article_image) . "'," .
            "article_image1          	='" . replace_spl_chr($this->_article_image1) . "'," .
            "article_image2          	='" . replace_spl_chr($this->_article_image2) . "'," .
            "article_image_caption      ='" . replace_spl_chr($this->_article_image_caption) . "'," .
            "active              		='" . $this->_active . "'" .
            "WHERE article_id        	=%d", $article_id);
        else:
            //insert
            $Query = "insert into " . TABLE_ARTICLE_MASTER .
            "(
            	article_random_id,
				article_headline,
				article_homepage_headline,
				article_page_url,
				article_short_description,
				article_description,
				category_id,
				sub_category_id,
				sub_sub_category_id,
				article_tags,
				article_type,
				admin_name,
                admin_name1,
				article_byline,
				article_date,
                article_date1,
				article_time,
				article_location,
				article_page_title,
				article_meta_description,
				article_keywords,
				article_image,
				article_image1,
				article_image2,
				article_image_caption,
				active
            )" .
            "values
            (
            	" . replace_spl_chr($this->_article_random_id) . ",
				'" . replace_spl_chr($this->_article_headline) . "',
				'" . replace_spl_chr($this->_article_homepage_headline) . "',
				'" . replace_spl_chr($this->_article_page_url) . "',
				'" . replace_spl_chr($this->_article_short_description) . "',
				'" . replace_spl_chr($this->_article_description) . "',
				" . replace_spl_chr($this->_category_id) . ",
				" . replace_spl_chr($this->_sub_category_id) . ",
				" . replace_spl_chr($this->_sub_sub_category_id) . ",
				'" . replace_spl_chr($this->_article_tags) . "',
				'" . replace_spl_chr($this->_article_type) . "',
				'" . replace_spl_chr($this->_admin_name) . "',
                '" . replace_spl_chr($this->_admin_name1) . "',
				'" . replace_spl_chr($this->_article_byline) . "',
				'" . replace_spl_chr($this->_article_date) . "',
                '" . replace_spl_chr($this->_article_date1) . "',
				'" . replace_spl_chr($this->_article_time) . "',
				'" . replace_spl_chr($this->_article_location) . "',
				'" . replace_spl_chr($this->_article_page_title) . "',
				'" . replace_spl_chr($this->_article_meta_description) . "',
				'" . replace_spl_chr($this->_article_keywords) . "',
				'" . replace_spl_chr($this->_article_image) . "',
				'" . replace_spl_chr($this->_article_image1) . "',
				'" . replace_spl_chr($this->_article_image2) . "',
				'" . replace_spl_chr($this->_article_image_caption) . "',
				'" . $this->_active . "'
            )";
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
	/////////Select All function Begins//////////////////////////////////////
    function selectAll($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_ARTICLE_MASTER . $strWhere . " order by article_id DESC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_ARTICLE_MASTER.$strWhere." order by article_id DESC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }

    function selectAllForOtherNews($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_ARTICLE_MASTER . $strWhere . " order by article_id DESC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="Select * from ".TABLE_ARTICLE_MASTER.$strWhere." order by article_id DESC LIMIT $cur,$max";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }


	/////////Select All function Ends//////////////////////////////////////
   function selectAllGroup($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select DISTINCT admin_name from article_master";
        //SELECT DISTINCT product_type FROM produk2
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_article_id):
            $article_id = preg_replace('#[^0-9]#i', '', $this->_article_id);
            $Query = sprintf("Delete from " . TABLE_ARTICLE_MASTER . " where article_id =%d",$article_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_article_id(){return $this->_article_id;}
    function Get_article_random_id(){return $this->_article_random_id;}
    function Get_article_headline(){return $this->_article_headline;}
    function Get_article_homepage_headline(){return $this->_article_homepage_headline;}
    function Get_article_page_url(){return $this->_article_page_url;}
    function Get_article_short_description(){return $this->_article_short_description;}
    function Get_article_description(){return $this->_article_description;}
    function Get_category_id(){return $this->_category_id;}
    function Get_sub_category_id(){return $this->_sub_category_id;}
    function Get_sub_sub_category_id(){return $this->_sub_sub_category_id;}
    function Get_article_tags(){return $this->_article_tags;}
    function Get_article_type(){return $this->_article_type;}
    function Get_admin_name(){return $this->_admin_name;}
    function Get_admin_name1(){return $this->_admin_name1;}
    function Get_article_byline(){return $this->_article_byline;}
    function Get_article_date(){return $this->_article_date;}
    function Get_article_date1(){return $this->_article_date1;}
    function Get_article_time(){return $this->_article_time;}
    function Get_article_location(){return $this->_article_location;}
    function Get_article_page_title(){return $this->_article_page_title;}
    function Get_article_meta_description(){return $this->_article_meta_description;}
    function Get_article_keywords(){return $this->_article_keywords;}
    function Get_article_image(){return $this->_article_image;}
    function Get_article_image1(){return $this->_article_image1;}
    function Get_article_image2(){return $this->_article_image2;}
    function Get_article_image_caption(){return $this->_article_image_caption;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_article_id($_article_id){$this->_article_id = $_article_id;}
    function Set_article_random_id($_article_random_id){$this->_article_random_id = $_article_random_id;}
    function Set_article_headline($_article_headline){$this->_article_headline = $_article_headline;}
    function Set_article_homepage_headline($_article_homepage_headline){$this->_article_homepage_headline = $_article_homepage_headline;}
    function Set_article_page_url($_article_page_url){$this->_article_page_url = $_article_page_url;}
    function Set_article_short_description($_article_short_description){$this->_article_short_description = $_article_short_description;}
    function Set_article_description($_article_description){$this->_article_description = $_article_description;}
    function Set_category_id($_category_id){$this->_category_id = $_category_id;}
    function Set_sub_category_id($_sub_category_id){$this->_sub_category_id = $_sub_category_id;}
    function Set_sub_sub_category_id($_sub_sub_category_id){$this->_sub_sub_category_id = $_sub_sub_category_id;}
    function Set_article_tags($_article_tags){$this->_article_tags = $_article_tags;}
    function Set_article_type($_article_type){$this->_article_type = $_article_type;}
    function Set_admin_name($_admin_name){$this->_admin_name = $_admin_name;}
    function Set_admin_name1($_admin_name1){$this->_admin_name1 = $_admin_name1;}
    function Set_article_byline($_article_byline){$this->_article_byline = $_article_byline;}
    function Set_article_date($_article_date){$this->_article_date = $_article_date;}
    function Set_article_date1($_article_date1){$this->_article_date1 = $_article_date1;}
    function Set_article_time($_article_time){$this->_article_time = $_article_time;}
    function Set_article_location($_article_location){$this->_article_location = $_article_location;}
	function Set_article_page_title($_article_page_title){$this->_article_page_title = $_article_page_title;}
	function Set_article_meta_description($_article_meta_description){$this->_article_meta_description = $_article_meta_description;}
	function Set_article_keywords($_article_keywords){$this->_article_keywords = $_article_keywords;}
	function Set_article_image($_article_image){$this->_article_image = $_article_image;}
	function Set_article_image1($_article_image1){$this->_article_image1 = $_article_image1;}
	function Set_article_image2($_article_image2){$this->_article_image2 = $_article_image2;}
	function Set_article_image_caption($_article_image_caption){$this->_article_image_caption = $_article_image_caption;}
	function Set_active($_active){$this->_active = $_active;}
}
?>
