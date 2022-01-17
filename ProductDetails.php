<?php
include 'UserDetails.php';

class ProductDetails extends UserDetails 
{

    /**
     * @var user  id
     * int
     */
    protected $userId;

    /**
     * @var producttype
     * string
     */
    protected $productType;

    /**
     * @var product name
     * string
     */
    protected $productName;

     /**
     * @var vendor
     * string
     */
    protected $vendor;

     /**
     * @var stock
     * string
     */
    protected $stock;

    /**
     * @var product price
     * string
     */
    protected $productPrice;

    /**
     * @var id
     * int
     */
    protected $id;

    /**
     * @var discount
     * string
     */
    protected $discount;

    /**
     * @var color
     * string
     */
    protected $color;

    /**
     * @var size
     * int
     */
    protected $size;

    /**
     * @var Quantity
     * int
     */
    protected $quantity;
    
    /**
     * @var country
     * string
     */
    protected $country; 
    
    /**
     * @var firstName
     * string
     */
    protected $firstName; 

    /**
     * @var lastName
     * string
     */
    protected $lastName;

    /**
     * @var address
     * string
     */
    protected $address;

    /**
     * @var city
     * string
     */
    protected $city;

    /**
     * @var state
     * string
     */
    protected $state;

    /**
     * @var pincode
     * int
     */
    protected $pincode;

     /**
     * @var email
     * int
     */
    protected $email;

     /**
     * @var contact
     * int
     */
    protected $contact;

    /**
     * @var description
     * int
     */
    protected $description;


    /**
     * setuser id
     *
     * @param int $userId
     * @return void
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;

    }

    /**
     *get userid
    * @return int
    */
    public function getUserId(): int
    {
        return $this->userId;
    }

     /**
     * to set productType
     * @param string $ productType
     * @return void
     */
    public function setProductType(string $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * to get productType
     * @return string
     */
    public function getProductType(): string
    {
    return $this->productType;
    }

    /**
     * to set productName
     * @param string $productName
     * @return void
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * to get productName
     * @return string
     */
    public function getProductName(): string
    {
    return $this->productName;
    }

    /**
     * to set vendor
     *
     * @param string vendor
     * @return void
     */
    public function setVendor(string $vendor): void
    {
        $this->vendor = $vendor;
    }

    /**
     * getvendor
     * @return string
     */
    public function getVendor(): string
    {
    return $this->vendor;
    }

    /**
     * to setstock
     *
     * @param string stock
     * @return void
     */
    public function setStock(string $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * getstock
     * @return string
     */
    public function getStock(): string
    {
    return $this->stock;
    }

    /**
     * to set productPrice
     * @param int $productPrice
     * @return void
     */
    public function setProductPrice(int $productPrice): void
    {
        $this->productPrice = $productPrice;
    }

    /**
     * to get productPrice
     * @return string
     */
    public function getProductPrice(): int
    {
    return $this->productPrice;
    }

    /**
     * set id
     * @param int id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * get id
     * @return id
     */
    public function getId(): int
    {
    return $this->id;
    }

     /**
     * to set image
     *
     * @param string image
     * @return void
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * get image
     * @return string
     */
    public function getImage(): string
    {
    return $this->image;
    }


    /**
     * to set discount
     *
     * @param string discount
     * @return void
     */
    public function setDiscount(string $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * to get discount
     *
     * @param string discount
     * @return void
     */
    public function getDiscount(): string
    {
         return $this->discount;
    }

    /**
     * to set size
     *
     * @param string size
     * @return void
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    /**
     * to get size
     *
     * @param string size
     * @return void
     */
    public function getSize(): string
    {
         return $this->size;
    }

    /**
     * to set color
     *
     * @param string color
     * @return void
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * to get color
     *
     * @param string color
     * @return void
     */
    public function getColor(): string
    {
         return $this->color;
    }

     /**
     * to set quantity
     *
     * @param int quantity
     * @return void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * to get quantity
     *
     * @param int quantity
     * @return void
     */
    public function getQuantity(): int
    {
         return $this->quantity;
    }

    /**
     * to set country
     *
     * @param string country
     * @return void
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * to get country
     *
     * @param string country
     * @return void
     */
    public function getCountry(): string
    {
         return $this->country;
    }

    /**
     * to set firstName
     *
     * @param string firstName
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * to get firstName
     *
     * @param string firstName
     * @return void
     */
    public function getFirstName(): string
    {
         return $this->firstName;
    }

    /**
     * to set lastName
     *
     * @param string lastName
     * @return void
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * to get lastName
     *
     * @param string lastName
     * @return void
     */
    public function getLastName(): string
    {
         return $this->lastName;
    }

    /**
     * to set address
     *
     * @param string address
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * to get address
     *
     * @param string address
     * @return void
     */
    public function getAddress(): string
    {
         return $this->address;
    }

    /**
     * to set city
     *
     * @param string city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * to get city
     *
     * @param string city
     * @return void
     */
    public function getCity(): string
    {
         return $this->city;
    }

    /**
     * to set state
     *
     * @param string state
     * @return void
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * to get state
     *
     * @param string state
     * @return void
     */
    public function getState(): string
    {
         return $this->state;
    }

    /**
     * to set pinode
     *
     * @param int pinode
     * @return void
     */
    public function setPincode(int $pincode): void
    {
        $this->pincode = $pincode;
    }

    /**
     * to get pincode
     *
     * @param int pincode
     * @return void
     */
    public function getPincode(): int
    {
         return $this->pincode;
    }

    /**
     * to set contact
     *
     * @param int contact
     * @return void
     */
    public function setContact(int $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * to get contact
     *
     * @param int contact
     * @return void
     */
    public function getContact(): int
    {
         return $this->contact;
    }

    /**
     * to set email
     *
     * @param string email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * to get email
     *
     * @param string email
     * @return void
     */
    public function getEmail(): string
    {
         return $this->email;
    }

    /**
     * to set description
     *
     * @param string description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * to get description
     *
     * @param string description
     * @return void
     */
    public function getDescription(): string
    {
         return $this->description;
    }

    
    
/**
 * userDetails function
 *
 * @param [int] $id
 * @return void
 */
    public function userDetails($id)
    {
        $query = "SELECT * FROM product
        WHERE user_id = $id";
        $indData = $this->conn->query($query);
        $allDisplayDetails= array();

        while($row = mysqli_fetch_array($indData)){
            //   print_r($row);
            //   die;
           $display = new ProductDetails();
           $display->setId($row['id']);
           $display->setUserId($row['user_id']);
           $display->setProductType($row['product_type']);
           $display->setProductName($row['product_name']);
           $display->setVendor($row['vendor']);
           $display->setStock($row['stock']);
           $display->setDiscount($row['discount']);
           $display->setSize($row['size']);
           $display->setColor($row['color']);
           $display->setProductPrice($row['product_price']);
           $display->setImage($row['image']);
           $display->setDescription($row['description']);
           $allDisplayDetails[]= $display;
        }
         return $allDisplayDetails;

    }

      /**
     * to delete blog
     *
     * @param int $id
     * @return void
     */
    public function delete($id): void
    {
        $sql ="DELETE FROM product WHERE id = $id";
            $this->conn->query($sql); 
            
    }

    /**
     * to create home page
     *
     * @return array
     */
    public function homePage(): array
    {
        $query = "SELECT * FROM product";

            if($result= $this->conn->query($query)){
            // echo"done";
            }else {
                echo"error($query)";
            }

        $image = array();
            while($row = mysqli_fetch_array($result)) {
                //    print_r($row['id']);
                //    die;
                $home = new ProductDetails();
                $home->setId($row['id']);
                $home->setUserId($row['user_id']);
                $home->setProductType($row['product_type']);
                $home->setProductName($row['product_name']);
                $home->setVendor($row['vendor']);
                $home->setStock($row['stock']);
                $home->setProductPrice($row['product_price']);
                $home->setDiscount($row['discount']);
                $home->setSize($row['size']);
                $home->setColor($row['color']);
                $home->setImage($row['image']);
                $home->setDescription($row['description']);
                $table[] = $home;
            }
                return $table;
                
    }
    public function fabulousProduct(): array
    {
        $query = "SELECT id, image, product_name, product_price FROM product WHERE product_price<=45;";

            if($result= $this->conn->query($query)){
            // echo"done";
            }else {
                echo"error($query)";
            }
            $image = array();
            while ($row = mysqli_fetch_array($result)) {

               $fabulous = new ProductDetails();
               $fabulous->setImage($row['image']);
               $fabulous->setProductName($row['product_name']);
               $fabulous->setProductPrice($row['product_price']);
               $fabulous->setId($row['id']);

               $table[] = $fabulous;
            }
            return $table;
    }
    /**
     * buynow function
     *
     * @param [type] $id
     * @return array
     */
    public function buynow($id): array
    {
        $query = "SELECT * FROM product
        WHERE id = $id";
        $indData = $this->conn->query($query);

        $row = mysqli_fetch_array($indData);
            //   print_r($row);
            //   die;
           $display = new ProductDetails();
           $display->setId($row['id']);
           $display->setUserId($row['user_id']);
           $display->setProductType($row['product_type']);
           $display->setProductName($row['product_name']);
           $display->setVendor($row['vendor']);
           $display->setStock($row['stock']);
           $display->setProductPrice($row['product_price']);
           $display->setDiscount($row['discount']);
           $display->setSize($row['size']);
           $display->setColor($row['color']);
           $display->setImage($row['image']);
           $display->setDescription($row['description']);
           $allDisplayDetails[]= $display;
        
           return $allDisplayDetails;

    }
    /**
     * Update user details
     *
     * @return void
     */
    public function updatedata(array $data )
    {
        //  print_r($data);
        //  die;

        $sql = "UPDATE product  SET ";

            foreach($data as  $colName => $userData) {

                $sql .= " $colName = '$userData',";

                    if(  $colName == 'product_price') {
                        break;
                    }

            }
        $sql= rtrim($sql,',');

        $sql .="WHERE Id ='$this->id';";

        if ($this->conn->query($sql) === TRUE) {
                echo "update successfully";
        } else{
                echo "update failed . ($sql)";
        } 
    }

     /**
     * to order details
     * return void
     */

    public function orders()
    { 
        $sql = "INSERT INTO `orders` 
            (product_id, first_name, last_name, email, contact, address, city, state, country, pincode, product_size, product_color, product_quantity, payment_status) 
        VALUES (
            '$this->id',
            '$this->firstName',
            '$this->lastName',
            '$this->email',
            '$this->contact',
            '$this->address',
            '$this->city',
            '$this->state',
            '$this->country',
            '$this->pincode',
            '$this->size',
            '$this->color',
            '$this->quantity',
            'COD'
        )";
            if($this->conn->query($sql)===true){
                header('Location:Payment.php');
            } else{
                echo "Check your details !!";
            }
           
    }

    public function bestDeal()
    {
        $query = "SELECT id, image, discount, product_price,description FROM product WHERE discount>='50%';";

            if($result= $this->conn->query($query)){
            // print_r($result);
            // die;
            }else {
                echo"error($query)";
            }
            $image = array();
            while ($row = mysqli_fetch_array($result)) {
                // print_r($row);
                // die;
               $bestDeal = new ProductDetails();
               $bestDeal->setImage($row['image']);
               $bestDeal->setdiscount($row['discount']);
               $bestDeal->setProductPrice($row['product_price']);
               $bestDeal->setId($row['id']);
               $bestDeal->setdescription($row['description']);

               $table[] = $bestDeal;
            }
            return $table;
    }

    public function updateStock($stock,$id)
    {

        $sql = "UPDATE product SET stock = '$stock' WHERE id = '$id'";

        if($this->conn->query($sql)===true) { 
            
        }else {
            
        }
    }
}