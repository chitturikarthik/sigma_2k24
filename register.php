<!-- 
https://docs.google.com/forms/d/e/1FAIpQLSfeb6J5tO7UFoMzZJjwSjes3elWh8jUTsDrjuNXOx3KbZ0OBg/formResponse
?
usp=pp_url&
entry.964916349=fsdf&entry.552472569=dfsd&entry.1742801193=sdvsdc&entry.1783286149=562454&entry.1455821980=Second+Year&entry.1356220889=CS%26IT&entry.1992475807=C&entry.234580983=KDC&entry.234580983=Code+Master&entry.2076702301=Clash+Battle&entry.2076702301=Spot+Games&entry.2076702301=Virtual+Reality
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <style>
        .navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.navbar{
    position: fixed;
    width: 100%;
    background-color:#faca7885;
    backdrop-filter: blur(10px);
    color: var(--heading);
    z-index: 100;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 80px;
    align-items: center;
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
    font-family: var(--head-font);
    text-transform: uppercase;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color:var(--sub-heading);
    border:1px solid var(--sub-heading);
    border-radius: 2rem;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    padding:0.5rem 1.5rem;
    letter-spacing: 1px;
    font-family: var(--btn-font);
    transition: all 0.2s ease-in-out;
}

.navbar a:hover{
    color:var(--main-bg);
    background-color: var(--sub-heading);
    border:1px solid var(--main-bg);
    box-shadow: 4px 4px var(--heading);
}

@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 50px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: flex;
        align-items: center;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;

    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 22px;
        width: 34px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 2px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: var(--sub-bg);
        height: 100vh;
        max-width: 300px;
        transform: translateY(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        overflow: scroll;
        z-index:10;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: -10px;
        right: 20px;
        font-size: 2rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}


    </style>
</head>
<body>

<div class="cursor-dot" data-cursor-dot></div>
  <div class="cursor-outline" data-cursor-outline></div>
<!-- 
    <script>
        var submitted = false;
    </script>
    <iframe name="hiddenConfirm" id="hiddenConfirm" style="display: none;" 
    onload="if(submitted){
        window.location = 'success_msg.php';
    }"></iframe> -->

    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <!-- <li><a href="./index.php/#events">Events</a></li> -->
            </ul>
            <h1 class="logo">Sigma 2k24</h1>
        </div>
</nav>

    <div id="form">

        <div class="container">
            <form action="https://docs.google.com/forms/d/e/1FAIpQLSfeb6J5tO7UFoMzZJjwSjes3elWh8jUTsDrjuNXOx3KbZ0OBg/formResponse" method="post" target="hiddenConfirm" onsubmit="submitted = true ">

                <div class="form-container">
                    <div class="row">
                        <div class="input-grp">
                            <label>Full Name</label>
                            <input required type="text" name="entry.964916349" >
                        </div>

                        <div class="input-grp">
                            <label>Email Address</label>
                            <input required type="email" name="entry.552472569" >  
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        <div class="input-grp">
                            <label>Mobile Number</label>
                            <input required type="number" name="entry.1783286149" >
                        </div>

                        <div class="input-grp">
                            <label>Registration Number</label>
                            <input required type="text" name="entry.1742801193" >
                        </div>
                    </div>

                    <div class="input-grp" style="width:100%;">
                            <label>Branch</label>
                            <select name="entry.1356220889" >
                                <option checked>Select Your Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="MECH">MECH</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="CSD">CSD</option>
                                <option value="CIC">CIC</option>
                                <option value="CS&IT">CSIT</option>
                                <option value="CSBS">CSBS</option>
                                <option value="AI&DS">AI&DS</option>
                                <option value="AIML">AIML</option>
                            </select>
                        </div>    
                    </div>

                    <div class="row">
                            <div class="input-grp">
                                <label>Pursuing Year</label>
                                <select name="entry.1455821980">
                                    <option checked>Select Year</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                </select>
                            </div>

                                <div class="input-grp">
                                    <label>Section</label>
                                    <select name="entry.1992475807">
                                    <option checked>Select Your Section</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            
                    </div>

                    <div class="row">
                            <div class="input-grp checking">
                                <label class="form-heading">Technical Event</label>
                                    <div class="checkbox">
                                        <input type="checkbox" name="entry.234580983" value="KBC" id="KBC">
                                        <label for="KBC">Kaun Banega Codepathi?(KBC)</label> 
                                    </div>
                                    <div class="checkbox">
                                        <input id="Code Master" type="checkbox" name="entry.234580983" value="Code Master">
                                        <label for="Code Master">Code Master</label> 
                                    </div>
                                    <div class="checkbox">
                                        <input id="Online Housie" type="checkbox" name="entry.234580983" value="Online Housie">
                                        <label for="Online Housie">Online Housie</label> 
                                      </div>
                                    <div class="checkbox">
                                        <input id="Ideathon" type="checkbox" name="entry.234580983" value="Ideathon">
                                        <label for="Ideathon">Ideathon</label> 
                                    </div>
                                    <div class="checkbox">
                                        <input id="Murder Mystery" type="checkbox" name="entry.234580983" value="Murder Mystery">
                                        <label for="Murder Mystery">Murder Mystery</label> 
                                    </div>
                                    <div class="checkbox">
                                        <input id="Spell Casters" type="checkbox" name="entry.234580983" value="Spell Casters">
                                        <label for="Spell Casters">Spell Casters</label> 
                                    </div>
                                    <div class="checkbox">
                                        <input id="Uncharted-Treasure Hunt" type="checkbox" name="entry.234580983" value="Uncharted-Treasure Hunt">
                                        <label for="Uncharted-Treasure Hunt">Uncharted-Treasure Hunt</label> 
                                    </div>
                                    
                            </div>

                            <div class="input-grp checking">
                                <label class="form-heading">Fun Events</label>
    
                                    <div class="checkbox">
                                        <input type="checkbox"
                                        id="Vaikuntapali" name="entry.2076702301" value="Vaikuntapali">
                                        <label for="Vaikuntapali">Vaikuntapali</label> 
                                    </div>
    
                                    <div class="checkbox">
                                        <input type="checkbox"
                                        id="Clash Battle" name="entry.2076702301" value="Clash Battle">
                                        <label for="Clash Battle">Clash Battle</label> 
                                    </div>
    
                                    <div class="checkbox">
                                        <input type="checkbox"
                                        id="Spot Games" name="entry.2076702301" value="Spot Games">
                                        <label for="Spot Games">Spot Games</label> 
                                    </div>
    
                                    <div class="checkbox">
                                        <input type="checkbox"
                                        id="Virtual Reality" name="entry.2076702301" value="Virtual Reality">
                                        <label for="Virtual Reality">Virtual Reality</label> 
                                    </div>
                                   
                            </div>
                    </div>

                        <button type="submit" class="register-btn">Register</button><br><br>
                            
                </div>
            </form>
        </div>
    </div>
    <script>
    const cursorDot = document.querySelector("[data-cursor-dot]");
    const cursorOutline = document.querySelector("[data-cursor-outline]");

    window.addEventListener("mousemove", function (e) {
      const posX = e.clientX;
      const posY = e.clientY;

      cursorDot.style.left = `${posX}px`;
      cursorDot.style.top = `${posY}px`;

      cursorOutline.animate({
        left: `${posX}px`,
        top: `${posY}px`
      }, { duration: 600, fill: "forwards" });
    })
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    const logo = document.querySelector('.logo');
    logo.addEventListener('click', function() {
        window.location.href = 'index.php';
    });
});

</script>
</body>
</html>