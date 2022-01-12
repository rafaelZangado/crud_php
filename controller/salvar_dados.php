<?php

    class Dados {

        function salvar_dados (){
            $salvar = $_POST;
            $formulario = [   
                [  
                    'nome' => '',
                    'fone' => '',
                    'cpf' => '',
                    'email' => '',
                    'cep' => '',
                    'rua' => '',
                    'bairro' => '',
                    'cidade' => '',
                    'estado' => '',
                    'complemento' => '',
                    
                ]
            ];
            $params = [
                $salvar['nome'],
                $salvar['fone'],
                $salvar['cpf'],
                $salvar['email'],
                $salvar['cep'],               
                $salvar['rua'],
                $salvar['bairro'],
                $salvar['cidade'],
                $salvar['estado'],
                $salvar['loja'],
                $salvar['idLogin'],
            ];
            print '<pre>';
            print_r($formulario);

            array_push($formulario, array(
               
            ));
           

        }

        function listar_dados(){

        }

        function editar_dados () {

        }

        function deletar_dados (){

        }
    }

    $Dados = new Dados();
    $dados = $Dados->salvar_dados();

    