<h2>Data Imam dan Khotib</h2>
<a href="/imam-khotib/create">Tambah Imam/Khotib</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Peran</th>
        <th>Kontak</th>
    </tr>
    <?php foreach ($imam_khotib as $ik): ?>
        <tr>
            <td><?= esc($ik['nama']) ?></td>
            <td><?= esc($ik['peran']) ?></td>
            <td><?= esc($ik['kontak']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
