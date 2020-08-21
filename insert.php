<?php
  $conn=mysqli_connect("localhost","root","tkfkddl12","opentutorials");
  $sql = "SELECT * FROM topic";
    INSERT INTO topic (
      title,
      description,
      created
    ) VALUES (
      'MySQL',
      'MySQL is .....',
      NOW()
      )";
  $result=mysqli_query($conn,$sql);
  if($result===false){
    echo mysqli_error($conn);
  }

  ?>
