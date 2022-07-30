<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8</title>
</head>
<body>
    <h2>PHP Version: <span><?= PHP_VERSION; ?></span></h2>
    <?php
        require_once('Classes/User.php');
        require_once('Classes/Profile.php');

        $user = new User();

        var_dump($user->getName());

        echo '<br />';

        // NullSafe Operator (?)
        echo $user->profile()?->major() ?? 'Not Found';

        class Test {}

        $obj = new Test();
        
        // Match Expressions example
        $type = match (get_class($obj)) {
            'Test' => 'First Class test',
            'User' => 'User test',
            'Profile' => 'Profile test',
        };

        echo '<br />';
        echo $type;

        // Match Expressions another example
        $values = ['value1', 'value2', 'value3'];

        $testValue = match($values[2]) {
            'value1' => 'This is value 1', 
            'value2' => 'This is value 2',
            'value3' => 'This is value 3'
        };

        echo '<br />';
        echo $testValue;
        
    ?>
</body>
</html>