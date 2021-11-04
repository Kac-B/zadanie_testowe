
<?php require TEMPLATE_DIR . '/template/header.php'; ?>

<a href="/kontrahent/lista">Powrót do listy</a>

<div class="delegation--container">
    Formularz do dodania kontrahenta
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

                <form method="POST" action="/kontrahent/zapisz" class="iu form">
                    <div class="required field">
                        <label>Nazwa</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="required field">
                        <label>NIP</label>
                        <input type="text" name="nip" id="nip">
                    </div>
                    <div class="required field">
                        <label>REGON</label>
                        <input type="text" name="regon" id="regon">
                    </div>
                    <div class="required field">
                        <label>Podatnik VAT</label>
                        <input name="is_vat" type="radio" value="yes"><label>TAK</label>
                        <input name="is_vat" type="radio" value="no"><label>NIE</label>
                    </div>
                    <div class="required field">
                        <label>Ulica</label>
                        <input type="text" name="street" id="street">
                    </div>
                    <div class="required field">
                        <label>Numer domu</label>
                        <input type="text" name="number_house" id="number_house">
                    </div>
                    <div class="required field">
                        <label>Numer mieszkania</label>
                        <input type="text" name="number_flat" id="number_flat">
                    </div>
                    <input type="submit" class="ui primary button" id="add" name="add" value="Dodaj" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php require TEMPLATE_DIR . '/template/footer.php'; ?>