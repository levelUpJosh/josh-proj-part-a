<?php if ($userType != 'operator') { 
    header('Location: /errors/404');
    die();
}?>

<form class="card">
    <div class="card-body">
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Backups Enabled:</label>
            <div class="col-sm-10">
                <input type="checkbox" readonly class="form-control-plaintext" id="backupCheckbox" checked>
            </div>
        </div>
        <div class="mb-3 row">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>