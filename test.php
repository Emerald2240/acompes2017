<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <button onclick="goToParticularPage()" id="test_button"> Click me</button>
    <script src="assets/js/jquery.js"></script>
    <script>
        function goToParticularPage() {
            window.history.back();
        }
    </script>
    <h1>Page 1</h1>
    <?php print_r(json_encode(["page" => "student_search"])); ?>
</body>

</html>