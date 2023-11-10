<html>
    <head>
        <style>
            .imagebox{
                height: 300px;
                width: 300px;
            }
           .textbox{
               border: 1px solid rgba(255, 0, 0, 0.68);
               background-color: rgba(255, 0, 0, 0.68);
               height: 300px;
               width: 300px;
               transform: translate(-10%,-75%);


           }
           .imagebox:hover .textbox{
               transition: .5s;
           }
        </style>
    </head>
    <body>
        <div>
            <div class="imagebox">
                <img src="C:\project\images\b.jpg" alt="">
                <div class="textbox">
                    <h1>demo</h1>
                </div>
            </div>
        </div>
    </body>
</html>