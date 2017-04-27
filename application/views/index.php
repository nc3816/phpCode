

<?php
        // echo 'test';
        echo $title;
        
        echo "<table>";
        foreach($list as $key=>$value) {
            echo "<tr>";
            echo "<td>{$value['id']}</td>";
            echo "<td>{$value['name']}</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

    <table border="1">
        <tr>
            <td>编号</td>
            <td>姓名</td>
            <td>邮箱</td>
        </tr>
        <?php foreach($list as $item):?>
        <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['email']?></td>
        </tr>
        <?php endforeach;?>
    </table>

</body>
</html>



