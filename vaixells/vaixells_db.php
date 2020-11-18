<?php
include "database.php";
include "ships.php";
include "owner.php";
class vaixells_db extends database{

    function returnShip(){
        $sql = "SELECT idship, eslora, tipus, matricula, any FROM ship";
        $result = $this->conn->query($sql);
        $ship = null;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $ship = new ships($row["eslora"], $row["tipus"], $row["matricula"], $row["any"]);
            }
        } else {
            echo "0 results";
        }
        return $ship;
    }

    function searchShip($id){
        $sql = "SELECT eslora, tipus, matricula, any FROM ship WHERE idship=$id";
        $result = $this->conn->query($sql);
        $ship = null;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $ship = new ships($row["eslora"], $row["tipus"], $row["matricula"], $row["any"]);
            }
        } else {
            echo "0 results";
        }
        return $ship;
    }

    function returnOwner(){
        $sql = "SELECT id, nom, llicencia, idVaixell, FROM owner";
        $result = $this->conn->query($sql);
        $ship = null;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $ship = new ships($row["eslora"], $row["tipus"], $row["matricula"], $row["any"]);
            }
        } else {
            echo "0 results";
        }
        return $ship;
    }
}





$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
?>

?>