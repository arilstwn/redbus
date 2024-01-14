<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RedBus</title>

 
 
</head>

<style>
   * {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}
 
body {
    min-height: 100vh;
    background: url(main.jpeg) center / cover;
    display:flex;
    justify-content: center;
    align-items: center;
}

main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;
}

.table__body {
    width: 95%;
    max-height: calc(89% - .8rem);
    background: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
}

.table__body::-webkit-scrollbar-thumb {
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover:-webkit-scrollbar-thumb {
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align:left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5dedefe;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr:hover {
    background-color: #fff6;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893e3;
    color: #b30021;
}

.status.shipped {
    background-color: #6fcaea;  
}

@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

.button {
    border: none;
    color: blue;
    padding: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    transition-duration: 0.45;
    cursor: pointer;
}

.button1 {
    background-color: #008CBA;
    color: white;
}

.button1:hover {
    background-color: white;
    color: black;
    border: 2px solid red;
}
.a {
    border: none;
    color: blue;
    padding: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    transition-duration: 0.45;
    cursor: pointer;
}

.a1 {
    background-color: #008CBA;
    color: white;
}

.a1:hover {
    background-color: white;
    color: black;
    border: 2px solid red;
}


.h2 {
            font-size: 46px;
            line-height: 1.3380952381;
        }

    </style>


<body class="relative min-h-screen overflow-hidden">
  <?php $this->load->view('sidebars'); ?>

  <main class="table">
      <!-- Area konten utama -->
      <div class="flex-1 p-4 w-full">
      
        <section class="table__header">
            <h2>KELAS BUS</h2>
            
            <div class="flex md:gap-2">
                                <a href="tambah_kelas" style="border-radius: 8px; 10%;" class="a a1">Tambah</a>
                                </div>
        </section>
        
                                
  
        <section class="table__body">
            <table >
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kelas Bus</th>
                        <th class="text-center">Jumlah Kursi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($kelas as $row) :
                                                $no++
                                            ?>
                                                <tr>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $no ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->kelas ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->jumlah_kursi ?>
                                                    </td>   
                                                    <td data-cell="Aksi" class="justify-content-center px-3 py-4 flex">
                                                    <a href="ubah_kelas" style="border-radius: 8px;margin-top: 10%;" class="a a1">Ubah</a>

                                                    <button style="border-radius: 8px;margin-top: 10%;" class="button button1">Hapus</button> 
                                                    </td>                                             
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
            </table>
        </section>
    </main>


</body>

</html>