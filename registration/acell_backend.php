<?php

require '../connection.php';
$sql = 'SELECT * FROM users';
$results = mysqli_query($connection, $sql);
if (mysqli_num_rows($results) > 0) {
    echo '<tr><td>'.' id '.'</td><td>'.' Name  '.'</td><td>'.'  email '.'</td><td>'.' Password '.'</td><td>'.'Address'.'</td><td>'.'   City  '.'</td><td>'.'State   '.'</td><td>'.'Country  '.'</td><td>'.'ZipCode  '.'</td><td>'.'Mobile'.'</td><td>'.'Date of Birth'.'</td><td>'.'Material  '.'</td><td>'.' Industry   '.'</td><td>'.'Profession'.'</td><td>'.'Promotion'.'</td><td>'.'orgName'.'</td><td>'.'Designation'.'</td><td>'.'work_city'.'</td><td>'.'work_state'.'</td><td>'.'work_country'.'</td><td>'.'work_zipCode'.'</td><td>'.'work_address'.'</td><td>'.'rollNum'.'</td><td>'.'joinYear'.'</td><td>'.'degree'.'</td><td>'.'Department'.'</td><td>'.'Hall'.'</td><td>'.'graduatingYear'.'</td><td>'.'accompanyingNo'.'</td></tr>';
    while ($row = mysqli_fetch_assoc($results)) {
        echo '<tr><td>'.$row['id'].'  '.'</td><td>'.$row['name'].' '.'</td><td>'.$row['email'].'  '.'</td><td>'.$row['password'].' </td><td>'.$row['address'].'</td><td>'.$row['city'].'  '.'</td><td>'.$row['state'].'  '.'</td><td>'.$row['country'].' </td><td>'.$row['zipcode'].' </td><td>'.$row['mobile'].'</td><td>'.$row['dob'].'</td><td>'.$row['material'].'  '.'</td><td>'.$row['industry'].'  '.'</td><td>'.$row['profession'].' </td><td>'.$row['promotion'].'</td><td>'.$row['orgName'].'</td><td>'.$row['designation'].'</td><td>'.$row['work_city'].'</td><td>'.$row['work_state'].'</td><td>'.$row['work_country'].'</td><td>'.$row['work_zipCode'].'</td><td>'.$row['work_address'].'</td><td>'.$row['rollNum'].'</td><td>'.$row['joinYear'].'</td><td>'.$row['degree'].'</td><td>'.$row['department'].'</td><td>'.$row['hall'].'</td><td>'.$row['graduatingYear'].'</td><td>'.$row['accompanyingNo'].'</td></tr>';
    }
}
