<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars((trim($_POST["name"])));
    $comment = htmlspecialchars((trim($_POST["comment"])));

    if(!empty($name) && !empty($comment)){
        echo "<p>Hi <b>$name</b>, Your comment has been received successfully.</p>";
        echo "<p>Here's the commentthat you've entered: $comment</p>";
    } else {
        echo "<p>Please fill all the fields in the form.</p>";
    } }
    
    else {
        echo "<p>Something went wrong Please try again.</p>";
    }
