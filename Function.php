<?php

/**
    * Database Connection 
    */
   class Connection
   {
     public $host = "localhost";//server name
     public $user = "root";// Server login User name
     public $password = "";// Server login password
     public $db_name = "userreferral";//Database Name
     public $conn;//Connection 
   
     public function __construct(){
       $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
     }

/**
    * Fetch all users data from the userregistration table
    */
     public function fetchdata()
     {
     $result=mysqli_query($this->conn,"select a.FullName,a.Email,a.ReferenceCode,b.FullName as referralname,count(c.ReferralCode) as PeopleReferred from userregistration b
     right join userregistration a on b.ReferenceCode = a.ReferralCode left join userregistration c on c.ReferralCode = a.ReferenceCode group by  a.ReferenceCode ");
     return $result;
     }
  }
   

    /**
    * User Registration class
    */
class Register extends Connection
{
     //check if user email already exist
     public function registration($FullName,$UserEmail,$Password,$ConfirmPassword,$ReferenceCode,$ReferralCode)
    {
       $duplicate = mysqli_query($this->conn, "SELECT * FROM userregistration WHERE Email = '$UserEmail'");
          if(mysqli_num_rows($duplicate) > 0)
          {
           return 10;
          // Username or email has already taken
          }
          else
          {
               //Check if password and Confirm password match
               if($Password==$ConfirmPassword)
               {
               //Write user details into user   userregistration
               $query = "INSERT INTO userregistration VALUES('','$FullName','$UserEmail','$Password','$ReferenceCode','$ReferralCode')";
               mysqli_query($this->conn,$query);
               return 1;
               // Registration successful
               }
               else
               {
               return 100;
               // Password does not match
               }
          }
     }

   
}



 
    
       ?>