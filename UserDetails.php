<?php
include 'DatabaseConnection.php';
class UserDetails extends DatabaseConnection
{
    /**
     * @var firstname
     * string
     */
    protected $firstName;

    /**
     * @var lastname
     * string
     */
    protected $lastName;

    /**
     * @var emailid
     * string
     */
    protected $emailId;

    /**
     * @var password
     * string
     */
    protected $passWord;

    /**
     * @var confirmPassword
     * int
     */
    protected $confirmPassword;

    /**
     * @var name
     * int
     */
    protected $name;

    /**
     * @var contact
     * int
     */
    protected $contact;

    /**
     * @var comment
     * int
     */
    protected $comment;

    /**
     * @var sign;
     * int
     */
    protected $signInfo;
    

    /**
     * to set first name
     * @param string $firstName
     * @return void
     */
    public function setFirstname( string $firstName): void
    {
         $this->firstName = $firstName;
    }

    /**
     * to get first name
     * @return string first name
     */
    public function getFirstName(): ?string
    {
      return $this->firstName;

    }

    /**
     * to set last name
     * @param string $lastName
     * @return void
     */
    public function setLastName( string $lastName): void
    {
         $this->lastName = $lastName;
    }

    /**
     * to get lastName
     * @return string lastName
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * to set emailid
     * @param string emailId
     * @return void
     */
    public function setEmailId(string $emailId):void
    {
        $this->emailId = $emailId;
    }

    /**
     * to get email id
     * @return string emailId
     */
    public function getEmailId(): ?string
    {
        return $this->emailId;
    }

     /**
     * to set password
     * @param password
     * @return void
     */
    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;
    }

    /**
     * to get password
     * @return password
     */
    public function getPassWord()
    {
        return $this->passWord;
    }

    /**
     * to set confirm password
     * @param string confirm password
     * @return void
     */
    public function setConfirmPassword(string $confirmPassword): void
    {
        $this->confirmPassword = $confirmPassword;
    }
     /**
     *to set login username
    *
    * @param string
    * @return void
    */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     *to get login username
    * @return string
    */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     *to set adminpassword
    *
    * @param [string] adminpassword
    * @return void
    */
    public function setAdminPassWord( string $adminPassWord): void
    {
        $this->adminPassWord = $adminPassWord;
    }

    /**
    *to get adminpassword
    * @return string 
    */
    public function getAdminPassWord(): string
    {
        return $this->adminPassWord;
    }

     /**
     *to set name
    *
    * @param string
    * @return void
    */
    public function setName(string $name): void
    {
        $this->name= $name;
    }

    /**
     *to get name
    * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *to set contact
    *
    * @param int
    * @return void
    */
    public function setContact(int $contact): void
    {
        $this->contact= $contact;
    }

    /**
     *to get login contact
    * @return int
    */
    public function getContact(): int
    {
        return $this->contact;
    }

     /**
     *to set comment
    *
    * @param string
    * @return void
    */
    public function setComment( string $comment): void
    {
        $this->comment= $comment;
    }

    /**
     *to get comment
    * @return string
    */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     *to set signInfo
    *
    * @param string
    * @return void
    */
    public function setSignInfo( string $signInfo): void
    {
        $this->signInfo= $signInfo;
    }

    /**
     *to get comment
    * @return string
    */
    public function getSignInfo(): string
    {
        return $this->signInfo;
    }

    /**
     * to add details
     * return void
     */

    public function addDetails()
    {  
        $sql = "INSERT INTO `user` 
            (`first_name`, `last_name`, `email`,`password`) 
        VALUES (
            '$this->firstName',
            '$this->lastName',
            '$this->emailId',
            '$this->passWord'
        )";

            if ($this->conn->query($sql) === TRUE) {
                echo 'sucessfully added';
            } else{
                echo "data insert failed";
            }
    }

    /**
     * to validateUser
     * return void
     */
    public function adminLogin(): void
    {
        
        $sql ="SELECT * FROM user WHERE email= '$this->userName'AND password='$this->adminPassWord'";


        $login = $this->conn->query($sql);

        $row = mysqli_fetch_array($login); 
        print_r($row);
        die;

        if($row['role']=== 0){
            $userName = $row['first_name'];
            $userId = $row['id'];
            $_SESSION['id'] = $userId; 
            $_SESSION['name'] =  $userName;

            header("Location:DisplayAllProduct.php");

        } 
        if($row['role']=== 1){
            $userName = $row['first_name'];
            $userId = $row['id'];
            $_SESSION['id'] = $userId; 
            $_SESSION['name'] =  $userName;

            header("ProductManagement.php");
        } else{
            echo 'Incorrect Username or Password';
        }
    }

     /**
     * to add product 
     * @param array $image
     * @param string $description
     * @return void
     */
    public function addProduct( string $image, array $details)
    {
        
        $Id= $_SESSION['id'];
         
        $productType = $details['product_type'];
        $productName = $details['product_name'];
        $vendor = $details['vendor'];
        $stock = $details['stock'];
        $productPrice = $details['product_price'];
        $productDiscount = $details['discount'];
        $productSize =  $details['size'];
        $productColor=  $details['color']; 
        $description=  $details['description'];   
 
        $query = "INSERT INTO  product (user_id,product_type,product_name,vendor,stock,discount,size,color,product_price,image,description)  
                VALUES ('$Id', '$productType', '$productName','$vendor','$stock','$productDiscount','$productSize','$productColor','$productPrice', '$image','$description')";

        if($this->conn->query($query)){
            header('Location:DisplayAllProduct.php');
        }else{
            echo "error($query)";
        }
    }

     /**
     * to add reviews
     * return void
     */

    public function addReview()
    {  
        $sql = "INSERT INTO `review` 
            (`name`, `email`, `contact`,`comments`) 
        VALUES (
            '$this->name',
            '$this->emailId',
            '$this->contact',
            '$this->comment'
        )";
        $this->conn->query($sql);    
    }

     /**
     * to display review
     * return void
     */
    public function displayReview()
    {
        
        $sql ="SELECT name , comments FROM review"; 

        $review = $this->conn->query($sql);
        $comment = array();
        
        while($row = mysqli_fetch_array($review)){
    
            $show = new UserDetails();
            $show->setName($row['name']);
            $show->setComment($row['comments']);
            
            $comment[] = $show;

        }
            return $comment;    

    
    }

     /**
     * to add sign
     * return void
     */

    public function customerSign()
    {  
        $sql = "INSERT INTO customer (sign_info) VALUES ('$this->signInfo')";

            if ($this->conn->query($sql) === TRUE) {
                echo 'sucessfully added';
            } else{
                echo "data insert failed".($sql);
            }
    }

    /**
     * to  get sign info
     * return void
     */
    public function verifyCustomer( string $mail)
    {
        $sql ="SELECT * FROM customer WHERE sign_info = '$mail'"; 

        
        $value = $this->conn->query($sql);
            
        $row = mysqli_fetch_array($value);

        return $row;
       
    }
}   