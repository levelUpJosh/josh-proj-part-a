<table class="table" id="problem-type-table">
    <thead>
        <th scope="row"> Problem Type ID</th>
        <th scope="row"> Name</th>
        <th scope="row"> Categorisation Level</th>
    </thead>
    <tbody>
        <div>
        <?php
        $types = fopen('dash-content/problem-types.txt', "r");
        $count = 0;
        if ($types) {
            while (($line = fgets($types)) !== false) {
                if ($line[0] != '-') {
                    $count += 1;
                    echo "</div><tr class='bg-dark' id=".$count.">
            <td><label for='problem-type-" . $count . "' class='text-light'>" . $count . "</label></td>
            
            <td><input type='text' name='problem-type-" . $count . "' value='" . $line . "'>
            <td><button class='btn btn-success new-secondary-type-btn'>Add New Secondary Type</button></td>
            <td class='text-light'>Primary</td></td></td></tr><div>";

                    $subcount = 1;
                } else {
                    echo "<tr class='bg-light'>
            <td><label for='problem-type-" . $count . "-" . $subcount . "'>" . $count . " - " . $subcount . "</label></td>
            <td><input type='text' name='problem-type-" . $count . "-" . $subcount . "' value='" . substr($line, 1) . "' sub-ID=".$subcount.">
            <td></td>
            <td>Secondary</td></td></tr>";
                    $subcount += 1;
                }
            }
        }; ?>
    </tbody>
</table>
<div class="row">
    <button class="btn btn-primary float-right col-4" id="new-primary-type-btn">Add New Primary Type</button>
</div>
<script>
    $('document').ready(function() {
        var count = <?php echo $count; ?>; //store the last count  
        console.log(count);

        $('#new-primary-type-btn').click(function addNewPrimaryTypeRow() {
            count += 1;
            $('#problem-type-table').append("<tr class='bg-dark'><td><label for='problem-type-" + count + "' class='text-light'>" + count + "</label></td><td><input type='text' name='problem-type-" + count + "' value=''><td><button class='btn btn-success'>Add New Secondary Type</button></td><td class='text-light'>Primary</td></td></td></tr>");

        })
        $('.new-secondary-type-btn').click(function addNewSecondaryTypeRow() {
            var topcount = this.closest('tr').getAttribute('id');
            var contain_div = this.closest('div').append('<tr>hello</tr>');

        })
    })
</script>