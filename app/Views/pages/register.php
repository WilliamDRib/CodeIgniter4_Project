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
        margin-left:5%;
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

</style>

<form action="/register_inserir" method="POST">
    <div class="imgcontainer">
        <img src="http://images7.memedroid.com/images/UPLOADED860/5f6673b257253.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="name"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Register</button>

        <label for="admin"><input type="checkbox" name="admin"> Admin?</label>
    </div>
</form>