<?= $this->extend('layout') ?>
<?= $this->section('content') ?>



<h2>Jadwal Imam dan Khotib</h2>
<a href="/jadwal/create">Tambah Jadwal</a>
<table>
    <tr>
        <th>Tanggal</th>
        <th>Imam</th>
        <th>Khotib</th>
    </tr>
    <?php foreach ($jadwal as $j): ?>
        <tr>
            <td><?= esc($j['tanggal']) ?></td>
            <td><?= esc($j['imam_nama']) ?></td>
            <td><?= esc($j['khotib_nama']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>



<?= $this->endSection() ?>

