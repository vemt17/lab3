<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/~vmtan/lab3/ci4/public/guest/create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="project">Project</label>
    <textarea name="project" cols="40" rows="4"><?= set_value('project') ?></textarea>
    <br>

    <label for="message">Message</label>
    <textarea name="message" cols="40" rows="4"><?= set_value('message') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>
