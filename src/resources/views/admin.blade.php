@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="confirm__contact">
    <div class="confirm__heading">
        <h2>Admin</h2>
    </div>
</div>
<?php
try {
    $pdo = new PDO(
        'mysql:host=MYSQL;dbname=laravel_db;charset=utf8',
        'root',
        'root'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $Exception) {
    die('接続エラー：' . $Exception->getMessage());
}
try {
    $sql = "SELECT * FROM laravel_db.contacts";
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
} catch (PDOException $Exception) {
    die('接続エラー：' . $Exception->getMessage());
}
?>
<table>
    <tbody>
        <tr>
            <th>ID</th>
            <th>苗字</th>
            <th>名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>問い合わせ内容の種類</th>
        </tr>
        <?php
        while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <th><?= htmlspecialchars($row['id']) ?></th>
                <th><?= htmlspecialchars($row['first_name']) ?></th>
                <th><?= htmlspecialchars($row['last_name']) ?></th>
                <th><?= htmlspecialchars($row['gender']) ?></th>
                <th><?= htmlspecialchars($row['email']) ?></th>
                <th><?= htmlspecialchars($row['content-type']) ?></th>
            </tr>
        <?php
        }
        $pdo = null;
        ?>
    </tbody>
</table>
@endsection