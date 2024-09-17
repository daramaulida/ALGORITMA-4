<?php
 $customers =[
    [
    "Nama" => "Andika",
    "Alamat" => "Diponegoro",
    "No.Telp" => "0819999666777",
    "Pekerjaan" => "PNS",
    "Gaji" => "5.000.000"
 ] ,

 [
    "Nama" => "Fahri",
    "Alamat" => "Penamparan Agung",
    "No.Telp" => "085222333444",
    "Pekerjaan" => "Asisten Manager",
    "Gaji" => "7.000.000"
 ] ,

 [
    "Nama" => "Miranda",
    "Alamat" => "Gunung Salak",
    "No.Telp" => "085999634788",
    "Pekerjaan" => "Wiraswasta",
    "Gaji" => "15.000.000"
 ] ,
 ];
 ?>

 <head>
    <title>Array Asosiatif</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama<hr></th>
            <th>Alamat<hr></th>
            <th>No.Telp<hr></th>
            <th>Pekerjaan<hr></th>
            <th>Gaji<hr></th>
</tr>
<?php foreach ($customers as $customer) { ?>
  <tr>
  <td><?php echo $customer ["Nama"]; ?><hr></td>
   <td><?php echo $customer ["Alamat"]; ?><hr></td>
    <td><?php echo $customer ["No.Telp"]; ?><hr></td>
    <td><?php echo $customer ["Pekerjaan"]; ?><hr></td>
    <td><?php echo $customer ["Gaji"]; ?><hr></td>
</tr>
<?php } ?>
</table>
</body>
<p><strong>By:Dara Maulida            