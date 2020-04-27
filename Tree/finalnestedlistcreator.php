<!DOCTYPE HTML>

<html>

<head>
    <title>Org Chart</title>
    <link rel="stylesheet" href="jquery.orgchart.css" />
    <style>
        span.title {
            font-weight: normal;
            font-style: italic;
            color: #404040;
        }


        button {
            position: relative;
            left: calc(50% + 10px);
            /* float: right;*/
            width: 30px;
            /*display: none;*/
        }

        .showme {
            display: none;
        }

        .hk:hover .showme {
            position: relative;
            width: 30px;
            display: block;
            left: 100px;
            bottom: 20px;
        }

    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jquery.orgchart.js"></script>
    <script>
        $(function() {
            // $("#organisation").orgChart({container: $("#main")});
            $("#organisation").orgChart({
                container: $("#main"),
                interactive: true,
                fade: true,
                speed: 'slow'
            });

            $(".hk button").click(function(e) {
                e.stopPropagation();
            });


        });

    </script>
</head>

<body>

    <div id="left" hidden>

        <ul id="organisation">
            <li> Software Name
                <?php
  
include "../db/config.php";

 $qry="SELECT * FROM treeview_items";
 $result=$conn -> query($qry);


 $arrayCategories = array();

 while($row = mysqli_fetch_assoc($result)){ 
 $arrayCategories[$row['id']] = array("parent_id" => $row['parent_id'], "name" =>                       
 $row['name']);   
  }
//createTree($arrayCategories, 0);

 function createTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['parent_id']) {                       
/*echo "<li>
			<label for='folder2'>Folder 2</label> <input type='checkbox' id='folder2' /> 
			<ol>
				<li class='file'><a href=''>File 1</a></li>
				<li>
					<label for='subfolder2'>Subfolder 1</label> <input type='checkbox' id='subfolder2' /> 
					<ol>
						<li class='file'><a href=''>Subfile 1</a></li>
						<li class='file'><a href=''>Subfile 2</a></li>
						<li class='file'><a href=''>Subfile 3</a></li>
						<li class='file'><a href=''>Subfile 4</a></li>
						<li class='file'><a href=''>Subfile 5</a></li>
						<li class='file'><a href=''>Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>";*/
    if ($currLevel > $prevLevel) echo " <ul> "; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li class="hk"> '.$category["name"].'<button class="showme">+</button>';
///    echo '<li> <label for="subfolder2">'.$category['name'].'</label> <input type="checkbox" name="subfolder2"/>';
    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTree ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ul> ";

}   
?>

                <?php
 if(mysqli_num_rows($result)!=0)
 {
?>
                <?php 

createTree($arrayCategories, 0); ?>
                <?php
}
?>

            </li>
        </ul>

    </div>

    <div id="content">

        <center>
            <h1>Team-Up</h1>
        </center>

        <div id="main">
        </div>



    </div>

</body>

</html>
