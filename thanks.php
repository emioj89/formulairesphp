
<?php

echo 'Merci '. $_POST['user_firstname'].' '. $_POST['user_name'] .' de nous avoir contacté à propos de '. $_POST['email-options'] .'<br>'.

' Un de nos conseiller vous contactera soit à l’adresse '. $_POST['user_email'] .' ou par téléphone au '. $_POST['user_tlf'].'dans les plus brefs délais pour traiter votre demande :'.'<br>'. $_POST['user_message']

?>