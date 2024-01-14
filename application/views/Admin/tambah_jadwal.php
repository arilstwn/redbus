<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #322c2c;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
           
            color: #252121;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        main {
            margin: 20px;
            width: 80%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        form {
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        form input {
            padding: 10px;
            margin: 5px;
            width: 45%;
        }

        form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 20%;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <?php $this->load->view('sidebars'); ?>
    <header>
        <h1>Tambah Jadwal</h1>
    </header>

    <main>
        <form action="<?php echo base_url('admin/aksi_tambah_jadwal'); ?>" method="post">
            <!-- Assuming you have a controller named "your_controller" and a method "aksi_tambah_data" to handle the form submission -->
              
            <input type="text" id="tujuan" name="tujuan" placeholder="tujuan kota" required>
            <input type="text" id="jam" name="jam" placeholder="jam keberangkatan" required>
            <button type="submit">Tambah Data</button>
        </form>

      
    </main>
</body>

</html>
