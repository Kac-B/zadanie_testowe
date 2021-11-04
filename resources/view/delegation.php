
<?php require TEMPLATE_DIR . '/template/header.php'; ?>

<div class="delegation--container">
   <h3>Tabela Delgacje DB</h3> 
</div>
<div class="sk-content">
    <div class="ui container">
        <div class="ui two column stackable relaxed grid">
            <div class="eleven wide column">
                
                <table>
                <tr id="tr1">
            <td>ID</td>
            <td>Imię</td>
            <td>Nazwisko</td>
            <td>Data od:</td>
            <td>Data do:</td>
            <td>Miejsce wyjazdu:</td>
            <td>Miejsce przyjazdu:</td>
        </tr>
                <?php 
                foreach($delegations as $delegation){
                    echo '<tr>';
                    echo '<td>'.$delegation['id'].' </td>';
                    echo '<td>'.$delegation['first_name'].' </td>';
                    echo '<td>'.$delegation['last_name'].' </td>';
                    echo '<td>'.$delegation['date_from'].' </td>';
                    echo '<td>'.$delegation['date_to'].' </td>';
                    echo '<td>'.$delegation['place_of_departure'].' </td>';
                    echo '<td>'.$delegation['place_of_arrival'].' </td>';
                    echo '</tr>';
                } 
                ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require TEMPLATE_DIR . '/template/footer.php'; ?>