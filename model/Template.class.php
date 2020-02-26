<?php
//Configurações de instancia pasta de cache e diretórios padrão
class Template extends Smarty
{
    public function __construct()
    {
        parent::__construct();  
        $this->setTemplateDir('view');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');
    }

}
