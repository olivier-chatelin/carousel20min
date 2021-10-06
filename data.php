<?php
function createImages(int $number): array
{
    $images = [];
    for ($i = 1; $i <= $number; $i++){
        $images[] = "https://picsum.photos/500/300?random=" . $i;
    }
    return $images;
}
$slides = createImages(10);