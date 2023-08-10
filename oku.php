<?php
require_once("baglan.php");
$GelenID    =   Filtrele($_GET["id"]);
$GoruntulemeSayisi  =   $DB->prepare("UPDATE makaleler SET goruntuleme=goruntuleme+1 WHERE id=" . $GelenID);
$GoruntulemeSayisi->execute();
?>

<table width="500" align="center" cellpadding="0" cellspacing="0">
    <tr height="30">
        <td><b>Görüntüleme ve Hit Uygulaması</b></td>
        <td><a href="index.php" style="text-decoration: none; color: black;">Anasayfa</a></td>
    </tr>
    <tr height="30">
        <td colspan="2"></td>
    </tr>
    <?php
    $Oku = $DB->prepare("SELECT * FROM makaleler WHERE id=" . $GelenID);
    $Oku->execute();
    $KayitSayisi = $Oku->rowCount();
    if ($KayitSayisi > 0) {
        $Kayit = $Oku->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr height="30">
            <td><?php echo $Kayit["baslik"]; ?></td>
        </tr>
        <tr height="30">
            <td><?php echo $Kayit["icerik"]; ?></td>
        </tr>
        <tr height="30">
            <td style="text-align: center;">Bu makale <?php echo $Kayit["goruntuleme"]; ?> kez görüntülendi.</td>
        </tr>
        <?php
    } else {
        header("Location: index.php");
        exit();
    }
    ?>
</table>

