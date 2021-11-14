<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up - Media Online</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
      @csrf
      <label for="fname">First Name:</label><br /><br />
      <input type="text" name="fname"/><br /><br />
      <label for="lname">Last Name:</label><br /><br />
      <input type="text" name="lname"/><br /><br />

      <p>Gender:</p>
      <input type="radio" name="male" />
      <label>Male</label><br />
      <input type="radio" name="female" />
      <label>Female</label><br />
      <input type="radio" name="other" />
      <label>Other</label>

      <p>Nationality:</p>
      <select name="nationality" id="nationality">
        <option value="indonesia">Indonesia</option>
        <option value="amerika">Amerika</option>
        <option value="inggris">Inggris</option>
      </select>

      <p>Language Spoken:</p>
      <input type="checkbox" name="bahasa"/>
      <label>Bahasa Indonesia</label><br />
      <input type="checkbox" name="english"/>
      <label>English</label><br />
      <input type="checkbox" name="other"/>
      <label>Other</label>

      <p>Bio:</p>
      <textarea name="bio" rows="10" cols="30"> </textarea>
      <br /><br />
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
