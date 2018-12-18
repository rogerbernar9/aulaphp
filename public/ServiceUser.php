<?php

class ServiceUser
{
    private $db;
    private $user;

    function __construct(Mysqli $mysqli, User $user)
    {

        $this->db = $mysqli;
        $this->user = $user;
    }

    public function find($id)  {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("select * from {$this->user->getTable()} where id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$email);
        $stmt->fetch();

        return array("id"=>$id,"nome"=>$nome, "email"=>$email);
    }

    public function list()  {
        $sql = "select u.id, u.nome, u.email from usuario u order by u.nome asc";
        $query = $this->db->query($sql);
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function insert()    {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("insert into usuario(nome, email) values(?,?)");
        $name = $this->user->getNome();
        $email = $this->user->getEmail();
        
        $stmt->bind_param("ss",$name, $email);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function update()    {
        $stmt = $this->db->stmt_init();
        $name = $this->user->getNome();
        $email = $this->user->getEmail();
        $id = $this->user->getId();
        $stmt->prepare("update usuario set nome = ?, email=? where id=?");
        $stmt->bind_param("ssi", $name, $email, $id);

        return $stmt->execute();
    }

    public function delete($id)    {
        $stmt = $this->db->stmt_init();
        $stmt->prepare("delete from usuario where id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();

    }

}