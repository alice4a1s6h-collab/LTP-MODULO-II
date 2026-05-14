<?php
    class Usuario {
        //Definimos a tipagem para garantir que o objeto seja um PDO
        private PDO $conn;

        /**
         * Injeção de Dependência da conexão PDO
         * @param PDO $pdo
         */

         public function __construct(PDO $pdo) {
            $this->conn = $pdo;
         }

         /**
          * Cadastra um novo usuário com segurança (Password Hashing)
          * @return bool
          */
          public function cadastrar(string $nome, string $login, string $senha, string $perfil):bool
            try {
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                $sql = "INSERT INTO tbl_usuario(nome, login, senha, perfil) VALUES(:nome, :login, :senha, :perfil)";
                $stmt = $this->conn->prepare($sql);
            }

                return $stmt->execute([
                    ':nome' => $nome,
                    ':login' => $login,
                    ':senha' => $senhaHash,
                    ':perfil' => $perfil
                ]);
    }
?>