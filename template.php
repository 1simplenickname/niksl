<?php

    function generateHeader() {

        echo '<!--Favicons-->
        <link rel="shortcut icon" href="img/icons/favicon.png">
        <!--Display scaling support-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Styling and animations-->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">';

    }

    function indexNav() {

        echo '
            <div id="navigation">

                <div id="contactsNav" class="item focused crimson">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </div>
                <a id="skillsNav" class="item unfocusedCrimson"
                   href="skills.php">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="hobbiesNav" class="item unfocusedCrimson"
                   href="hobbies.php">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="reviewsNav" class="item unfocusedCrimson"
                    href="reviews.php">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

    }

    function skillsNav() {

        echo '
                    <div id="navigation">

                <a id="contactsNav" class="item unfocusedLimegreen"
                   href="index.php">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <div id="skillsNav" class="item focused limegreen">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </div>
                <a id="hobbiesNav" class="item unfocusedLimegreen"
                   href="hobbies.php">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="reviewsNav" class="item unfocusedLimegreen"
                   href="reviews.php">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

    }

function hobbiesNav() {

    echo '
            <div id="navigation">

                <a id="contactsNav" class="item unfocusedDodgerblue"
                    href="index.php">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <a id="skillsNav" class="item unfocusedDodgerblue"
                   href="skills.php">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <div id="hobbiesNav" class="item focused dodgerblue">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Hobbies</div>

                </div>
                <a id="reviewsNav" class="item unfocusedDodgerblue"
                    href="reviews.php">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

}

    function reviewNav() {

        echo '
                    <div id="navigation">

                <a id="contactsNav" class="item unfocusedGold"
                   href="index.php">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <a id="skillsNav" class="item unfocusedGold" href="skills.php">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="hobbiesNav" class="item unfocusedGold"
                   href="hobbies.php">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Hobbies</div>

                </a>
                <div id="reviewsNav" class="item focused gold">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </div>

            </div>';

    }

    function reviewSuccess() {
        echo '
                                <div id="reviewHeader">Leave a review of me:</div>

                        <div id="reviewContainer">

                            <form id="reviewForm" action="thanks.php" method="post">

                                <input id="reviewInputField" type="text" name="review"
                                       placeholder="review"><br>
                                <input type="submit">

                            </form>

                        </div>';
    }

    function reviewFailure() {

        echo '<div id="reviewHeader">Error, user already exists!</div>';

    }

    function loginFailure() {

        echo '<div id="reviewHeader">Error, contact system administrator!</div>';

    }

    function thankyouNav() {

        echo '
                        <div id="navigation">
    
                    <a id="contactsNav" class="item unfocusedGold"
                       href="index.php">
    
                        <i class="fas fa-address-book icon"></i>
                        <div class="text">Contacts</div>
    
                    </a>
                    <a id="skillsNav" class="item unfocusedGold" href="skills.php">
    
                        <i class="fas fa-laptop icon"></i>
                        <div class="text">Skills</div>
    
                    </a>
                    <a id="hobbiesNav" class="item unfocusedGold"
                        href="hobbies.php">

                        <i class="fas fa-book icon"></i>
                        <div class="text">Hobbies</div>

                    </a>
                    <a id="reviewsNav" class="item focused gold" href="reviews.php">
    
                        <i class="fas fa-star icon"></i>
                        <div class="text">Reviews</div>
    
                    </a>
    
                </div>';

    }