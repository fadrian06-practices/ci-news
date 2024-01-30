<!-- <h2><?= esc($title) ?></h2> -->

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <?= csrf_field() ?>
    <label>
        Title
        <input name="title" value="<?= set_value('title') ?>" />
    </label>
    <label>
        Text
        <textarea name="body"><?= set_value('body') ?></textarea>
    </label>
    <input type="submit" name="submit" value="Create news item" />
</form>
