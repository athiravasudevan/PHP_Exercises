<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

//Print every array element in a new line.
$food =  ['Pizza','Cheesecake','Shawarama','Payasam'];

/*Printing using the echo*/
echo "{$food[0]} <br>";
echo "{$food[1]} <br>";
echo "{$food[2]} <br>";
echo "{$food[3]} <br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc =[
    'Pizza' =>'main course',
    'Cheesecake' => 'dessert',
    'Shawarama' => 'main course',
    'payasam' => 'dessert'
];


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo 'Pizza | '. $food_assoc['Pizza'].'<br>' ;
echo 'Cheesecake | '. $food_assoc['Cheesecake'] .'<br>' ;
echo 'Shawarama | '. $food_assoc['Shawarama'] .'<br>' ;
echo 'payasam | '. $food_assoc['payasam'] .'<br>' ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc =[
    'Pizza' => [
                    'type'=>'main course',
                    'origin'=>'Italy'                    
                    ],
    'Cheesecake' => [
                    'type'=>'dessert',
                    'origin'=>'Greece'                    
                    ],
    'Shawarama' => [
                    'type'=>'main dish',
                    'origin'=>'Turkey'                    
                    ],
    'payasam' => [
                    'type'=>'dessert',
                    'origin'=>'India'                    
                    ]
];

echo 'Pizza | '.$food_assoc['Pizza']['type'].' | '.$food_assoc['Pizza']['origin'] .'<br>';
echo 'Cheesecake | '.$food_assoc['Cheesecake']['type'].' | '.$food_assoc['Cheesecake']['origin'] .'<br>';
echo 'Shawarama | '.$food_assoc['Shawarama']['type'].' | '.$food_assoc['Shawarama']['origin'] .'<br>';
echo 'payasam | '.$food_assoc['payasam']['type'].' | '.$food_assoc['payasam']['origin'] .'<br>';


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>

<html>
<style>
table,th,td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td><?php echo key($food_assoc)?></td>
    <td><?php echo $food_assoc['Pizza']['type'] ?> </td>
    <td><?php echo $food_assoc['Pizza']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
  <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['Cheesecake']['type'] ?> </td>
    <td><?php echo $food_assoc['Cheesecake']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
   <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['Shawarama']['type'] ?> </td>
    <td><?php echo $food_assoc['Shawarama']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
   <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['payasam']['type'] ?> </td>
    <td><?php echo $food_assoc['payasam']['origin'] ?></td>
  </tr>
</table>
    </html>
