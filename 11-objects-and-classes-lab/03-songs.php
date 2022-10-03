<?php

$songs_count = intval(readline());

class Song
{
    private $type_song;
    private $name;
    private $time;

    public function __construct($type_song, $name, $time)
    {
        $this->type_song = $type_song;
        $this->name = $name;
        $this->time = $time;
    }

    public function get_type_song()
    {
        return $this->type_song;
    }

    public function set_type_song($type_song): void
    {
        $this->type_song = $type_song;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name): void
    {
        $this->name = $name;
    }

    public function get_time()
    {
        return $this->time;
    }

    public function set_time($time): void
    {
        $this->time = $time;
    }
}

$songs_arr = [];
for ($i = 0; $i < $songs_count; $i++) {
    $current_song = explode('_', readline());

    $type = $current_song[0];
    $name = $current_song[1];
    $time = $current_song[2];

    $song = new Song($type, $name, $time);

    $songs_arr[] = $song;
}


$type_list = readline();

if ($type_list === 'all') {
    foreach ($songs_arr as $item) {
        echo $item->get_name() . PHP_EOL;
    }
} else {
    foreach ($songs_arr as $item) {
        if ($type_list === $item->get_type_song()) {
            echo $item->get_name() . PHP_EOL;
        }
    }
}