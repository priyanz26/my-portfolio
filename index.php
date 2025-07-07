<?php
include ("db.php");
if (isset($_POST['Submit']));
$names = $_POST['names'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];
$sql="INSERT INTO `portfolio` (`names`, `mail`, `msg`) 
VALUES ('$names', '$mail', '$msg')";

    
    $result= mysqli_query($conn,$sql);
    //echo "$sql";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1751fd8ae4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
    
        <div class="container"></div>
            <nav>
                <img src="logo.jpg" class="logo">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark"></i>
                </ul>
                <i class="fa-solid fa-bars"></i>
            </nav>
            <div class="header-text">
                <p>PHP - Laravel Developer</p>
                <h1>Hi, I'm <span>Priyansh</span> <br>from India</h1>
            </div>   
        </div>    
    </div>
        
            
            
        
        
        
        
    
    </div>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="pic.jpg">
                   
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About me</h1>
                    <p>Entry-level PHP Laravel developer with hands-on experience in building web apps using Laravel and Filament. Passionate
 about clean code, smart UIs, and solving real-world problems, Data Structures and Algorithms, Databases, and version control systems like Git. Quick to learn, easy to work with, and ready to deliver.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experince')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>                  
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>PHP Programming</span><br>programing language</li>
                        <li><span>Laravel</span><br>Framework</li>
                        <li><span>Filament</span><br>Admin Panel</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experince">
                    <ul>
                        <li><span>Apr2023 - Aug2024</span><br> Catalog Manager & Tech Learner at Sphere-Rays Technolabs Pvt. Ltd.</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>bachlore in IT</span><br>fron R.K unniversity</li>
                        <li><span>12th science</span><br>from the schoole of science</li>
                        <li><span>primary schooling</span><br>from bhushan high schoole</li>
                    </ul>
                </div>
            </div>    
    </div>


    <div id="services">
        <div class="container">
            <h1 class="sub-title">my services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-robot"></i>
                    <h2>Custom Web Applications</h2>
                    <p>I develop fully customized web applications using Laravel’s powerful MVC architecture. These applications are secure, scalable, and tailored specifically to meet your business needs.</p>
                    <a href="#">Learn more</a>
                </div> 
                
                <div>
                    <i class="fa-brands fa-app-store-ios"></i>
                    <h2>Admin Panel & Dashboard Solutions</h2>
                    <p>I build intuitive and responsive admin panels using Laravel with technologies like Filament or Laravel Nova, ensuring easy data management and analytics for your business....</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-envelope"></i>priyanshjadav263@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>09924643040</p>
                    <div class="social-icon">
                        <a href="https://www.linkedin.com/in/priyansh-jadav-0b9288246?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bbho5NNAmSi%2BUzjM6NhGopw%3D%3D"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/_priyanz/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/priyansh.jadav.184"><i class="fa-brands fa-facebook"></i></a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <Br>
                        <br>
                        <br>
                    </div>
                   
                    <a href="Resume.pdf" download='image' class="download-btn">Download CV</a>
                        
                </div>
                <div class="contact-right">
                    <form method="post">
                        <input type="text" name="names" placeholder="Your Name" required>
                        <input type="email" name="mail" placeholder="Your Email" required>
                        <textarea name="msg" rows="6" placeholder="Your Massage" required></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>copyright priyansh <i class="fa-solid fa-copyright"></i>. . .  made with <i class="fa-solid fa-heart"></i> by priyansh jadav</p>
        </div>
    </div>
    <script> 
            var tablinks = document.getElementsByClassName("tab-links");
            var tabcontents = document.getElementsByClassName("tab-contents");

            function opentab(tabname){
                for(tablink of tablinks){
                    tablink.classList.remove("active-link");
                }
                for(tabcontent of tabcontents){
                    tabcontent.classList.remove("active-tab");
                }
                
                event.currentTarget.classList.add("active-link");
                document.getElementById(tabname).classList.add("active-tab");
            }
    </script> 
</body>

</html>
