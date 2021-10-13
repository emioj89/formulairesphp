<form  action="thanks.php"  method="post"> 
<div>
      <label  for="firstname">first name :</label>
      <input  type="text"  id="firstname"  name="user_firstname">
    </div> 
     <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="tlf">tlf :</label>
      <input  type="text"  id="tlf"  name="user_tlf">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <select id="email-options" name="email-options">
  <option value="rh">RH</option>
  <option value="info">Info</option>
  <option value="accueil">accueil</option>
  
</select>
    </div>
    
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

 

  
