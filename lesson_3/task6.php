<?php
$menuArr = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
];

function renderMenu($arr){

   
    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {        
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . renderMenu($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo renderMenu($menuArr);

