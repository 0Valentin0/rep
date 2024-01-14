<?php include('session.php');

if (!$is_admin) {
    header('Location: index.php');
    exit; 
}

$sql = "SELECT id, name, seatingcapacity, specialoccasion, additionalnotes, created_at FROM tablebook ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$count = 1; 
mysqli_free_result($result);
mysqli_close($conn);

include("includes/components/header.php");
?>

<section>
    <div class="wrapper contact">
        <h2 class="title">Список бронирования</h2>
        <table class="contact-table" border="1" style="margin-left: auto; margin-right: auto;">
            <thead>
                <tr>
                    <th rowspan="2">Номер стола</th>
                    <th rowspan="2">Имя</th>
                    <th rowspan="2">Предпочтение по сиденью</th>
                    <th rowspan="2">Особый случай</th>
                    <th rowspan="2">Примечания</th>
                    <th rowspan="2">Время</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $row) { ?>
                    <?php 
                        echo "<tr><td>". $count++ . "</td>";
                        echo "<td>". $row['name'] . "</td>";
                        echo "<td>". $row['seatingcapacity'] . "</td>";
                        echo "<td>". $row['specialoccasion'] . "</td>";
                        echo "<td>". $row['additionalnotes'] . "</td>";
                        echo "<td>". $row['created_at'] . "</td></tr>";
                    ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include("includes/components/footer.php");?>
