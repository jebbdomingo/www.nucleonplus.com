<?php /**
 * Nucleon Plus
 *
 * @package     Nucleon Plus
 * @copyright   Copyright (C) 2015 - 2020 Nucleon Plus Co. (http://www.nucleonplus.com)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/jebbdomingo/nucleonplus for the canonical source repository
 */
?>

<?php foreach ($employeeaccounts as $employee): ?>
    <tr>
        <td style="text-align: center;">
            <?php echo $this->helper('grid.checkbox', array('entity' => $employee)) ?>
        </td>
        <td class="deskman_table__title_field">
            <a href="<?php echo $this->route('view=employee&id='.$employee->id); ?>">
                <?php echo $employee->id ?>
            </a>
        </td>
        <td>
            <a href="<?php echo $this->route('view=employee&id='.$employee->id); ?>">
                <?php echo $employee->_user_name ?>
            </a>
        </td>
        <td><?php echo $employee->_user_email ?></td>
        <td>
            <?php echo $employee->DepartmentRef ?>
        </td>
        <td>
            <span class="label <?php echo ($employee->status == 'terminated') ? 'label-default' : 'label-info' ?>"><?php echo ucwords($this->escape($employee->status)) ?></span>
        </td>
        <td>
            <?php echo $this->helper('date.format', array('date' => $employee->created_on)) ?>
        </td>
        <td>
            <?php echo $employee->note ?>
        </td>
    </tr>
<?php endforeach; ?>