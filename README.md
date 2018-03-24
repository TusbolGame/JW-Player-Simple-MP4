# JW Player Simple MP4
JW Player Script for MP4 videos. Where it contains poster option and subtitles.
## Interface
![Script Home Page](https://i.imgur.com/8mhOYXU.png)

**MP4 URL** = Urfrom an .mp4 file. *Example: http://server.com/video.mp4*

**Image (Poster) URL** = URL of an image. *Example: https://i.imgur.com/8mhOYXU.png*

**Subtitle URL** = Link of a caption. *Example: http://serversub.com/sub.vtt*

More info about subtitles [click here](https://support.jwplayer.com/customer/portal/articles/1407438).


-----
## Configuration
In the **index.php** file, edit the following information:

 - $site = "http://linksite.com/video.php/"; 
 - $titlePage = "Title of this page";

 ***$site*** = Change the "http://linksite.com/video.php/" to the link where the file is hosted. Example "http://mp4script.com/play/video.php/".

***$titlePage*** = Change the "Title of this page" to the title you want the page to be.

------------
In the **video.php** file are some JW Player settings:
*Change what's between ""*

 - $jwKey = "/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q=="; 
 - $abouttext ="Video Play";  
 - $aboutlink = "http://siteurl.com";

***$jwplayer*** = It's the JW Player key

***$abouttext*** = Name that appears when you right-click.

***$aboutlink***  = Link to where the user will go by clicking on About Text.

## Used

 - [Bootstrap](https://getbootstrap.com/)
 -  [Font Awesome](https://fontawesome.com/)
 -  [JW Player](https://jwplayer.com)
