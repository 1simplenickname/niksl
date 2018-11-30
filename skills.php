<?php

    include('php/template.php');

?>

<!doctype html>
<html lang="en">

    <head>

        <title>Niks Ļ</title>
        <!--UTF-8 character support-->
        <meta charset="UTF-8">
        <?php template::generateHeader() ?>

    </head>

    <body>

        <div id="container">

            <div id="content">

                <div id="skillsScreen">

                    <div id="pointOne">

                        I am a
                        <a id="mikrotik" href="https://bit.ly/2I6fLkx">MikroTik</a>
                        certified technician.<br>
                        <br>
                        With knowledge in DHCP, bridging, routing, wireless,<br>
                        firewall, QoS, tunneling and more.

                    </div>

                    <div id="pointTwo">

                        I am currently studying in Riga State Technical <br>
                        to earn my computer systems technician qualification.

                    </div>

                    <div id="pointThree">

                        I've good communication skills thanks to <br>
                        my job experience as a
                        <div id="cenuklubs">
                            seller-consultant in Cenuklubs.lv
                        </div>

                        and as a

                        <div id="latvenergo">
                            computer systems technician in AS&nbsp;Latvenergo.
                        </div>

                    </div>

                </div>

            </div>

            <?php template::skillsNav() ?>

        </div>

    </body>

</html>