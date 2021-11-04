
<?php require TEMPLATE_DIR . '/template/header.php'; ?>

<a href="/kontrahent/dodaj">Dodaj Kontrachenta</a>

<div class="delegation--container">

</div>
<div class="sk-content">
    <div class="ui container">
        <div class="ui two column stackable relaxed grid">
            <div class="eleven wide column">
                <p>Lista Kontrahentów</p>
                <table>
                <tr id="tr1">
                    <th>ID</th>
                    <th>NIP</th>
                    <th>REGON</th>
                    <th>Nazwa</th>
                    <th>Podatnik VAT</th>
                    <th>Ulica</th>
                    <th>Numer domu</th>
                    <th>Numer mieszkania</th>
                    <th>Akcje</th>
                </tr>
                <tbody>
                <?php
                foreach ($contractors as $contractor){
                    echo'<tr>';
                        echo '<td>'.$contractor['id'].' </td>';
                        echo '<td>'.$contractor['nip'].' </td>';
                        echo '<td>'.$contractor['regon'].' </td>';
                        echo '<td>'.$contractor['name'].' </td>';
                        echo '<td>'.$contractor['is_vat'].' </td>';
                        echo '<td>'.$contractor['street'].' </td>';
                        echo '<td>'.$contractor['number_house'].' </td>';
                        echo '<td>'.$contractor['number_flat'].' </td>';
                        echo '<td>';
                            echo '<a href="/kontrahent/edycja?id='. $contractor['id'] .'">Edytuj</a><br />';
                            echo '<form method="POST" action="/kontrahent/usun">';
                            echo '<input type="hidden" name="id" value="'. $contractor['id'] .'" />';
                            echo '<input class="remove--item" type="submit" name="delete" value="Usuń" />';
                            echo '</form>';
                        echo '</td>';
                    echo'</tr>';
                }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require TEMPLATE_DIR . '/template/footer.php'; ?>