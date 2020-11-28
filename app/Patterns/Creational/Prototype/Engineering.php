<?php namespace App\Patterns\Creational\Prototype;

class Engineering extends IAcmePrototype
{
    const UNIT = "Engineering";
    private $development = "programming";
    private $design = "digital artwork";
    private $sysAd = "system administration";

    public function setDept(int $orgCode)
    {
        switch($orgCode)
        {
            case 301:
            $this->dept = $this->development;
            break;

            case 302:
            $this->dept = $this->design;
            break;

            case 303:
            $this->dept = $this->sysAd;
            break;

            default:
            $this->dept = "Unrecognized Engineering";
        }
    }

    public function getDept() : string
    {
        return $this->dept;
    }

    public function __clone(){}
}