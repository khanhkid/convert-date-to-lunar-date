<?php

namespace Khanhkid\DateConvertor;

class LunarDate
{
    public $isleap;
    public $LDay;
    public $LMonth;
    public $LYear;

    /**
     * Format $strDate Y-m-d
     */
    public function __construct($strDate = null)
    {
        if(is_null($strDate)){
            $this->LYear = date('Y');
            $this->LMonth = date('m');
            $this->LDay = date('d');
        } else {
            list($this->LYear, $this->LMonth, $this->LDay) = explode('-',$strDate);
        }
    }

    public function getDate()
    {
        return date_create($this->LYear.'-'.$this->LMonth.'-'.$this->LDay)->format('Y-m-d');
    }
}