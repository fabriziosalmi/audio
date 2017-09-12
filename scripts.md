**Setup**

`apt-get install -y ffmpeg lame sox libsox-fmt-mp3`

**CLI**

Convert WAV to MP3

`ffmpeg -i input.wav -acodec mp3 output.mp3`

Cut MP3 at given time (40 seconds)

`ffmpeg -t 40 -i input.mp3 -acodec copy output.mp3`

Fade out the MP3 file (last 5 seconds)

`sox input.mp3 output.mp3 fade 0 35 5`

**PHP**

```
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
```
Example use:

```
<?php
// include libs
include("https://raw.githubusercontent.com/fabriziosalmi/audio/master/libs.php");

// set input and output files
$wav_input = "/var/www/wav_file.wav";
$mp3_output = "/var/www/mp3_file.mp3";
$mp3_input = "/var/www/mp3/file.mp3";
$mp3_final = "/var/www/mp3/final_file.mp3";
$mp3_raw = "/var/www/mp3/raw_file.mp3";
$mp3_faded = "/var/www/mp3/faded_file.mp3";

// process
convert_wav2mp3($wav_input, $mp3_output);
cut_mp3($mp3_input, $mp3_final);
fade_out($mp3_raw, $mp3_faded);
?>
```
