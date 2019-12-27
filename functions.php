<?php

//20) Custom Helper function
function redirect($location)
{
	//Finding Location of the file
	header("Location: $location ");
}

function query($sql) {
	//finding Sql
	global $connection;
	return mysqli_query($connection, $sql);
}

function confirm($result)
{
	//Checking DB connection
	global $connection;

	if(!$result) {
		die("QUERY FAILED" . mysqli_error($connection));
	}
}

//SECUITY OF THE DB
function escape_string($string)
{
	//Preventing Others from not getting in DB, Stopping Sql injections
	global $connection;

	return mysqli_real_escape_string($connection, $string);
}

//fetching various DB
function fetch_array($result){
	return mysqli_fetch_array($result);
}

/****************************** F-R-O-N-T END Fucntions ************************************/

// getting products from DB
function get_products() {

$query=query("SELECT * FROM products"); //using the query function
confirm($query);	//confirming the connection to the DB

//21) Displaying the Product
//Name can be anything, DELIMETER or anything else
//Encapsulating various data in one single BLOCK
//Hero Doc and Now Doc
while($row = fetch_array($query)){
	$product = <<<DELIMETER
	                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$row['product_id']}"><img src={$row['product_image']} alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>

                            <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to Cart</a>
                            <!--22) Taking element to the next page, when it is "Add to cart" -->
                        </div>
                    </div>


DELIMETER;

echo $product;

}

}

function get_categories()
{
	$query = query("SELECT * FROM categories");              //15) Selecting from DB
                	//$send_query = mysqli_query($connection, $query);  //16) Sending DB to connect
                	confirm($query);

                	while($row = fetch_array($query))
                	{
                	//17) Works like an array
                		//echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
									//18) Prints each value in the stack of the array
$category_links = <<<DELIMETER
           <a href='category.php?id={$row['cat_id']}' class='list-group-item'> {$row['cat_title']}</a>

DELIMETER;

echo $category_links;

                	}

}


// getting products from DB
function get_products_in_cat_page() {

$query=query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " "); //using the query function
confirm($query);    //confirming the connection to the DB

//21) Displaying the Product
//Name can be anything, DELIMETER or anything else
//Encapsulating various data in one single BLOCK
//Hero Doc and Now Doc
while($row = fetch_array($query)){
    $product = <<<DELIMETER
                          <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>


DELIMETER;

echo $product;

}

}

function get_products_in_shop_page() {

$query=query("SELECT * FROM products"); //using the query function
confirm($query);    //confirming the connection to the DB

//21) Displaying the Product
//Name can be anything, DELIMETER or anything else
//Encapsulating various data in one single BLOCK
//Hero Doc and Now Doc
while($row = fetch_array($query)){
    $product = <<<DELIMETER
                          <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>


DELIMETER;

echo $product;

}

}




/****************************** B-A-C-K END Fucntions ************************************/



?>
