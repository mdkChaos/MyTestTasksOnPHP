<?php

namespace Spliter {
    require_once 'helpers/ns_loader.php';

    use classes\Spliter;

    echo "<pre>";
    print_r(Spliter::SplitList(range(1, 20), 6));
}
