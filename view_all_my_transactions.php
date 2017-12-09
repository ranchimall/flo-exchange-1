<?php
/**
 * Created by PhpStorm.
 * User: Abhishek Kumar Sinha
 * Date: 10/5/2017
 * Time: 4:57 PM
 */
ob_start();
require_once 'includes/imp_files.php';
require_once VIEWS_DIR.'/header.php';

if (!checkLoginStatus()) {
    redirect_to('index.php?msg=Please login!');
}
//include_once VIEWS_DIR.'/buy_sell_div.php';
//include_once VIEWS_DIR.'/buy_sell_list.php';
include_once VIEWS_DIR.'/view_all_my_transactions.php';

include_once 'footer.php';?>
<script src="<?=JS_DIR?>/load_more_my_transactions.js"></script>
