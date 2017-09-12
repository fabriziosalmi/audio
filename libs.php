<?php

function convert_wav2mp3($wav_input, $mp3_output) {
  $wav2mp3 = "ffmpeg -i ".$wav_input." -acodec mp3 ".$mp3_output;
  exec($wav2mp3);
}

function cut_mp3($mp3_input, $mp3_final) {
  $cut2mp3 = "ffmpeg -t 40 -i ".$mp3_input." -acodec copy ".$mp3_final;
  exec($cut2mp3);
}

function fade_out($mp3_raw, $mp3_faded) {
  $fademp3 = "sox ".$mp3_raw." ".$mp3_faded." fade 0 35 5";
  exec($fademp3);
}

?>
