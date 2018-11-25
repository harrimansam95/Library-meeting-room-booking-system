<html>
    <head>
        <title>Book a Room</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type =text/css href="<?php echo base_url(); ?>/assets/css/style.css">
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
                    <select name="roomName" size="1" class="form__input">
                        <option>Room 1</option>
                        <option>Room 2</option>
                        <option>Room 3</option>
                        <option>Room 4</option>
                    </select>
                </div>
                <div class="form__group">
                    <select name="roomDate" size="1" class="form__input">
                        <option>Monday 05 November</option>
                        <option>Tuesday 06 November</option>
                        <option>Wednesday 07 November</option>
                        <option>Thursday 08 November</option>
                        <option>Friday 09 November</option>
                    </select>
                </div>
                <div class="form__group">
                    <select name="roomTime" size="1" class="form__input">
                        <option>9:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                    </select>
                </div>
                <div class="form__group">
                    <input type="text" name="knumber" placeholder="KNUMBER" class="form__input"/>
                </div>
                <div class="form__group">
                    <input type="text" name="email" placeholder="EMAIL" class="form__input"/>
                </div>
                <button class="btn" type="button">Book</button>
            </form>
        </div>
    </body>
    <script  src="<?php echo base_url(); ?>/assets/js/index.js"></script>
</html>
