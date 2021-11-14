<option value="">District</option>

<?php
    $id = $_POST['id'];
    $result = $this->model('userModel')->selectDistrict($id);
    while ($row = mysqli_fetch_assoc($result)){
        echo "<option value='" .$row['district_id'] . "'>" . $row['district_name'] ."</option>";
    }
?>