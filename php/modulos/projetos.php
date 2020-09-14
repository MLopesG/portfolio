<?php

    function projetos(){
        return connect()->query('select * from projetos')->fetchAll();
    }