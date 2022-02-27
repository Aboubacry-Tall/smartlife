<?php  
session_start();
    require '../src/Core/Routes/class.php';
    require '../src/Core/Routes/routeur.php';
    
    $mois = date('m');
    $annee = date('Y');

    $db = new Database('smartlife');
   
    $match = $router->match();
    if (is_array($match)) {
        if (is_callable($match['target'])) {
            call_user_func_array($match['target'], $match['params']);
        }else {
            $params = $match['params'];
            ob_start();
                require "{$match['target']}.php";
            $content = ob_get_clean();
        }
        require '../views/Core/default.php';
    }else{
        ob_start();
            require '../views/Core/404.php';
        $content = ob_get_clean();
        require '../views/Core/default.php';
    }

    $jj = date('d');
    $mj = date('m');
    $aj = date('Y');

    $aujourduit = new DateTime($aj.'-'.$mj.'-'.$jj);

    $evenements = $db->query('SELECT * FROM evenements ORDER BY id DESC');

    foreach ($evenements as $evenement) {
        $eventdate = new DateTime($evenement->debut);
        $interval = $aujourduit->diff($eventdate);
        $difference = $interval->format('%R%a jours');
        if ($difference === '-1 jours') {
            $_SESSION['evenement'][$evenement->id] = $evenement->id;
        }
    }
?>

<script type="text/javascript">
    jQuery(function($){

        var mois = <?php echo $mois; ?>;
        var annee = <?php echo $annee; ?>;

        $(document).ready(function(){

            $('#prec').click(function(){

                mois--;
                if (mois < 1) {
                    mois = 12;
                    annee = annee - 1;
                }
                $('#agenda').load("calendrier-"+mois+"-"+annee+"");
            });

            $('#next').click(function(){

                mois++;
                if (mois > 12) {
                    mois = 1;
                    annee = annee + 1;
                }
                $('#agenda').load("calendrier-"+mois+"-"+annee+"");
            });

            $('#taches').sortable();
        });
    });
</script>