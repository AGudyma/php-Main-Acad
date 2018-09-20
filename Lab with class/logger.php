<?php
include_once 'Log.php';
$logEntry = new Log('Default entry ');
$logEntry->saveToLog();

Log::showLastEntry(3);