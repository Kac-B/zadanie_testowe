
<?php require TEMPLATE_DIR . '/template/header.php'; ?>

<h3>Dane kontrahenta</h3>
<label for="#">NIP:</label>
<input id='#' name='nip' type="textbox" minlength="10" maxlength="10"><br>
<label for='#'>REGON: </label>
<input type="int" minlength="9" maxlength="9"><br>
<label for="#">NAZWA: </label>
<input type="textbox"><br>
<label for="#">DATA POWSTANIA: </label>
<input type="date"><br>
<label for="#">ULICA: </label>
<input type="textbox"><br>
<label for="#">NUMER DOMU: </label>
<input type="textbox"><br>
<label for="#">NUMER MIESZKANIA: </label>
<input type="textbox"><br>
<label for="#">UWAGI: </label>
<input type="textarea"><br>

<p><strong>Listy Wyboru Koloru</strong></p>
<select>
    <optgroup label="Kolory">
        <option style="color:green;">ZIELONY</option>
        <option style="color:blue;">NIEBIESKI</option>
        <option style="color:turquoise;">TURKUSOWY</option>
        <option style="color:navy;">GRANATOWY</option>
        <option style="color:red;">CZERWONY</option>
        <option style="color:white;">BIAŁY</option>
    </optgroup>
</select>
<p><strong>Listy Wyboru VAT</strong></p>
<select>

    <optgroup label="VAT">
        <option>ZW.</option>
        <option>NP.</option>
        <option>0%</option>
        <option>3%</option>
        <option>8%</option>
        <option>23%</option>
    </optgroup>

</select>

<p><strong>Lista uporzadkowana/ numerowana</strong></p>
<div>
    <ol start="1">
        <li>
            Element
        </li>
        <li>
            Element
        </li>
        <li>
            Element
        </li>
    </ol>
</div>


<?php require TEMPLATE_DIR . '/template/footer.php'; ?>