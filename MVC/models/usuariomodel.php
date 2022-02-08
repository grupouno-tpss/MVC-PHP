<?php
    class usuarioModel extends Model{
        public function __construct()
        {
            parent::__construct();
        }

        public function insertar () {
            echo "Hey, el modelo de usuario esta presente jsjs";

            mysqli_query($this->db, "INSERT INTO `usuarios`(`id`, `nombre`) VALUES (1,'Jhojann')");
        }
    }
?>