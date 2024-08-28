<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;600;700;800;900&display=swap');

        body{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Inter',sans-serif;
            background:#EDCFAA;
        }
        .register-form{
            width:50%;
        }
        h2{
            color:#764838;
            
        }
        @media only screen and (max-width: 600px){
            .register-form{
                width: 100%;
            }
        }
    </style>
</head>
<body>

    
    <div class="container mx-auto my-5 register-form">

    <h2 class="text-center text-uppercase">Event Registration Form</h2>
    
        <form id='reg1' method='post' action='#' onsubmit="return validateForm();">

            <div class="form-group my-3 pb-2" >
              <label>Full Name</label>
              <input type="text" name='name' id="name" class="form-control">
            </div>

            <div class="form-group my-3 pb-2">
              <label>Registration No.</label>
              <input type="text" name='regno' id="regno" class="form-control">
            </div>

            <div class="form-group my-3 pb-2" >
                <label>Email Address</label>
                <input type="text" name='email' id="email" class="form-control">
            </div>

            <div class="form-group my-3 pb-2" >
                <label>Mobile Number</label>
                <input type="number" name='mobile' id="mobile" class="form-control">
            </div>

            <div class="form-group my-3 pb-2">
                <label>Selected Event</label>
                <input type="text" name='event' id="event" placeholder="" value="Khaidhi Hunt"class="form-control" disabled>
            </div>

            <div class="form-group my-3 pb-2">
            <label>Select Event</label>
                <select id="multi-select" multiple class="form-control">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>
                </select>
            </div>

                <script>
                document.getElementById('multi-select').addEventListener('click', function(event) {
                    const option = event.target;
                    if (option.tagName === 'OPTION') {
                    option.selected = !option.selected;
                    }
                });
                </script>


            <div class="form-group my-3 pb-2">
                <label>Select Your Branch</label>
                <select name="branch" id="branch"  class="form-control">
                    <option selected value="" aria-selected="true">Select Your Branch</option>
                    <option value="CSD">CSD</option>
                    <option value="CSE">CSE</option>
                    <option value="CSBS">CSBS</option>
                    <option value="CIC">CIC</option>
                    <option value="CSIT">CSIT</option>
                    <option value="IT">IT</option>
                    <option value="AIDS">AIDS</option>
                    <option value="AIML">AIML</option>
                    <option value="MECH">MECH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                </select>
            </div>

            <div class="form-group my-3 pb-2">
                <label>Select Your Section</label>
                <select name='section' id='section' class="form-control">
                    <option selected value="" aria-selected="true">Choose Your Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </div>

            <div class="form-group my-3 pb-2">
                <label>Current Pursuing Year</label>
                <select name='batch' id='batch' class="form-control">
                    <option selected value="">Select Student Year</option>
                    <option value="2027">First</option>
                    <option value="2026">Second</option>
                    <option value="2025">Third</option>
                    <option value="2024">Fourth</option>
                </select>
            </div>

            <div class="form-group my-3 pb-2">
                <div class="h-captcha" data-sitekey="f6892b7e-56c6-4010-a3c0-2878d8437349"></div>
                <center><input type="submit" name="newregistration" class="btn btn-primary" value="REGISTER" id="regbutton"></center>
            </div>

            <div class="form-group my-3 pb-2 text-center">
                <p>---Or---</p>
                <a class="btn btn-dark text-light" href="index.php">Go To Homepage</a>
            </div>

            <div id="section-error" class="error"></div>
            <div id="batch-error" class="error"></div>

            
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>