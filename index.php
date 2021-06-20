<!doctype html>
<html lang="en">
<head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-Frame VR</title>
</head>
<body>
<a-scene>
    <a-text
            value="Welkom bij mijn Media vlog!"
            position="-8.408 9.531 -20"
            text="color: #fff700"
            scale="6 6 1">
    </a-text>
        <a-assets>
            <video id="mediavlog" autoplay loop="true" src="MediaVlogOriëntatie.mp4"></video>
        </a-assets>

        <!-- Using the asset management system. -->
        <a-video src="#mediavlog" width="16" height="9" position="0 4 -20"></a-video>
    <a-plane
            position="0 -2 -4"
            rotation="-90 0 0"
            scale="2 2 2"
            width="40"
            height="40"
            color="#c7c57a"
    ></a-plane>
    <a-sky
            color="#399bff"
    ></a-sky>
</a-scene>
</body>
</html>