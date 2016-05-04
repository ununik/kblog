<?php
class HTML
{
    private $_content = '';
    public $getPage = 'home';
    private $_title = '';
    private $_menu = array();
    
    public function addToMenu($new)
    {
        $this->_menu[] = $new;
    }
    public function getMenu()
    {
        return $this->_menu;    
    }
    
    public function setGET_PAGE($new)
    {
        $this->getPage = $new;
    }
    
    public function setTitle($new)
    {
        $this->_title = $new;
    }
    public function getTitle()
    {
        return $this->_title;
    }
    
    public function addToContent($new)
    {
        $this->_content .= $new;
    }
    public function getContent()
    {
        return $this->_content;
    }
}