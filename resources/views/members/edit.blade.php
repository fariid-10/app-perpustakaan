<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Edit Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar anggota</a></p>
    <p>Edit anggota belum dikerjakan pada pertemuan ini.</p>
    <p><strong>{{ $member['nama'] }}</strong> ({{ $member['nim'] }})</p>
</body>
</html>
