<?php 
 class Curso extends Conectar{
    public function insert_curso($CategoriaID,$Titulo,$Descripcion,$Fecha_Ini,$Fecha_Fin,$InstructorID){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call Insertar_cursos(?,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $CategoriaID);
        $sql->bindValue(2, $Titulo);
        $sql->bindValue(3, $Descripcion);
        $sql->bindValue(4, $Fecha_Ini);
        $sql->bindValue(5, $Fecha_Fin);
        $sql->bindValue(6, $InstructorID);
        $sql->execute();
        return $sql->fetchAll();
    }
    public function update_curso($cur_id,$cat_id,$titulo,$descrip,$fechini,$fechfin,$ins_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call actualizar_cursos(?,?,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->bindValue(2,$titulo);
        $sql->bindValue(3,$descrip);
        $sql->bindValue(4,$fechini);
        $sql->bindValue(5,$fechfin);
        $sql->bindValue(6,$ins_id);
        $sql->bindValue(7,$cur_id);
        $sql->execute();
        return $sql->fetchAll();
    }
    public function delete_curso($CursoID){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE curso
              SET  Estado = 0
              Where  CursoID = ?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$CursoID);
            $sql->execute();
            return $sql->fetchAll();
    }
    public function get_curso(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="CALL listarCursos();";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();

    }
    public function get_curso_id($CursoID){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM curso Where Estado = 1 and CursoID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$CursoID);
            $sql->execute();
            return $sql->fetchAll();
    }
 }
?>