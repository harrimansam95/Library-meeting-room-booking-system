<html>
    <head>
        <title>Library Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url(); ?>/assets/css/styles.css">
    </head>
    <body>
        <div class="user">
            
            <!-- Home Page with links on it to perform the CRUD Actions -->


            <div id='cssmenu'>
                
                <ul>
                    <li class='active'><a href="<?php echo site_url('Home/SignUp'); ?>">Student Sign up</a><br></li>
                    <li ><a href="<?php echo site_url('Home/LogIn'); ?>">Student Log in</a><br></li>
                    <li class="form__input"><a href="<?php echo site_url('Home/BookRoom'); ?>">Select a room to book</a></li>

                </ul>

            </div>
            
    </body>
</html>
