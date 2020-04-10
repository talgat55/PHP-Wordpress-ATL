<?php $advantagesBlock = get_query_var('advantagesBlock'); ?>
<div class="service-wrapper">
    <section class="advantages">
        <div class="container">
            <div class="row">
                <h2>
                    Преимущества рекламы
                </h2>
            </div>
            <div class="row">
                <?php
                    if(count($advantagesBlock) == 3){
                        $itemClass = 'col-lg-4  col-md-4';
                    } else if(count($advantagesBlock) == 5){
                        $itemClass = 'col-lg-4  col-md-4';
                    }else{
                        $itemClass = 'col-lg-3  col-md-3';
                    }
                $i = 0;
                ?>
                <?php foreach ($advantagesBlock as $advItem): ?>
                    <?php
                        if(count($advantagesBlock) == 5 && $i == 3) {
                            $offsetClass = ' offset-lg-2';
                        }else{
                            $offsetClass = '';
                        }
                    ?>
                    <div class="advantages__item d-lg-flex  <?php echo $itemClass; ?>  <?= $offsetClass; ?> col-sm-12">
                        <div class="advantages__img-block">
                            <img src="<?php echo $advItem['img']; ?>" alt="Изображение" />
                        </div>
                        <div class="advantages__content">
                            <div class="advantages__text">
                                <?php echo $advItem['text'] ;?>
                            </div>
                        </div>
                    </div>
                <?php  $i++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
