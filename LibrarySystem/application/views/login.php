<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url();?>/assets/css/style.css">
    </head>
    <body>
        <div class="user">
            <header class="user__header">
                <img src="" alt="" />
                <h1 class="user__title">To log into the Booking System please input your KNUMBER and PASSWORD below.</h1><br><br>
                <a href="<?php echo site_url('Home/menuform');?>" class="user__title"/><p>Back to menu</p></a>
            </header>
            <?php echo form_open('Home/login'); ?>
            <form class="form" method="post">
                <div class="form__group">
                    <input type="text" name="knumber" value="<?php echo set_value('knumber'); ?>" placeholder="KNUMBER" class="form__input"/>
                </div>
                <div class="form__group">
                <input type="text" name="password" value="<?php echo set_value('password'); ?>" placeholder="PASSWORD" class="form__input"/>
                </div>
                <input type="submit" value="Login" class="btn"/>
            </form>
        </div>
        <script  src="<?php echo base_url();?>/assets/js/index.js"></script>
        
    </body>
</html>
