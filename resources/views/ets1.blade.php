<!DOCTYPE html>
<html>
    <style>
        p.solid {
                border-style: solid;
         }
        .title{
                font-size: 50px;
                margin: 0 0 8px;
                color: #333;
            }
        body {
                background-color: cornflowerblue;
            }
            div {
        width:1000px;
        height: 1000px;
        }
        ..etsmaulanaahmadi {
        border: 2px solid rgb(0, 0, 0);
        }

    </style>

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Form Input Data Barang</title>

</head>
<body>
    <table border="0" style="center;
    color: #080000">

    <header> Maulana Ahmadi</header>
    <header> Aldi</header>
    <header> 5026201063</header>

    <legend><center><h2> Form Input Data Barang </h2></center></legend>
    <form>
        <tr>
            <td> Nama Barang</td>
            <td>:</td>
            <td><input type="text, number" minlength="10" required><td>
        </tr>
        <tr>
            <td> Harga</td>
            <td>:</td>
            <td><input type="number" min="5000" required><td>
        </tr>
        <tr>
            <td> Jenis Barang </td>
            <td>:</td>
            <td><select required>
                <option>  </option>
                <option> Makanan </option>
                <option> Minuman </option>
                <option> Non Mamin </option>
            </select></td>
        </tr>
        <tr>
            <td> Kode Barcode</td>
            <td>:</td>
            <td><input type="number" min="10" required><td>
        </tr>
    </form>
    </table>
    <button style=background-color:blue type="submit"> Kirim </button><button style=background-color:green type="reset"> Reset </button>

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
