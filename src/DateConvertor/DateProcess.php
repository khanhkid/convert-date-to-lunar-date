<?php

namespace Khanhkid\DateConvertor;

class DateProcess
{
    public $strDate;
    /**
     * Format $strDate Y-m-d
     */
    public function __construct($strDate = null)
    {
        if(is_null($strDate)){
            $this->strDate = date('Y-m-d');
        } else {
            $this->strDate = $strDate;
        }
    }

    public function getLunarDate()
    {
        $date = new EnglishDate($this->strDate);
        return LunarConverter::EnglishDateToLunarDate($date)->getDate();
    }
    
    public function getEnglishDate()
    {
        $date = new LunarDate($this->strDate);
        return LunarConverter::LunarDateToEnglishDate($date)->getDate();
    }

}