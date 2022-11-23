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
            
        </style>
    </head>
    <body>
        <div>
            <h1>Welcome to Kenneth Doerflein and Adam Nixon Hawk Center</h1>
            <hr class="green">
            <h2>Querying Hawk Center database</h2>
            <form method="POST" action="./get_results.php">
                <label for="category_id">Select a field to display: </label>
                <select id="category_id" name="category_id">
                    <option value="*">*</option>
                    <option value="RoomNumber">RoomNumber</option>
                    <option value="Capacity">Capacity</option>
                    <option value="Type">Type</option>
                    <option value="Available">Available</option>
                </select>
                <br><br><input type="submit" value="Send Query">
            </form>
            <br>
            <a href="./add_room_form.php">Add a new room</a>
            <hr class="green">
        </div>
    </body>
    <footer>
        <p>&copy 2022 Hawk Center.</p>
    </footer>
</html>
