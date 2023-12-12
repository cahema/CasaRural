<?php

    xdebug_break();
    use App\Models\Booking;
    use App\Models\Role;
    use App\Models\Room;
    use App\Models\User;

    $test = Room::find(1)->bookings;

    foreach ($test as $booking) {
        print("<pre>".print_r($booking->id,true)."</pre>");
    }

?>
