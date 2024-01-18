<form action="" method="post">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
    <select name="bulan" id="bulan">
        <?php
        $bulanArray=[
            '01' => "january",
            '02' => "february",
            '03' => "march",
            '04' => "april",
            '05' => "may",
            '06' => "june",
            '07' => "july",
            '08' => "august",
            '09' => "september",
            '10' => "october",
            '11' => "november",
            '12' => "december"
        ];
        foreach ($bulanArray as $kodeBulan => $namaBulan) {
            echo "<option value='$namaBulan' >$kodeBulan</option>";
        }
        ?>
    </select>
    <input type="number" name="tahun" id="" placeholder="masukkan tahun anda">
    <input type="submit" name="tombol" value="kirim">

</form>

 <?php

    $bulan=$_POST["bulan"];
    $tahun=$_POST["tahun"];
    $isi=$_POST["tanggal"];

    if($isi != "" && $bulan != "" && $tahun !=""){
        echo '<h2>'."tanggal lahir anda: ".$isi." - ".$bulan." - ".$tahun.'</h2>';
    } else {
        echo '<h2>'."Data belum terisi".'</h2>';
    }
    function cari($isi,$bulan){

        if(($bulan == "january" && $isi >= 20) || ($bulan == "february" && $isi <= 18)){
            return "Aquarius";
        } elseif (($bulan == "february" && $isi >= 19) || ($bulan == "march" && $isi <= 20)) {
            return "Pisces";
        } elseif (($bulan == "march" && $isi >= 21) || ($bulan == "april" && $isi <= 19)) {
            return "Aries"; 
        } elseif (($bulan == "april" && $isi >= 20) || ($bulan == "may" && $isi <= 20)) {
            return "Taurus";
        } elseif (($bulan == "may" && $isi >= 21) || ($bulan == "june" && $isi <= 20)) {
            return "Gemini";
        } elseif (($bulan == "june" && $isi >= 21) || ($bulan == "july" && $isi <= 22)) {
            return "Cancer";
        } elseif (($bulan == "july" && $isi >= 23) || ($bulan == "august" && $isi <= 22)) {
            return "Leo";
        } elseif (($bulan == "august" && $isi >= 23) || ($bulan == "september" && $isi <= 22)) {
            return "Virgo";
        } elseif (($bulan == "september" && $isi >= 23) || ($bulan == "october" && $isi <= 22)) {
            return "Libra";
        } elseif (($bulan == "october" && $isi >= 23) || ($bulan == "november" && $isi <= 21)) {
            return "Scorpio";
        } elseif (($bulan == "november" && $isi >= 22) || ($bulan == "december" && $isi <= 21)) {
            return "Sagitarius";
        } elseif (($bulan == "december" && $isi >= 22) || ($bulan == "january" && $isi <= 19)) {
            return "Capricorn";
        } else{
            return"Tanggal atau bulan tidak valid";
        }
    }

    $zodiac= cari ($isi,$bulan);
         echo "zodiac anda adalah : " .$zodiac;
?>