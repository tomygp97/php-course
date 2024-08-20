<?php 
    const API_URL = "https://www.whenisthenextmcufilm.com/api";

    # Inicializar una nueva sesion de cURL; ch = cURL handle
    $ch = curl_init(API_URL);
    // Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    /* Ejecutar la petición 
        y guardamos el resultado
    */
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    curl_close($ch);
?>

<head>
    <meta charset="UTF-8" />
    <title>Proxima pelicula de marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name ="description" content = "Proxima pelicula de marvel" />
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"] ?>" width="300" style="border-radius: 16px">
    </section>

    <hgroup>
        <h3>
            <?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días
        </h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La próxima película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>