<?php
namespace Perspective\Thema17ChangeDbScripts\Model;

class PrefName extends \Perspective\DbScripts\Model\Post
{   /**
    * We are expanding the \Perspective\DbScripts\Model\Post file
    */
    public function prefName()
    {   
        return "magento2_".$this->getName();
    }

    public function shortUrl()
    {
        $shortUrl = (strlen($this->getUrlKey()) > 30) ? 
        substr($this->getUrlKey(),0,30) . substr($this->getUrlKey(),45,6) : $this->getUrlKey();
        return $shortUrl;
    }
}
