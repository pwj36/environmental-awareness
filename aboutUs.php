<!DOCTYPE html>
<html lang="en">

<head>
    <title>Taking Action</title>
    <meta charset="utf-8"/>
    <script src="aboutUsValidation.js"></script>

<!--Style of webpage-->
<style>
    /*Style for entire website*/
        /*Set margin and padding for all elements*/
        *{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }

    /*Styling the entire body section*/
        body{
            background-color:#f3fadc;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

    /*Styling the navigation bar*/
        .navbar{
            width:100%;
            background: #32620e;
            height: 45px;
            position:fixed;
            z-index:2;
        }

        /*Positioning the logo*/
        .logoimg{
            position:fixed;
        }

        ul{
            margin:0;
            padding:0;
            list-style-type:none;
        }

        ul li{
            float:right;
            display:inline;
            font-size:15px;
            text-align:center;
        }

        ul li a{
            text-decoration: none;
            color: white;
            padding: 10px;
            display: block;
            width: 150px;
            height: 45px;
        }

        /*To change color of the button when the user hovers over it */
        ul li a:hover{
            background-color:#1d3808;
        }

        ul li ul{
            background-color: #32620e;
        }

        ul li ul li{
            float:none;
        }

        ul li ul{
            display: none;
        }

        ul li:hover ul{
            display:block;
        }

    /*Header of the page*/
        h1{
            padding-top:70px;
            padding-bottom:25px;
            text-align:center;
            font-family:Georgia, 'Times New Roman', Times, serif;
            background-color:#1d3808; 
            color:#f3fadc; 
            font-size:55px;
        }
        
    /*'Our Team' division*/
        .contents{
            background-color:#f3fadc;
            padding-bottom:20px;
        }

        .boxesdiv{
            display:flex;
            background-color: #f3fadc;
            align-content:center;
            justify-content:center;
            padding-bottom:30px;
            margin-left:30px;
            margin-right:30px;
        }

        .innerbox{
            background-color: #1d3808;
            align-items:center;
            margin:20px;
            width:350px;
            height:500px;
            text-align:center;
            color:black;
        }

        /*Style subheading*/
        h2{
            text-align:center;
            padding-top:20px;
            padding-bottom:25px;
            font-family:Georgia, 'Times New Roman', Times, serif;
            font-size:30px;
            color:#314528;
        }

        /*Align images*/
        .teamimg{
            display: block;
            padding-top:50px;
            padding-bottom:0px;
            margin-left: auto;
            margin-right: auto;
        }

        /*Style sub-sub heading*/
        h3.team{
            font-size:20px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color:#f3fadc;
            padding-top:10px;
            padding-bottom:10px;
            text-align:center;
        }

        /*Style paragraph text*/
        p.team{
            color:#f3fadc; 
            padding-top:5px; 
            padding-left:10%; 
            padding-right: 10%; 
            padding-bottom:10px; 
            text-align:center;
        }

        
    /*'Contact Us' division */
        div.container{
            align-items:center;
            display:flex;
            justify-content:center;
            height:100%;
            padding-bottom:20px;
        }

        div.forms{
            background-color: #1d3808;
        }

        div.formlogin{
            position:relative;
            justify-content: center;
            align-items:center;
            width:500px;
            height:auto;
            margin-top:20px;
            margin-bottom:50px;
            padding-left:40px;
            padding-right:40px;
        }

        div.inputfield{
            margin-left:10px;
            margin-right:10px;
        }

        div.inputfield2{
            margin-left:10px;
            margin-right:10px;
        }
        div.inputfield input{
            padding-top:10px;
            padding-bottom:10px;
            margin-top:10px;
            margin-bottom:20px;
            width:400px;
        }

        div.inputfield2 input{
            padding-top:10px;
            padding-bottom:100px;
            margin-top:10px;
            margin-bottom:20px;
            width:400px;
            
        }

        /*Styling form label*/
        label{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 15px;
            color:#f3fadc;
        }

        /*To style the submit button- color, font type and size etc.*/
        input.submit{
            display: inline-block;
            color:#1d3808;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 15px;
            text-align: center;
            background-color:#f3fadc;
            border-color:transparent;
            padding-left:30px;
            padding-right:30px;
            margin: 4px 2px;
        }

        /*Style submit button when mouse hovers accross it */
        input.submit:hover{
            background-color:#a3a893;
            color:#1d3808;
        }

/*Website's Footer Division*/
.footerdiv{
            background-color:#32620e;
            text-align:center;
        }
    
        .boxesdiv2{
            display:flex;
            background-color: #32620e;
            align-content:center;
            justify-content:center;
            padding-top:20px;
            padding-left:5%;
            padding-right:5%;
        }

        .innerbox2{
            background-color: #32620e;
            text-align:left;
            height: 180px;
            margin:20px;
            width:370px;
            padding-left:20px;
            padding-bottom:10px;
        }

        h2.alignleft{
            text-align:left;
            padding-left:20px;
            color:white;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:25px;
            padding-top:0px;
            padding-bottom:10px;
        }

        p.footer{
            padding-left:20px;
            color:white;
        }
</style>
</head>

<!--Contents of the page-->
<body>
    <!--Navigation bar-->
    <div class = "navbar">
        <img src="homepagelogo.png" height=45px class="logoimg">
        <ul>
            <li><a href="login.html">Login</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a>Learn More</a>
                <ul>
                    <li><a href="environment.html">Environment</a></li>
                    <li><a href="awareness.html">Awareness</a></li>
                    <li><a href="pollution.html">Pollution</a></li>
                    <li><a href="climateChange.html">Climate Change</a></li>
                    <li><a href="takingAction.html">Taking Action</a></li>
                </ul>
            </li>
            <li><a href="homepage.html">Home</a></li>
        </ul>
    </div> <!--End of navigation bar-->

    <h1 style="background-color:#1d3808; color:#f3fadc; font-size:55px;">ABOUT US</h1>
    
    <!--'Our team' division-->
    <div class="contents" style="padding-top:20px;">
        <h2>OUR TEAM</h2>
            <div class="boxesdiv">
                <!--Cofounder of the team-->
                <div class="innerbox">
                    <img src="cofounder1.png" width=70% height=55% class="teamimg">
                    <h3 class="team">John Roberts</h3>
                    <p class="team">
                        <strong>Cofounder</strong>
                        <br>
                        Hosted 20 clean-up events.
                        <br>
                        Led an awareness campaign that achieved 100 new environmental advocates.
                    </p>
                </div>

                <!--Founder of the team-->
                <div class="innerbox">
                    <img src="founder.png" width=70% height=55% class="teamimg">
                    <h3 class="team">Marie Alexander</h3>
                    <p class="team">
                        <strong>Founder</strong>
                        <br>
                        Environmentalist since 2003.
                        <br>
                        Has the passion for creating a healthier environment.
                        <br>
                        Volunteered in more than 200 clean-up events
                    </p>
                </div>

                <!--Cofounder of the team-->
                <div class="innerbox">
                    <img src="cofounder2.png" width=70% height=55% class="teamimg">
                    <h3 class="team">Lucas Millier</h3>
                    <p class="team">
                        <strong>Cofounder</strong>
                        <br>
                        Worked as an environmental scientist since 2015
                        <br>
                        Volunteered in more than 50 clean-up events
                    </p>
                </div>
            </div>
    </div>

    <hr style="padding-bottom:50px;">

    <!--'Contact Us' division-->
    <div class="container">
        <div class="forms">
            <h2 style="padding-top:50px; color:#f3fadc;" >CONTACT US</h2>
            <div class="formlogin">
                <form name ="contactUsForm" action="contactUs.php" onsubmit="informUsers()"  method="post">
                    <!--First Name-->
                    <div class="inputfield"> 
                        <label>First Name</label>
                        <input 
                        type="text" 
                        id="firstname"
                        name="firstname"
                        size="30"
                        placeholder="First Name" 
                        required
                        />
                    </div>

                    <!--Last Name-->
                    <div class="inputfield"> 
                        <label>Last Name</label>
                        <input 
                        type="text" 
                        id="lastname"
                        name="lastname"
                        size="30"
                        placeholder="Last name" 
                        required
                        />
                    </div>
            
                    <!--Email-->
                    <div class="inputfield">    
                        <label>Email</label>
                        <input 
                        type="email" 
                        id="email"
                        name="email"
                        size="30"
                        placeholder="Email Address" 
                        required
                    />
                    </div>

                    <!--Message-->
                    <div class="inputfield2">    
                        <label>What can we help you with?</label>
                        <input
                        type="text" 
                        id="message"
                        name="message"
                        placeholder="Your message" 
                        required
                        />
                    </div>

                    <!--Submit Button-->
                    <div class="inputfield">
                        <input class="submit" type = "submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <!--The Footer Division-->
 <div class="footerdiv">
        <div class="boxesdiv2">
            <div class="innerbox2">
                <h2 class="alignleft">CONTACT US</h2>
                <p class="footer">Phone No.: 012 345 6789</p>
                <p class="footer">Email: ecogreenco@gmail.com</p>
                <br>
                <h2 class="alignleft">REFERENCES</h2>
                <p class="footer">
                    Click 
                    <a href="references.html" style="color:#f3fadc;">here</a>
                    for the reference list.
                </p>
            </div>
            <div class="innerbox2">
                <h2 class="alignleft">ADDRESS</h2>
                <p class="footer">Jalan PJU 2b/12,
                    <br>
                    Ara Damansara,
                    <br>
                    47301 Petaling Jaya, Selangor
                </p>
            </div>
            <div class="innerbox2">
                <h2 class="alignleft">OPERATING HOURS</h2>
                <p class="footer">
                    Monday-Friday: 10am - 5pm
                    <br>
                    Saturday: 11am-4pm
                    <br>
                    Sunday: 11am-3pm
                    <br>
                    Closed on Public Holidays
                </p>
            </div>
        </div>
        <p style="padding-bottom:10px; color:white; font-size:10px;">Copyright © 2022 Eco Green Co</p>
    </div><!--End of footer division-->
</body>
</html>