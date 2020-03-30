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
                        $itemClass = 'col-lg-4';
                    }else{
                        $itemClass = 'col-lg-3';
                    }

                ?>
                <?php foreach ($advantagesBlock as $advItem): ?>
                    <div class="advantages__item d-lg-flex  <?php echo $itemClass; ?>  col-md-3 col-sm-12">
                        <div class="advantages__img-block">
                            <img src="<?php echo $advItem['img']; ?>" alt="Изображение" />
                        </div>
                        <div class="advantages__content">
                            <div class="advantages__text">
                                <?php echo $advItem['text'] ;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
