 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
    <h1>Angkatan di Program Studi Jurusan Teknologi Informasi POLIJE SIP !</h1>
    <style>
      table, td, th, td {
       border: 2px solid black;
        padding: 10px;
        border-collapse: collapse;
      }
      </style>
  </head>
  <body>
    <table>
    <th>No</th>
    <th>Tahun</th>
    <?php $no=1; foreach ($angkatan as $row) : ?>
      <tr>
        <td><?= $no?></td>
        <td><?= $row['angkatan'] ?></td>
      </tr>
    <?php $no++; endforeach ?>
  </table>
  </body>
  </html>