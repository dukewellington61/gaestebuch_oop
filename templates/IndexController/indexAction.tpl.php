<a href="index.php?action=neu" style="position: fixed">Eintrag schreiben</a>
<?php
foreach ($eintraege as $e): ?>
    <div id="entry-header" class="fields"><?= $this->makeSave($e->getTitel()) ?></div>
    <div id="entry-content" class="fields"><?= nl2br($this->makeSave($e->getInhalt())) ?></div>
    <div class="fields">Verfasst von <?= strip_tags($e->makeLink($e), '<a>') ?> am <?= strftime('%d.%m.%Y um %H:%M', $e->getErstellungszeitpunkt()) ?></div>
<?php endforeach; ?>

