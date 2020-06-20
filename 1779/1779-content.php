<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1779">
    <div class="container">
        <div class="my-container">
        <div class="row">
            <div class="col-md-4">
                <div class="zev">
                    <div class="cura">Curabitur quis rhoncus tellus,
                        quis lorem ipsum dolorluctus.
                        Curabitur laoreet fringilla lorem ipsum porta.
                        Nullam rutrum velit.
                    </div>
                    <div class="pog">
                        <img src="./images/1.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">James Green</div>
                            <div class="reg">regular customer</div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="zev">
                    <div class="cura">Nullam rutrum velit.
                        Maecenas sit amet tincidunt elit lorem ipsum urabitur quis rhoncus tellus,
                        quis lorem ipsum for dolor lorem ipsum for amet luctus.
                    </div>
                    <div class="pog">
                        <img src="./images/1.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">Alex Redmind</div>
                            <div class="reg">our regular customer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="zev">
                    <div class="cura">
                        Pellentesque habitant morbi tristique senectus glavrida et netus
                        et malesuada fames ac turpis egestas ulla! Curabitur quis rhoncus tellus,
                        quis lorem ipsum dolorluctus. Curabitur laoreet fringilla lorem ipsum porta.
                        Nullam rutrum velit.
                        <br>
                        <br>
                        Maecenas sit ameus et malesuada fames ac turpis egestas ulla! Curabitur lorem
                        ipsum dolor quis rhoncus tellus, quis lorem ipsum dolorluctus… <a class="read-more" href=#>Read more</a>
                    </div>
                    <div class="pog">
                        <img src="./images/2.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">Alex Windfree</div>
                            <div class="reg">our regular customer</div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="zev">
                    <div class="cura">
                        Perspiciatis faucibus dolor amet purus unde om iste mattis natus sit! Proin adipiscing porta tellus,
                        ut feugiat nibh adipiscing metus sit amet. In eu justo a felis lorem ipsum – amet faucibus ornare vel id metus.
                        Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas ulla!
                    </div>
                    <div class="pog">
                        <img src="./images/4.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">Helen Blackwood</div>
                            <div class="reg">our regular client</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="zev">
                    <div class="cura">
                        Maecenas sit amet tincidunt elit.
                        Pellentesque habitant morbi tristique senectus habitant morbi
                        tristique senectus et netus et malesuada fames ac turpis egestas
                        nulla facilisi dolor.
                    </div>
                    <div class="pog">
                        <img src="./images/3.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">Miriam Gray</div>
                            <div class="reg">our regular client</div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="zev">
                    <div class="cura">
                        Curabitur laoreet fringilla lorem ipsum porta. Nullam rutrum velit.
                        Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique
                        senectus et netus et malesuada fames ac turpis egestas ulla! Curabitur laoreet fringilla lorem ipsum porta.
                        Nullam rutrum velit. Maecenas sit amet tincidunt elit. Pellentesque habitant morbi
                        tristique senectus et netus et malesuada fames ac turpis egestas ulla! Curabitur quis rhoncus tellus,
                        quis lorem ipsum dolorluctus. <a class="read-more" href=#>Read more</a>
                    </div>
                    <div class="pog">
                        <img src="./images/2.jpg" alt="Avatar" class="avatar">
                        <div class="kau">
                            <div class="jam">Richard Remmington</div>
                            <div class="reg">our regular client</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
</div>