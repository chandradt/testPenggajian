<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jabatan</title>

    </head>
    <body>
        <form action="/addPosition">
            <label for="fname">Kode Jabatan:</label>
            <input type="text" id="kode" name="kode"><br><br>
            <label for="lname">Nama Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan"><br><br>
            <label for="fname">Standar Gaji:</label>
            <input type="text" id="standarGaji" name="standarGaji"><br><br>
            <label for="lname">Keterangan:</label>
            <input type="text" id="keterangan" name="keterangan"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>