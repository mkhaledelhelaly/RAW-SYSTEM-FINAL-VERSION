<?php
// Initialize session
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    header('location: login.php');
    exit;
}
$_SESSION['username'] = $username;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Raw Egypt</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/Raw.css">
    <link rel="icon" type="image/png" href="images/team/RAW.PNG" sizes="100000000x100000000">

    <link rel="stylesheet" href="website icon" type="png" href="images/team/RAW.PNG">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- allllll -->
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <?php
            echo '<a class="navbar-brand" href="index.php">Raw Egypt</a>';

            echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>';

            echo '<div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-lg-auto">
               <li class="nav-item">
                   <a href="#home" class="nav-link smoothScroll">Home</a>
               </li>

               <li class="nav-item">
                   <a href="#schedule" class="nav-link smoothScroll">My Schedule</a>
               </li>
               
               <li class="nav-item">
                   <a href="#contact" class="nav-link smoothScroll">Contact</a>
               </li>

           </ul>';

            echo '<ul class="social-icon ml-lg-3">
           <li><a href="https://web.facebook.com/Raw.Cali/?_rdc=1&_rdr" target="_blank" class ="fa fa-facebook"></a></li>
           <li><a href="https://www.instagram.com/raw__egypt/" target="_blank" class="fa fa-instagram"></a></li>
       </ul>';
            ?>
        </div>
    </nav>









    <!-- HERO -->


    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12 ">
                    <div class="hero-text mt-5 text-center">
                        <?php
                        echo '<h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>';
                        echo '<h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Raw</h1>';
                        echo '<a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature" id="feature">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <?php
                    echo '<h2 class="mb-3 text-white" data-aos="fade-up">Welcome to Raw Egypt</h2>';
                    echo '<h6 class="mb-4 text-white" data-aos="fade-up">Our trainers are passionate about helping you succeed,<br>they will work closely with you to develop a customized workout plan that fits your lifestyle and objectives.</h6>';
                    ?>
                </div>
                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>
                            <?php
                            echo '<h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>';
                            echo '<strong class="d-block" data-aos="fade-up" data-aos-delay="600">Friday : Closed</strong>';
                            echo '<strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday - Thursday</strong>';
                            echo '<p data-aos="fade-up" data-aos-delay="800">7:00 PM - 10:00 PM</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!--Schedule-->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <?php
                    echo '<h6 data-aos="fade-up">Our Weekly Schedules</h6>';
                    echo '<h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>';
                    ?>
                </div>
                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                        <thead class="thead-light">
                            <th class="light-green"><i class="fa fa-calendar"></i></th>
                            <th>Sat</th>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small>7:00 PM</small></td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                            </tr>

                            <tr>
                                <td><small>8:00 PM</small></td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                            </tr>

                            <tr>
                                <td><small>9:00 PM</small></td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <div class="row">
                        <div class="item">
                            <div class="circle11"></div>
                            <span class="text1"> Beginner </span>
                        </div>

                        <div class="item">
                            <div class="circle22"></div>
                            <span class="text2"> Intermediate </span>
                        </div>

                        <div class="item">
                            <div class="circle33"></div>
                            <span class="text3"> Advanced </span>
                            
                        </div>
                        <section> 
                        
                            <div class="item">
                            <!-- <div class="row"> -->

                            <span class="text2">
                                                                          <br><br>
  
                            <html>
                                        <head>
                                        <script>
                                            function submitForm() {
                                            // Get the selected values from the dropdown menus
                                            var selectedDay = document.getElementById("day").value;
                                            var selectedTime = document.getElementById("time").value;

                                            // Display the success message
                                            var successMessage = document.getElementById("success-message");
                                            successMessage.innerHTML = "Successfully scheduled for " + selectedDay + " at " + selectedTime;
                                            }
                                        </script>
                                        </head>
                                        <body>
                            
                            <form>
                                            <label for="day">Choose a day:</label>
                                            <select id="day">
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            </select>

                                            <br><br>

                                            <label for="time">Choose a time:</label>
                                            <select id="time">
                                            <option value="2:00 PM">7:00 PM</option>
                                            <option value="4:00 PM">8:00 PM</option>
                                            <option value="6:00 PM">9:00 PM</option>
                                            </select> </span>
                                            <input type="button" value="Submit" onclick="submitForm()">

                                            </form>
                                            <div class="item">
                            
                                        <span class="text3">
                                         <p id="success-message"></p>
                                            </body>
                                            </html>
                                            

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>









    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="process_contact_form.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Europa Schule Kairo, Mivida Gate 7, New Cairo - Cairo, Egypt</p>

                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.9566573657685!2d31.528648400000005!3d30.009400899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14582389e3e32cdd%3A0x8925ad559e66498a!2sRAW%20Egypt!5e0!3m2!1sen!2seg!4v1679915264903!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">
                        <?php echo '© ' . date('Y') . ' Raw Egypt'; ?>
                    </p>
                </div>
                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="mailto:Rawegypt2021@gmail.com">Rawegypt2021@gmail.com</a>
                    </p>
                    <p>
                        <i class="fa fa-phone mr-1"></i> +201111651379<br>
                        +201275706666
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>