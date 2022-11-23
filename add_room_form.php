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
            footer {
                text-align: right;
                padding-top: 5px;
            }
            label {
                float: left;
                width: 6.2em;
            }
            input{
                margin: 1.5px;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Hawk Center Manager</h1>
            <hr class="green">
            <h1>Add a New Room</h1>
            <form method="POST" action="./addRoomScript.php">
                <label for="RoomNumber">RoomNumber:</label>
                <input type="text" id="RoomNumber" name="RoomNumber"><br>

                <label for="Capacity">Capacity:</label>
                <input type="text" id="Capacity" name="Capacity"><br>

                <label for="Type">Type:</label>
                <input type="text" id="Type" name="Type"><br>

                <label for="Available">Available:</label>
                <input type="number" id="Available" name="Available" value=1><br>

                <input type="submit" value="Add Room">
            </form>
            <br>
            <a href="./index.php">Go Back to Hawk Home</a>
            <hr class="green">
        </div>
    </body>
    <footer>
        <p>&copy 2022 Hawk Center.</p>
    </footer>
</html>
