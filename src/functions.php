<?php

function h($string)
{
    htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}