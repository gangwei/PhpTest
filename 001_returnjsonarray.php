 <?php
if(isset($_GET['user']))
{
  /* soak in the passed variable or set our own */
  $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
  $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
  $user_id = ($_GET['user']); //no default
  
  /* create one master array of the records */
  $posts = array();
  $posts[] = array('user'=>$user_id);
}
else {
 $posts = array();
  $posts[] = array('user'=>'not provided');
}
  
  /* output in necessary format */
  if($format == 'json') {
    echo json_encode(array('posts'=>$posts));
  
    echo '';
  }
  else {
   echo 'not json';
  }
  //tes
 ?>

