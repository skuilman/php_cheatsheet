<?php
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to (value and type)
!= Not equal to
!== Not identical to
*/

/* ------ If Statements ------ */

/*
** If Statement Syntax
if (condition) {
    // code to be executed if condition is true
}
*/

$age = 17;

// if($age >= 18) {
//    echo 'You are old enough to vote';
// } else {
// echo 'Sorry, you are not old enough to vote';
// }

$t = date ("H");

// if($t < 12) {
//    echo 'Good Morning';
// } elseif($t < 17) {
//    echo 'Good afternoon';
// } else {
//    echo 'Good Evening';
// }

 $posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[2];
// } else {
//     echo 'No Posts';
// }

// echo !empty($posts) ? $posts[2] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;

// echo $firstPost;

$favcolor = 'purple';

switch($favcolor) {
    case 'red':
      echo 'Your favorite color is red';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    case 'yellow':
      echo 'Your favorite color is yellow';
    default:
     echo 'Your favorite color is not red, green or blue';
}
