<?php


namespace Uaction;


class config
{
    protected $spm;
    protected $a,$b,$c;

    public function getSpm()
    {
        return $this->spm;
    }

    public function setSpm($spm)
    {
        $this->spm = $spm;
    }

}