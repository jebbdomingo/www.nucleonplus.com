<?php /**
 * Nucleon Plus
 *
 * @package     Nucleon Plus
 * @copyright   Copyright (C) 2015 - 2020 Nucleon Plus Co. (http://www.nucleonplus.com)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/jebbdomingo/nucleonplus for the canonical source repository
 */

defined('KOOWA') or die; ?>

<?php echo $this->helper('bootstrap.load', array('javascript' => true)); ?>
<?php echo $this->helper('behavior.koowa'); ?>

<ktml:style src="media://koowa/com_koowa/css/admin.css" />

<ktml:module position="submenu">
    <ktml:toolbar type="menubar">
</ktml:module>

<ktml:module position="toolbar">
    <ktml:toolbar type="actionbar" title="COM_NUCLEONPLUS_SUBMENU_ORDERS" icon="task icon-stack">
</ktml:module>

<div class="nucleonplus-container">
    <div class="nucleonplus_admin_list_grid">
        <form action="" method="get" class="-koowa-grid">
            <div class="scopebar">
                <div class="scopebar-group last hidden-tablet hidden-phone">
                    <?php echo $this->helper('listbox.orderStatusFilter', array('active_status' => $this->parameters()->order_status)); ?>
                </div>
                <div class="scopebar-search">
                    <?php echo $this->helper('grid.search', array('submit_on_clear' => true, 'placeholder' => 'Account Number or Member\'s Name')) ?>
                </div>
            </div>
            <div class="nucleonplus_table_container">
                <table class="table table-striped footable">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="1">
                                <?php echo $this->helper('grid.checkall')?>
                            </th>
                            <th class="nucleonplus_table__title_field">
                                <?php echo $this->helper('grid.sort', array('column' => 'id', 'title' => 'Order No.')); ?>
                            </th>
                            <th data-hide="phone,phablet">
                                <?php echo $this->helper('grid.sort', array('column' => 'order_status', 'title' => 'Order Status')); ?>
                            </th>
                            <th data-hide="phone,phablet">
                                <?php echo $this->helper('grid.sort', array('column' => 'invoice_status', 'title' => 'Invoice Status')); ?>
                            </th>
                            <th>
                                <?php echo $this->helper('grid.sort', array('column' => 'name', 'title' => 'Member')); ?>
                            </th>
                            <th>
                                <?php echo $this->helper('grid.sort', array('column' => 'account_number', 'title' => 'Account Number')); ?>
                            </th>
                            <th>
                                <?php echo $this->helper('grid.sort', array('column' => 'package_name', 'title' => 'Product Package')); ?>
                            </th>
                            <th>
                                <?php echo $this->helper('grid.sort', array('column' => 'created_on', 'title' => 'Date')); ?>
                            </th>
                            <th data-hide="phone,phablet">
                                Payment Reference
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($orders)): ?>
                            <?php echo $this->import('default_orders.html', ['orders' => $orders]) ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" align="center" style="text-align: center;">
                                    <?php echo $this->translate('No order(s) found.') ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <?php echo $this->helper('paginator.pagination') ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div>
</div>