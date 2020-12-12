<?php

namespace Src\Classes;

class ClassRender
{

    #Propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir()
    {
        return $this->Dir;
    }
    public function setDir($Dir)
    {
        $this->Dir = $Dir;
    }
    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
    public function getKeywords()
    {
        return $this->Keywords;
    }
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
    }

    #Método responsável por renderizar todos o layout
    public function renderLayout()
    {
        include_once(DIRREQ . "app/view/Layout.php");
    }

    public function renderLayout2()
    {
        include_once(DIRREQ . "app/view/Layout2.php");
    }

    public function renderLayout3()
    {
        include_once(DIRREQ . "app/view/Layout3.php");
    }


    #Adiciona características específicas no head
    public function addHead()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/head.php")) {
            include(DIRREQ . "app/View/{$this->getDir()}/head.php");
        }
    }

    #Adiciona características específicas no header
    public function addHeader()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/header.php")) {
            include(DIRREQ . "app/View/{$this->getDir()}/header.php");
        }
    }

    #Adiciona características específicas no main
    public function addMain()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/main.php")) {
            include(DIRREQ . "app/View/{$this->getDir()}/main.php");
        }
    }

    #Adiciona características específicas no footer
    public function addFooter()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/footer.php")) {
            include(DIRREQ . "app/View/{$this->getDir()}/footer.php");
        }
    }
}
