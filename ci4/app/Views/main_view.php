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



