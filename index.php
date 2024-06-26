<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Dischi JSON</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <div id="app">

            <header>
                <img src="" alt="logo">
            </header>

            <main class="container">
                <div class="row">
                    <div v-for="disk in disks" :key="disk.id" @click="selectDisk(disk)" class="col-4 d-flex justify-content-center">
                        <div class="card m-2 p-0" style="width: 18rem; background-color: rgb(29, 29, 51)">
                            <img :src="disk.cover" class="card-img-top" alt="album cover">
                            <div class="card-body text-center">
                                <h5 class="white-txt">{{ disk.title }}</h5>
                                <p class="white-txt">{{ disk.artist }}</p>
                                <h6 class="white-txt">{{ disk.year }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="selectedDisk" class="text-center mt-4 white-txt">
                    <h2>Dettagli</h2>
                    <p>Titolo: {{ selectedDisk.title }}</p>
                    <p>Artista: {{ selectedDisk.artist }}</p>
                    <p>Anno: {{ selectedDisk.year }}</p>
                </div>
            </main>
            
        </div>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="main.js"></script>
        
    </body>
</html>
