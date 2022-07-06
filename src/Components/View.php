<?php

namespace App\Components;

class View
{
    public function render(string $fileName, array $params)
    {
        extract($params);
        ob_start();
        require PROJECT_DIRECTORY . DIRECTORY_SEPARATOR . $fileName;

        return ob_get_clean();
    }
}
