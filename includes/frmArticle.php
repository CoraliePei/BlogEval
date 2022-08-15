    <section class="wrap">
        <h1>Ajouter un article</h1>
        <form action="" method="post" novalidate class="wrap2">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?php if (!empty($_POST['titre'])) {
                                                                    echo $_POST['titre'];
                                                                } ?>">
            <span class="error"><?php if (!empty($errors['titre'])) {
                                    echo $errors['titre'];
                                } ?></span>

            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"><?php if (!empty($_POST['contenu'])) {
                                                                            echo $_POST['contenu'];
                                                                        } ?></textarea>
            <span class="error"><?php if (!empty($errors['contenu'])) {
                                    echo $errors['contenu'];
                                } ?></span>

            <?php
            $statut = array(
                'draft' => 'Brouillon',
                'publish' => 'Publié'
            );

            ?>
            <select name="statut">
                <option value="">---------------------</option>
                <?php foreach ($statut as $key => $value) {
                    $selected = '';
                    if (!empty($_POST['statut'])) {
                        if ($_POST['statut'] == $key) {
                            $selected = ' selected="selected"';
                        }
                    }
                ?>
                    <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php if (!empty($errors['statut'])) {
                                    echo $errors['statut'];
                                } ?></span>

            <input type="submit" name="frmArticle" value="Ajouter un nouvel article">
        </form>
    </section>