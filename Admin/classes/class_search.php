<?php
include_once('include/DBconnection.php');
class Search extends dbconnection{

public function SearchAll($search)
{
    $query = "(SELECT , pro_name,pro_desc, 'msg' as type FROM productVendor WHERE content LIKE '%" . 
    $search . "%' OR title LIKE '%" . $search ."%') 
    UNION
    (SELECT cat_name, cat_des, 'topic' as type FROM category WHERE content LIKE '%" . 
    $search . "%' OR title LIKE '%" . $search ."%') ";
    // $query="SELECT * FROM  productVendor  WHERE MATCH(pro_name,pro_desc) AGAINST (.%" . $search . "%')";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);

} 

}

?>