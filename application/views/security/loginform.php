<form class="log_container" action="" method="POST">
    <h1><strong>Student</strong>plaza</h1><br>


    <?php if(isset($_SESSION['ERROR'])) { ?>
        <p class="ERROR_MSG"><?php echo $_SESSION['ERROR']; ?></p>
    <?php } ?>

    <input class="log_txt" name="username" type="text" placeholder="Gebruikersnaam"/><br />
    <input class="log_txt" name="password" type="password" placeholder="wachtwoord"/><br />

    <input class="log_btn" type="submit" name="login" value="aanmelden" />

</form>