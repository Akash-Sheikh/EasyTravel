<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
        body
        {
             margin: 0;
             padding: 0;
             font-family: sans-serif;
             background: url(ImageSrc/adminhome.jpg);
             background-attachment: fixed;
             background-position: center;
             background-size:cover;
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
