<html>
    <head>
        <title>Book a Room</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url(); ?>/assets/css/style2.css">
    </head>
    <body>
        <div class="user">
            <header class="user__header">
                <img src="" alt="" />
                <h1 class="user__title">To book a room please fill the form below.</h1><br><br>
                <a href="<?php echo site_url('Home/menuform'); ?>" class="user__title"/><p>Back to menu</p></a>
            </header>

            <form class="form">     
                <div class="form__group">
                    <img src="<?php echo base_url(); ?>/images/floorplan.jpg" width="800" height="600" alt="floorplan" class="form__input"/>
                </div>
                
                <button class="btn" type="button">Book</button>
            </form>
        </div>
    </body>
    <script  src="<?php echo base_url(); ?>/assets/js/index.js"></script>
</html>
