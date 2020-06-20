<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1732">
    <div class="container">
        <div class="my-container">

            <div class="row">
                <div class="col-md-3">
                    <div class="icon">
                        <i class="far fa-flag"></i>
                    </div>
                    <div class="yea">12 YEARS OF EXPERIENCE</div>
                    <div class="bec">Because diversity lorem ipsum dolor porta
                        ullam rutrum glavrida lorem unicus amet.</div>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="yea">BEST INDUSTRY EXPERTS</div>
                    <div class="bec">We are lorem isum – lorem amet
                        ipsum dolor porta ullam rutrum glavrida unicus amet from.</div>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="yea">FAST & EFFECTIVE SOLLUTIONS</div>
                    <div class="bec">Glavrida ipsum nulla – dolor lorem amet
                        ipsum dolor porta ullam rutrum glavrida unicus.</div>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <div class="yea">FLEXIBLE PRICING SYSTEM</div>
                    <div class="bec">We are from glavrida ipsum lorem amet
                        ipsum dolor porta ullam rutrum glavrida unicus amet dolor.</div>
                </div>
            </div>
        </div>
    </div>
</div>