<?php

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'rgfitness');

SELECT * 
FROM booking 
INNER JOIN user_fk 
ON userid = user_fk.userid 
INNER JOIN user
ON user_fk.userid = userid;

?>