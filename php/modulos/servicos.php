<?php

    function servicos(){
        return connect()->query("select * from servicos")->fetchAll();
    };

    function getServivo($id){
        $get = connect()->prepare("select * from servicos where id = :id");
        $get->bindValue(":id", $id);

        return connect()->query("select * from servicos where id = ?")->bindParam(1, $id, PDO::PARAM_INT)->fetchAll();
    };

    function deleteServico($id){
        $delete = connect()->prepare("delete from servicos where id = :id");
        $delete->bindValue(":id", $id);
    
        if($delete->execute()){
            $_SESSION['mensagem'] = "Serviço excluido com sucesso!";
        }else{
            $_SESSION['mensagem'] = "Não foi possivel excluir serviço!";
        }

        header("Location: ../admin.php");
    };

    function editServivo($id){
        
        $servico = connect()->query("select * from servicos where id = ?")->bindParam(1, $id, PDO::PARAM_INT)->fetchAll();

        if(empty($servico)){
            $_SESSION["mensagem"] = "Serviço não foi encontrado!";
        }else{
            $sobre = filter_input(INPUT_POST, 'sobre', FILTER_SANITIZE_SPECIAL_CHARS);
            $icon = filter_input(INPUT_POST, 'icon', FILTER_SANITIZE_SPECIAL_CHARS);

            $sql = "update servicos set sobre = :sobre, icon = :icon where id = :id";
            $sth = connect()->prepare($sql);
            $sth->bindValue(':sobre', $sobre);
            $sth->bindValue(':icon', $icon);
            $sth->bindValue(':id', $id);
            
            if($sth->execute()){
                 $_SESSION["mensagem"] = "Serviço foi alterado com sucesso!";
            }else{
                 $_SESSION["mensagem"] = "Não foi possivel editar serviço!";
            }
        }
    };

    function saveServivo(){
        $sobre = filter_input(INPUT_POST, 'sobre', FILTER_SANITIZE_SPECIAL_CHARS);
        $icon = filter_input(INPUT_POST, 'icon', FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($sobre) || empty($icon)){
            $_SESSION["mensagem"] = "Verifique todos os campos, todos precisam estar preenchido!";
            return;
        }

        $sql = "update servicos set sobre = :sobre, icon = :icon where id = :id";
        $sth = connect()->prepare($sql);
        $sth->bindValue(':sobre', $sobre);
        $sth->bindValue(':icon', $icon);
        $sth->bindValue(':id', $id);
        
        if($sth->execute()){
            $_SESSION["mensagem"] = "Serviço foi salvo com sucesso!";
        }else{
            $_SESSION["mensagem"] = "Não foi possivel salvar serviço!";
        }
    };

    function getServicosFunction($query, $id = null)
    {
        /**
         * 's' => Salvar serviço
         * 'e' => Editar serviço
         * 'd' => Deletar serviço
         * 'g' => Selecionar serviço
         */
        switch($query){
            case 's':
                saveServivo();
                break;
            case 'e':
                editServivo($id);
                break;
            case 'd':
                deleteServico($id);
                break;
            case 'g':
                getServivo($id);
                break;
        }
    }