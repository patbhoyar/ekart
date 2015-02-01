<div ng-controller="IndexController">
    <select>
        <option value='0'>Select a Customer</option>
        <option ng-repeat="customer in customers" value='{{customer.id}}'>
            {{customer.fname}} {{customer.lname}}
        </option>
    </select>
</div>