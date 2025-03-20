<?php
$output = null;
$users = null;

$fruits =[
        //0   //1
    ['Apple','Red'], //0
    ['Orange','Orange'], //1
    ['Banana','Yellow']  //2
];

$output = $fruits[2][1];

//multidimensional associative array

$users = [
    [
        'name' => 'Tsundere',
        'email' => 'IamTsundere@gmail.com',
        'password' => 'YADAHIDOI'
    ],
    [
        'name' => 'Yandere',
        'email' => 'yanderesimulator@gmail.com',
        'password' => 'YANDEREDEV'
    ],
    [
        'name' => 'Kuudere',
        'email' => 'I♥Kuudere@gmail.com',
        'password' => 'KUUDERE4LIFE'
    ]
    ];

    $output = $users[2]['email'];

//add a new user
$users[] = [
    'name' => 'Dandere',
    'email' => 'Dandereforever@gmail.com',
    'password' => 'DANDERE4EVER'
];
//remove a user
array_pop($users);

//remove the first user
array_shift($users);

//count users/elements
$output = count($users) . 'users in the array';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <pre><?php print_r($users); ?></pre>
        </div>
    </div>
</body>

</html>
