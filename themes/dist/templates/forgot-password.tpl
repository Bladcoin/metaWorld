{include file="components/doctype.tpl"}

<style>
    .form-signin {
        margin: 0 auto;
        width: 400px;
    }

    .paragraph {
        color: black;
        text-align: center;
    }

    .wrapper {
        background-color: grey;
    }
</style>

<body>
    <div class="wrapper">

        <form class="form-signin" action="/public/resetPassword.php" method="POST">
            <input type="hidden" name="reset_password[code]" value="{$smarty.get.code}"></input>
            <input type="hidden" name="reset_password[userId]" value="{$smarty.get.userId}"></input>
            <h1 class="h3 mb-3 font-weight-normal">Сброс пароля</h1>
            <label for="password" class="sr-only">Пароль</label>
            <input type="password" id="password" class="form-control" placeholder="Password" required="" autofocus="" name="reset_password[password]">
            <label for="password2" class="sr-only">Подтвердите пароль</label>
            <input type="password" id="password2" class="form-control" placeholder="Password Confirm" required="" name="reset_password[password2]">

            <button class="btn btn-lg btn-primary btn-block">Сменить пароль</button>
        </form>

    </div>
</body>

</html>