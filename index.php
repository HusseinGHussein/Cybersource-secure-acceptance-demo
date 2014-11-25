<html>
<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
    <script type="text/javascript" src="payment_form.js"></script>
</head>
<body>

<form id="payment_form" action="payment_confirmation.php" method="post">

    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency">
    <!-- I create this later 
    <input type="hidden" name="unsigned_field_names"> 
    -->
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">

    <fieldset>
        <legend>Payment Details</legend>
        <div id="paymentDetailsSection" class="section">
            <span>Locale:</span><input type="text" name="locale" value=""><br>
            <span>Payment Method:</span><input type='text' name='payment_method' value=''/><br/>
            <span>Bill to forename:</span><input type='text' name='bill_to_forename' value=''/><br/>
            <span>Bill to surname:</span><input type='text' name='bill_to_surname' value=''/><br/>
            <span>Bill to email:</span><input type='text' name='bill_to_email' value=''/><br/>
            <span>Bill to address line1:</span><input type='text' name='bill_to_address_line1' value=''/><br/>
            <span>Bill to address city:</span><input type='text' name='bill_to_address_city' value=''/><br/>
            <span>Bill to address postal_code:</span><input type='text' name='bill_to_address_postal_code' value=''/><br/>
            <span>Bill to address state:</span><input type='text' name='bill_to_address_state' value=''/><br/>
            <span>Bill to address country:</span><input type='text' name='bill_to_address_country' value=''/><br/>
            <span>Transaction type:</span><input type="text" name="transaction_type" size="25"><br/>
            <span>Reference number:</span><input type="text" name="reference_number" size="25"><br/>
            <span>Amount:</span><input type="text" name="amount" size="25"><br/>
            <span>Currency:</span><input type="text" name="currency" size="25"><br/>
            <span>Card type:</span><input type='text' name='card_type' value=''/><br/>
            <span>Card cvn:</span><input type='text' name='card_cvn' value=''/><br/>
            <span>Card number:</span><input type="text" name="card_number" size="25" value=''><br/>
            <span>Card Expiry Date:</span><input type="text" name="card_expiry_date" size="25" value=''><br/>
        </div>
    </fieldset>

    <input type="submit" id="submit" name="submit" value="Submit"/>

</form>

</body>
</html>
 
