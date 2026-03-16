<?php
// Gets all information from database
$sql = 'SELECT posts. *, users.firstname, users.lastname FROM posts
 JOIN users ON posts.user_id = users.user_id ORDER BY posts.id DESC';
// Prepares a query
$stmt = $dbh->prepare($sql);
// Sends query to database
$stmt->execute();
