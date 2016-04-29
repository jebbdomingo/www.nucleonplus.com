<?php /**
 * Nucleon Plus
 *
 * @package     Nucleon Plus
 * @copyright   Copyright (C) 2015 - 2020 Nucleon Plus Co. (http://www.nucleonplus.com)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/jebbdomingo/nucleonplus for the canonical source repository
 */
?>

<?php foreach ($items as $item): ?>
    <tr>
        <td style="text-align: center;">
            <?php echo $this->helper('grid.checkbox', array('entity' => $item)) ?>
        </td>
        <td class="deskman_table__title_field"><?php echo $item->id ?></td>
        <td><?php echo $item->item_id ?>
        <td><?php echo $item->ItemRef ?></td>
        <td><?php echo number_format($item->UnitPrice, 2) ?></td>
        <td><?php echo number_format($item->PurchaseCost, 2) ?></td>
        <td><?php echo $item->QtyOnHand ?></td>
        <td><?php echo $item->quantity_purchased ?></td>
        <td><?php echo $this->helper('date.humanize', array('date' => $item->last_synced_on)) ?></td>
        <td><?php echo $item->getInitiator()->getName() ?></td>
    </tr>
<?php endforeach; ?>