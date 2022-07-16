<style>
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        width:80%;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius:10%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btnsActionCars:link, .btnsActionCars:visited {
        background-color:darkorange;
        color: white;
        text-decoration: none;
        cursor: default;
        border-radius: 30%;
        padding: 1em 2em;
        text-align: center;
        margin: 1em 2em;
        font-family: sans-serif;
        letter-spacing: 2.5px;
        font-size: 1.5em;
        font-weight: 700;
    }
</style>

<div class='container'>
    <a href="/reservar" class="btnsActionCars">Reservar</a>
    <?php
        if($_SESSION['admin'] == 1){
    ?>
        <a href="/cadastrar" class="btnsActionCars">Cadastrar carro</a>
        <a href="/tela_anunciar" class="btnsActionCars">Anunciar carro</a>
    <?php
        }
    ?>
</div>
<div class="imgcontainer">
    <img src="https://c.tenor.com/jWgsI4lVFxYAAAAd/dwayne-johnson-dwayne-the-rock-johnson.gif=" alt="sucodeZAPEZAPE" class="avatar">
</div>