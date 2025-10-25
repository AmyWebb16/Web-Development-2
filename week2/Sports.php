
<!DOCTYPE html>
<html>
    <head>
        <h1 style = font-size:300%;>Sports Club Feed Back Form</h1>
    </head>
    <body>

        <h2>Please fill out form to let us know what you think of the club so that we can improve it</h2>
        <form>
            <label for = "fname">Full name:</label>
            <input type = "text" id="fname" name="fname">
            <br>
            <label for ="email">Email:</label>
            <input type ="text" id="email" name="email">
        </form>

        <h2>which sports do yuo enjoy most?</h2>
        <form>
            <input type ="radio" id="swimming" name="fav_sport" value="swimming">
            <label for ="swimming">Swimming</label>

            <input type="radio" id="football" name="fav_sport" value="football">
            <label for="football">Football</label>
            
            <input type="radio" id="tennis" name="fav_sport" value="tennis">
            <label for="tennis">Tennis</label><br>

            <input type="radio" id="snooker" name="fav_sport" value="snooker">
            <label for="snooker">Snooker</label>

            <input type="radio" id="golf" name="fav_sport" value="golf">
            <label for="golf">Golf</label>
        </form>

        <h2>How long have you been a member of the club?</h2>
        <form>
            <input type="radio" id="lessthan" name="time" value="lessthan">
            <label for="lessthan">Less than one year</label>

            <input type="radio" id="one-two" name="time" value="one-two">
            <label for="one-two">One to two years</label>

            <input type="radio" id="morethan" name="time" value="morethan">
            <label for="morethan">More than two years </label>
        </form>

        <p>Please give us any additional feedback that you may have?</p>
        <form>
            <label for="comment">Comment:</label>
            <textarea name="comment" rows="3" cols="20"></textarea><br>
            <input type="sumbit">
            <input type="reset">
        </form>

    </body>
</html>
