<?php

require '../connection.php';
$sql = 'SELECT * FROM users';
$results = mysqli_query($connection, $sql);
if (mysqli_num_rows($results) > 0) {
    echo '<thead><tr><th>'.' id '.'</th><th>'.' Name  '.'</th><th>'.'  email '.'</th><th>'.' Password '.'</th><th>'.'Address'.'</th><th>'.'   City  '.'</th><th>'.'State   '.'</th><th>'.'Country  '.'</th><th>'.'ZipCode  '.'</th><th>'.'Mobile'.'</th><th>'.'Date of Birth'.'</th><th>'.'Material  '.'</th><th>'.' Industry   '.'</th><th>'.'Profession'.'</th><th>'.'Promotion'.'</th><th>'.'orgName'.'</th><th>'.'Designation'.'</th><th>'.'work_city'.'</th><th>'.'work_state'.'</th><th>'.'work_country'.'</th><th>'.'work_zipCode'.'</th><th>'.'work_address'.'</th><th>'.'rollNum'.'</th><th>'.'joinYear'.'</th><th>'.'degree'.'</th><th>'.'Department'.'</th><th>'.'Hall'.'</th><th>'.'graduatingYear'.'</th><th>'.'accompanyingNo'.'</th></tr></thead>';
    while ($row = mysqli_fetch_assoc($results)) {
        echo '<tbody><tr><td>'.$row['id'].'  '.'</td><td>'.$row['name'].' '.'</td><td>'.$row['email'].'  '.'</td><td>'.$row['password'].' </td><td>'.$row['address'].'</td><td>'.$row['city'].'  '.'</td><td>'.$row['state'].'  '.'</td><td>'.$row['country'].' </td><td>'.$row['zipcode'].' </td><td>'.$row['mobile'].'</td><td>'.$row['dob'].'</td><td>'.$row['material'].'  '.'</td><td>'.$row['industry'].'  '.'</td><td>'.$row['profession'].' </td><td>'.$row['promotion'].'</td><td>'.$row['orgName'].'</td><td>'.$row['designation'].'</td><td>'.$row['work_city'].'</td><td>'.$row['work_state'].'</td><td>'.$row['work_country'].'</td><td>'.$row['work_zipCode'].'</td><td>'.$row['work_address'].'</td><td>'.$row['rollNum'].'</td><td>'.$row['joinYear'].'</td><td>'.$row['degree'].'</td><td>'.$row['department'].'</td><td>'.$row['hall'].'</td><td>'.$row['graduatingYear'].'</td><td>'.$row['accompanyingNo'].'</td></tr><tbody>';
    }
}
