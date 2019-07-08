
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Add Manager</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
    	body
    	{
    		 margin: 0;
			 padding: 0;
			 font-family: sans-serif;
			 background: url(ImageSrc/ManagerAdd.jpg);
			 background-attachment: fixed;
			 background-position: center;
			 background-size:cover;
    	}
    	.infoBox
    	{
    		width: 320px;
    		height: 420px;
    		background:#06102ba3;
    		color: #fff;
    		top: 55%;
            left: 15%;
    		position: absolute;
    		transform: translate(-50%,-50%);
    		box-sizing: border-box;
    	}
    	.boxField
    	{
		    position: relative;
		    width: 272px;
		    height: 371px;
		    top: 23px;
		    left: 20px;
		
		}

		.input_field
		{
			margin-bottom:10px;
			padding:6px;
			border-radius:4px;
			border:2px solid tomato;
		}
		.input_field:hover
		{
			border:2px solid green;
		}


    </style>
</head>

<body>
     <header>
         <div class="logo">Easy Travel</div>
         <nav>
             <ul>
                 <li><a href="AdminHome.php" class="active">Home</a></li>
                 <li><a href="AddManager.php">Add Manager</a></li>
                 <li><a href="#">Edit Manager</a></li>
                 <li><a href="#">Delete Manager</a></li>
             </ul>
         </nav>
         <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
     </header>


     <div class="infoBox">
     	<form action="AddManager_crud.php" method="POST">
     		    <div class="boxField">

     		    	<input class="input_field" type="text" name="User_name" placeholder="User Name"/> <br/>

	     			<input class="input_field" type="text" name="Address" placeholder="Address"/> <br/>

	     			<input class="input_field" type="text" name="Phone_number" placeholder="Phone_number"/> <br/>

	     			<input class="input_field" type="text" name="Age" placeholder="Age"/> <br/>

	     			<input class="input_field" type="email" name="Email" placeholder="email"/> <br/>

	     			<input class="input_field" type="password" name="Password" placeholder="password"/><br/>

	     			<input class="input_field" type="password" name="CPassword" placeholder="Confirm Password"/><br/>

	     			<input onMouseOver="this.style.background='#0F0'" onMouseOut="this.style.background='#014c6b'" id="btn" style="border:2px solid #837383; background:#014c6b;font-weight:bold;color:white" class="input_field" type="submit" name="submit" value="Add Manager"/><br/>

                    <?php
                        if(isset($_GET["status"]))
                        {
                            if($_GET["status"]=="success")
                            {
                                echo "<div style='color:#32d632'>
                                <h5>Data Inserted Successfully<h5>
                                </div>";
                           }
                        }
	     			   
                    ?>
     		    </div>
     			
    	</form>

    	
     </div>	


     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <script type="text/javascript">
         $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('nav').toggleClass('active')
            })
         })
     </script>

</body>

</html>
