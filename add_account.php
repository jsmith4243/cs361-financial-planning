<?php

/* add_account.php
 * add an account */

/* shared functions */
require 'financial_planning.php';
require 'jsmith_functions.php';

/* display html page header */
display_header();

/* display and process add account form */
if (!submitted()) {
    /* display add account form */
    print_file('add_account.html');
} else {
    /* store data in an array */
    $account = $_POST;
    /* TODO: insert into database */
    /* temporarily display contents of array */
    
    //add_account($accountName, $accountType, $accountNumber, $accountBalance, $accountUsername, $accountPassword, $con)
    add_account($_POST[accountname], $_POST[select_account_type], $_POST[accountnum], $_POST[accountbalance], $POST[accountusername], $_POST[passwordinput], $con);

    
    echo '<pre>';
    print_r($account);
    echo '</pre>';
    echo '<a href="" class="btn btn-primary">Go back</a>';
}

/* display html page footer */
display_footer();

?>
