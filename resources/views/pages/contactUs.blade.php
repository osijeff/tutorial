<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       .icon {
            width: 35px;
            height: 5px;
            background-color: black;
            margin: 6px 0;
        }
        body{
            margin: 0px;
            padding: 0px;
            font-family: 'Courier New', Courier, monospace;
        }
        header{
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 0 100px;
            background-color: red;
            wifwewef
        }
         header .logo{
            color: aliceblue;
            height: 50px;
            line-height: 50px;
            float: left;
            font-weight: bold;
        }
         header nav{
            float: right;
        }
         header nav ul{
            margin: 0px;
            padding: 0px;
            display: flex;
        }
         header nav ul li{
            list-style: none;
        }
        header nav ul li a{
            height: 50px;
            line-height: 50px;
            padding: 0 20px;
            color: white;
            text-decoration: none;
            display: block;
        }
         header nav ul li a:hover
        header nav ul li a.after{
            color: white; background: azure;
        }
         .menu-toggle{
            color:snow;
            float: right;
            line-height: 50px;
            font-size: 24px;
            cursor: pointer;
            display: none
        }
        @media only screen and (max-width : 991px) {
            header{
                padding: 0 20px;
            }
            .menu-toggle{
                display: block;
            }
            header nav{
                display: none;
                position: absolute;
                width: 100%;
                height: calc(100vh-50px);
                background: darkgrey;
                top: 50px;
                left: 100%;
                transition: 0.5s; 
            }
            header nav ul {
                display:block;
                text-align: center;
            }
            header nav ul li a{
                border-bottom: 1px solid rgba(0, 0, 0, 21);
            }
        } */
    </style>
</head>
<body style="background:burlywood">
    <header>
        <div class="logo">logo</div>
        <nav>
            <ul>
                <a href=""> <li>home</li></a>
                <a href=""> <li>service</li></a>
                <a href=""> <li>about</li></a>
            </ul>
        </nav>
        <div class="menu-toggle">
                <div class="icon"></div>
                <div class="icon"></div>
                <div class="icon"></div>
        </div>
    </header>
</body>
</html> 