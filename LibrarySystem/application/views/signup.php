<html>
    <head>
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url();?>/assets/css/style.css">
    </head>
    <body>
        <div class="user">
            <header class="user__header">
                <img src="" alt="" />
                <h1 class="user__title">To log into the Booking System please complete the form below.</h1><br><br>
                <a href="<?php echo site_url('Home/menuform');?>" class="user__title"/><p>Back to menu</p></a>
            </header>

            <form class="form">
                <div class="form__group">
                    <input type="text" name="knumber" placeholder="KNUMBER" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="name" placeholder="FULL NAME" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="email" placeholder="EMAIL" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="phone_no" placeholder="CONTACT NUMBER" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="password" placeholder="PASSWORD" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="password_confirm" placeholder="CONFIRM PASSWORD" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="file" name="userImg" placeholder="PROFILE IMAGE" class="form__input"/>
                </div>
                <button class="btn" type="button">Login</button>
            </form>
        </div>
        

    </body>
    
        <script  src="<?php echo base_url();?>/assets/js/index.js"></script>
</html>
