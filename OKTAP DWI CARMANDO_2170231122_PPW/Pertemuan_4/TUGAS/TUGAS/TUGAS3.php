<?php
include "login.php";
if (!empty($_POST['nama'])){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Website Ku</title>
    </head>
    <body>
        <hr><table width="400" align="center" celpadding="2" cellspacing="2">
        <tr><td  width="130">Nama :</td><td><input type="text" name="nama" value="<?php echo $_POST['nama'];?>"></td></tr>
        <tr><td>E-Mail :</td><td><input type="email" name="email" value="biodata@gmail.com"></td></tr>
        </table>
        </form>
    </body>
    </html>
<?php
}
?>