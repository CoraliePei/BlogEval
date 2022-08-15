<footer>
    <div class="wrap">
        <form action="index.php" method="post" class="contact">
            <div>
                <label for="nom">Pseudo :</label>
                <input type="text" id="nom" name="nom" />
            </div>
            <div>
                <label for="email">E-mail :</label>
                <input type="text" id="email" name="email" />
            </div>
            <div>
                <label for="content">Votre message :</label>
                <input type="textarea" id="content" name="content" />
            </div>
            <input type="submit" value="Envoyer" />
            <input type="hidden" name="frmContact" />
        </form>
        <div class="informations">
            <a href="index.php?page=cgu">Conditions générales d'utilisation</a><br>
            <a href="index.php?page=ml">Mentions légales</a>
            <p class="copy">&copy; <?php echo date('Y'); ?> - Renard Parsien</p>
        </div>
    </div>
</footer>
</body>

</html>