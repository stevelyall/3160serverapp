<!DOCTYPE html>
<html lang="en">
    <head>
        <title>COMP 3160</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                    </head>
    <body>


        <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <a href ="#" class="navbar-brand">COMP 3160</a>
            </div>

               <div class="collapse navbar-collapse" id="mainnavbar">


            <ul class="nav navbar-nav active">
            <li><a href="../index.html">Home</a></li>

            <li><a href="#">About</a></li>


            </ul>



            </div>

        </div>
        </nav>

<?php include_once("./accessdb.php"); ?>

        <div class="container-fluid">

            <h2>View Raw Data</h2>

              <!-- Display Data -->



    <form role="form" method="post">
		<input type="submit" name="refreash" class="btn btn-success" value="Refresh">
		<input type="submit" name="clear" class="btn btn-disabled" disabled="disabled" value="Clear Database">
	</form>

<br>

	        <?php
	            $query = "SELECT * FROM Location";
	            $result = mysqli_query($link, $query);
	        ?>
		            <h4>Found <?php echo mysqli_num_rows($result)?> Entries in table</h4>

<div class="container-fluid">	
<div class="table-responsive">
<table class="table table-striped table-condensed table-bordered">
<small>
			            <tr>
			                <td>Id</td>
			                <td>Title</td>
			                <td>Description</td>
			                <td>Latitude</td>
			                <td>Longitude</td>
			            </tr>
	<?php
	while ($row = mysqli_fetch_assoc($result)) {
	?>
				                            <tr>
                    <td><?php echo $row['Id']?></td>
                    <td><?php echo $row['Title']?></td>
                    <td><?php echo $row['Description']?></td>
                    <td><?php echo $row['Latitude']?></td>
                    <td><?php echo $row['Longitude']?></td>

                 </tr>
                             <?php }?>
            			</small>
           </table>
           </div>
</div>
  <!-- End container-->

 
  
  </div>

    </body>
</html>