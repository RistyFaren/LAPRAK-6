<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
   </head> 
   <body>
      <form method="POST" action="hasillogin.php">
         <table width="400" align="center" cellpading="2" cellspacing="2">
            <tr>
               <td width="130">Nama</td>
               <td><input type="text" name="nama" id=""></td>

            </tr>
            <tr>
               <td width="130">Email</td>
               <td><input type="text" name="email" id=""></td>

            </tr>
            <tr>
               <td colspan="2" align="center">
                  <input type="submit" name="btnLogin" value="kirim">
                  <input type="reset" name="reset" value="reset">
               </td>
               

            </tr>
         </table>
      </form>
   </body>
</html>