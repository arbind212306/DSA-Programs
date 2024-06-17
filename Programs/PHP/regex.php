<?php
// 1. Create a regex that finds dates in the format MM/DD/YY or MM/DD/YYYY and returns just the year part.
$pattern1 = '/^\d{2}\/\d{2}\/(\d{4}|\d{2})$/';
$date1 = "03/02/94";
// preg_match($pattern1, $date1, $match);
// var_dump($match);

// 2. Create a regex that finds dates in the format MM/DD/YY, M/D/YY, MM/D/YY, M/DD/YY or MM/DD/YYYY and returns just the year part.
$pattern2 = '/^\d{1,2}\/\d{1,2}\/(\d{4}|\d{2})$/';
$date2 = "3/2/9328";
// preg_match($pattern2, $date2, $match);
// var_dump($match);

// 3. Create a regex that finds phone numbers like 333-232-3403 or (333) 232 3403.
$pattern3 = '/^\(?(\d{3})\)?[-\s]?(\d{3})?[-\s]?(\d{4})$/';
$num = '(333) 232 3403';
// preg_match($pattern3, $num, $match);
// var_dump($match);

// 4. Create a regex that returns only the first alphabetic word (upper and lower case) at the start of the string.
$pattern4 = '/^[a-zA-Z]+/';
$string = "Hello Arbind how are You";
// preg_match($pattern4, $string, $match);
// var_dump($match);

// 5. Pattern to get last alphabetic word (upper and lower case) '/[a-zA-z]+$/'

// Replace ‘YOUR_REGEX’ below with a regex that matches any price in the form of $3.45 or $23.32 or $400.

// Create a regex below that captures a URL that only consists of characters, numbers, underscore, and dots. For example: www.abc.com, def_ghi.com, a678.cn Note that dots(“.”) should not appear consecutively, and should not appear as the first or last character. The dot must appear at least once.