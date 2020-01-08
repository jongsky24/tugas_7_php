<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Bilangan</td>
        <td>Jenis</td>
    </tr>

    <?php foreach ($angka as $a) : ?>
        <tr>
            <td><?= $a; ?></td>
            <td>
                <?php if ($a % 2 == 0) : ?>
                    <?= "Bilangan Genap"; ?>
                <?php else : ?>
                    <?= "Bilangan Ganjil"; ?>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>