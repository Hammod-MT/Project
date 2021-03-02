<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Register Page</title>
        <link rel="stylesheet" href="main.css" />
        <script></script>
    </head>
    <body>
        <form action="home.php" method="POST">
          <img src="https://logodix.com/logo/1713924.png" width="100px" /> 
<!--this is Personal tabel -->
            <h1><i>Personal Info</i></h1>
            <table class="tab1">
            <div class="div1">
                <label>Your id</label>
                <br>
                <input type="number" name="id"  class="inputname" required placeholder="Enter Your id "/>
                <br>
                <label>Email</label>
                <br>
                <input type="email" name="email"  class="inputname" required placeholder="Enter Your Email" />
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password" class="inputname" required placeholder="Enter strong password" />
            </div>
        </table>
<!--this is informatin tabel -->
            <hr />
            <h1><i>Your information</i></h1>
            <table>
                
                <div class="div2">
                    <label>First name</label>
                    <br>
                        <input type="text" name="fname" class="inputname" placeholder="Enter Your name " required />
                    <br>
                    <label>Father name</label>
                    <br>
                        <input type="text" name="Fathername" class="inputname" required  placeholder="Enter Your Father name"/>
                    <br>
                    <label>gf name</label>
                    <br>
                        <input  type="text" name="lname" class="inputname" placeholder="Enter Your gf name" required />
                    <br>
                     <label>last name</label>
                    <br>
                        <input type="text" name="lname" class="inputname" placeholder="Enter Your family name" required />
                </div>
            </table>
                 <hr />  
            
<!--this is Choose tabel -->
                    <h1><i>Choose one of the things</i></h1>
                <table>
                    <div class="div2">
                    <label>Select Your gender </label>
                    <br>
                        <div>
                            <label for="1">ذكر</label>
                            <input id="1" type="radio" name="gender" placeholder="male" required/>
                        </div>
                            <br>
                        <div>
                            <label for="2">أنثى</label>
                            <input id="2" type="radio" name="gender" placeholder="famale" required/>
                            <br>
                            <br>
                            <label>Choose Your Country</label>
                            <br>
                            <br>
                        <select>
                            <optgroup label="Choose Your Country !">
                                <option>Palestine</option>
                                <option>lobnan</option>
                                <option>Jordan</option>
                                <option>syria</option>
                                <option>egypt</option>
                                <option>Iraq</option>
                            </optgroup>
                        </select>
                      <div>
                        <br>
                        <label>Enter Your date</label>
                          <br><br>
                        <input type="date"  class="inputname" name="date"/>
                    
                    </div>
                        </div>
                    </div>
                        <br>
                </table>
            <hr />
<!--this is buttan groub -->
            <div class="butt">
            <input class="subi" type="submit" value="Submit">
            <input class="subi" type="reset" value="Reset" />
                
            </div>
        </form>
    </body>
</html>
