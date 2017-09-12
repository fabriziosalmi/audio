**Setup**

`apt-get install ffmpeg lame`

**Convert WAV to MP3**

`ffmpeg -i input.wav -acodec mp3 output.mp3`

**Cut MP3 at given time (40 seconds)** 

`ffmpeg -t 40 -i input.mp3 -acodec copy output.mp3`
