**Setup**

* OS: Debian 8 (jessie)

`echo deb http://www.deb-multimedia.org jessie main non-free >> /etc/apt/sources.list`
`echo deb-src http://www.deb-multimedia.org jessie main non-free >> /etc/apt/sources.list`
`apt-get update`
`apt-get install deb-multimedia-keyring`
`apt-get update`
`apt-get install -y ffmpeg lame sox libsox-fmt-mp3 build-essential libmp3lame-dev libvorbis-dev libtheora-dev 
libspeex-dev yasm pkg-config libfaac-dev libopenjpeg-dev libx264-dev`

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
