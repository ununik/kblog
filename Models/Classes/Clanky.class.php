<?php
class Clanky
{
    private $_countOfEntriesOnPage = 15;
    private $_pageNumber = 1;
    private $_pageCount = null;
    
    public function setPageNumber($new)
    {
        $this->_pageNumber = $new;
    }
    
    public function getPageNumber()
    {
        return $this->_pageNumber;
    }
    
    public function getEntries()
    {
        $result = Connection::connect()->prepare(
                "SELECT * FROM `clanky` WHERE `active`=1 AND `hidden`=0 ORDER BY `timestamp` DESC;"
                );
        $result->execute();
        $entreis = $result->fetchAll();
        $entreisArray = array();
        
        $firstEntry = $this->_countOfEntriesOnPage * ($this->_pageNumber - 1);
        $lastEntry = $firstEntry+$this->_countOfEntriesOnPage;
        if ($lastEntry > count($entreis)) {
            $lastEntry = count($entreis);
        }
        
        for ($firstEntry; $firstEntry < $lastEntry; $firstEntry++) {
            $entreisArray[] = $entreis[$firstEntry];
        }
        if(count($entreisArray) == 0) {
            $this->_pageNumber = 1;
            return $this->getEntries();
        }
        
        
        return $entreisArray;
    }
    public function getNumberOfPages()
    {
        if ($this->_pageCount == null) {
            $result = Connection::connect()->prepare(
                    "SELECT `id` FROM `clanky` WHERE `active`=1 AND `hidden`=0;"
                    );
            $result->execute();
            $entreis = $result->fetchAll();
            
            $this->_pageCount = ceil(count($entreis)/$this->_countOfEntriesOnPage);
        }
        
        return $this->_pageCount;
    }
    
    public function getEntryById($id)
    {
        $result = Connection::connect()->prepare(
                "SELECT * FROM `clanky` WHERE `id`=:id AND `active`=1 AND `hidden`=0;"
                );
        $result->execute(array(':id'=>$id));
        $entry = $result->fetch();
        
        return $entry;
    }
}