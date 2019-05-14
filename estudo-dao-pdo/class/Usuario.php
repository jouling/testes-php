<?php

class Usuario{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->$idusuario;
    }

    public function setIdusuario($value){
        $this->$idusuario = $value;
    }

    public function getDeslogin(){
        return $this->$deslogin;
    }

    public function setDeslogin($value){
        $this->$deslogin = $value;
    }

    public function getDessenha(){
        return $this->$dessenha;
    }

    public function setDessenha($value){
        $this->$dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->$dtcadastro;
    }

    public function setDtcadastro($value){
        $this->$dtcadastro = $value;
    }

    //traz somente um usuário, não todos
    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0){
            //se há pelo menos um item dentro da tabela
            $this->setData($results[0]);
        }
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s");
        ))
    }

    //traz todos os usuários de uma tabela numa lista
    public static function getList(){
        $sql = new Sql();
        $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    //traz os usuário que são procurados pelo login
    public static function search($login){
        $sql = new Sql();
        $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE ? ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"; 
        ))
    }

    //obter os dados autenticados
    public function login($login, $password){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(count($results) > 0){
            //se há pelo menos um item dentro da tabela 
            $this->setData($results[0]);
 
        } else {
            throw new Exception("login e/ou senha inválidos");
        }
    }

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']);
    }

    //inserir dados no banco
    public function insert(){
        $sql = new Sql();
        //quando a procedure executar, retornará qual o id gerado
        //criar procedure
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin();
            ':PASSWORD'=>$this->getDessenha();
        ));

        if (count($results) > 0){
            $this->setData($results[0]);
        }
    }

    //atualizar dados no banco
    public function update($login, $password){
        $sql = new Sql();

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario();
        ));
    }

    //deletar
    public function delete(){
        $sql = new Sql();

        $sql -> query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario();
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    //o = "" é pq se chamar, preenche com os dados, se não, preenche com vazio
    public function __construct($login = "", $password = ""){
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

}

?>
