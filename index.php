<?php
//including the database connection file
include_once("config/Functions.php");
$functions = new Functions();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>SIMPLE BLOG</title>
 
    <style type="text/css">
        .manageTable {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageTable">
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Desc</th>
                <th>Posted Date</th>
                <th>PostedBY</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($functions->rowCount("blogs") > 0) {
                $i = 1;
                foreach($functions->fetchAll("blogs") as $row) { ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$row['title']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=date_format(date_create($row['postedDate']), "d M Y")?></td>    
                        <td><?=$row['postedBy']?></td>
                    </tr>
               <?php $i++; } 
            } else { ?>
                <tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            <?php 
            }?>
        </tbody>
    </table>
</div>
 
</body>
</html>
