<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . DS . "header.php"); ?>

<!-- Side Navigation -->
<?php include(TEMPLATE_BACK . DS . "side-nav.php"); ?>

<!-- If editing, fill in form -->
<?php
// Assume add order is empty
$order_id = NULL;
$is_set = false;
// If there is a redirect from edit button in order-list.php, use the order ID to populate form
if (isset($_GET['order_id'])) {
  $is_set = true;
  $order_id = $_GET['order_id'];

  // Grab order details from XML file
  $order = getOrderXml($order_id);

  // Fill form with customer details;
  $customer_id = $order->customer_id;
  // Convert customer_id to integer and then grab user info from users XML file
  $customer = getUserXml(intval($customer_id));
  $firstname = $customer->firstname;
  $lastname = $customer->lastname;
}
?>

<div class="col-8">
  <h1>Edit or Add an Order</h1>
  <h3>Specify, edit or add details to a specific order.</h3>
  <form class="properties" action="" method="post" enctype="text/plain">
    <div class="">
      <div class="col-6">
        <label for="first-name">Order ID:</label>
        <input class="properties-input" type="text" id="first-name" name="first-name" value="<?php if ($is_set) echo $order_id; ?>">
      </div>
      <div class="col-6">
        <label for="last-name">Customer ID:</label>
        <input class="properties-input" type="text" id="last-name" name="last-name" value="<?php if ($is_set) echo $customer_id; ?>">
      </div>
    </div>
    <div class="prop-row">
      <div class="col-7">
        <label for="email-address">Customer's First Name:</label>
        <input class="properties-input" type="email" id="email-address" name="email-address" value="<?php if ($is_set) echo $firstname; ?>">
      </div>
      <div class="col-5">
        <label for="phone-number">Customer's Last Name:</label>
        <input class="properties-input" type="text" id="phone-number" name="phone-number" value="<?php if ($is_set) echo $lastname; ?>">
      </div>
    </div>

    <div class="col-10">
      <table class="backstore-list">
        <tr class="backstore-table-header-row">
          <th class="backstore-table-header">Product ID</th>
          <th class="backstore-table-header hide-mobile-o">Product Name</th>
          <th class="backstore-table-header">Quantity</th>
          <th class="backstore-table-header hide-mobile-o">Price/Unit</th>
          <th class="backstore-table-header">Action</th>
        </tr>
        <?php display_ordered_products($order_id) ?>
        <tr>
          <td><input class="product-input" type="text" id="productID" name="productID" value=""></td>
          <td class="hide-mobile-o"><input class="product-input hide-mobile-o" type="text" id="productName" name="productName" value=""></td>
          <td><input class="quantity-input" type="number" id="quantity" name="quantity" value=""></td>
          <td class="hide-mobile-o"><input class="product-input hide-mobile-o" type="text" id="productPrice" name="productPrice" value=""></td>
          <td><a href="">Add Product</a></td>
        </tr>
      </table>
      <!-- Empty Column -->

    </div>

    <div class="col-12">
      <input class="save-button" type="submit" name="" value="Save Changes"></p>
    </div>

  </form>
</div>

</div>
</body>