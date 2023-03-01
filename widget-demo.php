<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');

/* @var $PAGE moodle_page */
global $PAGE, $OUTPUT;

require_login();

$node = optional_param('node', '/cat0', PARAM_RAW);
$debug = optional_param('debug', false, PARAM_BOOL);
$stats= optional_param('stats', false, PARAM_BOOL);

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/local/mwscoursetree/widget-demo.php');
$PAGE->set_title("Démo de l'arbre des cours");

// Usage inside Moodle
$PAGE->requires->js(new moodle_url('/local/mwscoursetree/widget.js'), true);
// Outside Moodle, use a script tag
//<script type="text/javascript" src="....../local/mwscoursetree/widget.js"></script>

$PAGE->set_pagelayout('admin');

echo $OUTPUT->header();
echo $OUTPUT->heading("Démo de l'arbre des cours");

echo "<p>Cette page affiche par défaut un arbre partant de la racine <b>/cat0</b>.";
echo "Vous pouvez modifier la racine en ajoutant à l'URL <b>?node=/cat1</b> par exemple. 
<br/>Si vous voulez afficher un arbre au dela de la catégorie Moodle de niveau 4 (niveau LMDA), il faut aussi indiquer le chemin ROFid en le modifiant.
<br/>Obtenir par exemple le sous-arbre du chemin ROF <b>/09/UP1-PROG-09-L2J201-114</b> :
<br/>?node=<b>/cat542/09:UP1-PROG-09-L2J201-114</b>, cat542 étant la catégorie moodle de nieau 4.</p>";
echo "Vous pouvez préciser les paramètres <b>debug=0|1</b> (infos complémentaires) et <b>stats=0|1</b> (affichage des stats gestionnaire). </p>";
?>


<style type="text/css">
.jqtree-hidden {
    display: inherit;
}
</style>

<!--div class="coursetree" data-root="</cat0" data-title="1"></div-->
<div class="coursetree" data-root="<?php echo $node; ?>" data-title="1" data-stats="<?php echo $stats; ?>" data-debug="<?php echo $debug ?>"></div>

<?php

echo $OUTPUT->footer();
