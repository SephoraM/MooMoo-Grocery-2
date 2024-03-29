<?php require_once("../../resources/config.php");

if (!isset($_COOKIE["admin"])) {
    header("Location: ../index.php");
}

if (isset($_POST["save-order"])) {
    // XML settings
    $xml = new DOMDocument('1.0', "UTF-8");
    $xml->preserveWhiteSpace = false;
    $xml->formatOutput = true;
    $xml->load(XML_DB . DS . "orders.xml");

    // Unique XML values
    $order_id = $_POST["order-id"];
    $customer_id = $_POST["customer-id"];
    $date = date("M d, Y"); // Today's date

    // Check if checkbox for order completed is checked
    $status = "";
    if (isset($_POST["status"])) {
        $status = "completed";
    } else {
        $status = "processing";
    }

    // Initialize variable for root node at index 0
    $root = $xml->getElementsByTagName("orders")->item(0);

    // Create new element: order
    $order = $xml->createElement("order");

    // Save the unique variables first
    $xml->getElementsByTagName("next")->item(0)->textContent = $order_id + 1; // Set next value
    $order->appendChild($xml->createElement("order_id", $order_id));
    $order->appendChild($xml->createElement("date", $date));
    $order->appendChild($xml->createElement("customer_id", $customer_id));

    // Create a new cart and append
    $cartList = $xml->createElement("cart");
    $order->appendChild($cartList);

    // Create a new product and add to cart
    $cart = $order->getElementsByTagName("cart")->item(0);

    // Create a new element of type product
    $product = $xml->createElement("product");

    // Get values for product ID and quantity
    $product_id = $_POST["productID"];
    $quantity = $_POST["quantity"];
    // Append these values to product 
    $product->appendChild($xml->createElement("id", $product_id));
    $product->appendChild($xml->createElement("p_quantity", $quantity));

    // Append product to end
    $cart->appendChild($product);

    // After adding product, set total to 0
    $total = 0;
    $cart->appendChild($xml->createElement("total", $total));

    // Finally update status
    $order->appendChild($xml->createElement("status", $status));

    // Finally append $order to root node
    $root->appendChild($order);

    // Save XML file
    $xml->save(XML_DB . DS . "orders.xml") or die("Error, unable to create xml file.");
    header("Location: order-list.php");
}
// Else redirect to order-list
else {
    header("Location: order-list.php");
}
