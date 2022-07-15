<style>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    input[type=text],
    input[type=number],
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

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        color: white;
        text-decoration: none;
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        width:80%;
        margin-left:10%;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 20%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn {
            width: 100%;
        }
    }
</style>

<form action="/cadastrar_Carro" method="POST">
    <div class="imgcontainer">
        <img src="http://images7.memedroid.com/images/UPLOADED860/5f6673b257253.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="name"><b>Nome</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>

        <label for="type"><b>Tipo</b></label>
        <input type="text" placeholder="Enter type" name="type" required>

        <label for="placa"><b>Placa</b></label>
        <input type="text" placeholder="Enter placa" name="placa" required>

        <label for="ano"><b>Ano</b></label>
        <input type="number" placeholder="Enter ano" name="ano" required>

        <label for="img"><b>URL da img</b></label>
        <input type="text" placeholder="Enter placa" name="img">

        <button type="submit">Cadastrar carro</button>

    </div>
</form>