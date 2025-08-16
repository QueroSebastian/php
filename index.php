<?php

require 'Course.php';

$course = new Course (
    title: "Curso de PHP y Laravel",
    subtitle: "Aprende PHP y Laravel desde cero",
    description: "Este curso te enseñará los fundamentos de PHP, un lenguaje de programación popular para el desarrollo web.",
    tags: ["PHP","Laravel","JavaScript","HTML","CSS", "MySQL"]
);

$course->addTag("Backend Development");
$course->addTag("Web Development");
$course->addTag("PHP"); // This tag already exists, so it won't be added again
$course->addTag("Java");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->__getTitle() ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->__getTitle() ?></h1></h1>
    <h2><?= $course->__getSubtitle() ?></h2>
    <p><?= $course->__getDescription() ?></p>
    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach($course->__getTags() as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>