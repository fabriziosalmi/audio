**Setup**

`apt-get install ffmpeg lame`

**Convert WAV to MP3**

`ffmpeg -i input.wav -acodec mp3 output.mp3`

**Cut MP3 at given time (40 seconds)** 

`ffmpeg -t 40 -i input.mp3 -acodec copy output.mp3`

**PHP library**

```
<?php

function convert_wav2mp3($wav_input, $mp3_output) {
  $wav2mp3="ffmpeg -i ".$wav_input." -acodec mp3 ".$mp3_output;
  exec($wav2mp3);
}

function cut_mp3($mp3_input, $mp3_final) {
  $cut2mp3="ffmpeg -t 40 -i ".$mp3_input." -acodec copy ".$mp3_final;
  exec($cut2mp3);
}
```
Example use:

```
// set input and output files
$wav_input = "/var/www/file.wav";
$mp3_output = "/var/www/file.mp3";
$mp3_input = "/var/www/mp3/file.mp3";
$mp3_final = "/var/www/mp3/final_file.mp3";

convert_wav2mp3($wav_input, $mp3_output);
cut_mp3($mp3_input, $mp3_final)
```
