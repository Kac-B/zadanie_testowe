
<?php require TEMPLATE_DIR . '/template/header.php'; ?>

<a href="/kontrahent/lista">Powrót do listy</a>

<div class="delegation--container">
    Formularz edycja
</div>
<div class="sk-content">
    <div class="ui container">
        <div class="ui two column stackable relaxed grid">
            <div class="eleven wide column">

                <?php if (isset($errors)): ?>
                    <div class="error--container">
                        <ul>
                            <?php foreach($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="/kontrahent/aktualizacja" class="iu form">
                    <input type="hidden" name="id" value="<?php echo $contractor['id']; ?>" />
                    <div class="required field">
                        <label>Nazwa</label>
                        <input type="text" name="name" id="name"  value="<?php echo $contractor['name'] ?? null; ?>">
                    </div>
                    <div class="required field">
                        <label>NIP</label>
                        <input type="text" name="nip" id="nip" value="<?php echo $contractor['nip'] ?? null; ?>">
                    </div>
                    <div class="required field">
                        <label>REGON</label>
                        <input type="text" name="regon" id="regon" value="<?php echo $contractor['regon'] ?? null; ?>">
                    </div>
                    <div class="required field">
                        <label>Podatnik VAT</label>
                        <input name="is_vat" type="radio" value="yes" <?php echo $contractor['is_vat'] === 'yes' ? "checked" : null; ?>><label>TAK</label>
                        <input name="is_vat" type="radio" value="nie"  <?php echo $contractor['is_vat'] === 'no' ? "checked" : null; ?>><label>NIE</label>
                    </div>
                    <div class="required field">
                        <label>Ulica</label>
                        <input type="text" name="street" id="street" value="<?php echo $contractor['street'] ?? null; ?>">
                    </div>
                    <div class="required field">
                        <label>Numer domu</label>
                        <input type="text" name="number_house" id="number_house" value="<?php echo $contractor['number_house'] ?? null; ?>">
                    </div>
                    <div class="required field">
                        <label>Numer mieszkania</label>
                        <input type="text" name="number_flat" id="number_flat" value="<?php echo $contractor['number_flat'] ?? null; ?>">
                    </div>
                    <input type="submit" class="ui primary button" id="add" name="add" value="Zapisz" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php require TEMPLATE_DIR . '/template/footer.php'; ?>