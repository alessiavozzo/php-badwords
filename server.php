<?php 

//badword + paragraph
$badWord = $_GET["bad-word"];
$paragraph = $_GET["paragraph"];
//var_dump($badWord, $paragraph);

$censoredParagraph = str_replace($badWord, "***", $paragraph);

//lengths
$paragraphLength = strlen($paragraph);
$censoredParagraphLength = strlen($censoredParagraph);

//words
$paragraphWords = explode(" ", $paragraph);
$censoredParagraphWords = explode(" ", $censoredParagraph);
//var_dump($paragraphWords);
//var_dump(count($paragraphWords));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <h1 class="text-center m-3">Risultato:</h1>
    </header>

    <main>
        <div class="container">
            <div class="row gx-3">

                <!-- your text + length -->
                <div class="your-text col-6">
                    <div class="p-3 border border-success rounded">
                        <h2>Il tuo testo:</h2>
                        <p><?php echo $paragraph ?></p>
                        <div class="length d-flex justify-content-between">
                            <div class="letters">
                                <strong>Lettere:</strong>
                                <span><?php echo $paragraphLength ?></span>
                            </div>
                            <div class="words">
                                <strong>Parole:</strong>
                                <span><?php echo count($paragraphWords) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- censored text + length -->
                <div class="censored-text col-6">
                    <div class="p-3 border border-danger rounded">
                        <h2>Il tuo testo censurato:</h2>
                        <p><?php echo $censoredParagraph ?></p>
                        <div class="length d-flex justify-content-between">
                            <div class="letters">
                                <strong>Lettere:</strong>
                                <span><?php echo $censoredParagraphLength ?></span>
                            </div>
                            <div class="words">
                                <strong>Parole:</strong>
                                <span><?php echo count($censoredParagraphWords) ?></span>
                            </div>
                        </div>
                    </div>
                </div>                
                

            </div>

        </div>        
        
    </main>
    


    <!-- script bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>