<?= $this->extend('front_1') ?>

<?= $this->section('title') ?>
    <title><?=$title?></title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <h1><?=$title?></h1>
    <!-- <form method="post" action=""> -->
    <?= form_open('save')?>
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="email" name="email" id="">
        <input type="submit" value="Ok">
    <!-- </form>     -->
    <?= form_close()?>

<?= $this->endSection() ?>



