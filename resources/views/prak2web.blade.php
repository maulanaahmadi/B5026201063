<!doctype html>
<html lang="en">
  <head>
      <style>
          p.solid {
              border-style: solid;
            }
          body{
              background-color: rgb(211, 211, 211);
            }
            .title{
            font-size: 50px;
            margin: 0 0 8px;
            color: #333;
             }

      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Registration</title>
</head>

<body>
<h1><p class="title">Registration Form</h1>

<table border="0" style="center; color:#080000">

<form></form>
<tr>
    <td>User ID</td>
    <td>:</td>
    <td><input type="text" minlength="5" maxlength="12" required></td>
</tr>

<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="text, number" minlength="7" maxlength="12" required></td>
</tr>

<tr>
    <td>Name</td>
    <td>:</td>
    <td><input type="text" required></td>
</tr>
<tr>
    <td>Address</td>
    <td>:</td>
    <td><input type="text"></td>
</tr>


<tr>
    <td>Country</td>
    <td>:</td>
    <td><select required>
        <option>(Please select a country)</option>
        <option>Indonesia</option>
        <option>Malaysia</option>
        <option>Singapore</option>
        <option>Thailand</option>
        <option>Brunei</option>
        <option>Cambodia</option>
        <option>Philipines</option>
      </select></td>
</tr>
<tr>
    <td>ZIP Code</td>
    <td>:</td>
    <td><input type="number" required></td>
</tr>
<tr>
    <td>E-mail</td>
    <td>:</td>
    <td><input type="email" required></td>
</tr>
<tr>
    <td>Sex</td>
    <td>:</td>
    <td><input type="radio"/>Male
    <input type="radio"/>Female</td>
</tr>
<tr>
    <td>Language</td>
    <td>:</td>
    <td><input type="checkbox"/>English
    <input type="checkbox"/>Non English</td>
</tr>
<tr>
    <td>About</td>
    <td>:</td>
    <td><textarea cols="22" rows="3" required ></textarea></td>
</tr>


</form>
</table>
<button type="submit" class="btn btn-primary">Submit</button>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>
