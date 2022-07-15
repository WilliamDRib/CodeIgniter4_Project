<style>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    img.carro{
        width:100%;
        max-width:300px;
    }

    div.carros{
        display: flex;
        flex-wrap: wrap;
        margin:1.4vw;
    }


    /* Add padding to containers */
    .container {
        padding: 16px;
    }
    
</style>

<form action="/anunciar" method="post">

    <div class="container">

        <label for="carro"><b>Id do Carro</b></label>
        <input type="text" placeholder="Enter Id do carro" name="carro" required>

        <label for="turno"><b>Turno</b></label>
        <input type="text" placeholder="Enter turno" name="turno" required>

        <label for="desc"><b>Desc (opcional)</b></label>
        <input type="text" placeholder="Enter desc" name="desc">

        <button type="submit">Registrar</button>
    </div>
</form>