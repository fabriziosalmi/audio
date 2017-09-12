**Convert WAV to MP3**

`ffmp3g -i input.wav -acodec mp3 output.mp3`

**Cut MP3 at given time (40 seconds)** 

`ffmpeg -t 40 -i input.mp3 -acodec copy output.mp3`
