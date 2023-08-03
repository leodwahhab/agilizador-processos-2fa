<?php
    namespace Leo\Automatizador\app;

    use Exception;

    class Texto{
        public function tratarTexto($modo, $texto){
            try{
                if($modo == 1){ //modo 1 => adicionar virgulas no fim de cada indice
                    return str_replace(PHP_EOL, ', ', $texto);
                }
            }
            catch(Exception $e){
                echo 'erro: '. $e;
            }
        }
    }
?>