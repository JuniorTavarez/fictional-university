<!-- <?php 
function myFirstfunction($name, $color){
    echo "<p>Hi, my name is $name and my favorite color is $color</p>";
}



myFirstfunction('Junior', 'Blue')
?>

<h1> <?php bloginfo('name');?> </h1>
<p> <?php bloginfo('description');?> </p> -->

<?php
$names = array('Brad', 'Junior', 'Juan', 'Mark')


?>
<?php
for ($i = 0; $i < (count($names)); $i++) {
  echo "<h1> Hi, my name is $names[$i]";
  } ?>

