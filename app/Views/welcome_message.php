<?php
if (!file_exists('uploads/khutbah_data.txt')) {
    die("File konfigurasi tidak ditemukan.");
}
// Membaca file config
$config = file('uploads/khutbah_data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$variables = [];

// Mengolah setiap baris menjadi variabel
foreach ($config as $line) {
    list($key, $value) = explode('=', $line, 2);
    $variables[trim($key)] = trim($value);
}

?>


<?php
$gambar = $variables['selected_image'];

$gambarOptions = [
    "background-image.png" => 'gambar1.php',
    "background-image2.png" => 'gambar2.php',
    "background-image3.png" => 'gambar3.php',
    "background-image4.png" => 'gambar4.php',
    "background-image5.png" => 'gambar5.php',
    "background-image6.png" => 'gambar6.php',
];

if (array_key_exists($gambar, $gambarOptions)) {
    include $gambarOptions[$gambar];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" href="assets/images/logo.png" type="image/png">
    <title>Image with Centered Text</title>
    <style>
        @font-face {
            font-family: "Gagalin";
            src: url("Gagalin.ttf");
            /* Pastikan font Gagalin tersedia */
        }

        body,
        html {
            margin: 0;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
            padding: 0;
            height: 100%;
            display: flex;
            /* Gunakan flex untuk centering */
            justify-content: center;
            /* Horizontal centering */
            align-items: center;
            /* Vertical centering */
        }

        .image-container {
            position: relative;
            /* Untuk positioning teks overlay */
            display: flex;
            justify-content: center;
            top:270px;
            /* Horizontal alignment */
        }

        img {
            width: 1000px;
            max-width: 100%;
            height: auto;
            /* Tentukan ukuran gambar sesuai kebutuhan */
        }       
       
        
        .iframe-container {
            display: none;
           
        }

        iframe {
            width: 100%; /* Lebar 100% dari kontainer */
            height: 100vh; /* Tinggi sesuai viewport */
            border: none; /* Hilangkan border */
            display: block; /* Pastikan ditampilkan */
            z-index: 1; /* Pastikan di depan */
        }
        @media (max-width: 768px) {
             .iframe-container {
                display: block; /* Tampilkan tombol */
                
                width: 100%; /* Memastikan lebar 100% */
                position: relative; /* Posisi relatif untuk z-index */
                overflow: hidden; /* Menghindari konten meluap */
                }
            img {
                display: none; /* Sembunyikan gambar pada layar kecil */
            }
           .lokasi1, .lokasi2, .lokasi3, .lokasi4, .lokasi5, .lokasi6,
            .lokasi7, .lokasi8, .lokasi9, .lokasi10, .lokasi11,
            .lokasi12, .lokasi13, .lokasi14 {
                display: none; /* Sembunyikan elemen secara default */
            }
                
                .image-container {
                       top: -900px;
                       display: none;
                }
            }

        .text-overlay {
            position: absolute;
            font-family: "Gagalin", sans-serif;
            text-align: center;
        }

        .tanggal {
            margin-right: 10px;
            /* Beri sedikit jarak antara tanggal dan waktu Dzhuhur */
        }

        .waktu-dzhuhur {
            margin-left: 10px;
        }
/*Tema Khutbah*/
        .lokasi1 {
            top: <?=$verJudul?>;
            /* Koordinat Y untuk posisi vertikal */
            left: 50%;
            /* Posisi horizontal di tengah */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: white;
            font-size: <?=$font?>;
        }
/*Imam al-battar*/
        .lokasi2 {
            top: <?=$verIAB?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horIAB?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Muadzin al-battar*/
        .lokasi3 {
            top: <?=$verMAB?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMAB?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Imam al-fithrah*/
        .lokasi4 {
            top: <?=$verIAF?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horIAF?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Muadzin al-fithrah*/
        .lokasi5 {
            top: <?=$verMAF?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMAF?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Imam an-nuur*/
        .lokasi6 {
            top: <?=$verIAN?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horIAN?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Muadzin an-nuur*/
        .lokasi7 {
            top: <?=$verMAN?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMAN?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Imam Baiturrahman*/
        .lokasi8 {
            top: <?=$verIBR?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horIBR?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Muadzin Baiturrahman*/
        .lokasi9 {
            top: <?=$verMBR?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMBR?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Imam Al-Baasith*/
        .lokasi10 {
            top: <?=$verIBA?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horIBA?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }

        .lokasi11 {
            top: <?=$verMBA?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMBA?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Imam Al-Adiyat*/
        .lokasi12 {
            top: <?=$verIAA?>;
            /* Koordinat Y untuk posisi vertikal */
            left:<?=$horIAA?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Muadzin Al-Adiyat*/
        .lokasi13 {
            top: <?=$verMAA?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horMAA?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahuruf?>;
            font-size: <?=$font?>;
        }
/*Waktu Sholat*/
        .lokasi14 {
            top: <?=$verWS?>;
            /* Koordinat Y untuk posisi vertikal */
            left: <?=$horWS?>;
            /* Posisi horizontal di tengah antara 67px dan 223px */
            transform: translateX(-50%);
            /* Menggeser teks agar benar-benar di tengah */
            color: <?=$warnahurufws?>;
            font-size:  <?=$font?>;
        }
    </style>
</head>

<body>
    <div class="iframe-container">
        <iframe src="https://smkn1.dkm.web.id/jadwalkhotib.php" title="Jadwal Khotib"></iframe>
    </div>
    <div class="image-container" class="img-fluid">
        <img src="assets/images/<?=$gambar?>" alt="Gambar" id="myImage" />
        
        <div class="text-overlay lokasi1"><b><?=strtoupper($judul)?></b></div>
        <div class="text-overlay lokasi2"><b><?=strtoupper($imamAB)?></b></div>
        <div class="text-overlay lokasi3"><b><?=strtoupper($muadzinAB)?></b></div>
        <div class="text-overlay lokasi4"><b><?=strtoupper($imamAF)?></div>
        <div class="text-overlay lokasi5"><b><?=strtoupper($muadzinAF)?></b></div>
        <div class="text-overlay lokasi6"><b><?=strtoupper($imamAN)?></b></div>
        <div class="text-overlay lokasi7"><b><?=strtoupper($muadzinAN)?></b></div>
        <div class="text-overlay lokasi8"><b><?=strtoupper($imamBR)?></b></div>
        <div class="text-overlay lokasi9"><b><?=strtoupper($muadzinBR)?></b></div>
        <div class="text-overlay lokasi10"><b><?=strtoupper($imamBA)?></b></div>
        <div class="text-overlay lokasi11"><b><?=strtoupper($muadzinBA)?></b></div>
        <div class="text-overlay lokasi12"><b><?=strtoupper($imamAA)?></b></div>
        <div class="text-overlay lokasi13"><b><?=strtoupper($muadzinAA)?></b></div>
        <div class="text-overlay lokasi14">
        <b class="tanggal" id="nextFriday"></b>
            <b class="tanggal" id="waktu-dzhuhur"></b>
            <!-- <p id="waktu-dzhuhur">Waktu Sholat Jumat (Dzhuhur) : </p> -->
           
            

        </div>
    </div>

    <!-- <p id="coords">Koordinat: (X, Y)</p> -->

    <script>
        // Fungsi untuk menambahkan menit pada waktu
        function tambahMenit(waktu, menitTambah) {
            const [jam, menit] = waktu.split(':').map(Number);
            const waktuDzhuhur = new Date();
            waktuDzhuhur.setHours(jam, menit, 0, 0);
            waktuDzhuhur.setMinutes(waktuDzhuhur.getMinutes() + menitTambah);
            const jamBaru = waktuDzhuhur.getHours().toString().padStart(2, '0');
            const menitBaru = waktuDzhuhur.getMinutes().toString().padStart(2, '0');
            return `${jamBaru}:${menitBaru}`;
        }

        fetch('https://api.aladhan.com/v1/timingsByCity?city=Bandung&country=Indonesia&method=2')
    .then(response => {
        if (!response.ok) {
            throw new Error('Respons jaringan tidak baik: ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        const waktuDzhuhur = data.data.timings.Dhuhr;
        const waktuDzhuhurTambah = tambahMenit(waktuDzhuhur, 5);
        document.getElementById('waktu-dzhuhur').innerText = `Waktu Sholat Jumat (Dzhuhur) : ${waktuDzhuhurTambah} WIB`;
    })
    .catch(error => console.error('Kesalahan saat mengambil API:', error));

        const monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const today = new Date();
        const dayOfWeek = today.getDay(); // 0 = Minggu, 1 = Senin, ..., 5 = Jumat, 6 = Sabtu

        // Memformat tanggal menjadi contoh "21 Oktober 2024"
        function formatDateToIndonesian(date) {
            const day = date.getDate();
            const month = monthNames[date.getMonth()];
            const year = date.getFullYear();
            return `${day} ${month} ${year}`;
        }

        // Cek apakah hari ini adalah Jumat
        if (dayOfWeek === 5) {
            const formattedDateToday = formatDateToIndonesian(today);
            document.getElementById("nextFriday").innerHTML += formattedDateToday;
        } else {
            // Jika tidak, tetap tampilkan tanggal Jumat berikutnya
            const nextFriday = getNextFriday();
            const formattedDate = formatDateToIndonesian(nextFriday);
            document.getElementById("nextFriday").innerHTML += formattedDate;
        }

        // Mendapatkan tanggal hari Jumat berikutnya
        function getNextFriday() {
            const today = new Date();
            const dayOfWeek = today.getDay();
            const daysUntilFriday = (5 - dayOfWeek + 7) % 7;
            const nextFriday = new Date(today);
            nextFriday.setDate(today.getDate() + (daysUntilFriday === 0 ? 7 : daysUntilFriday));
            return nextFriday;
        }
        document.getElementById("myButton").addEventListener("click", function() {
            // alert("Tombol diklik!");
            window.location.href = 'https://smkn1.dkm.web.id/jadwalkhotib.php';
            // Tambahkan aksi lain di sini
        });
    </script>
    
     <script>
      document.getElementById("myImage").addEventListener("click", function (event) {
        var x = event.offsetX;
        var y = event.offsetY;
        // alert("Koordinat: (" + x + ", " + y + ")");
        // document.getElementById("coords").innerHTML = "Koordinat: (" + x + ", " + y + ")";
      });
    </script>

</body>

</html>

