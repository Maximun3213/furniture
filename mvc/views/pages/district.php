<option value="">District</option>

<?php
    // include("./server/connection.php");
    $id = $_POST['id'];

    // $query = "SELECT * FROM district where province_id='$id'";
    // $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
    $result = $this->model('userModel')->selectDistrict($id);
    while ($row = mysqli_fetch_assoc($result)){
        echo "<option value='" .$row['district_id'] . "'>" . $row['district_name'] ."</option>";
    }


?>