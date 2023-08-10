<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    try{
        $DB =   new PDO('mysql:host=localhost;dbname=uskumru;charset=UTF8', "root", "");
    }catch(PDOException $Hata){
        echo "Bağlantı hatası sorunu :( <br /> Hata sebebi: " . $Hata->getMessage();
        die();
    }

    
    function Filtrele($Deger){
        $Bir    =   trim($Deger);
        $Iki    =   strip_tags($Bir);
        $Uc     =   htmlspecialchars($Iki, ENT_QUOTES);
        $Sonuc  =   $Uc;
        return $Sonuc;
    }

    ?>
</body>
</html>