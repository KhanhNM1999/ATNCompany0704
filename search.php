<?php
require_once'./database.php';
?>
        <?php
        if (isset( $_GET["search"] ) != '') {
            $search = $_GET['search'];
            $sql = "SELECT * FROM product WHERE (productname like '%$search%') OR (price like '%$search%') ";
            $row = pg_query($sql);
            $num = (pg_num_rows($rows));
            if ($num > 0) {
                echo $num." Result search : <b>".$search."</b>";
                echo '<table border="1" cellspacing="0" cellpadding="10">';
                foreach( $row as $num ) {
                    echo '<tr>';
                        echo "<td>{$row['productname']}</td>";
                        echo "<td>{$row['price']}</td>";
                    echo '</tr>';
                }
                echo '</table>';
            } 
            else {
                echo "Khong tim thay ket qua!";
            }
        }
        ?>