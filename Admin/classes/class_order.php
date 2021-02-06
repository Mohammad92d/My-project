<?php
include_once('include/DBconnection.php');

class order extends dbconnection{
   
    public $date;
	public $cust_id;
	public $order_id;
    public $pro_id;
	public $quantity;
	public $total ;

    public function create()
	{
		$query = "INSERT INTO orders(order_data,cust_id)
				 VALUES('$this->date','$this->cust_id')";
		$this->performQuery($query);
		return mysqli_insert_id($this->conn);

    }
       public function readIdOrder($ido){
			$query 		= "SELECT * FROM orders WHERE cust_id = '$ido' ";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
		
		public function createOrderDetails(){
			$query 		= "INSERT INTO orders_detalis(order_id,pro_id,qty,total) 
			VALUES('$this->order_id','$this->pro_id','$this->quantity','$this->total')";
			$this->performQuery($query);
		 }


		 public function idOrderToShoustomer()
		 {
		   $query  = "SELECT * FROM orders_detalis ORDER BY order_id DESC LIMIT 1";
		   $result = $this->performQuery($query);
		   return $this->fetchAll($result);	

		 }
		 public function readIdOrderByVendor($id){
			$query = "SELECT orders_detalis.order_id,orders.order_data,customer.cust_id,productVendor.prodV_id,
				orders_detalis.qty,orders_detalis.total,productVendor.pro_name,customer.cust_mobile,
				customer.cust_address,productVendor.pro_price FROM orders 
				INNER JOIN orders_detalis ON orders.order_id  = orders_detalis.order_id
				INNER JOIN customer 	  ON customer.cust_id = orders.cust_id
				INNER JOIN productVendor  ON productVendor.prodV_id  = orders_detalis.pro_id
				WHERE vendor_id  = '$id'
				";
				$result = $this->performQuery($query);
				return 	  $this->fetchAll($result);
			
		
		}

}


?>