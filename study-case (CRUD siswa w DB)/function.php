<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_siswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

function table() {
    global $conn;

    $query = "SELECT * FROM siswa";
    $result = $conn->query($query);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function store($name_inp, $nis_inp, $rombel_inp) {
    global $conn;
    $name = $name_inp;
    $nis = $nis_inp;
    $rombel = $rombel_inp;
    $query = "INSERT INTO siswa (name, nis, rombel) VALUES ('$name', '$nis', '$rombel')";

    $conn->query($query);
}

function destroy($get_id) {
    global $conn;
    $id = $get_id;
    $query = "DELETE FROM siswa WHERE id=$id";

    $conn->query($query);
}

function select($get_id){
    global $conn;

    $id = $get_id;
    $query = "SELECT * FROM siswa WHERE id=$id";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();

    return $data;
}


function update($name_inp, $nis_inp, $rombel_inp, $get_id) {
    global $conn;

    $id = $get_id;
    $name = $name_inp;
    $nis = $nis_inp;
    $rombel = $rombel_inp;
    $query = "UPDATE siswa SET name='$name', nis='$nis', rombel='$rombel' WHERE id=$id";

    $conn->query($query);
}