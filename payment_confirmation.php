<?php include 'security.php' ?>

<html>
<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
</head>

<body>

<?php

    foreach($_REQUEST as $name => $value) {
        $params[$name] = $value;
    }

    $params['access_key'] = Security::ACCESS_KEY;
    $params['profile_id'] = Security::PROFILE_ID;

    $params['unsigned_field_names'] = Security::getUnsignedFields($_REQUEST);
?>

<fieldset id="confirmation">
    <legend>Review Payment Details</legend>
    <div>
        <?php
            foreach($params as $name => $value) {
                echo "<div>";
                echo "<span class=\"fieldName\">" . $name . "</span><span class=\"fieldValue\">" . $value . "</span>";
                echo "</div>\n";

            }
        ?>
    </div>
</fieldset>


<form action="https://testsecureacceptance.cybersource.com/silent/pay" method="post"/>
    <?php
        foreach($params as $name => $value) {
            echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
        }

        // creates signature -  this only signes the param['signed_name_fields']
        echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . Security::sign($params) . "\"/>\n";
        
    ?>

<input type="submit" id="submit" value="Confirm"/>

</form>

</body>
</html>
