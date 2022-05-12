<?php

function getFormattedDate(string $date, string $format = 'd-m-y') {
    return date_format(date_create($date), $format);
}