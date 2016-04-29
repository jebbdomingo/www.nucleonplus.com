<?php /**
 * Nucleon Plus
 *
 * @package     Nucleon Plus
 * @copyright   Copyright (C) 2015 - 2020 Nucleon Plus Co. (http://www.nucleonplus.com)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/jebbdomingo/nucleonplus for the canonical source repository
 */

defined('KOOWA') or die;

$isAuthenticated = $this->object('user')->isAuthentic();
$disabled = (!$isAuthenticated) ? 'disabled="disabled"' : null;
?>

<div class="row">
    <?php foreach ($packages as $package): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><?php echo $package->name ?></h3>
                    <table class="table">
                        <tr class="info">
                            <th>Price</th>
                            <th class="text-right">P<?php echo number_format($package->price) ?></th>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td class="text-right">P<?php echo number_format($package->delivery_charge) ?></td>
                        </tr>
                        <tr class="success">
                            <th>Rebates</th>
                            <th class="text-right">
                                P<?php $rebates = ($package->_rewardpackage_prpv * $package->_rewardpackage_slots) * 2;
                                echo number_format($rebates);
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="well">
                                    <table class="table">
                                        <thead>
                                            <thead>
                                                <th>Product</th>
                                                <th class="text-right">Quantity</th>
                                            </thead>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($package->getItems() as $item): ?>
                                                <tr>
                                                    <td><?php echo $item->_item_name ?></td>
                                                    <td class="text-right"><?php echo $item->quantity ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <p>
                        <?php if ($isAuthenticated): ?>
                            <a href="<?php echo $this->route('view=order&package_id=' . $package->id . '&layout=form&tmpl=koowa') ?>" class="btn btn-primary btn-md" role="button" <?php echo $disabled ?>>
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                Order Now
                            </a>
                        <?php else: ?>
                            <a href="<?php echo $this->route('option=com_users&view=login') ?>" class="btn btn-default btn-md" role="button">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                Log-in to order
                            </a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>