<nav>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="active">Главная</a></li>
            <li><a href="catalog.php">Каталог</a></li>
            <li><a href="guestbook.php">Отзывы</a></li>
            <li><a href="gallery.php">Фото</a></li>
            <li><a href="contact.php">Контакты</a></li>


            <li><div class="menuCaption">Корзина<br>
    <a href="cart.php" title="Перейти в корзину">В корзине</a>
    <span id="cartCntItems">
        <? if ($cartCntItems > 0) {
            echo $cartCntItems;
            } else {
            echo "пусто";
        } ?>
    </span>
    </div></li></ul></div>
</nav>