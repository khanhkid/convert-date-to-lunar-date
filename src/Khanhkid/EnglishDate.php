<?php

namespace Khanhkid\DateConvertor;

class EnglishDate
{
    public $EDay;
    public $EMonth;
    public $EYear;

    /**
     * Format $strDate Y-m-d
     */
    public function __construct($strDate = null)
    {
        if(is_null($strDate)){
            $this->EYear = date('Y');
            $this->EMonth = date('m');
            $this->EDay = date('d');
        } else {
            list($this->EYear, $this->EMonth, $this->EDay) = explode('-',$strDate);
        }
    }
    public function getDate()
    {
        return date_create($this->EYear.'-'.$this->EMonth.'-'.$this->EDay)->format('Y-m-d');
    }

    public function getLunarDate()
    {
        return LunarConverter::EnglishDateToLunarDate($this)->getDate();
    }
}