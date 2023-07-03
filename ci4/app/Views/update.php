<?= $this->extend('front_1') ?>

<?= $this->section('title') ?>
    <title><?=$title?></title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <h1><?=$title?></h1>
    <!-- <form method="post" action=""> -->
    <?= form_open('update')?>
        <input type="text" name="username" id="" value="<?=$formData["username"]?>">
        <input type="password" name="password" id="" value="<?=$formData["password"]?>">
        <input type="email" name="email" id="" value="<?=$formData["email"]?>">
        <input type="hidden" name="id" id="" value="<?=$formData["id"]?>">
        <input type="submit" value="Update">
    <!-- </form>     -->
    <?= form_close()?>

<?= $this->endSection() ?>



