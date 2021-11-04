<?php require 'template/header.php'; ?>

<h3> Faktura VAT</h3>
<table class="invoice--table">
    <tr>
        <th>Lp.</th>
        <th>Opis</th>
        <th>MPK</th>
        <th>Kwota netto</th>
        <th>Ilość</th>
        <th>VAT</th>
        <th>Kwota brutto</th>
        <th>Wartość netto</th>
        <th>Wartość brutto</th>
    </tr>
    <tbody>
    <?php foreach ($invoices as $invoice): ?>
    <tr>
        <td><?php echo $invoice['id']; ?>.</td>
        <td><?php echo $invoice['name']; ?></td>
        <td><?php echo $invoice['mpk']; ?></td>
        <td class="price" data-price="<?php echo $invoice['price']; ?>">
            <?php echo $invoice['price']; ?> zł
        </td>
        <td class="count" data-count="<?php echo $invoice['count']; ?>">
            <?php echo $invoice['count']; ?>
        </td>
        <td>
            <select name="test" class="vat">
                <option value="0">ZW</option>
                <option value="0">NP</option>
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="gross">-</td>
        <td class="net">-</td>
        <td class="gross_value">-</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<button class="verifyPrice">Sprawdz </button>

<?php require 'template/footer.php'; ?>