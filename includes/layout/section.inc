<section>
    <?php
        $arrayGETS = [
            "squirrel" => "includes/content/articles/squirrel.inc",
            "cpp" => "includes/content/articles/cpp.inc",
            "csharp" => "includes/content/articles/csharp.inc",
            "java" => "includes/content/articles/java.inc",
            "about" => "includes/content/about.php"
        ];

        /** 
         * Según el valor de la variable GET 
         * generado al clickear en los enlaces, mostrará un contenido u otro
        */
        
        if(isset($_GET["ctl"])){
            foreach($arrayGETS as $key => $value){
                if($_GET["ctl"] == $key){
                    require_once($value);
                }
            }
        }else{
            require_once("includes/content/main.inc");
        }
    ?> 
</section>