<?php

$sql = "SELECT id, name, rec FROM patients";
$result = $mysqli->query($sql);

// if there are any values in the table display them
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Records: " . $row["rec"]. "<br>";
    }
} else {
    echo "0 results";
}

?>