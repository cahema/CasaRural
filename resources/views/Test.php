<?php

    xdebug_break();
    use App\Models\Booking;
    use App\Models\Role;
    use App\Models\Room;
    use App\Models\User;

    $tests = User::find(1);

    foreach ($tests as $test) {
        print("<pre>".print_r($test->id,true)."</pre>");
    }

?>
