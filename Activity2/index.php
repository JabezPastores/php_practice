<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
                background-color: white;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Karla';
                text-align: center;
            }
            .title {
                font-size: 96px;
                margin-top: 20px;
            }
            .image img {
                margin-top: 10px;
                width: 300px;
                border-radius: 10px;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            }
            .dropdown {
                margin-top: 30px;
                display: inline-block;
                text-align: left;
            }
            .dropdown-btn {
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                padding: 10px;
                border: none;
                background: lightgrey;
                border-radius: 20px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            }
            .dropdown-content {
                display: none;
                padding-left: 20px;
                background-color: lightgrey;
                padding: 10px;
                border-radius: 20px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            }
            .dropdown-content a {
                display: block;
                text-decoration: none;
                font-size: 150%;
                margin: 5px 0;
                border-radius: 20px;
                padding: 5px;
                background: lightgrey;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            }
            a:hover {
                color: red;
            }
        </style>
        <script>
            function toggleDropdown(id) {
                var content = document.getElementById(id);
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            }
        </script>
    </head>
    <body>
        <div class="title" title="Laragon">Laragon</div>
        
        <div class="image">
            <img src="indexImage.avif" alt="Homepage Image">
        </div>
        
        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleDropdown('arfffFolders')">Arffff!!</button>
            <div id="arfffFolders" class="dropdown-content">
                <div class="dropdown">
                    <button class="dropdown-btn" onclick="toggleDropdown('phpFolders')">PHP</button>
                    <div id="phpFolders" class="dropdown-content">
                        <a href="Lab1/">Open Lab1</a>
                        <a href="Lab2/">Open Lab2</a>
                        <a href="Lab3/">Open Lab3</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-btn" onclick="toggleDropdown('bootstrapFolders')">BOOTSTRAP</button>
                    <div id="bootstrapFolders" class="dropdown-content">
                        <a href="Act1/">Open Act1</a>
                        <a href="Act2/">Open Act2</a>
                        <a href="Act3/">Open Act3</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
