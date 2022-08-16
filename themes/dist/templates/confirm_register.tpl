{include file="components/doctype.tpl"}

<style>
    .notification {
        width: 500px !important;
        margin: 50px auto !important;
    }

    .paragraph {
        color: black;
        text-align: center;
    }
</style>

<body>
    <div class="wrapper">
        {if $messages}
            <div class="alert alert-success notification" role="alert">
                {$messages.success}
            </div>
        {elseif $errors}

            <div class="alert alert-danger notification" role="alert">
                {$errors.failed}
            </div>
        {/if}

        <h5 class="paragraph">Сейчас вас перекинет на главную страницу</h3>

    </div>


    <script>
        setTimeout(() => {
            window.location.href = window.location.origin;
        }, 3000);
    </script>
</body>

</html>