<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="well">
                <form action="" method="post" id="register-form">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname" placeholder="First name"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Last name"/>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="radio">
                        <label>Gender</label>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male">Male
                        </label>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">Female
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit" value="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>


    $(function() {


        $("#register-form").validate({


            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                agree: "required"
            },


            messages: {
                firstname: "Please enter your first name",
                lastname: "Please enter your last name",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

    });

</script>
</body>
</html>