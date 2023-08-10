<?php
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <table width=500 align=center cellpaddin=0 cellspacing=0>
        <tr height=30>
            <td><b>Görüntüleme ve Hit Uygulaması</b></td>
            <td><a href="index.php" style="text-decoration: none; color: black;">Anasayfa</a></td>
        </tr>
        <tr height=30>
            <td colspan=2></td>
        </tr>
        <tr style="background-color: #990000; color: white;" height=30>
            <td><b>Makale Başlığı</b></td>
            <td>Gösterim Sayısı</td>
        </tr>
        <?php
        $Sorgu  =   $DB->prepare("SELECT * FROM makaleler");
        $Sorgu->execute();
        $KayitSayisi    =   $Sorgu->rowCount();
        $Kayitlar       =   $Sorgu->fetchAll(PDO::FETCH_ASSOC);
        
        if($KayitSayisi>0){
            foreach($Kayitlar as $Degerler){
            ?>
            <tr height=30>
            <td><a href="oku.php?id=<?php echo $Degerler["id"];?>" style="text-decoration: none; color: black;"><?php echo $Degerler["baslik"]; ?></a></td>
            <td><?php echo $Degerler["goruntuleme"]; ?></td>
            </tr>
            <?php
            }
        }
        ?>
    </table>
</body>
</html>
<?php
$DB =   null;
?>