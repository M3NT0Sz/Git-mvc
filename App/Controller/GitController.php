<?php
    namespace App\Controller;

    use App\Model\GitModel;

    class GitController{
        public function iniciar(){
            $gitmodel = new GitModel();
            return $gitmodel->dados();
        }

        public function conta(){
            return 2+3;
        }
    }
?>