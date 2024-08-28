<style>

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.navbar{
    position: fixed;
    width: 100%;
    height:80px;
    background-color:#faca7885;
    backdrop-filter: blur(10px);
    color: var(--heading);
    z-index: 100;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 80px !important;
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
    font-family: var(--title-font);
    text-transform: uppercase;
    letter-spacing:-1px;
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


/* Navbar CSS */
</style>
<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#dummy">Events</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfkV7dSb4bT7CnlOt0YHIaj_1APv-jE5yeqyxcOrbk57SYphQ/viewform?usp=sf_link" target="new">Register</a></li>
            </ul>
            <h1 class="logo">Sigma 2k24</h1>
        </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const logo = document.querySelector('.logo');
    logo.addEventListener('click', function() {
        window.location.href = 'index.php';
    });
});

</script>