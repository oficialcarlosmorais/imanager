<?php
include ("classes/DB.class.php");
    class Cliente extends DB{
        private $id;
        private $nome;
        private $sobrenome;
        private $endereco;
        private $bairro;
        private $cidade;
        private $estado;
        private $pais;
        private $nasc;
        private $tipo;
        private $email;
        private $senha;
        private $telefone;
        private $data_cad;
        private $admin;
        private $doc;

        public function __construct($id=false){
            if($id){
                $sql = "SELECT * FROM usuario WHERE id =  :id";
                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();

                foreach($stmt as $registro){
                    $this->setId($registro['id']);
                    $this->setNome($registro['nome']);
                    $this->setEmail($registro['email']);
                    $this->setTelefone($registro['telefone']);
                    $this->setDataCad($registro['data_cad']);
                    $this->setTipo($registro['tipo']);
                    $this->setAdmin($registro['admin']);
                    $this->setDoc($registro['doc']);
                }
            }
        }


        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function setNasc($nasc){
            $this->nasc = $nasc;
        }

        public function setDoc($doc){
            $this->doc = $doc;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function setPais($pais){
            $this->pais = $pais;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function setDataCad($data_cad){
            $this->data_cad = $data_cad;
        }
 
        public function setAdmin($admin){
            $this->admin = $admin;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function getNasc(){
            return $this->nasc;
        }

        public function getDoc(){
            return $this->doc;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function getBairro(){
            return $this->bairro;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getPais(){
            return $this->pais;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getDataCad(){
            return $this->data_cad;
        }

        public function getAdmin(){
            return $this->admin;
        }

        public static function selecionar($id){
            $sql = "SELECT * FROM usuario WHERE id=" . $id;
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Cliente();
                    $objTemporario->setId($registro['id']);
                    $objTemporario->setNome($registro['nome']);
                    $objTemporario->setSobrenome($registro['sobrenome']);
                    $objTemporario->setNasc($registro['nasc']);
                    $objTemporario->setDoc($registro['doc']);
                    $objTemporario->setEmail($registro['email']);
                    $objTemporario->setSenha($registro['senha']);
                    $objTemporario->setEndereco($registro['endereco']);
                    $objTemporario->setBairro($registro['bairro']);
                    $objTemporario->setCidade($registro['cidade']);
                    $objTemporario->setEstado($registro['estado']);
                    $objTemporario->setPais($registro['pais']);
                    $objTemporario->setTelefone($registro['telefone']);
                    $objTemporario->setTipo($registro['tipo']);
                    $objTemporario->setDataCad($registro['data_cad']);
                    $objTemporario->setAdmin($registro['admin']);
                    
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public static function login($email, $senha){
            $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Cliente();
                    $objTemporario->setId($registro['id']);
                    $objTemporario->setNome($registro['nome']);
                    $objTemporario->setEmail($registro['email']);
                    $objTemporario->setTelefone($registro['telefone']);
                    $objTemporario->setDataCad($registro['data_cad']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public static function listar(){
            $sql = "SELECT * FROM usuario";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Cliente();
                    $objTemporario->setId($registro['id']);
                    $objTemporario->setNome($registro['nome']);
                    $objTemporario->setEmail($registro['email']);
                    $objTemporario->setTelefone($registro['telefone']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public function adicionar(){
            try{
                
                $sql = "INSERT INTO usuario (nome, sobrenome, nasc, doc, email, senha, endereco, bairro, cidade, estado, pais, telefone, tipo, data_cad, admin) VALUES (:nome, :sobrenome, :nasc, :doc, :email, :senha, :endereco, :bairro, :cidade, :estado, :pais, :telefone, :tipo, :data_cad, :admin)";

                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':sobrenome', $this->sobrenome);
                $stmt->bindParam(':nasc', $this->nasc);
                $stmt->bindParam(':doc', $this->doc);
                $stmt->bindParam(':email', $this->email );
                $stmt->bindParam(':senha', $this->senha);
                $stmt->bindParam(':endereco', $this->endereco);
                $stmt->bindParam(':bairro', $this->bairro);
                $stmt->bindParam(':cidade', $this->cidade);
                $stmt->bindParam(':estado', $this->estado);
                $stmt->bindParam(':pais', $this->pais);
                $stmt->bindParam(':telefone', $this->telefone);
                $stmt->bindParam(':tipo', $this->tipo);
                $stmt->bindParam(':data_cad', $this->data_cad);
                $stmt->bindParam(':admin', $this->admin);
                $stmt->execute();

            }catch(PDOException $e){
                echo "ERRO AO ADICIONAR: ".$e->getMessage();
            }
        }

        public function atualizar(){
            if($this->id){
                try{
                    $sql = "UPDATE usuario SET
                        nome = :nome,
                        sobrenome = :sobrenome,
                        doc = :doc,
                        nasc = :nasc,
                        email = :email,
                        senha = :senha,
                        telefone = :telefone,
                        endereco = :endereco,
                        bairro = :bairro,
                        cidade = :cidade,
                        estado = :estado,
                        pais = :pais
                        WHERE id = :id";
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':nome', $this->nome);
                    $stmt->bindParam(':sobrenome', $this->sobrenome);
                    $stmt->bindParam(':doc', $this->doc);
                    $stmt->bindParam(':nasc', $this->nasc);
                    $stmt->bindParam(':email', $this->email);
                    $stmt->bindParam(':senha', $this->senha);
                    $stmt->bindParam(':telefone', $this->telefone);
                    $stmt->bindParam(':endereco', $this->endereco);
                    $stmt->bindParam(':bairro', $this->bairro);
                    $stmt->bindParam(':cidade', $this->cidade);
                    $stmt->bindParam(':estado', $this->estado);
                    $stmt->bindParam(':pais', $this->pais);
                    $stmt->bindParam(':id', $this->id);
                    $stmt->execute();
                    
                }catch(PDOExcetion $e){
                    echo "ERRO AO ATUALIZAR: ".$e->getMessage();
                } 
            }            
        }

        public function excluir(){
            if($this->id){
                try{
                    $sql = "DELETE FROM usuario WHERE id = :id";

                    $stmt = DB::Conexao()->prepare($sql);
                    $stmt->bindParam(":id", $this->id);
                    $stmt->execute();

                }catch(PDOExcetion $e){
                    echo "ERRO AO EXCLUIR: ".$e->getMessage();
                } 
            }
        }
        
    }
?>
