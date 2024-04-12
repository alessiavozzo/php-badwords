<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- title -->
    <header id="site_header">
        <h1 class="text-center">Non osare dire le parolacce</h1>
    </header>

    <main id="site_main">
        <div class="container">
            <!-- form -->
            <form action="./server.php" method="get"> 
                   
                <!-- text area for the paragraph -->
                <div class="mb-3">
                    <label for="paragraph" class="form-label">Paragraph:</label>
                    <textarea class="form-control" id="paragraph"></textarea>
                </div>
    
                <!-- input text for badword -->        
                <div class="mb-3">
                    <label for="bad-word" class="form-label">Parola da censurare:</label>
                    <input type="text" class="form-control" id="bad-word">
                </div>
    
                <!-- submit btn -->
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </main>
<!-- script bs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>