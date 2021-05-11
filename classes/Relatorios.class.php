<?php
include("classes/Receitas.class.php");
include("classes/Despesas.class.php");
    class Relatorio extends DB{
        private $id_receita;
        private $id_despesa;
        private $id_cliente;
        private $receita;
        private $despesa;
        private $valor;
        private $data;

        public function __construct($id_receita=false){
            if($id_receita){
                $sql = "SELECT * FROM receitas WHERE id_cliente =  :id_cliente";
                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();

                foreach($stmt as $registro){
                    $this->setIdReceita($registro['id_receita']);
                    $this->setIdCliente($registro['id_cliente']);
                    $this->setReceita($registro['receita']);
                    $this->setValor($registro['valor']);
                    $this->setData($registro['data']);
                }
            }
        }

        public function setIdDespesa($id_despesa){
            $this->id_despesa = $id_despesa;
        }
        public function setDespesa($despesa){
            $this->despesa = $despesa;
        }
        public function setIdReceita($id_receita){
            $this->id_receita = $id_receita;
        }
        public function setReceita($receita){
            $this->receita = $receita;
        }

        public function setIdCliente($id_cliente){
            $this->id_cliente = $id_cliente;
        }
        
        public function setValor($valor){
            $this->valor = $valor;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getIdReceita(){
            return $this->id_receita;
        }

        public function getReceita(){
            return $this->receita;
        }

        public function getIdDespesa(){
            return $this->id_despesa;
        }

        public function getDespesa(){
            return $this->despesa;
        }

        public function getIdCliente(){
            return $this->id_cliente;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getData(){
            return $this->data;
        }

        public static function selecionarReceitas($id_cliente){
            $data_ini = date('Y-m') . '-01';
            $data_end = date('Y-m') . '-31';
            
            $sql = "SELECT * FROM receitas WHERE data BETWEEN '$data_ini' AND '$data_end' ORDER BY data DESC";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC);

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Receita();
                    $objTemporario->setIdReceita($registro['id_receita']);
                    $objTemporario->setIdCliente($registro['id_cliente']);
                    $objTemporario->setReceita($registro['receita']);
                    $objTemporario->setValor($registro['valor']);
                    $objTemporario->setData($registro['data']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public static function selecionarDespesa($id_cliente){
            $data_ini = date('Y-m') . '-01';
            $data_end = date('Y-m') . '-31';
            
            $sql = "SELECT * FROM despesas WHERE data BETWEEN '$data_ini' AND '$data_end' ORDER BY data DESC";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC);

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Despesa();
                    $objTemporario->setIdDespesa($registro['id_despesa']);
                    $objTemporario->setIdCliente($registro['id_cliente']);
                    $objTemporario->setDespesa($registro['despesa']);
                    $objTemporario->setValor($registro['valor']);
                    $objTemporario->setData($registro['data']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }
        
        public static function listar(){
            $sql = "SELECT * FROM receitas";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Receita();
                    $objTemporario->setIdReceita($registro['id_receita']);
                    $objTemporario->setIdCliente($registro['id_cliente']);
                    $objTemporario->setReceita($registro['receita']);
                    $objTemporario->setValor($registro['valor']);
                    $objTemporario->setData($registro['data']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public function adicionar(){
            try{
                
                $sql = "INSERT INTO receitas (id_cliente, receita, valor, data)
                VALUES (:id_cliente, :receita, :valor, :data)";

                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':id_cliente', $this->id_cliente);
                $stmt->bindParam(':receita', $this->receita );
                $stmt->bindParam(':valor', $this->valor);
                $stmt->bindParam(':data', $this->data);
                $stmt->execute();

            }catch(PDOException $e){
                echo "ERRO AO ADICIONAR: ".$e->getMessage();
            }
        }

        public function atualizar(){
            if($this->id_receita){
                try{
                    $sql = "UPDATE receitas SET
                            receita = :receita,
                            valor = :valor,
                            data = :data
                            WHERE id_receita = :id_receita";
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':receita', $this->receita);
                    $stmt->bindParam(':valor', $this->valor);
                    $stmt->bindParam(':data', $this->data);
                    $stmt->bindParam(':id_receita', $this->id_receita);
                    $stmt->execute();
                    
                }catch(PDOExcetion $e){
                    echo "ERRO AO ATUALIZAR: ".$e->getMessage();
                } 
            }            
        }

        public function excluir(){
            if($this->id_receita){
                try{
                    $sql = "DELETE FROM receitas WHERE id_receita = :id_receita";

                    $stmt = DB::Conexao()->prepare($sql);
                    $stmt->bindParam(":id_receita", $this->id_receita);
                    $stmt->execute();

                }catch(PDOExcetion $e){
                    echo "ERRO AO EXCLUIR: ".$e->getMessage();
                } 
            }
        }
        
    }
?>
