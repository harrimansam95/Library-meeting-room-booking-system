<html>
    <head>
        <title>Library Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url();?>/assets/css/style.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url(); ?>/assets/css/styles.css">
        
    </head>
    <body>
        <div >
            
            <!-- Home Page with links on it to perform the CRUD Actions -->


            <div id='cssmenu'>
                
                <ul>
                    <li><a href="<?php echo site_url('Home/SignUp'); ?>">Sign up</a><br></li>
                    <li ><a href="<?php echo site_url('Home/LogIn'); ?>">Student Log in</a><br></li>
                    <li><a href="<?php echo site_url('Home/BookRoom'); ?>">Select a room to book</a></li>
                    <li><a href="<?php echo site_url('Home/BookRoom2'); ?>">Select a room to book via floorplan</a></li>

                </ul>

            </div>
        </div>
            
            <div class="user">
            <header class="user__header">
                <img src="" alt="" />
                <h1 class="user__title">To log into the Booking System please input your KNUMBER and PASSWORD below.</h1><br><br>
                <a href="<?php echo site_url('Home/menuform');?>" class="user__title"/><p>Back to menu</p></a>
            </header>
            <form class="form">
                <div class="form__group">
                    <input type="text" name="knumber" placeholder="KNUMBER" class="form__input"/>
                </div>
                <div class="form__group">
                <input type="text" name="password" placeholder="PASSWORD" class="form__input"/>
                </div>
                <button class="btn" type="button">Login</button>
            </form>
        </div>
        <script  src="<?php echo base_url();?>/assets/js/index.js"></script>
            
    </body>
</html>
