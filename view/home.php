<?php include 'view/controluser.php'; ?>
<div class="row mb">
    <div class="boxleft mr">
        <div class="row mb10">
            <div class="banner mb10">
                <img src="upload/banner (1).png" alt="">
            </div>
        </div>
        <div class="row products">
            <?php foreach ($list_sanpham_home as $sp) {
                extract($sp);
            ?>
                <div class="boxproducts">
                    <div onclick="return window.location.href = 'index.php?act=chitiet&detail=<?= $id ?>'">
                        <div class="row img">
                            <img src="upload/<?= $img ?>" alt="">
                        </div>
                        <div class="row deltail_pro mb10">
                            <p class="price_pro"><?= $price ?> $</p>
                            <p class="name_pro"><?= $name ?></p>
                        </div>
                    </div>
                    <div class="row info_add">
                        <p><i class="fa-solid fa-eye"></i><?= ' ' . $luotxem ?></p>
                        <div class="btn_pro">
                            <button class=""><i style="font-size:1.2vw" class="fa-solid fa-cart-arrow-down"></i></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'boxright.php'; ?>
</div>