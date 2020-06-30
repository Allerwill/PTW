<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1747">
    <div class="container my-container">
        
            <div class="sing">
                <div class="row">
                    <div class="col-md-8">
                        <div class="tang1">
                            <div class="word">A WORD FROM COMPANY OWNER</div>
                            <div class="quis">Quisque nec quam convallis,
                                scelerisque risus in, viverra ipsum.
                                Mauris sed molestie magna. Nunc auctor aliquet tortor in venenatis.
                                Suspendisse potenti. Etiam quis suscipit nulla.
                                Cras at facilisis risus, nec accumsan urna.
                                Praesent congue aliquet nisi, eu hendrerit sem lobortis nec.</div>
                            <div class="quis">Molestiae consequatur quis suscipit nulla lorem ipsum,
                                vel illum qui dolorem eum fugiat quo voluptas nulla pariatur!</div>
                            <br>
                            <div class="james">JAMES ANDERSON</div>
                            <div class="eco">Econimist / Еntrepreneur / Seven Corporate Founder</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./images/1.jpg" alt="Avatar" class="avatar">
                    </div>
                </div>
            </div>

    </div>
</div>