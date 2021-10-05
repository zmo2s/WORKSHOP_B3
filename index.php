<?php
$page_title = "HandiHelp";

require_once('traitement/databaseHandler.php');
require_once("struct/head.php");
require_once("modules/connectNav.php");

$_SESSION["page"] = "index.php";

$data = $dbh->getBlog();

if (isset($_SESSION["userid"])) {
    echo '<a href="taskInsertForm.php">Créer une demande</a>';
}

?>

<div id="taskList">
    <ul class="taskList">

        <?php
        if (isset($data)) {
            foreach ($data as $row) {

                echo sprintf(
                    "
                    <li>
                        <a class=\"content\" href=\"taskDisplay.php?idTask=%s\">
                            %s
                        </a>, 
                        <span class=\"author\">%s</span> 
                        <span class=\"date\">%s</span>
                    ",
                    $row->id,
                    $row->content,
                    $row->task_author,
                    $row->sent_at
                );
            }
        }
        ?>
    </ul>
</div>
</body>

</html>