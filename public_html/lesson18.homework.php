<?php
// lesson18.homework ARTUR

/**
 * Rock-Paper-Scissors
*/

define('SHAPES', ['R', 'P', 'S']);

function getUserShape()
{
    $user_shape = $_POST['text'] ?? null;
    if ($user_shape) {
        if (!in_array($user_shape, SHAPES)) {
            echo 'Comp! You must enter ' . SHAPES[0] . ', ' . SHAPES[1] . ' or ' . SHAPES[2];
        }
    }
    return $user_shape;
}

function getCompShape()
{
    $key_shapes = array_rand(SHAPES);
    return SHAPES[$key_shapes];
}

function playRockPaperScissors($firstShape, $secondShape)
{
    switch ($firstShape) {
        case SHAPES[0]:
            if ($secondShape == SHAPES[1]) {
                return 'Second';
            } elseif ($secondShape == SHAPES[2]) {
                return 'First';
            } else {
                return 'Nobody. Try again!';
            }
            break;
        case SHAPES[1]:
            if ($secondShape == SHAPES[0]) {
                return 'First';
            } elseif ($secondShape == SHAPES[2]) {
                return 'Second';
            } else {
                return 'Nobody. Try again!';
            }
            break;
        case SHAPES[2]:
            if ($secondShape == SHAPES[0]) {
                return 'Second';
            } elseif ($secondShape == SHAPES[1]) {
                return 'First';
            } else {
                return 'Nobody. Try again!';
            }
            break;
        default:
            return;
            break;
    }
}

echo 'First: user' . PHP_EOL . '<br />';
echo 'Second: comp' . PHP_EOL . '<br /><br />';

?>

<form name="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
        Enter Rock-Paper-Scissors: <input type="text" name="text" />
        <input type="submit" name="form" value="Enter" />
    </div>
</form>

<?php
echo 'Win: ';
echo playRockPaperScissors(getUserShape(), getCompShape());
?>