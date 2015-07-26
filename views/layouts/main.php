
<?php $this->beginPage() ?>
<?= $this->render('blocks/head.php') ?>

<?php $this->beginBody() ?>

<?= $this->render('blocks/main_header.php') ?>
<?= $content ?>
<?= $this->render('blocks/footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


