<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="accueil_ho.css">
</head>
<header class="header">
  @yield('nav')
</header>
<style>
    .header{
        display: flex;
        /* position: absolute; */
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        justify-content: space-between;
        background-color: antiquewhite;
        align-items: center;
        padding: 5px;
    }
    .img{
        width: 50px;
    }
    .divmenu{

        width: 50%;

    }
    .ulmenu{

        width: 90%;
        display: flex;
        position: relative;
        justify-content: space-between;
    }
    .limenu{
        display: flex;

        list-style: none;
        justify-content: center;
        align-items: center;
        width: 20%;
    }
    .menu{
        text-decoration: none;
    }
    .iconmenu{
        width: 15px;
        margin: 5px;
    }
    .container{
        display: grid;
        grid-template-columns: 0.25fr 1fr;
    }
    .block1, .block2{
        height: 90vh;
    }
    .divmenu2{
        display: flex;
        width: 30px;
        background-color: blueviolet;
        border-radius: 79% 21% 70% 30% / 38% 42% 58% 62% ;
        height: 30px;
        box-shadow: 4px 6px 5px rgb(0, 0, 0, 0.5);
        align-items: center;
        justify-content: center;
    }
    .block1{
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-x: auto;
        scrollbar-color: transparent;
        overflow-y: none;
    }
    .divinfoprofile{
        width: 100%;
        display: flex;
        align-items: center;

        margin: 9px;
    }
    .profile{
        width: 150px;
        background-color: blueviolet;
        border-radius: 79% 21% 70% 30% / 38% 42% 58% 62% ;
        height: 150px;
        box-shadow: 4px 6px 5px rgb(0, 0, 0, 0.5);
    }
    .infoprofil{
        margin-left: 15px;
    }
    .statinfo{
        display: flex;
        width: 250px;
        background-color: transparent;
        border-radius: 50%;
        height: 250px;
        border: solid 20px blueviolet;
        align-items: center;
        justify-content: center;
        margin: 15px;
        margin-left: 100px;
        margin-right: 100px;
    }
    .stat{
        display: flex;
        width: 100%;
        justify-content: space-between;
    }
    .titlestat{
        margin-left: 18%;
    }
    .imgmenu{
        width: 15px;
    }
    .ulsoumenu{
        display: none;
        flex-direction: column;
        position: absolute;
        background-color: aliceblue;
        top: 65px;
        right: 0px;
        padding: 20px;
        width: 10%;
        justify-content: center;
        align-items: center;

    }
    li{
        list-style: none;
    }
    .sousmenu{
        text-decoration: none;
    }
    .lisousmenu{

        margin-bottom: 15px;
    }
    .livmenu2:hover .ulsoumenu{
        display: flex;
    }
    .livmenu2{
        display: flex;
        height: 66px;
        align-items: center;
        justify-content: center;
    }
    .btnaffplus{
        background-color: blueviolet;
        color: aliceblue;
        padding: 10px;
        border-radius: 7px;
    }.container3{
         display: grid;
         grid-template-columns: 1fr 0.5fr;
     }
    .block6,
    .block7{
        display: flex;
        /* border: solid 2px #000; */
        height: 90vh;
    }
    .afficheinfos{
        display: flex;
        padding: 50px;
        background-color: blueviolet;
        box-shadow: 4px 6px 5px rgb(0, 0, 0, 0.5);
        width: 70%;
        height: 150px;
        border-radius: 75% 25% 83% 17% / 24% 75% 25% 76% ;
        justify-content: space-between;
        align-items: center;
        color: #fff;
    }
    .divinfoexpe{
        display: flex;
        /* border: solid 2px #000; */
        width: 100%;
        justify-content: center;
        padding: 20px;
    }
    .suitsblock{
        display: flex;
        background-color: #fff;
        width: 50px;
        height: 100px;
        justify-content: center;
        align-items: center;
        border-radius: 7px;
    }
    .flechenoir{
        display: flex;
        width: 30px;
        height: 30px;
    }.container2{
         display: grid;
         grid-template-columns: 1fr 0.75fr 1fr;
     }
    .block3,
    .block4,
    .block5{
        height: 90vh;
        border: solid 2px #000;
        display: flex;
    }
    .sousbloc1,
    .sousbloc2{
        border: solid 2px #000;
        width: 100%;
        height: 200px;
        margin-bottom: 10px;
        padding: 9px;
    }
    .block4{
        display: flex;
        flex-direction: column;
        overflow-x: auto;

    }.container3 {
         display: flex;
         flex-direction: column;
         max-width: 400px;
         margin: 100px auto;
         background-color: blueviolet;
         padding: 40px;
         border-radius: 9% 91% 9% 91% / 92% 12% 88% 8% ;
         box-shadow: 4px 6px 5px rgb(0, 0, 0, 0.5);
         animation: slideIn 0.5s ease forwards;
         position: absolute;
         top: 2%;
         left: 35%;
         z-index: 1000;
         width: 35%;
         justify-content: center;
         align-items: center;
     }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .h3c {
        text-align: center;
        color: #fff;
        margin-bottom: 30px;
        animation: fadeIn 1s ease forwards;
    }

</style>
<body>
<div class="container">
@yield('content')
</div>
</body>
</html>
