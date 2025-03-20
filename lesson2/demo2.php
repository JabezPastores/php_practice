<?php 
//Array Functions
 $ids = [10,22,15,45,67,33];
 $users = ['user2','user1','user3'];

//count() function to count the number of elements in an array
echo '<pre>';
//var_dump(count($users));
echo '</pre>';

//sort() function to sort an array in ascending order
sort($users);

echo '<pre>';
//var_dump($users);
echo '</pre>';

// rsort() function to sort an array in descending order
rsort($users);
rsort($ids);

echo '<pre>';
//var_dump($users);
//var_dump($ids);
echo '</pre>';

//array_push() function to add an element to the end of an array
array_push($ids, 100);
array_push($users, 'user4');

echo '<pre>';
//var_dump($users); 
//var_dump($ids);
echo '</pre>';

//array_pop() function to remove the last element from an array
array_pop($ids); 
array_pop($users);

echo '<pre>';
//var_dump($users); 
//var_dump($ids);
echo '</pre>';

//array_shift() function to remove the first element from an array
array_shift($ids);
array_shift($users);

echo '<pre>';
#var_dump($users);
#var_dump($ids);
echo '</pre>';


//array_unshift() function to add an element to the beginning of an array
array_unshift($ids, 33);
array_unshift($users, 'user3');

echo '<pre>';
//var_dump($users);
//var_dump($ids);
echo '</pre>';

$ids = [10,22,15,45,67,33];
$users = ['user2','user1','user3'];

//array_slice() function to extract a portion of an array
$ids2 = array_slice($ids, 2, 3);

echo '<pre>';
//var_dump($ids2);
echo '</pre>';

//array_sum() function to calculate the sum of elements in an array
$output = 'Sum of IDS: ' . array_sum($ids);
//echo $output;

//array_search() function to search for an element in an array
$output = 'User 2 is at index: ' . array_search('user2', $users);
//echo $output;

//explode() function to convert a string to an array
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);

echo '<pre>';
//var_dump($tagsArray);
echo '</pre>';

//implode() function to convert an array to a string
$output = implode(',', $users);
echo $output;
?>