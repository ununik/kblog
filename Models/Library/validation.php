<?php
namespace Validation;

function checkMailFormat($mail)
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}