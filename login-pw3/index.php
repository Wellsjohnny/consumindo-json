    <?php
        include_once "config.php";
        include_once DBAPI;
        $conn = open_database();
        header('Content-type: application/json');

        $table = "sistema_usuarios";
        $sql = "SELECT * FROM " . $table;
        $result = $conn->query($sql);


        $usuarios = array();
        if($result->num_rows > 0) {
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
        }

        //echo json_encode($usuarios);
        echo json_encode(array('usuarios' => $usuarios));

        ?>
