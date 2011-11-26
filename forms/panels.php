<?php

$current = isset($_GET["tab"]) ? $_GET["tab"] : "settings";
$tabs = array("settings" => __("Settings", "gd-bbpress-attachments"), "faq" => __("FAQ", "gd-bbpress-attachments"), "about" => __("About", "gd-bbpress-attachments"));

?>
<div class="wrap">
    <h2>GD bbPress Attachments</h2>
    <div id="icon-upload" class="icon32"><br></div>
    <h2 class="nav-tab-wrapper">
    <?php

    foreach($tabs as $tab => $name){
        $class = ($tab == $current) ? ' nav-tab-active' : '';
        echo '<a class="nav-tab'.$class.'" href="edit.php?post_type=forum&page=gdbbpress_attachments&tab='.$tab.'">'.$name.'</a>';
    }

    ?>
    </h2>
    <div id="d4p-panel" class="d4p-panel-<?php echo $current; ?>">
        <?php include(GDBBPRESSATTACHMENTS_PATH."forms/tabs/".$current.".php"); ?>
    </div>
</div>