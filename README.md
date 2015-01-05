contextual-advertisement-generator
==================================

This is a hackathon project done which won the runners-up prize at "What the Hack" hackathon conducted by sap labs.
Generates ads in real time based on the content of the video. 
The audio form a video is sent to GoogleSpeechToText API to get the corresponding text. 
AlchemyAPI is used to get the keyword and this is used to search online for relevent ads. 
The resulting images are scraped and placed in the webpage beside the video (Youtube API). 
Thus the ads on the side of the video change in real time as the content of the video changes. 
If the person is talking about cars, an ad about cars shows up and when he talks about bikes, an ad about bikes shows up. 
FFmpeg and youtube-dl is used to handle the video part.
PHP was extensively used.
Please watch this video for the demo https://www.youtube.com/watch?v=OdpZLuuF3Zc&feature=youtu.be
Please run this on a xampp server and run client.php 
Please register at AlchemyAPI and goolge for the API keys.
