<?php
    include 'conn.php';
    $searchTerm = $_POST['searchTerm'];
    $sql = mysqli_query($conn, "SELECT * FROM `data` WHERE (name LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%' OR phone LIKE '%$searchTerm%' OR address LIKE '%$searchTerm%' OR birth LIKE '%$searchTerm%' OR gender LIKE '%$searchTerm%')");
    $output = "";
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['birth'].'</td>
            <td>'.$row['gender'].'</td>
            <td>'.$row['created_at'].'</td>
            <td>
              <a href="edit.php" class="btn btn-primary" role="button">Edit</a>
              <a href="delete.php" class="btn btn-danger" role="button"
                >Delete</a
              >
            </td>
          </tr>';
        }
    }else{
        $output .= '<tr>
            <td colspan="8">No Record Found</td>
          </tr>';
    }

    echo $output;