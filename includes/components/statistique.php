<?php 
    include('includes/tools/calc.php');
    //  hena derete object li fihe title o class icon ... , kol
    $statistique = [
        [
            "title" => "Sum Price",
            "class_icon" => "fa-solid fa-wallet",
            "action" => "SUM" ,
            "target" => "price"
        ],
        [
            "title" => "Sum Quantity",
            "class_icon" => "fa-solid fa-gamepad",
            "action" => "SUM" ,
            "target" => "quantity"
        ],
        [
            "title" => "Count All Products",
            "class_icon" => "fa-solid fa-box-open",
            "action" => "COUNT" ,
            "target" => "*"
        ],
        [
            "title" => "Count Products Platforms",
            "class_icon" => "fa-brands fa-lg fa-dribbble",
            "action" => "COUNT" ,
            "target" => "platform_id"
        ],
    ];
?>
    <div class="container row my-1 mx-auto">
        <?php foreach ($statistique as $card) { ?>
            <div class="col-12 my-3 col-md shadow shadow-md calc-card" title="<?= $card['title'] ?>">
                <span class="calc-icon">
                <i class="<?= $card['class_icon'] ?>"></i>
                </span>
                <span class="calc-sum">
                <?php $result = calc($conn , $card['action'] , $card['target']); echo $result['calc']?: '---' ?>
                </span>
            </div>
        <?php } ?>
    </div>