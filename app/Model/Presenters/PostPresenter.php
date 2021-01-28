<?php

namespace App\Model\Presenters;

trait PostPresenter
{
    public function displayTimePost()
    {
        $time = $this->created_at;
        $year = $time->parse()->year;
        $month = $time->parse()->month;
        $day = $time->parse()->day;

        return "Ngày $day tháng $month năm $year lúc " . $time->format('H:i');
    }
}
