
    <h1>Новости</h1>
    <div class= "block">

        <?php foreach($news as $value):?>
            <div class="news">
                <div> <span class = "data"><?php echo date('d.m.Y',($value['idate']))?></span> 
                <a class="a" href = "/view/<?=$value['id']?>"><?php echo $value['title']?></a>
                <p><?php echo $value['announce']?></p>
                </div>
            </div>
        <?php endforeach?>

    </div>

    <div class = "page">
            <p>Страницы:</p>
        <div >

        <?php echo $pagination; ?>
        
    </div>
            
    