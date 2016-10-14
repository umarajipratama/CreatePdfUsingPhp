<!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Tutorial Pembuatan Laporan PDF dengan PHP</title>
    </head>
    <body>
    <h1>Isi data diri anda</h1>
     <form action="kepdf.php" method="POST">
        Nama : <input type="text" name="nama"><br>
        Email : <input type="text" name="email"><br>
        No. HP : <input type="text" name="nohp"><br>
        Website : <input type="text" name="website"><br>
        <input type="submit" value="Generate PDF">
     </form>
    </body>
    </html>