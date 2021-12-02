<!DOCTYPE html>
<body>
<form method="POST" action="../Scripts/login.php">
    <h1>Signin Form</h1>
    <div class="form-element"> <label>Username</label>
        <input type="text" name="eesnimi"  required />
        <input type="text" name="perenimi"  required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="parool"  required />
    </div>
    <input type="submit" value="login">
</form>
</body>