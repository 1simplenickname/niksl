<?php

class template {

    static function generateHeader() {

        echo '<!--Favicons-->
        <link rel="shortcut icon" href="../img/icons/favicon.png">
        <!--Display scaling support-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Styling and animations-->
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">';

    }

    static function indexNav() {

        echo '
            <div id="navigation">

                <div id="contactsNav" class="item focused crimson">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </div>
                <a id="skillsNav" class="item unfocusedCrimson"
                   href="skills">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="hobbiesNav" class="item unfocusedCrimson"
                   href="hobbies">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="reviewsNav" class="item unfocusedCrimson"
                    href="reviews">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

    }

    static function skillsNav() {

        echo '
                    <div id="navigation">

                <a id="contactsNav" class="item unfocusedLimegreen"
                   href="index">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <div id="skillsNav" class="item focused limegreen">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </div>
                <a id="hobbiesNav" class="item unfocusedLimegreen"
                   href="hobbies">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="reviewsNav" class="item unfocusedLimegreen"
                   href="reviews">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

    }

    static function hobbiesNav() {

        echo '
            <div id="navigation">

                <a id="contactsNav" class="item unfocusedDodgerblue"
                    href="index">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <a id="skillsNav" class="item unfocusedDodgerblue"
                   href="skills">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <div id="hobbiesNav" class="item focused dodgerblue">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Hobbies</div>

                </div>
                <a id="reviewsNav" class="item unfocusedDodgerblue"
                    href="reviews">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </a>

            </div>';

    }

    static function reviewNav() {

        echo '
                    <div id="navigation">

                <a id="contactsNav" class="item unfocusedGold"
                   href="index">

                    <i class="fas fa-address-book icon"></i>
                    <div class="text">Contacts</div>

                </a>
                <a id="skillsNav" class="item unfocusedGold" href="skills">

                    <i class="fas fa-laptop icon"></i>
                    <div class="text">Skills</div>

                </a>
                <a id="hobbiesNav" class="item unfocusedGold"
                   href="hobbies">

                    <i class="fas fa-book icon"></i>
                    <div class="text">Hobbies</div>

                </a>
                <div id="reviewsNav" class="item focused gold">

                    <i class="fas fa-star icon"></i>
                    <div class="text">Reviews</div>

                </div>

            </div>';

    }

    static function thankyouNav() {

        echo '
                        <div id="navigation">
    
                    <a id="contactsNav" class="item unfocusedGold"
                       href="index">
    
                        <i class="fas fa-address-book icon"></i>
                        <div class="text">Contacts</div>
    
                    </a>
                    <a id="skillsNav" class="item unfocusedGold" href="skills">
    
                        <i class="fas fa-laptop icon"></i>
                        <div class="text">Skills</div>
    
                    </a>
                    <a id="hobbiesNav" class="item unfocusedGold"
                        href="hobbies">

                        <i class="fas fa-book icon"></i>
                        <div class="text">Hobbies</div>

                    </a>
                    <a id="reviewsNav" class="item focused gold" href="reviews">
    
                        <i class="fas fa-star icon"></i>
                        <div class="text">Reviews</div>
    
                    </a>
    
                </div>';

    }

    static function userLogin() {

        echo '<div id="reviewHeader">Leave a review of me:</div>

                        <div id="reviewContainer">

                            <form id="reviewForm" action="thanks" method="post">

                                <input id="reviewInputField" type="text" name="review"
                                       placeholder="review"><br>
                                <input type="submit">

                            </form>

                        </div>';

    }

    static function userExists() {

        echo '<div id="reviewHeader">
              Error, user already exists!
              </div>';

    }

    static function userHasReview() {

        echo '<div id="reviewHeader">
              You\'ve already submitted a review! <br>
              Would you like to edit your review?
              </div>
              
              <div id="reviewContainer" style="padding-top: 50px;">

                    <form id="reviewForm" action="editReview" method="post">

                        <input id="reviewInputField" type="text" name="review"
                               placeholder="review"><br>
                        <input type="submit">

                    </form>

              </div>';

    }

    static function reviewEdited() {

        echo '<div id="reviewHeader">
              Review edited successfully!
              </div>';

    }

    static function loginFailure() {

        echo '<div id="reviewHeader">
              Error, contact system administrator!
              </div>';

    }

    static function validationEmpty() {

        echo '<div id="reviewHeader">
              Error, no fields can be left empty!
              </div>';

    }

    static function deleteUserVisual() {

        echo '<a id="deleteUser" href="deleteUser">
                    <i id="deleteUserIcon" class="fas fa-trash-alt"></i>
                    <div id="deleteUserText">
                        Delete user
                    </div>
              </a>';

    }

    static function editUserVisual() {

        echo '<a id="editUser" href="editUser">
                    <i id="editUserIcon" class="fas fa-user-edit"></i>
                    <div id="editUserText">
                        Edit data
                    </div>
              </a>';

    }

}