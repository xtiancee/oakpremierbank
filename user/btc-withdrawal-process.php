<?php

include('../includes/config.php');

if(($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $userId = $_SESSION['id'];
    $name = $_POST['full_name'];
    $address = $_POST['wallet_address'];
    $amount = $_POST['withdraw_amount'];

    try {

        // Deduct from user balance

        $usr = $db->query("SELECT * from customer WHERE id = ". $_SESSION['id'])->fetch();

        $newbalance = ($usr['balance'] - $amount);

        $st = "UPDATE customer SET balance=? where id=?";
        $sq = $db->prepare($st)->execute([$newbalance, $userId]);

        // Insert into table

        $stat = "INSERT INTO withdraw_requests (user_id,name,wallet_address,amount) VALUES (:user_id,:name,:address,:amount)";

        $sql = $db->prepare($stat);

        $sql->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $sql->bindParam(':name', $name, PDO::PARAM_STR);
        $sql->bindParam(':address', $address, PDO::PARAM_STR);
        $sql->bindParam(':amount', $amount, PDO::PARAM_STR);

        if($sql->execute()){
            echo "<div class='alert alert-success'>
           Withdraw request has successfully been sent and awaiting approval
        </div>";
        }

    } catch(PDOException $e) {
        //show error
        echo '<p class="bg-danger">'.$e->getMessage().'</p>';
        exit;
    }


}
