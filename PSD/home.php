<?php include 'header.php'; ?>
<div class="backimg">
<div class="textCenter">
    <?php
    $homecontent  =[
        'txtMain' => 'Integer at tortor ut magna',
        'txtLowerMain' => 'finibus lobortis sed quis tellus.',
        'img1' => 'img/layer-2.png',
        //'img2' => 'img/layer-3.png',
        //'img3' => 'img/layer-4.png',
        'txt1' => 'Tincidunt',
        'txt1_1' => 'Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.'
    ];
    ?>
    <?php foreach($homecontent as $hcontent){?>
       <p><p><div><div><p><p><?php echo "$hcontent";?></p></p></div></div></p></p>
    <?php}
    ?>
    <!--<p>Integer at tortor ut magna</p>
    <p>finibus lobortis sed quis tellus.</p>
    <div class="imgContainer1">
        <div class="img1"><img src="img/layer-2.png"/>
            <p>Tincidunt</p>
            <p class=" txt1">Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.</p>-->
        </div>
        <div class="img2"><img src="img/layer-3.png">
            <p>Duis bibendum</p>
            <p class="txt2">Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst. </p>
        </div>
        <div class="img3"><img src="img/layer-4.png">
            <p>Donec ligula</p>
            <p class="txt3">Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.</p>
        </div>
    </div>
    <div class="butt1">
        <button class="txtButt">Read more</button>
    </div>
</div>

</div>
<h3 class="oNews">Our News</h3>
<div class="imgContainer2">
    <div class="imgSquare1"><img src="img/layer-5.png"/>
        <p>Lore ipsum</p>
        <p class="txtSquare1">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>
    </div>
    <div class="imgSquare2"><img src="img/layer-6.png"/>
        <p>Lore ipsum</p>
        <p class = "txtSquare2">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>
    </div>
    <div class="imgSquare3"><img src="img/layer-7.png"/>
        <p>Lore ipsum</p>
        <p class="txtSquare3">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>

    </div>
</div>
<?php include 'footer.php'; ?>