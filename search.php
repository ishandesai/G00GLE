<?php 
    if(isset($_GET["term"])){
        $term=$_GET["term"];

    }
    else{
        exit("WTF");
    }
    $type =isset($_GET["type"]) ? $_GET["type"] :"sites";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Doodle</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

	<div class="wrapper">
	
		<div class="header">


			<div class="headerContent">

				<div class="logoContainer">
					<a href="index.php">
						<img src="img/doodleLogo.png">
					</a>
				</div>

				<div class="searchContainer">

					<form action="search.php" method="GET">

						<div class="searchBarContainer">

							<input class="searchBox" type="text" name="term">
							<button class="searchButton">
								<img src="icons/search.png">
							</button>
						</div>




					</form>


				</div>



			</div>
            <div class="tabsContainer">
            <ul class="tabList">
                <li class="<?php echo $type=='sites' ? 'active':'' ?>">
                    
                    <a href='<?php echo"search.php?term=$term&type=sites" ?>'>
                    Sites</a>
                    
                </li <?php echo $type=='sites' ? 'active':'' ?>>
                <li>
                <a href='<?php echo"search.php?term=$term&type=sites" ?>'>Webiste</a>
                </li>
            </ul>

        </div>



		</div>


	</div>

</body>
</html>