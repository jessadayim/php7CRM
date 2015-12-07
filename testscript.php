<!DOCTYPE html>
<html>
<head>
    <title>CRM PHP 7</title>
    <script src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript">

    </script>
</head>
<body>
<?php
if ($_POST) {
    $nameVal = @$_POST['name'];
    $surnameVal = @$_POST['surname'];
}

?>

<form id="frmLeads" method="post">

    <input type="text" id="name" name="name" value="<?php echo $nameVal; ?>"/>
    <input type="text" id="surname" name="surname" value="<?php echo $surnameVal; ?>"/>

    <input type="submit" id="submit" name="submit" value="Save">

</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: appleca58015
 * Date: 11/24/15 AD
 * Time: 9:15 AM
 */