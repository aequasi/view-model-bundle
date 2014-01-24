<?php

namespace Aequasi\Bundle\ViewModelBundle\View\Model;

class ViewModel extends AbstractViewModel 
{
    public function buildView(array $data)
    {
        return $data;
    }

    public function getHeaders()
    {
        return array(
            'Content-type' => 'text/html'
        );
    }
}
