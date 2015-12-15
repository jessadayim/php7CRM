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
// initial Variables
$sSalutaionSelected = '';
$sName = '';
$sSurname = '';
$sTitle = '';
$sOfficePhone = '';
$sDepartment = '';
$sMobilePhone = '';
$sAccountName = '';
$sFaxNumber = '';
$sWebsite = 'http://';

// check post
if ($_POST) {
    $sSalutaionSelected = @$_POST['salutation'];
    $sName = @$_POST['name'];
    $sSurname = @$_POST['surname'];
    $sTitle = @$_POST['title'];
    $sOfficePhone = @$_POST['office_phone'];
    $sDepartment = @$_POST['department'];
    $sMobilePhone = @$_POST['mobile_phone'];
    $sAccountName = @$_POST['account_name'];
    $sFaxNumber = @$_POST['fax_number'];
    $sWebsite = @$_POST['website'];
}

?>

<form id="frmLeads" method="post">
    <table>
        <tr>
            <td>
                First Name:
            </td>
            <td>
                <select id="salutation" name="salutation">
                    <option value=""></option>
                    <option value="Mr" <?php if($sSalutaionSelected == 'Mr') { echo 'selected=selected'; } ?> >Mr.</option>
                    <option value="Mrs" <?php if($sSalutaionSelected == 'Mrs') { echo 'selected=selected'; } ?> >Mrs.</option>
                    <option value="Ms" <?php if($sSalutaionSelected == 'Ms') { echo 'selected=selected'; } ?> >Ms.</option>
                    <option value="K" <?php if($sSalutaionSelected == 'K') { echo 'selected=selected'; } ?> >K.</option>
                    <option value="คุณ" <?php if($sSalutaionSelected == 'คุณ') { echo 'selected=selected'; } ?> >คุณ</option>
                    <option value="ม.ล." <?php if($sSalutaionSelected == 'ม.ล.') { echo 'selected=selected'; } ?> >ม.ล.</option>
                </select>
                <input type="text" id="name" name="name" value="<?php echo $sName; ?>"/>
            </td>
            <td>
                Last Name:
            </td>
            <td>
                <input type="text" id="surname" name="surname" value="<?php echo $sSurname; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Title
            </td>
            <td>
                <input type="text" id="title" name="title" value="<?php echo $sTitle; ?>"/>
            </td>
            <td>
                Office Phone
            </td>
            <td>
                <input type="text" id="office_phone" name="office_phone" value="<?php echo $sOfficePhone; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Department
            </td>
            <td>
                <input type="text" id="department" name="department" value="<?php echo $sDepartment; ?>"/>
            </td>
            <td>
                Mobile Phone
            </td>
            <td>
                <input type="text" id="mobile_phone" name="mobile_phone" value="<?php echo $sMobilePhone; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Account Name
            </td>
            <td>
                <input type="text" id="account_name" name="account_name" value="<?php echo $sAccountName; ?>"/>
            </td>
            <td>
                Fax Number
            </td>
            <td>
                <input type="text" id="fax_number" name="fax_number" value="<?php echo $sFaxNumber; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Website
            </td>
            <td>
                <input type="text" id="website" name="website" value="<?php echo $sWebsite; ?>"/>
            </td>
            <td>
                Email Address
            </td>
            <td>
                <input type="text" id="email" name="email" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <fieldset id="fieldset_primary_addr">
                    <legend>Primary Address</legend>
                    <table>
                        <tr>
                            <td>
                                Address:
                            </td>
                            <td>
                                <input type="text" id="primary_address" name="primary_address"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                City:
                            </td>
                            <td>
                                <input type="text" id="primary_city" name="primary_city"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                State:
                            </td>
                            <td>
                                <input type="text" id="primary_state" name="primary_state"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Postal Code:
                            </td>
                            <td>
                                <input type="text" id="primary_postal_code" name="primary_postal_code"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Country:
                            </td>
                            <td>
                                <input type="text" id="primary_country" name="primary_country"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
            <td colspan="2">
                <fieldset id="fieldset_other_addr">
                    <legend>Other Address</legend>
                    <table>
                        <tr>
                            <td>
                                Address:
                            </td>
                            <td>
                                <input type="text" id="other_address" name="other_address"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                City:
                            </td>
                            <td>
                                <input type="text" id="other_city" name="other_city"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                State:
                            </td>
                            <td>
                                <input type="text" id="other_state" name="other_state"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Postal Code:
                            </td>
                            <td>
                                <input type="text" id="other_postal_code" name="other_postal_code"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Country:
                            </td>
                            <td>
                                <input type="text" id="other_country" name="other_country"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label><input type="checkbox" id="chk_copy_primary_other" name="chk_copy_primary_other" />copy address from left</label>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td>
                Description:
            </td>
            <td colspan="3">
                <textarea id="description" name="description" style="width: 100%; height: 150px;"></textarea>
            </td>
        </tr>
    </table>

    <input type="submit" id="submit" name="submit" value="Save">

</form>
</body>
</html>

<?php

// Save state >> below code will be move to controller class

