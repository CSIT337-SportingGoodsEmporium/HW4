<?php
    require_once('database.php');

    // Get category ID
    $category_id = trim($_POST['category_id']);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = '*';
    }
    // Get all categories
    if ($category_id == "*"){
        $statement2 = $db->prepare("SELECT * FROM rooms");
    } elseif ($category_id == "RoomNumber") {
        $statement2 = $db->prepare("SELECT RoomNumber FROM rooms");
        } elseif ($category_id == "Capacity") {
            $statement2 = $db->prepare("SELECT Capacity FROM rooms");
            } elseif ($category_id == "Type") {
                $statement2 = $db->prepare("SELECT Type FROM rooms");
                } elseif ($category_id == "Available") {
                    $statement2 = $db->prepare("SELECT Available FROM rooms");
                    }
    $statement2->execute();
    $rooms = $statement2->fetchAll();
    //$statement2->closeCursor();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HW4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            hr.green {
                border: 1px solid darkgreen;
            }
            tr:nth-child(even) {background-color: #add8e6;}
            tr:nth-child(odd) {background-color: white;}
            th {
                text-align: center;
            }
            table {
                border: 1px solid;
                width: 60%;
            }
            footer {
                text-align: right;
                padding-top: 5px;
            }
            body {
                background-color: #ffffe0;
            }
            td{
                padding-left: 5px;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Welcome to Kenneth Doerflein and Adam Nixon Hawk Center</h1>
            <hr class="green">
            <h2>Querying Hawk Center database</h2>
            <section>
                <!-- display a table of products -->
                <table cellspacing="0">
                    <?php echo "<caption>Results of <q>SELECT ".$category_id." FROM rooms</q></caption>"?>
                    <tr>
                        <?php if($category_id == '*' || $category_id == 'RoomNumber'){echo "<th>RoomNumber</th>"; }?>
                        <?php if($category_id == '*' || $category_id == 'Capacity'){echo "<th>Capacity</th>"; }?>
                        <?php if($category_id == '*' || $category_id == 'Type'){echo "<th>Type</th>"; }?>
                        <?php if($category_id == '*' || $category_id == 'Available'){echo "<th>Available</th>"; }?>
                    </tr>

                    <?php foreach ($rooms as $room) : ?>
                    <tr>
                        <?php if($category_id == '*' || $category_id == 'RoomNumber'){echo "<td>".$room['RoomNumber']."</td>";}?>
                        <?php if($category_id == '*' || $category_id == 'Capacity'){echo "<td>".$room['Capacity']."</td>";}?>
                        <?php if($category_id == '*' || $category_id == 'Type'){echo "<td>".$room['Type']."</td>";}?>
                        <?php if($category_id == '*' || $category_id == 'Available'){echo "<td>".$room['Available']."</td>";}?>

                    </tr>
                    <?php endforeach; ?>            
                </table>
            </section>
            <br>
            <?php echo "Your search yielded ".$statement2->rowCount()." results.<br>" ?>
            <br>
            <div>Thank you for using HawkCenter database.</div>
            <br>
            <div><a href="./index.php">Go Back to Hawk Home</a></div>
            <hr class="green">
        </div>
    </body>
    <footer>
        <p>&copy 2022 Hawk Center.</p>
    </footer>
</html>
