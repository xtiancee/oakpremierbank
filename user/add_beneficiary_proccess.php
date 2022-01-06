<?php
require_once('../includes/config.php');
//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);
$session_id = $_SESSION['id'];


if ($_POST) {

    $reciever_name = $_POST['reciever_name'];
    $acc_no = $_POST['account_no'];
    $bank = $_POST['bank'];
    $routing = $_POST['routing'];
    $sender_id = $_POST['sender_id'];
    $sender_name = $_POST['sender_name'];

    $sqlben = "SELECT * FROM beneficiary1 WHERE  account_no='$acc_no'";
    foreach ($db->query($sqlben, PDO::FETCH_ASSOC) as $rwsben2)

        @$account_no_ben = $rwsben2['account_no'];

    $sqld = "select * from customer where id = '$session_id'";
    foreach ($db->query($sqld, PDO::FETCH_ASSOC) as $rwsben)
        $account_no = $rwsben['account_no'];

    if ($account_no == $acc_no) //can't send request to himself
    {

        ?>
        <div class='alert alert-warning'>
            You cant add yourself as a beneficiery!
        </div>

        <?php
    } elseif (@$account_no_ben == @$acc_no) {
        ?>
        <div class='alert alert-warning'>
            You cant add a beneficiery twice!

        </div>
        <?php
    } else {

        if (empty($bank) || empty($routing) || empty($reciever_name) || empty($account_no)) {

            ?>

            <div class='alert alert-warning'>
                You did not fill out the required fields..
            </div>

            <?php


        } else {


            $sqlasetting = "SELECT * from settings";

            foreach ($db->query($sqlasetting, PDO::FETCH_ASSOC) as $rowsetting)

                if (strlen($acc_no) != $rowsetting['bank_digit']) {
                    ?>
                    <div class='alert alert-warning'>
                        Invalid Digit Account Number
                    </div>

                    <?php

                } else {


                    if (!is_numeric($acc_no)) {
                        ?>
                        <div class='alert alert-warning'>
                            Sorry account number must be a number type

                        </div>


                        <?php

                    } else {

                        $status = "ACTIVE";


                        $sql = $db->prepare("insert into beneficiary1 (sender_id,sender_name,account_no,reciever_name,status,bank,routing) 
values(:sender_id,:sender_name,:account_no,:reciever_name,:status,:bank,:routing)");
                        $sql->bindParam(':sender_id', $sender_id, PDO::PARAM_STR, 15);
                        $sql->bindParam(':sender_name', $sender_name, PDO::PARAM_STR, 75);
                        $sql->bindParam(':account_no', $acc_no, PDO::PARAM_STR, 15);
                        $sql->bindParam(':reciever_name', $reciever_name, PDO::PARAM_STR, 15);
                        $sql->bindParam(':status', $status, PDO::PARAM_STR, 15);
                        $sql->bindParam(':bank', $bank, PDO::PARAM_STR, 15);
                        $sql->bindParam(':routing', $routing, PDO::PARAM_STR);
                        if ($sql->execute()) {
                            ?>
                            <div class='alert alert-success'>
                                Beneficiary added successfully
                            </div>
                            <?php
                        }

                    }

                }
        }
    }
}
