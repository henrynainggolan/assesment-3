<?php

remove_action('assesment_3_after_render', 'old_assesment_3');
add_action('assesment_3_after_render', 'new_assesment_3');

function new_assesment_3 () {
	echo 'Silahkan pilih timezone Anda: ';
	echo '</br>';
}

add_filter('assesment_3_timezones', 'new_assesment_3_timezones', 1);

function new_assesment_3_timezones ($data) {
	$data = array(
        'utp2' => 'UTC+3',
        'utm1' => 'UTC-1',
        'utc' => 'UTC',
        'utp1' => 'UTC+7',
        'utp3' => 'UTC-2',
        'utp4' => 'UTC-6',
    );

    // print_r($data);
    return $data;
}
