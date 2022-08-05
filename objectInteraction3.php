<?php
# Objects interaction and composition
# Spotify exmaple

class Song 
{
    public $songId;
    public $title;
}

$thatSong = new Song();
$thatSong->songId = 1;
$thatSong->title = "That title of that song";
var_dump($thatSong);
echo "<br><br>";
$thatSongg = new Song();
$thatSongg->songId = 2;
$thatSongg->title = "Second song";
var_dump($thatSongg);

echo "<br><br>";

class Playlist
{
    #(*) Alternative way
    public $name;
    public $songs = array();
    #(*)public $songs = [];

    public function addSong($song) {
        array_push($this->songs, $song);
        #(*)$this->songs[] = $song
    }
}
$myPlaylist = new Playlist();
$myPlaylist->name = "My Playlist";
var_dump($myPlaylist->songs);
echo "<br><br>";
$myPlaylist->addSong($thatSong);
$myPlaylist->addSong($thatSongg);
var_dump($myPlaylist->songs);

?>