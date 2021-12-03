<script>
    function save(id) {
        let price = document.getElementById("price_"+id).value;
        location.href = "server.php?action=edit&id="+id+"&price="+price;
    }
</script>

<?php

include "../config.php";

$sql = "select * from goods";
$res = mysqli_query($connect, $sql);

if ($_GET['title']):?>
    <h1>Стоимость автомобиля <?=$_GET['title']?> успешно обновлена</h1>
<?php endif; ?>

<table style="text-align: center;margin: 0 auto;width:700px" border="1">
    <tr>
        <th>Фото товара</th>
        <th>Название</th>
        <th>Стоимость</th>
        <th>Действие</th>
    </tr>
    <?php
        while($data = mysqli_fetch_assoc($res)):?>
            <tr>
                <td>
                    <img src="../images/small/<?= $data['img']?>" alt="">
                </td>
                <td>
                    <?= $data['title']?>
                </td>
                <td>
                    <input id="price_<?= $data['id']?>" type="text" value="<?= $data['price']?>"><br>
                    <button onclick="save(<?= $data['id']?>)">Save</button>
                </td>
                <td>
                    <a href="server.php?action=delete&id=<?=$data['id']?>"><button>Удалить товар</button></a>
                </td>
            </tr>
    <?php endwhile; ?>
</table>

