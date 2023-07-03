<?= $this->extend('front_1') ?>

<?= $this->section('title') ?>
    <title><?=$title?></title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <h1><?=$title?></h1>
    <nav>
        <?php 
        echo "<ul>";
        foreach ($menu as $menu_item){

            echo "
              <li><a href='".base_url() . $menu_item["href"]."'>{$menu_item["title"]}</a></li>   
            ";

        }
        echo "</ul>";
        
        ?>
    </nav>    
<?= $this->endSection() ?>


<?= $this->section('news')?>
        <div class="news">
            <h2><?=$news["title"]?></h2>
            <p><?=$news["content"]?></p>
            <img src="<?=$news["picture"]?>">
        </div>
<?= $this->endSection() ?>
