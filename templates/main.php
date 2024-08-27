<main>
    <section>
        <img src="<?= $poster_url; ?>" alt="Poster de <?= $title ?>" width="300" style="border-radius: 16px">
    </section>

    <hgroup>
        <h3>
            <?= $title; ?> - <?= $until_message ?>
        </h3>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p>La próxima película es: <?= $following_production; ?></p>
    </hgroup>
</main>