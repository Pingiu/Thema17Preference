<?php
namespace Perspective\Thema17ChangeDbWareHouse\Model;

class ProductPrice extends \Perspective\DbWareHouse\Model\Post
{   /**
    * We are expanding the \Perspective\DbWareHouse\Model\Post file
    */
    public function getProdsPrice()
    {   
        return $this->productRepository->getById($this->getIdProd()-1)->getPrice();
    }
}
