<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir - Bioda</title>
    <style>
        body{font-family: 'Fira Sans', sans-serif;color:rgb(120, 120, 120);}
        td {
            color: rgb(120, 120, 120);
            background-color: rgba(244, 244, 244, 0.3);
            border-width: 1px;
            border-style: solid;
            border-color: rgb(244, 244, 244, 0.3);
            font-size: 9pt;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            font-size: 12pt
        }
        td.atas {
            color: rgb(120, 120, 120);
            background-color: #f2efef;
            border-width: 1px;
            border-style: solid;
            border-color: #f2efef;
            font-size: 10pt;
            font-weight: bold;
            padding-top: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
            padding-left: 2px;
            text-align: right;
        }
      </style>
</head>

<body>
    <?php
    echo "<center><form method='POST'>";
    echo "<h1>BIO DATA</h1>";
    echo "<table width='60%'>";
    echo "<tr><td class='atas' width='30%'>Nama :</td><td width='30%'><input type='text' name='name' value='oktap dwi carmando'></td></tr>";
    echo "<tr><td class='atas'>NIM :</td><td><input type='text' name='name' value='2170231122'></td></tr>";
    echo "<tr><td class='atas'>Kelas :</td><td><input type='text' name='name' value='P2K'></td></tr>";
    echo "<tr><td class='atas'>Program Study :</td><td><input type='text' name='name' value='Teknik Informatika'></td></tr>";
    echo "<tr><td class='atas'>Agama :</td><td><select name='agama'>
    <option value='islam'>Islam</option>
    <option value='protestan'>Protestan Java</option>
    <option value='katolik'>Katolik</option>
    <option value='hindu'>Hindu</option>
    <option value='budho'>Budha</option>";
    echo "</select></td></tr>";
    echo "<tr><td class='atas'>Jenis Kelamin :</td><td><input type='radio' name='jenis_kelamin' value='l'>Laki-laki
    <input type='radio' name='jenis_kelamin' value='p'>Perempuan</td></tr>";
    echo "<tr><td class='atas'>E-Mail :</td><td><input type='email' name='email' value='biodata@gmail.com'></td></tr>";
    echo "<tr><td class='atas'>Foto :</td><td><img src='oktapcibubur.jpeg' width='200px'></img></td></tr>";
    echo "<tr><td class='atas'>&nbsp;</td><td class='atas'><center><input type='submit' value=' Simpan '> <input type='reset' value=' Cancel '></center></td></tr>";
    echo "</table>";
    echo "</form></center>";
    ?>
</body>
</html>